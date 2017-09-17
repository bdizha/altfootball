<?php

namespace App\Jobs;

use App\FanbasePost;
use App\Post;
use App\User;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class JuventusJob extends NewsJob
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
        $this->fanbase_id = 27;
        $this->domain = "http://www.juventus.com";
        $this->url = "";
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


        foreach (range(1, 2) as $step) {

            $url = "http://www.juventus.com/service/?type=%5B%22news%22%5D&language=en&offset={$step}limit=10&startdate=&enddate=&category=%255B%2522italian_leagueone%2522%252C%2522uefa_cl%2522%252C%2522uefa_el%2522%252C%2522italian_cup%2522%252C%2522italian_supercup%2522%252C%2522uefa_supercup%2522%252C%2522fifa_club_wc%2522%252C%2522fifa_wc%2522%252C%2522friendly%2522%252C%2522other%2522%252C%2522unesco_cup%2522%252C%2522uefa_youth_league%2522%252C%2522primavera%2522%252C%2522campionato_nazionale_allievi_professionisti_a_e_b%2522%252C%2522campionato_nazionale_allievi_professionisti_lega_pro%2522%252C%2522campionato_nazionale_giovanissimi_professionisti%2522%252C%2522matchreport%2522%252C%2522ticket%2522%252C%2522charity%2522%252C%2522financial%2522%252C%2522official%2522%252C%2522event%2522%252C%2522member%2522%252C%2522fan%2522%252C%2522team%2522%252C%2522youth_teams%2522%252C%2522jacademy%2522%252C%2522junior%2522%252C%2522sponsor%2522%252C%2522stadium_museum%2522%252C%2522loans%2522%252C%2522sustainability%2522%252C%2522tour%2522%252C%2522tour_e%2522%252C%2522women_sa%2522%255D";

            $crawler = $client->request('GET', $url);
            $crawler->filter('li')->each(function (Crawler $node, $i) {

                if ($node->filter('a')->count()) {

                    $link = $node->filter('a')->attr("href");

                    if (!empty($link)) {

                        $url = $this->domain . str_replace("\\", "", str_replace("\"", "", $link));

                        $p = Post::where("external_url", $url)->first();
                        $client = new Client();
                        $data = $client->request('GET', $url);

                        $user = array();

                        if ($data->filter('meta[property="og:image"]')->count()) {
                            $user['first_name'] = "Juventus";
                            $user['last_name'] = "Official";
                            $user['nickname'] = 'www.juventus.com';
                            $user['email'] = strtolower($user['nickname']) . "@juventus.com";
                            $user['password'] = bcrypt($user['email']);
                            $user['image'] = "http://www.destinyman.com/wp-content/uploads/2016/04/Football-Juventus-.jpg";

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

                            $post['image'] = $data->filter('meta[property="og:image"]')->attr('content');
                            $post['title'] = $data->filter('meta[property="og:title"]')->attr('content');

                            $dateRaw = $data->filter(".headline-wrapper div")->text();
                            $dateParts = explode(' - in:', trim($dateRaw));


                            if (!empty($dateParts[1])) {

                                $dateRaw = trim($dateParts[0]);

                                $dateRaw = str_replace("/", "-", $dateRaw);

                                $post['date'] = $dateRaw;

                                $post['created_at'] = $this->cleanUpDate(Carbon::parse($post['date']));
                            }

                            $content = "";
                            $data->filter('.module-content .text')->each(function (Crawler $node, $i) use (&$content, &$summary) {
                                $node->filter('p')->each(function (Crawler $node, $i) use (&$content, &$summary) {
                                    $content .= "<p>{$this->_blank($node->html())}</p>";
                                });
                            });

                            $content = str_replace("<p><br></p>", "", $content);
                            $post['content'] = $content;
                            $post['summary'] = substr($summary, 0, 255);

//                        dd($post);

                            if (empty($p->id)) {
                                $p = Post::create($post);
                                echo 'Inserted post: ' . $p->slug . "\n";

                            } else {
                                $p->content = $post['content'];
                                $p->title = $post['title'];
                                $p->credit = $post['credit'];
                                $p->image = $post['image'];
                                $p->created_at = Carbon::parse($post['date']);
                                $p->save();

                                echo "updated::: {$p->slug} \n";
                            }

//                            dd($p);

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
}
