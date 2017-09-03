<?php

namespace App\Jobs;
use App\Post;
use App\User;
use App\FanbasePost;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class ManUJob extends NewsJob
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
        $this->fanbase_id = 6;
        $this->domain = "http://www.manutd.com";
        $this->url = "http://www.manutd.com/en/News-And-Features/Football-News.aspx";
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
        $crawler->filter('.story')->each(function (Crawler $node, $i) {

            if ($node->filter('a')->count()) {

                $link = $node->filter('a')->attr("href");

                if (!empty($link)) {

                    $url = $this->domain . $link;

//                    dd($url);
                    $p = Post::where("external_url", $url)->first();
                    $client = new Client();
                    $data = $client->request('GET', $url);

                    $user = array();

                    if ($data->filter('.newsstory')->count()) {
                        $user['first_name'] = "MUFC";
                        $user['last_name'] = "News";
                        $user['nickname'] = 'Manu';
                        $user['email'] = strtolower($user['nickname']) . "@manutd.com";
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

                        if ($data->filter('.mainImage')->count()) {

                            $summary = $data->filter('meta[name="twitter:description"]')->attr('content');


                            $post['image'] = $data->filter('.mainImage')->attr('src');
                            $post['title'] = $data->filter('meta[name="twitter:title"]')->attr('content');

                            $dateRaw = $data->filter("#timestamp")->text();

                            $dateParts = explode(',', $dateRaw);

                            if (!empty($dateParts[0])) {

                                $dateRaw = trim($dateParts[0]);

                                $dateRaw = str_replace("/", "-", $dateRaw);

                                $post['date'] = $dateRaw;

                                $post['created_at'] = $this->cleanUpDate(Carbon::parse($post['date']));
                            }

                            $content = "";
                            $data->filter('.newsstory')->each(function (Crawler $node, $i) use (&$content, &$summary) {
                                if ($i == 0) {
                                    $node->filter('p')->each(function (Crawler $node, $i) use (&$content, &$summary) {
                                        if ($i > 0) {
                                            $content .= "<p>{$node->html()}</p>";
                                        }
                                    });
                                }
                            });

                            $content = str_replace("<p><br></p>", "", $content);
                            $post['content'] = $content;
                            $post['summary'] =  substr($summary, 0, 255);

//                            dd($post);

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