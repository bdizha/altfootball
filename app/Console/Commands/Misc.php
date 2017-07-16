<?php

namespace App\Console\Commands;

use App\Post;
use App\Tag;
use App\TagPost;
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

        $urls = [
            'sportslens.com' => 8,
            'www.90min.com' => 7,
            'www.goal.com' => 4,
            'chelsea.com' => 5
        ];

        foreach ($urls as $url => $fanbaseId) {
            $posts = Post::where("external_url", "like", "%{$url}%")->get();

            foreach ($posts as $post) {
                echo "Fanbasing ::: " . $post->slug . "\n";
                FanbasePost::create([
                    "post_id" => $post->id,
                    "fanbase_id" => $fanbaseId
                ]);
            }
        }
    }
}
