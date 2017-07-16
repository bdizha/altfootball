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
        $bases = [

            [
                "first_name" => "Sport",
                "last_name" => "Lens",
                "name" => "Sportlens",
                "description" => "For the fans and for the players",
                "image" => "https://www.adorama.com/alc/wp-content/uploads/2013/08/shutterstock_152803373-2.jpg"
            ]
        ];

        foreach ($bases as $base) {
            $user = User::create(
                [
                    "first_name" => $base['first_name'],
                    "last_name" => $base['last_name'],
                    "nickname" => $base['first_name'],
                    "email" => strtolower($base['first_name'] . "." . $base['last_name']) . "@gmail.com",
                    "password" => bcrypt(strtolower($base['first_name'] . "." . $base['last_name']) . "@gmail.com")
                ]
            );

            Fanbase::create(
                [
                    "user_id" => $user->id,
                    "name" => $base["name"],
                    "description" => $base["description"],
                    "image" => $base["image"]
                ]
            );
        }
    }
}
