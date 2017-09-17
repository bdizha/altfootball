<?php

namespace App\Jobs;
use App\Post;
use App\FanbasePost;
use App\User;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class NewsGoalJob extends NewsJob
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
        $this->fanbase_id = 4;
        $this->domain = "http://www.goal.com";
        $this->url = "http://www.goal.com/en/news/";
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

        foreach (range(1, 5) as $page) {

            $crawler = $client->request('GET', $this->url . $page);
            $crawler->filter('.type-article')->each(function (Crawler $node, $i) {
                $link = $node->filter('a')->attr("href");

                if (!empty($link) && strpos($link, 'http') !== false) {

                    $url = $link;
                    $p = Post::where("external_url", $url)->first();
                    $client = new Client();
                    $data = $client->request('GET', $url);

                    $user = array();

                    if ($data->filter('.name-and-social')->count()) {

                        $author = $data->filter('.name-and-social')->text();

                        $nameArr = explode(" ", trim($author));

                        if (!empty($nameArr[1])) {

                            $user['first_name'] = $nameArr[0];
                            $user['last_name'] = $nameArr[1];
                            $user['nickname'] = $nameArr[0];
                            $user['email'] = strtolower($nameArr[0]) . "@goal.com";
                            $user['password'] = bcrypt($user['email']);
                            $user['image'] = "http://news.bbcimg.co.uk/media/images/71752000/jpg/_71752708_mmftbhenryonclarke.jpg";

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

                            $post['external_url'] = $url;
                            $post['user_id'] = $u->id;

                            if ($data->filter('meta[itemprop="url"]')->count()
                            ) {

                                $post['image'] = $data->filter('meta[itemprop="url"]')->attr('content');
                                $post['title'] = $data->filter('meta[property="og:title"]')->attr('content');
                                $post['date'] = $data->filter('time[itemprop="datePublished"]')->attr('datetime');
                                $post['summary'] = str_limit($data->filter('meta[property="og:description"]')->attr('content'), 250);
                                $post['created_at'] = Carbon::parse($this->cleanUpDate($post['date']));

                                $content = "";
                                $data->filter('.body p')->each(function (Crawler $node, $i) use (&$content) {
                                    $content .= "<p>{$this->_blank($node->html())}</p>";
                                });

                                $content = str_replace("<p><br></p>", "", $content);
                                $post['content'] = str_replace("<p></p>", "", $content);

//                                dd($post);


                                if (empty($p->id)) {
                                    $p = Post::create($post);

                                    echo 'Inserted post: ' . $post['title'] . "\n";
//                                    Log::notice('Inserted post: ' . $post['title']);

                                } else {
                                    $p->title = $post['title'];
                                    $p->created_at = Carbon::parse($post['date']);
                                    $p->save();

                                    echo "updated::: {$p->slug} \n";
                                }

                                $fb = FanbasePost::where("post_id", $p->id)
                                    ->where("fanbase_id", $this->fanbase_id)
                                    ->first();

                                if (empty($fb->id)) {
                                    FanbasePost::create([
                                        'post_id' => $p->id,
                                        'fanbase_id' => $this->fanbase_id
                                    ]);
                                }
                            }
                        }
                    }
                }
            });
        }
    }
}
