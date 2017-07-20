<?php

namespace App\Console\Commands;

use App\UserFanbase;
use App\FanbasePost;
use Illuminate\Console\Command;

class Misc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'misc:anything';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $fanbasesPosts = FanbasePost::get();

        foreach ($fanbasesPosts as $fanbasePost) {
            echo "Fanbasing ::: " . $fanbasePost->post->slug . "\n";

            $userFanbase = UserFanbase::where("user_id", $fanbasePost->post->user_id)
                ->where("fanbase_id", $fanbasePost->fanbase_id)->first();

            if(empty($userFanbase)){
                UserFanbase::create([
                    "user_id" => $fanbasePost->post->user_id,
                    "fanbase_id" => $fanbasePost->fanbase_id
                ]);
            }
        }
    }
}
