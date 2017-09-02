<?php

use App\Fanbase;
use App\User;
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
        foreach (User::all() as $user) {

            $user->small_image = '';
            $user->thumb_image = '';

            echo "Echoing user: " . $user->name . "\n";

            $user->save();
        }
    }
}