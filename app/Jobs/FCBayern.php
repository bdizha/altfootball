<?php

namespace App\Jobs;

use App\FanbasePost;
use App\Post;
use App\User;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class FCBayernJob extends NewsJob
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
        $this->fanbase_id = 28;
        $this->domain = "https://fcbayern.com/en";
        $this->url = "https://fcbayern.com/en/news";
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        echo ":::::: " . $this->domain . " ::::::\n";

        foreach (range(0, 3) as $page) {

            $url = "https://fcbayern.com/en/api/search/{$page}/15?scope=7f9a297c-be8c-4e3d-8eda-74f74b385788&scope=3b8efa57-4cba-4dda-864f-cb8788ebb3d1&scope=45dfeefc-1c41-4476-b0fc-6f0d257db82f&scope=dbb58260-7071-4e3f-ba26-2bbf91a9e388&type=fcbhippo:ArticleDocument&category=category_article_news&category=category_article_ticketing&category=category_article_inside&category=category_article_interview&category=category_article_match-report&category=category_article_press-announcement&category=category_article_preview";

//            $crawler = $client->request('GET', $this->url . $page);

            $jsonList = file_get_contents($url);

            $arrayList = json_decode($jsonList);

            if(empty($arrayList->teasers)){
                continue;
            }


            foreach ($arrayList->teasers as $teaser) {

                $post = [];

                $post['title'] = $teaser->title;
                $post['summary'] = $teaser->text;
                $post['external_url'] = $teaser->link->href;

                if (!empty($post['external_url'])) {

                    $url = $post['external_url'];
                    $p = Post::where("external_url", $url)->first();
                    $client = new Client();
                    $data = $client->request('GET', $url);

                    $user = array();

                    if ($data->filter('.fcb-container')->count()) {

                        $author = $data->filter('meta[name="author"]')->attr('content');
                        $post['image'] = $data->filter('meta[property="og:image"]')->attr('content');

                        $nameArr = explode(" ", $author);

                        if (!empty($nameArr[0])) {

                            $user['first_name'] = $nameArr[0];
                            $user['last_name'] = "&nbsp;";
                            $user['nickname'] = $nameArr[0];
                            $user['email'] = strtolower($nameArr[0]) . "@fcbayern.com";
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

                            $post['user_id'] = $u->id;

                            if ($data->filter('.text-media-content p')->count()) {
                                $post['date'] = $this->cleanUpDate($data->filter('meta[property="article:published_time"]')->attr('content'));
                                $post['created_at'] = Carbon::parse($post['date']);

                                $content = "";
                                $data->filter('.text-media-content p')->each(function (Crawler $node, $i) use (&$content, &$summary) {
                                    $content .= "<p>{$node->text()}</p>";
                                });

                                $content = str_replace("<p><br></p>", "", $content);
                                $post['content'] = str_replace("<p><span style=\"background-color: initial; font-size: 1em;\"><br></span></p>", "", $content);

//dd($post);

                                if (empty($p->id)) {
                                    $p = Post::create($post);

                                    echo 'Inserted post: ' . $p->slug . "\n";

                                } else {
                                    $p->title = $post['title'];
                                    $p->created_at = Carbon::parse($post['date']);
                                    $p->image = $post['image'];
                                    $p->content = $post['content'];
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
