<?php

namespace App\Jobs;
use App\Post;
use App\User;
use App\FanbasePost;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class NewsSportslensJob extends NewsJob
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
        $this->fanbase_id = 8;
        $this->domain = "http://sportslens.com";
        $this->url = "http://sportslens.com/page/";
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

        foreach (range(1, 3) as $page) {

//            $crawler = $client->request('GET', $this->url . $page);

            $posts = Post::where("external_url", "like", "%sportslens%")->get();

            foreach ($posts as $post) {
                $link = $post->external_url;

                if (!empty($link)) {

                    $url = $link;
                    $p = Post::where("external_url", $url)->first();
                    $client = new Client();
                    $data = $client->request('GET', $url);

                    $user = array();

                    if ($data->filter('.thecontent')->count()) {

                        $author = $data->filter('.postauthor .author a')->text();

                        $nameArr = explode(" ", $author);

                        if (!empty($nameArr[1])) {

                            $user['first_name'] = $nameArr[0];
                            $user['last_name'] = "&nbsp;";
                            $user['nickname'] = $nameArr[0];
                            $user['email'] = strtolower($nameArr[0]) . "@soccerlens.com";
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

                            $post['credit'] = $this->domain;
                            $post['external_url'] = $url;
                            $post['user_id'] = $u->id;

                            if ($data->filter('.thecontent img')->count() &&
                                $data->filter('.post-info .date')->count()
                            ) {

                                $post['image'] = $data->filter('.thecontent img')->attr("data-layzr");
                                $post['title'] = $data->filter('.single-title')->text();
                                $post['date'] = $this->cleanUpDate($data->filter('.post-info .date')->text());
                                $post['created_at'] = Carbon::parse($post['date']);

                                $content = "";
                                $summary = "";
                                $data->filter('.thecontent p')->each(function (Crawler $node, $i) use (&$content, &$summary){
                                    if ($i == 0) {
                                        $summary = str_limit($node->text(), 250);
                                    }
                                    $content .= "<p>{$node->html()}</p>";
                                });

                                $content = str_replace("<p><br></p>", "", $content);
                                $post['content'] = str_replace("<p><span style=\"background-color: initial; font-size: 1em;\"><br></span></p>", "", $content);
                                $post['summary'] = $summary;

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
            }
        }
    }
}
