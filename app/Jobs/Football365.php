<?php

namespace App\Jobs;

use App\FanbasePost;
use App\Post;
use App\User;
use Carbon\Carbon;
use Goutte\Client;
use Mockery\Exception;
use Symfony\Component\DomCrawler\Crawler;

class Football365 extends NewsJob
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
        $this->fanbase_id = 7;
        $this->domain = "http://www.football365.com";
        $this->url = "";
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            echo ":::::: " . $this->domain . " ::::::\n";
            $client = new Client();


            foreach (range(1, 5) as $page) {

                $url = "http://www.football365.com/top-story/page/{$page}/";

                $crawler = $client->request('GET', $url);
                $crawler->filter('.articleList__item')->each(function (Crawler $node, $i) {

                    if ($node->filter('a')->count()) {

                        $link = $node->filter('a')->attr("href");

                        if (!empty($link)) {

                            $url = $link;

                            $p = Post::where("external_url", $link)->first();
                            $client = new Client();
                            $data = $client->request('GET', $link);

                            $user = array();

                            if ($data->filter('meta[property="og:image"]')->count()) {
                                $user['first_name'] = "HITC";
                                $user['last_name'] = "Official";
                                $user['nickname'] = "www.hitc.com";
                                $user['bio'] = 'Here is the city';
                                $user['email'] = strtolower($user['nickname']) . "@hitc.com";
                                $user['password'] = bcrypt($user['email']);
                                $user['image'] = "http://cdn3-i.hitc-s.com/690/tottenham_hotspur_chairman_daniel_levy_looks_on_during_the_barcl_542229.jpg";

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

                                $post['credit'] = $this->domain;
                                $post['external_url'] = $url;
                                $post['user_id'] = $u->id;

                                $summary = $data->filter('meta[property="og:description"]')->attr('content');

                                $post['image'] = $data->filter('meta[property="og:image"]')->attr('content');
                                $post['title'] = $data->filter('meta[property="og:title"]')->attr('content');
                                $post['date'] = $data->filter('meta[property="article:published_time"]')->attr('content');

                                if (!empty($post['date'])) {
                                    $post['created_at'] = $this->cleanUpDate(Carbon::parse($post['date']));
                                }

                                $content = "";
                                $data->filter('.article__body p')->each(function (Crawler $node, $i) use (&$content, &$summary) {
                                    $content .= "<p>{$node->html()}</p>";
                                });

                                $post['content'] = $this->cleanHtml($content);
                                $post['summary'] = substr($summary, 0, 255);
                                $post['summary'] = str_replace("Football365 - ", "", $post['summary']);
                                $post['title'] = str_replace(" - Football365", "", $post['title']);

                                if (empty($p->id)) {
                                    $p = Post::create($post);
                                    echo 'Inserted post: ' . $p->slug . "\n";

                                } else {
                                    $p->content = $post['content'];
                                    $p->title = $post['title'];
                                    $p->credit = $post['credit'];
                                    $p->image = $post['image'];
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
                });

            }
        } catch (Exception $e) {

        }
    }
}
