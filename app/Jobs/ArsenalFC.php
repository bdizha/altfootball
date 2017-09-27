<?php

namespace App\Jobs;

use App\FanbasePost;
use App\Post;
use App\User;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class ArsenalFC extends NewsJob
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
        $this->fanbase_id = 21;
        $this->domain = "https://www.arsenal.com";
        $this->url = "https://www.arsenal.com/news";
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

        $crawler->filter('.accordion__content article')->each(function (Crawler $node, $i) {
            $link = $node->filter('a.article-card__wrapper')->attr("href");

            if ($node->filter('.article-card__title icon')->count() == 0) {

                if (!empty($link)) {

                    $url = $this->domain . $link;
//            dd($url);
                    $p = Post::where("external_url", $url)->first();
                    $client = new Client();
                    $data = $client->request('GET', $url);

                    $user = array();

                    if ($data->filter('.article-body')->count()) {

                        $user['first_name'] = "Arsenal";
                        $user['last_name'] = "News";
                        $user['nickname'] = 'Gunners';
                        $user['email'] = strtolower($user['nickname']) . "@arsenal.com";
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

                            $post['image'] = $data->filter('meta[property="og:image"]')->attr('content');
                            $post['title'] = $data->filter('meta[property="og:title"]')->attr('content');
                            $post['date'] = $data->filter('.article-card-header__date')->text();
                            $post['created_at'] = Carbon::parse($this->cleanUpDate($post['date']));

                            $content = "";
                            $data->filter('.article-body')->each(function (Crawler $node, $i) use (&$content, &$summary) {
                                if ($i == 0) {
                                    $node->filter('p')->each(function (Crawler $node, $i) use (&$content, &$summary) {
                                        if ($i > 0) {
                                            if ($node->attr("class") !== 'copyright' &&
                                                strpos($node->text(), 'clicking') === false &&
                                                strpos($node->text(), 'Press') === false
                                            ) {
                                                $content .= "<p>{$node->text()}</p>";
                                            }
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
                }
            }
        });
    }
}
