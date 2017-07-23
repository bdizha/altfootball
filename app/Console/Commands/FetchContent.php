<?php

namespace App\Console\Commands;

use App\Jobs\NewsGoalJob;
use App\Jobs\News90MinJob;
use App\Jobs\NewsSportslensJob;
use App\Jobs\NewsBreatheChelseaJob;
use Illuminate\Console\Command;

class FetchContent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:content';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch football news from around the world.';

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
        dispatch(new NewsGoalJob());
        dispatch(new NewsSportslensJob());
        dispatch(new News90MinJob());
        dispatch(new NewsBreatheChelseaJob());
    }
}


//
