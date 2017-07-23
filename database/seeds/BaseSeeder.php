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
                "first_name" => "Chelsea",
                "last_name" => "Football",
                "name" => "The Chelsea football club",
                "description" => "A place for all Chelsea enthusiasts around the globe to enjoy.",
                "image" => "http://ak.c.ooyala.com/V1MDlyNjE6pvM3qsb-TEsj6BQqbpSuo2/promo300808043"
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
