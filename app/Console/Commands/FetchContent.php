<?php

namespace App\Console\Commands;

use App\Jobs\ArsenalFC;
use App\Jobs\Barcelona;
use App\Jobs\BarcelonaFC;
use App\Jobs\BBCFootballJob;
use App\Jobs\Bundesliga;
use App\Jobs\FCBayernJob;
use App\Jobs\Football365;
use App\Jobs\FootballLondonJob;
use App\Jobs\FootballJourneyJob;
use App\Jobs\JuventusJob;
use App\Jobs\LaLigaJob;
use App\Jobs\LiverpoolJob;
use App\Jobs\ManUJob;
use App\Jobs\News90MinJob;
use App\Jobs\FourFourTwoJob;
use App\Jobs\NewsGoalJob;
use App\Jobs\PremierLeagueJob;
use App\Jobs\NewsPSGJob;
use App\Jobs\RealMadridJob;
use App\Jobs\SearieAJob;
use App\Jobs\PerfectClubsJob;
use App\Post;
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

        Post::where("content", '')->delete();

        try {
            dispatch(new BBCFootballJob());
        } catch (\Exception $e) {
        }

        try {
            dispatch(new FourFourTwoJob());
        } catch (\Exception $e) {

        }

        try {
//            dispatch(new FrenchFootballJob());
        } catch (\Exception $e) {

        }

        try {
            dispatch(new PerfectClubsJob());
        } catch (\Exception $e) {

        }

        try {
            dispatch(new FootballJourneyJob());
        } catch (\Exception $e) {

        }

        try {
            dispatch(new FootballLondonJob());
        } catch (\Exception $e) {

        }


        Post::where("content", '')->delete();

        try {
//            dispatch(new TotalSportekJob());
        } catch (\Exception $e) {

        }

        try {
            dispatch(new LiverpoolJob());
        } catch (\Exception $e) {

        }

        try {
            dispatch(new RealMadridJob());
        } catch (\Exception $e) {

        }

        try {
            dispatch(new NewsPSGJob());
        } catch (\Exception $e) {

        }

        try {
            dispatch(new ArsenalFC());
        } catch (\Exception $e) {

        }

        try {
            dispatch(new Football365());
        } catch (\Exception $e) {

        }

        try {
            dispatch(new ManUJob());
        } catch (\Exception $e) {

        }


        try {
            dispatch(new Bundesliga());
        } catch (\Exception $e) {

        }


        try {
            dispatch(new Barcelona());
        } catch (\Exception $e) {

        }


        try {
            dispatch(new BarcelonaFC());
        } catch (\Exception $e) {

        }


        try {
            dispatch(new SpanishFootball());
        } catch (\Exception $e) {

        }

        try {
            dispatch(new SearieAJob());
        } catch (\Exception $e) {

        }

        try {
            dispatch(new JuventusJob());
        } catch (\Exception $e) {

        }

        try {
            dispatch(new NewsGoalJob());
        } catch (\Exception $e) {

        }

        try {
            dispatch(new News90MinJob());
        } catch (\Exception $e) {

        }

        try {
            dispatch(new PremierLeagueJob());
        } catch (\Exception $e) {

        }

        try {
            dispatch(new LaLigaJob());
        } catch (\Exception $e) {

        }

        try {
            dispatch(new FCBayernJob());
        } catch (\Exception $e) {

        }
    }
}
