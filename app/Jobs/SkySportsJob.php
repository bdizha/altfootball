<?php

namespace App\Jobs;

use App\FanbasePost;
use App\Post;
use App\User;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class SkySportsJob extends NewsJob
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
        $this->fanbase_id = 1;
        $this->url = "http://www.skysports.com/football";
        $this->domain = "http://www.skysports.com/football/";
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
        $crawler->filter('.features-block .features-block__item a, .news-list-secondary__group .news-list-secondary__item a')->each(function (Crawler $node, $i) {

            $link = $node->attr("href");

            if (!empty($link)) {

                $url = $link;

                $p = Post::where("external_url", $url)->first();
                $client = new Client();
                $data = $client->request('GET', $url);

                $user = array();

                if ($data->filter('.article__body')->count()) {

                    $user['first_name'] = "Sky Sports";
                    $user['last_name'] = "Football";
                    $user['nickname'] = 'football';
                    $user['email'] = strtolower($user['nickname']) . "@skysports.com";
                    $user['password'] = bcrypt($user['email']);
                    $user['image'] = "http://e2.365dm.com/18/05/16-9/20/skysports-football-mauricio-pochettino_4319225.jpg?20180524162428";

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

                    $ogImage = $data->filter('.widge-figure__image')->attr('src');

                    $post["image"] = $ogImage;
                    $post['title'] = $data->filter('meta[property="og:title"]')->attr('content');

                    $dateRaw = $data->filter(".article__header-date-time")->text();

                    $dateParts = explode('Last Updated:', $dateRaw);

                    if (!empty($dateParts[1])) {

                        $dateRaw = trim($dateParts[1]);

                        $dateRaw = str_replace("/", "-", $dateRaw);

                        $dateParts = explode(' ', $dateRaw);

                        if (!empty($dateParts[1])) {
                            $date = $dateParts[0];

                            $dParts = explode('-', $date);

                            if (!empty($dParts[2])) {
                                if(strlen($dParts[2]) == 2){
                                    $dateRaw = str_pad($dParts[2], 4, "20", STR_PAD_LEFT) . "-" . $dParts[1] . "-" . $dParts[0] . " " . $dateParts[1];
                                }
                            }
                        }

                        $post['date'] = $dateRaw;
                        $post['created_at'] = $this->cleanUpDate(Carbon::parse($post['date']));
                    }

                    $content = "";
                    $data->filter('.article__body p')->each(function (Crawler $node, $i) use (&$content) {
                        $content .= "<p>{$node->html()}</p>";
                    });

                    $content = $this->cleanHtml($content);
                    $post['content'] = $content;
                    $post['summary'] = substr($summary, 0, 255);

//                    dd($post);

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
