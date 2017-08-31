<?php

namespace App\Jobs;
use App\Post;
use App\User;
use App\FanbasePost;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class LiverpoolJob extends NewsJob
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
        $this->fanbase_id = 13;
        $this->domain = "http://www.liverpoolfc.com";
        $this->url = "http://www.liverpoolfc.com/news/first-team?page=";
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

        foreach (range(1, 4) as $page) {

            $crawler = $client->request('GET', $this->url . $page);
            $crawler->filter('.news-list-item')->each(function (Crawler $node, $i) {

                if ($node->filter('a.news-list-item-content')->count()) {

                    $link = $node->filter('a.news-list-item-content')->attr("href");

                    if (!empty($link)) {

                        $url = $this->domain . $link;
                        $p = Post::where("external_url", $url)->first();
                        $client = new Client();
                        $data = $client->request('GET', $url);

                        $user = array();

                        if ($data->filter('.post-body')->count()) {
                            $user['first_name'] = "Liverpool";
                            $user['last_name'] = "News";
                            $user['nickname'] = 'Reds';
                            $user['email'] = strtolower($user['nickname']) . "@liverpoolfc.com";
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

                            if ($data->filter('meta[property="og:image"]')->count()) {

                                $summary = $data->filter('meta[property="og:description"]')->attr('content');

//                            dd($summary);

                                $post['image'] = $data->filter('meta[property="og:image"]')->attr('content');
                                $post['title'] = $data->filter('meta[property="og:title"]')->attr('content');
                                $post['date'] = $data->filter('.post-time')->attr('datetime');
                                $post['created_at'] = Carbon::parse($this->cleanUpDate($post['date']));

                                $content = "";
                                $data->filter('.post-body')->each(function (Crawler $node, $i) use (&$content, &$summary) {
                                    if ($i == 0) {
                                        $node->filter('p')->each(function (Crawler $node, $i) use (&$content, &$summary) {
                                            if ($i > 0) {
                                                $content .= "<p>{$node->text()}</p>";
                                            }
                                        });
                                    }
                                });

                                $content = str_replace("<p><br></p>", "", $content);
                                $post['content'] = $content;
                                $post['summary'] =  substr($summary, 0, 255);

                                if (empty($p->id)) {
                                    $p = Post::create($post);
                                    echo 'Inserted post: ' . $p->slug . "\n";

                                } else {
                                    $p->content = $post['content'];
                                    $p->title = $post['title'];
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
                }
            });
        }
    }
}