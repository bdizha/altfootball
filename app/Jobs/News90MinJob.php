<?php

namespace App\Jobs;
use App\Post;
use App\User;
use App\FanbasePost;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class News90MinJob extends NewsJob
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
        $this->domain = "http://www.90min.com";
        $this->url = "http://www.90min.com/top-stories?page=";
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $client = new Client();

        foreach (range(1, 3) as $page) {

            $crawler = $client->request('GET', $this->url . $page);
            $crawler->filter('.feedpage-article__metadata')->each(function (Crawler $node, $i) {
                $link = $node->filter('a.feedpage-article__title')->attr("href");

                if (!empty($link)) {

                    $url = $this->domain . $link;
                    $p = Post::where("external_url", $url)->first();
                    $client = new Client();
                    $data = $client->request('GET', $url);

                    $user = array();

                    if ($node->filter('a.feedpage-article__author-link')->count()) {

                        $author = $node->filter('a.feedpage-article__author-link')->text();

                        $nameArr = explode(" ", $author);

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

                            $post['external_url'] = $url;
                            $post['user_id'] = $u->id;

                            if ($data->filter('.post-cover__media')->count() &&
                                $data->filter('.post-metadata__date')->count() &&
                                $data->filter('.post-content p')->count()
                            ) {

                                $post['image'] = $data->filter('.post-cover__media')->attr("src");
                                $post['title'] = $data->filter('.post-article__post-title__title')->text();
                                $post['date'] = $data->filter('.post-metadata__date')->text();
                                $post['created_at'] = Carbon::parse($post['date']);

                                $content = "";
                                $summary = "";
                                $data->filter('.post-content p')->each(function (Crawler $node, $i) use (&$content, &$summary){
                                    if ($i == 0) {
                                        $summary = str_limit($node->text(), 250);
                                    }
                                    $content .= "<p>{$node->html()}</p>";
                                });

                                $post['content'] = str_replace("<p><br></p>", "", $content);
                                $post['summary'] = $summary;

                                if (empty($p->id)) {
                                    $p = Post::create($post);

                                    echo 'Inserted post: ' . $post['title'] . "\n";
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