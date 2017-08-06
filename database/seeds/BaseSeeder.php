<?php

use App\Comment;
use App\User;
use App\Post;
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

        foreach(User::where("updated_at", ">=", Carbon::now()->subDays(2))->get() as $user){
            $user->image = 'http://altfootball.dev/images/0' . rand(1, 8) . '.png';
            $user->save();
        }
    }
}