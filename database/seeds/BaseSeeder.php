<?php

use App\Comment;
use App\User;
use App\Post;
use App\Follower;
use App\Fanbase;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach(Follower::all() as $follower){

            if($follower->type == 'App\User'){
                $follower->type = 1;
            }
            else{
                $follower->type = 2;
            }

            $follower->save();
        }
    }
}