<?php

namespace App\Jobs;

use App\FanbasePost;
use App\Post;
use App\User;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class SpanishFootball extends NewsJob
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
        $this->fanbase_id = 34;
        $this->domain = "http://www.marca.com/en/football/spanish-football.html?cid=MENUMIGA35903&s_kw=spanish-football";
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

        $crawler = $client->request('GET', $this->domain);
        $crawler->filter('.content-item ')->each(function (Crawler $node, $i) {

            if ($node->filter('a')->count()) {

                $link = $node->filter('a')->attr("href");

                if (!empty($link)) {

                    $url = $link;

                    $p = Post::where("external_url", $url)->first();
                    $client = new Client();
                    $data = $client->request('GET', $url);

                    $user = array();

                    if ($data->filter('.cols-30-70')->count()) {
                        $user['first_name'] = "Chema";
                        $user['last_name'] = "Rey";
                        $user['nickname'] = 'laliga';
                        $user['email'] = strtolower($user['nickname']) . "@spanishfootball.com";
                        $user['password'] = bcrypt($user['email']);
                        $user['image'] = "http://cyprus-mail.com/wp-content/uploads/2015/05/spanish-federation.jpg";

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


                        if($data->filter('meta[name="og:image"]')->count() > 0){
                            $ogImage = $data->filter('meta[name="og:image"]')->attr('content');
                        }
                        else{
                            $ogImage = $data->filter('meta[property="og:image"]')->attr('content');
                        }

                        $post["image"] = $ogImage;

                        $post['title'] = $data->filter('meta[property="og:title"]')->attr('content');

                        $dateRaw = $data->filter('meta[property="article:modified_time"]')->attr('content');

                        $post['date'] = $dateRaw;
                        $post['created_at'] = $this->cleanUpDate(Carbon::parse($post['date']));

                        $content = "";
                        $data->filter('.cols-30-70')->each(function (Crawler $node, $i) use (&$content) {
                            $node->filter('p')->each(function (Crawler $node, $i) use (&$content) {
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
