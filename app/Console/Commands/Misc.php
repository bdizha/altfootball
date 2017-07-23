<?php

namespace App\Console\Commands;

use App\User;
use Goutte\Client;
use Illuminate\Console\Command;
use Symfony\Component\DomCrawler\Crawler;

class Misc extends Command
{
    protected $domain = "http://www.realmadrid.com";
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'misc:anything';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $client = new Client();

        $crawler = $client->request('GET', "http://www.realmadrid.com/en/football/squad");

        $crawler->filter('.m_player_picture')->each(function (Crawler $node, $i) {
            $link = $node->filter('a')->attr("href");

            if (!empty($link)) {

                $client = new Client();
                $data = $client->request('GET', $this->domain . $link);
                $user = [];

                $user['image'] = $data->filter('[property="og:image"]')->attr("content");
                $user['cover'] = $this->domain . $data->filter('.m_player_bio_main img')->attr("src");
                $user['website'] = $this->domain;

                $name = $data->filter('.m_player_bio_basic_info h1 strong')->text();

                $nameParts = explode(" ", $name);

                if(!empty($nameParts[0])){
                    $user['first_name'] = $nameParts[0];
                    $user['first_name'] = str_replace("\n", "",  $user['first_name']);
                    $user['first_name'] = str_replace("  ", "",  $user['first_name']);
                    $user['nickname'] = strtolower(trim($user['first_name']));
                    $user['email'] = strtolower(trim($user['first_name'])) . "@chelseafc.com";
                    $user['last_name'] = "";
                }

                if(!empty($nameParts[1])){
                    $user['last_name'] = $nameParts[1];
                    $user['last_name'] = str_replace("\n", "",  $user['last_name']);
                    $user['last_name'] = str_replace("   ", "",  $user['last_name']);
                    $user['email'] = strtolower(trim($user['first_name']) . "." . trim($user['last_name'])) . "@chelseafc.com";
                }


                if($data->filter('.m_bio_strip_content strong')->count())
                {
                    $user['bio'] = $data->filter('.m_bio_strip_content strong')->text();
                }
//                dd($user);

                if(!empty($user['email'])){

                    $user['password'] = bcrypt($user['email']);

                    $u = User::where("slug", str_slug($user['first_name'] . " " . $user['last_name']))->first();

                    if (empty($u->id)) {
                        $u = User::create($user);
                        echo "Created user ::: {$u->slug}\n";
                    } else {
                        echo "Updated user ::: {$u->slug}\n";
                    }
                }
            }
        });
    }
}
