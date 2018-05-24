<?php

namespace App\Jobs;

use App\FanbasePost;
use App\Post;
use App\User;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class TotalSportekJob extends NewsJob
{
    protected $domain = "";
    protected $url = "";
    protected $fanbase_id = 3;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->fanbase_id = 3;
        $this->domain = "https://www.totalsportek.com/";
        $this->url = "https://www.totalsportek.com/category/football/page/";
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

        foreach (range(1, 10) as $page) {

            $crawler = $client->request('GET', $this->url . $page . "/");

            $crawler->filter('.content .entry-header .entry-title a')->each(function (Crawler $node, $i) {
                $link = $node->attr("href");

                if (!empty($link)) {
                    $url = $link;

                    $p = Post::where("external_url", $url)->first();
                    $client = new Client();
                    $data = $client->request('GET', $url);

                    $user = array();
                    if ($data->filter('.entry-content')->count()) {

                        $user['first_name'] = "Totalsportek";
                        $user['last_name'] = "";
                        $user['nickname'] = 'Totalsportek';
                        $user['email'] = strtolower($user['nickname']) . "@totalsportek.com";
                        $user['password'] = bcrypt($user['email']);
                        $user['image'] = "https://www.arsenal.com/sites/default/files/images/emery_1.jpg";

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

                        if ($data->filter('meta[name="og:image"]')->count() > 0) {
                            $ogImage = $data->filter('meta[name="og:image"]')->attr('content');
                        } else {
                            $ogImage = $data->filter('meta[property="og:image"]')->attr('content');
                        }

                        $post["image"] = $ogImage;

                        $post['title'] = $data->filter('meta[property="og:title"]')->attr('content');

                        $post['date'] = $data->filter('meta[property="article:published_time"]')->attr('content');
                        $post['created_at'] = $this->cleanUpDate(Carbon::parse($post['date']));

                        $content = "";
                        $data->filter('.entry-content p')->each(function (Crawler $node, $i) use (&$content) {
                            $content .= "<p>{$node->html()}</p>";
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

                        FanbasePost::where("post_id", $p->id)
                            ->delete();

                        FanbasePost::create([
                            'post_id' => $p->id,
                            'fanbase_id' => $this->fanbase_id
                        ]);
                    }
                }
            });

        }
    }
}
