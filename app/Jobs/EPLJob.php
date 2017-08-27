<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class EPLJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        foreach (range(1, 3) as $page) {

            $url = "https://footballapi.pulselive.com/content/PremierLeague/text/EN/?pageSize=10&page=4&tagNames=News&fullObjectResponse=true";

            echo $url . "\n";

//            $crawler = $client->request('GET', $this->url . $page);

            $jsonList = file_get_contents($url);
            $arrayList = json_decode($jsonList);

            dd($arrayList);

            if (empty($arrayList->content)) {
                continue;
            }
        }
    }
}
