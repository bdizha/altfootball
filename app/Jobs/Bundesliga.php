<?php

namespace App\Jobs;

use App\FanbasePost;
use App\Post;
use App\User;
use Carbon\Carbon;
use Goutte\Client;
use Mockery\Exception;
use Symfony\Component\DomCrawler\Crawler;

class Bundesliga extends NewsJob
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
        $this->fanbase_id = 36;
        $this->domain = "http://www.bundesliga.com";
        $this->url = "http://www.bundesliga.com/en/news/";
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

        $crawler = $client->request('GET', $this->url);
        $crawler->filter('.teaserElement ')->each(function (Crawler $node, $i) {

            if ($node->filter('a')->count()) {

                $link = $node->filter('a')->attr("href");

                if (!empty($link)) {

                    $url = $this->domain . $link;

//                    dd($url);

                    $p = Post::where("external_url", $url)->first();
                    $client = new Client();
                    $data = $client->request('GET', $url);

                    $user = array();

                    if ($data->filter('.article-body')->count()) {
                        $user['first_name'] = "Bundesliga";
                        $user['last_name'] = "Official";
                        $user['nickname'] = 'Bundesliga';
                        $user['email'] = strtolower($user['nickname']) . "@bundesliga.com";
                        $user['password'] = bcrypt($user['email']);
                        $user['image'] = "https://vignette1.wikia.nocookie.net/the-football-database/images/7/7c/Bundesliga_logo.svg.png/revision/latest?cb=20140811135622";

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

                        $ogImage = $data->filter('meta[property="og:image"]')->attr('content');
                        $post["image"] = $ogImage;

                        $post['title'] = $data->filter('meta[property="og:title"]')->attr('content');
                        $post['title'] = str_replace(" | bundesliga.com", "", $post['title']);

                        $dateRaw = $data->filter('time[class="timeago"]')->attr('datetime');

                        $post['date'] = $dateRaw;
                        $post['created_at'] = $this->cleanUpDate(Carbon::parse($post['date']));

                        $content = "";
                        $data->filter('.article-body')->each(function (Crawler $node, $i) use (&$content) {
                            $node->filter('p, img')->each(function (Crawler $node, $i) use (&$content) {
                                $content .= "<p>{$node->html()}</p>";
                            });
                        });

                        $content = $this->cleanHtml($content);
                        $post['content'] = $content;
                        $post['summary'] = substr($summary, 0, 255);

                        if (empty($p->id)) {
                            $p = Post::create($post);
                            echo 'Inserted post: ' . $p->slug . "\n";

                        } else {
                            $p->content = $post['content'];
                            $p->title = $post['title'];
                            $p->image = $post['image'];
                            $p->credit = $post['credit'];
                            $p->created_at = Carbon::parse($post['date']);
                            $p->save();

                            echo "updated::: {$p->slug} \n";
                        }

                        try {
                            FanbasePost::where("post_id", $p->id)
                                ->delete();

                            FanbasePost::create([
                                'post_id' => $p->id,
                                'fanbase_id' => $this->fanbase_id
                            ]);

                        } catch (Exception $e) {

                        }
                    }
                }
            }
        });
    }
}
