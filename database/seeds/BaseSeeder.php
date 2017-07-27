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
        $users = User::get();
        foreach($users as $user){
            echo "Tokenizing user: " . $user->email . "\n";
            $user->token = str_random(64);
            $user->save();
        }
    }
}
