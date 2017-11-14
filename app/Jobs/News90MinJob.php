<?php

namespace App\Jobs;
use App\Post;
use App\User;
use App\FanbasePost;
use Carbon\Carbon;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class News90MinJob extends NewsJob
{

    protected $domain = "";
    protected $url = "";
    protected $fanbase_id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->fanbase_id = 7;
        $this->domain = "http://www.90min.com";
        $this->url = "http://www.90min.com";
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
    }
}