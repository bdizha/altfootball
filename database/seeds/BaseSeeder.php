<?php

use App\Fanbase;
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
        foreach (Fanbase::all() as $fanbase) {
            $fanbase->save();
        }
    }
}