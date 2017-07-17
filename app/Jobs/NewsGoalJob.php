<?php

namespace App\Jobs;
use App\Post;
use App\User;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class NewsGoalJob extends NewsJob
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
        $this->fanbase_id = 4;
        $this->domain = "http://www.goal.com";
        $this->url = "http://www.goal.com/en-za/news/4639/premier-league/archive/";
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $client = new Client();

        foreach (range(1, 2) as $page) {

            $crawler = $client->request('GET', $this->url . $page);
            $crawler->filter('.module-section-archive .story')->each(function (Crawler $node, $i) {
                $link = $node->filter('a')->attr("href");

                if (!empty($link)) {

                    $url = $this->domain . $link;
                    $p = Post::where("external_url", $url)->first();
                    $client = new Client();
                    $data = $client->request('GET', $url);

                    $user = array();

                    if ($data->filter('h2.author')->count()) {

                        $author = $data->filter('h2.author')->text();

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

                            if ($data->filter('.article-header img')->count() &&
                                $data->filter('.module-article-body time')->count() &&
                                $data->filter('p.leading')->count()
                            ) {

                                $post['image'] = $data->filter('.article-header img')->attr("src");
                                $post['title'] = $data->filter('.article-header img')->attr("alt");
                                $post['date'] = $data->filter('.module-article-body time')->text();
                                $post['summary'] = str_limit($data->filter('p.leading')->text(), 250);
                                $post['created_at'] = Carbon::parse($post['date']);

                                $content = "";
                                $data->filter('.article-text p')->each(function (Crawler $node, $i) use (&$content) {
                                    $content .= "<p>{$node->html()}</p>";
                                });

                                $post['content'] = str_replace("<p><br></p>", "", $content);

                                if (empty($p->id)) {
                                    $p = Post::create($post);

                                    echo 'Inserted post: ' . $post['title'] . "\n";
                                    Log::notice('Inserted post: ' . $post['title']);

                                } else {
                                    $p->title = $post['title'];
                                    $p->created_at = Carbon::parse($post['date']);
                                    $p->save();

                                    echo "updated::: {$p->slug} \n";
                                }
                            }
                        }
                    }
                }
            });
        }
    }
}
