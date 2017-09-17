<?php

namespace App\Jobs;

use App\Fanbase;
use App\FanbasePost;
use App\Post;
use App\User;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class NewsBreatheChelseaJob extends NewsJob
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
        $this->fanbase_id = 5;
        $this->domain = "https://www.breathechelsea.com";
        $this->url = "https://www.breathechelsea.com/category/";
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        echo ":::::: " . $this->domain . " ::::::\n";

        $sections = [
            "transfer-centre",
            "transfer-gossip",
            "news",
        ];

        $client = new Client();

        foreach ($sections as $section) {

            $crawler = $client->request('GET', $this->url . $section . "/");

            $crawler->filter('.status-publish')->each(function (Crawler $node, $i) {
                $link = $node->filter('.entry-title a')->attr("href");

                if (!empty($link)) {

                    $url = $link;
                    $p = Post::where("external_url", $url)->first();
                    $client = new Client();
                    $data = $client->request('GET', $url);

                    $user = array();

                    if ($data->filter('.et_pb_extra_column_main')->count()) {

                        $author = $data->filter('.post-meta .url')->text();

                        $nameArr = explode(" ", $author);

                        if (!empty($nameArr[1])) {

                            $user['first_name'] = $nameArr[0];
                            $user['last_name'] = $nameArr[1];
                            $user['nickname'] = $nameArr[0];
                            $user['email'] = strtolower($nameArr[0]) . "@breathechelsea.com";
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

                            $post['external_url'] = $url;
                            $post['user_id'] = $u->id;

                            if ($data->filter('.post-thumbnail img')->count() &&
                                $data->filter('.post-meta .updated')->count()
                            ) {
                                $summary = $data->filter('meta[property="og:description"]')->attr('content');

                                $post['image'] = $data->filter('.post-thumbnail img')->attr("src");
                                $post['title'] = $data->filter('.entry-title')->text();
                                $post['date'] = $data->filter('.post-meta .updated')->text();
                                $post['created_at'] = Carbon::parse($this->cleanUpDate($post['date']));

                                $content = "";
                                $data->filter('.et_pb_text p')->each(function (Crawler $node, $i) use (&$content, &$summary) {
                                    if($i > 0){
                                        $content .= "<p>{$this->_blank($node->html())}</p>";
                                    }
                                });

                                $content = str_replace("<p><br></p>", "", $content);
                                $post['content'] = $content;
                                $post['summary'] = $summary;

                                if (empty($p->id)) {
                                    $p = Post::create($post);
                                    echo 'Inserted post: ' . $p->slug . "\n";

                                } else {
                                    $p->title = $post['title'];
                                    $p->created_at = Carbon::parse($post['date']);
                                    $p->save();

                                    echo "updated::: {$p->slug} \n";
                                }

                                FanbasePost::where("post_id", $p->id)
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
}
