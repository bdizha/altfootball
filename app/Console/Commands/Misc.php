<?php

namespace App\Console\Commands;

use App\User;
use DB;
use Illuminate\Console\Command;

class Misc extends Command
{
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
        $images = [
            'http://e1.365dm.com/18/02/150x150/skysports-lionel-messi-barcelona-getafe_4228708.jpg',
            'http://e2.365dm.com/18/02/150x150/skysports-jurgen-klopp-virgil-van-dijk_4228900.jpg',
            'http://e2.365dm.com/18/02/150x150/skysports-mo-salah-liverpool-southampton_4228780.jpg',
            'http://video.skysports.com/t4NmViZTE6H7KQIvkZ0GS_X7cQnbM4KN/promo342627715',
            'http://e1.365dm.com/18/02/150x150/skysports-lionel-messi-barcelona-getafe_4228708.jpg',
            'https://e3.365dm.com/18/02/768x432/promo342635122_4228663.jpg',
            'http://e2.365dm.com/18/02/16-9/20/skysports-jonjo-shelvey-paul-pogba-pogba-shelvey-newcastle-man-utd_4228584.jpg?20180211150908',
            'http://video.skysports.com/VqYWdiZTE67D2rSDvfGedVF0rObCxqpD/Ut_HKthATH4eww8X4xMDoxOmFkOxyVqc',
            'http://video.skysports.com/ZoOGdiZTE6XE-nl5zSTsOoZYhyvTb9P-/QCdjB5HwFOTaWQ8X4xMDoxOjBzMTt2bJ',
            'http://e0.365dm.com/17/12/16-9/20/skysports-premier-league-football-chelsea-antonio-conte_4181175.jpg?20180119201042',
            'http://video.skysports.com/RuYWRhZTE6E0vnW48xMKh_90iU4TwhoV/3Gduepif0T1UGY8H4xMDoxOjBzMTt2bJ',
            'http://e2.365dm.com/18/02/16-9/20/skysports-troy-deeney-david-luiz-chelsea_4223739.jpg?20180205202109',
            'http://img.skysports.com/18/02/384x216/ZkeHk4ZTE6vSzp0uT3LFFynwUlkZUJgZ.jpg?20180205223104',
            'http://img.skysports.com/18/02/768x432/promo342560184_4227936.jpg?20180210193900',
            'http://video.skysports.com/k3Z2NiZTE6bOKMrCAyzRMk5FYRq2HctW/promo342619542',
            'http://img.skysports.com/18/02/768x432/V4YzJiZTE6SBEQ51ysxwRVnMSLj2C6dy.jpg?20180210184719',
            'http://video.skysports.com/I0dXlhZTE6cmazDecAn3IyO9ifsMc3oF/3Gduepif0T1UGY8H4xMDoxOjBzMTt2bJ',
            'http://video.skysports.com/IydXlhZTE6b2PG94l4VZYZXQcVrK4F1M/3Gduepif0T1UGY8H4xMDoxOjBzMTt2bJ',
            'http://video.skysports.com/9ndGZhZTE60wrrjobZQTwoPJjOVYsBvu/promo342464856',
            'http://altfootball.imgix.net/posts/eacbec704544fb3e45efadf8eedbf9c8.jpg?auto=compress&crop=faces%2Cedges&fit=crop&fm=pjpg&h=200&ixlib=php-1.1.0&w=200',
            'http://altfootball.imgix.net/posts/d386188d8d67a3b14820069536bcaf38.jpg?auto=compress&crop=faces%2Cedges&fit=crop&fm=pjpg&h=200&ixlib=php-1.1.0&w=200',
            'http://altfootball.imgix.net/posts/20f3d99862a33c859c8363e50fe09a3f.jpg?auto=compress&crop=faces%2Cedges&fit=crop&fm=pjpg&h=200&ixlib=php-1.1.0&w=200',
            'http://altfootball.imgix.net/posts/be349aae74927cb7b3900d0959d23e40.jpg?auto=compress&crop=faces%2Cedges&fit=crop&fm=pjpg&h=200&ixlib=php-1.1.0&w=200',
            'http://altfootball.imgix.net/posts/ecd1ee3d15163fbe981b58a1e88d86bf.jpg?auto=compress&crop=faces%2Cedges&fit=crop&fm=pjpg&h=200&ixlib=php-1.1.0&w=200',
            'http://altfootball.imgix.net/posts/3f78614f061c508c892c4dfe0abdf27e.jpg?auto=compress&crop=faces%2Cedges&fit=crop&fm=pjpg&h=200&ixlib=php-1.1.0&w=200',
            'http://altfootball.imgix.net/posts/a291eb7ce8c6c27ed798151c4a0741bc.jpg?auto=compress&crop=faces%2Cedges&fit=crop&fm=pjpg&h=200&ixlib=php-1.1.0&w=200',
            'http://altfootball.imgix.net/posts/f9f38a0177f16dcaa0d96bcd5b6d2440.jpg?auto=compress&crop=faces%2Cedges&fit=crop&fm=pjpg&h=200&ixlib=php-1.1.0&w=200',
            'http://altfootball.imgix.net/posts/bc9d42fcee61388f6d4634deb12d5b48.jpg?auto=compress&crop=faces%2Cedges&fit=crop&fm=pjpg&h=200&ixlib=php-1.1.0&w=200',
            'http://altfootball.imgix.net/posts/19b060fd3e8d334fa8ce36cc20f5480d.jpg?auto=compress&crop=faces%2Cedges&fit=crop&fm=pjpg&h=200&ixlib=php-1.1.0&w=200',
            'http://altfootball.imgix.net/posts/393a0f103dfdc3798cf1cfc2e7bdbc1f.jpg?auto=compress&crop=faces%2Cedges&fit=crop&fm=pjpg&h=200&ixlib=php-1.1.0&w=200'
        ];

        $users = User::all();

        foreach ($users as $user) {
            echo "Updating user -> {$user->slug}\n";
            $user->image = $images[rand(0, count($images) - 1)];
            $user->save();
        }

    }
}
