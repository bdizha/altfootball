<?php

namespace App\Jobs;
use App\Post;
use App\User;
use App\FanbasePost;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class PSG extends NewsJob
{

    protected $domain = "";
    protected $url = "";
    protected $fanbase_id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->fanbase_id = 19;
        $this->domain = "https://en.psg.fr";
        $this->url = "http://www.90min.com/top-stories?page=";
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        echo ":::::: " . $this->domain . " ::::::\n";
        $client = new Client();

        $crawler = $client->request('GET', $this->domain . "/pro/stories/story/ligue-1?type=articles");
        $crawler->filter('.card-story')->each(function (Crawler $node, $i) {
            $link = $node->filter('a.card--image--link')->attr("href");

            if (!empty($link)) {

                $url = $this->domain . $link;
                $p = Post::where("external_url", $url)->first();
                $client = new Client();
                $data = $client->request('GET', $url);

                $user = array();

                if ($data->filter('.article--headline')->count()) {

                    if($data->filter('.author-name')->count()){
                        $author = $data->filter('.author-name')->text();
                        $nameArr = explode(" ", str_replace('By ', '', $author));
                    }
                    else{
                        $author = 'First Team';
                        $nameArr = explode(" ", $author);
                    }

                    if (!empty($nameArr[1])) {

                        $user['first_name'] = $nameArr[0];
                        $user['last_name'] = $nameArr[1];
                        $user['nickname'] = $nameArr[0];
                        $user['email'] = strtolower($nameArr[0]) . "@gmail.com";
                        $user['password'] = bcrypt($user['email']);

                        $u = User::where("email", $user['email'])->first();

                        if (empty($u->id)) {
                            $u = User::create(
                                $user
                            );
                        } else {
                            $u->first_name = $user['first_name'];
                            $u->last_name = $user['last_name'];
                            $u->nickname = $user['nickname'];
                            $u->save();
                        }

                        $post = array();

                        $post['summary'] = substr($data->filter('.article--headline')->text(), 0, 255);
                        $post['external_url'] = $url;
                        $post['user_id'] = $u->id;

                        if ($data->filter('.article--body')->count()) {

                            $image = '';
                            $data->filter('.coverImage source')->each(function (Crawler $node, $i) use (&$image){
                                if($i == 0){
                                    $imageParts = explode(", ", $node->attr("srcset"));

                                    if(!empty($imageParts[0])){
                                        $image = $imageParts[0];
                                    }
                                }
                            });

                            $post['image'] = $image;

                            $post['title'] = $data->filter('meta[name="og:title"]')->attr("content");
                            $post['date'] = $data->filter('.article--pubdate span')->attr("datetime");
                            $post['created_at'] = $this->cleanUpDate(Carbon::parse($post['date']));

                            $content = "";
                            $data->filter('.article--body p')->each(function (Crawler $node, $i) use (&$content, &$summary){
                                $content .= "<p>{$node->html()}</p>";
                            });

                            $post['content'] = str_replace("<p><br></p>", "", $content);

                            if (empty($p->id)) {
                                $p = Post::create($post);

                                echo 'Inserted post: ' . $post['title'] . "\n";
                            } else {
                                $p->title = $post['title'];
                                $p->content = $post['content'];
                                $p->created_at = Carbon::parse($post['date']);
                                $p->save();

                                echo "updated::: {$p->slug} \n";
                            }

                            $fb = FanbasePost::where("post_id", $p->id)
                                ->where("fanbase_id", $this->fanbase_id)
                                ->delete();

                            FanbasePost::create([
                                'post_id' => $p->id,
                                'fanbase_id' => $this->fanbase_id
                            ]);
                        }
                    }
                }
            }
        });
    }
}