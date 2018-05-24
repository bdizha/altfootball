<?php

namespace App\Jobs;

use App\FanbasePost;
use App\Post;
use App\User;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class RealMadridJob extends NewsJob
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
        $this->fanbase_id = 14;
        $this->domain = "http://www.realmadrid.com";
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

            $crawler = $client->request('GET', $this->domain . "/en/football/news?pag=" . $page);
            $crawler->filter('.news_results_row article')->each(function (Crawler $node, $i) {
                $link = $node->filter('a')->attr("href");

                if (!empty($link)) {


                    if (strpos($link, 'http') === false) {
                        $url = $this->domain . $link;
                    } else {
                        $url = $link;
                    }

                    $p = Post::where("external_url", $url)->first();
                    $client = new Client();
                    $data = $client->request('GET', $url);
                    $user = array();

                    if ($data->filter('.main_content')->count()) {

                        $user['first_name'] = 'Real';
                        $user['last_name'] = 'Madrid News';
                        $user['nickname'] = '';
                        $user['email'] = "news@realmadrid.com";
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
                            $u->image = "https://as01.epimg.net/img/comunes/fotos/fichas/equipos/large/1.png";
                            $u->save();
                        }

                        $post = array();

                        $post['credit'] = $this->domain;
                        $summary = '';
                        if ($data->filter('.m_section_news_header strong')->count()) {
                            $summary = substr($data->filter('.m_section_news_header strong')->text(), 0, 255);
                        }

                        $post['external_url'] = $url;
                        $post['user_id'] = $u->id;

                        if ($data->filter('.main_content')->count()) {

                            if ($data->filter('.m_full_header_banner_info_wrapper img')->count()) {
                                $post['image'] = $this->domain . $data->filter('.m_full_header_banner_info_wrapper img')->attr("src");
                            }

                            $post['title'] = $data->filter('.m_full_header_banner_info h1')->text();

                            if ($data->filter('.m_section_news_header p')->count()) {
                                $dateRaw = $data->filter('.m_section_news_header p')->text();

                                $dateParts = explode('|', $dateRaw);

                                if (!empty($dateParts[1])) {

                                    $dateRaw = trim($dateParts[1]);

                                    $dateRaw = str_replace("(", "", $dateRaw);
                                    $dateRaw = str_replace(")", "", $dateRaw);
                                    $dateRaw = str_replace("/", "-", $dateRaw);

                                    $post['date'] = $dateRaw;

                                    $post['created_at'] = $this->cleanUpDate(Carbon::parse($post['date']));
                                }
                            }

                            $summary = $data->filter('meta[property="og:description"]')->attr('content');

                            $content = "";
                            $data->filter('.m_text_content p')->each(function (Crawler $node, $i) use (&$content) {
                                $content .= "<p>{$node->html()}</p>";
                            });

                            $post['content'] = str_replace("<br>", "", $content);
                            $post['summary'] = substr($summary, 0, 255);

                            if (empty($p->id)) {
                                $p = Post::create($post);

                                echo 'Inserted post: ' . $post['title'] . "\n";
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
            });

        }
    }
}