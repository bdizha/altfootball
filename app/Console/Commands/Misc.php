<?php

namespace App\Console\Commands;

use App\Post;
use App\User;
use Carbon\Carbon;
use DB;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

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

        $posts = Post::orderBy('created_at', 'DESC')->get();

        foreach ($posts as $post) {

            $cloudImage = \Cloudinary\Uploader::upload(
                $post->image,
                array(
                    "crop" => "fill",
                    "width" => 1236,
                    "height" => 695,
                    "x" => 0,
                    "y" => 0,
                    "quality" => 100,
                    "eager" => array(
                        [
                            "quality" => 100,
                            "width" => 384,
                            "height" => 216,
                            "crop" => "limit"
                        ]
                    ),
                ));

            echo "Transforming image: " . $post->title . "\n";

            Redis::set('post:image:big:' . $post->id, $cloudImage['url']);
            Redis::set('post:image:small:' . $post->id, $cloudImage['eager'][0]['url']);

            $cloudImage = \Cloudinary\Uploader::upload(
                $post->image,
                array(
                    "crop" => "thumb",
                    "width" => 90,
                    "height" => 90
                ));

            $image = $cloudImage['url'];
            Redis::set('post:image:thumb:' . $post->id, $image);
        }

        dd("testing...");


        $json = file_get_contents("http://www.juventus.com/service/?type=%5B%22news%22%5D&language=en&offset=17&limit=30&startdate=&enddate=&category=%255B%2522italian_leagueone%2522%252C%2522uefa_cl%2522%252C%2522uefa_el%2522%252C%2522italian_cup%2522%252C%2522italian_supercup%2522%252C%2522uefa_supercup%2522%252C%2522fifa_club_wc%2522%252C%2522fifa_wc%2522%252C%2522friendly%2522%252C%2522other%2522%252C%2522unesco_cup%2522%252C%2522uefa_youth_league%2522%252C%2522primavera%2522%252C%2522campionato_nazionale_allievi_professionisti_a_e_b%2522%252C%2522campionato_nazionale_allievi_professionisti_lega_pro%2522%252C%2522campionato_nazionale_giovanissimi_professionisti%2522%252C%2522matchreport%2522%252C%2522ticket%2522%252C%2522charity%2522%252C%2522financial%2522%252C%2522official%2522%252C%2522event%2522%252C%2522member%2522%252C%2522fan%2522%252C%2522team%2522%252C%2522youth_teams%2522%252C%2522jacademy%2522%252C%2522junior%2522%252C%2522sponsor%2522%252C%2522stadium_museum%2522%252C%2522loans%2522%252C%2522sustainability%2522%252C%2522tour%2522%252C%2522tour_e%2522%252C%2522women_sa%2522%255D");
        $array = json_decode($json);

        dd($array);

        $users = User::all();
        foreach ($users as $user) {

            $randomUser = DB::table('users')
                ->where('created_at', '>', Carbon::now()->subDays(1))
                ->inRandomOrder()
                ->first();

            Redis::del('fan:image:' . $user->id);

            $user->image = $randomUser->image;
            $user->save();

            echo 'Updating user: ' . $user['first_name'] . "\n";
        }

        dd('done');

        foreach ($array->content as $p) {

            $user = [];
            $user['first_name'] = $p->name->first;
            $user['last_name'] = $p->name->first;
            $user['nickname'] = $user['first_name'];
            $user['image'] = "https://platform-static-files.s3.amazonaws.com/premierleague/photos/players/250x250/{$p->altIds->opta}.png";


            if (!empty($p->currentTeam)) {
                $teamName = $p->currentTeam->name;
            } elseif (!empty($p->previousTeam)) {
                $teamName = $p->previousTeam->name;
            } else {
                $teamName = time();
            }

            $teamSlug = str_replace("-", "", str_slug($teamName));

            $user['email'] = strtolower($user['nickname']) . "@{$teamSlug}.com";
            $user['password'] = bcrypt($user['email']);

            $u = User::where("email", $user['email'])->first();

            echo 'Inserting new user: ' . $user['first_name'] . "\n";

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
        }
    }
}
