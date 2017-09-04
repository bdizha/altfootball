<?php

namespace App\Console\Commands;

use App\Jobs\LaLigaJob;
use App\Jobs\NewsGoalJob;
use App\Jobs\News90MinJob;
use App\Jobs\NewsSportslensJob;
use App\Jobs\NewsBreatheChelseaJob;
use App\Jobs\FCBayernJob;
use App\Jobs\ArsenalFC;
use App\Jobs\ManUJob;
use App\Jobs\PSG;
use App\Jobs\LiverpoolJob;
use App\Jobs\RealMadridJob;
use App\Jobs\PremierLeagueJob;
use App\Jobs\SearieAJob;
use App\Jobs\JuventusJob;
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
        dispatch(new News90MinJob());
        dispatch(new SearieAJob());
        dispatch(new PremierLeagueJob());
        dispatch(new JuventusJob());
        dispatch(new LaLigaJob());
        dispatch(new ManUJob());
        dispatch(new LiverpoolJob());
        dispatch(new RealMadridJob());
        dispatch(new PSG());
        dispatch(new ArsenalFC());
        dispatch(new FCBayernJob());
        dispatch(new NewsBreatheChelseaJob());
        dispatch(new NewsSportslensJob());
    }
}


//
