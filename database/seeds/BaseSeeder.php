<?php

use App\Comment;
use App\User;
use App\Post;
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

        foreach(Fanbase::all() as $fanbase){

            echo $fanbase->initials . "\n";
            $fanbase->stamp = $fanbase->initials;
            $fanbase->save();
        }
    }
}