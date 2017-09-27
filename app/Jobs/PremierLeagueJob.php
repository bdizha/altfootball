<?php

namespace App\Jobs;

use App\FanbasePost;
use App\Post;
use App\User;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class PremierLeagueJob extends NewsJob
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
        $this->fanbase_id = 10;
        $this->domain = "http://www.skysports.com";
        $this->url = "http://www.skysports.com/premier-league";
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
        $crawler->filter('.news-list-featured__item')->each(function (Crawler $node, $i) {

            if ($node->filter('a')->count()) {

                $link = $node->filter('a')->attr("href");

                if (!empty($link)) {

                    $url = $link;

//                    dd($url);

                    $p = Post::where("external_url", $url)->first();
                    $client = new Client();
                    $data = $client->request('GET', $url);

                    $user = array();

                    if ($data->filter('.widge-figure__image')->count()) {
                        $user['first_name'] = "Premier";
                        $user['last_name'] = "League";
                        $user['nickname'] = 'Premier';
                        $user['email'] = strtolower($user['nickname']) . "@skysports.com";
                        $user['password'] = bcrypt($user['email']);
                        $user['image'] = "http://e2.365dm.com/17/08/16-9/20/skysports-thomas-lemar-france-goal_4088295.jpg?20170901170229";

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

                        $summary = $data->filter('meta[property="og:description"]')->attr('content');

                        $post['image'] = $data->filter('.widge-figure__image')->attr('data-src');

                        $post['title'] = $data->filter('meta[property="og:title"]')->attr('content');

                        $dateRaw = $data->filter(".article__header-date-time")->text();

                        $dateParts = explode('Last Updated:', $dateRaw);

                        if (!empty($dateParts[1])) {

                            $dateRaw = trim($dateParts[1]);

                            $dateRaw = str_replace("/", "-", $dateRaw);

                            $post['date'] = $dateRaw;

                            $post['created_at'] = $this->cleanUpDate(Carbon::parse($post['date']));
                        }

                        $content = "";
                        $data->filter('.article__body')->each(function (Crawler $node, $i) use (&$content, &$summary) {
                            $node->filter('p')->each(function (Crawler $node, $i) use (&$content, &$summary) {
                                $content .= "<p>{$node->html()}</p>";
                            });
                        });

                        $content = str_replace("<p><br></p>", "", $content);
                        $post['content'] = $content;
                        $post['summary'] = substr($summary, 0, 255);

//                            dd($post);

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

//                        dd($p);

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
}
