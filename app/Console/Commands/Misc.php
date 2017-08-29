<?php

namespace App\Console\Commands;

use App\Fanbase;
use App\User;
use App\Post;
use DB;
use Illuminate\Console\Command;

class Misc extends Command
{
    protected $domain = "http://www.realmadrid.com";
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

        $records = Post::orderBy('created_at', 'DESC')->get();

        foreach ($records as $record) {

            if (!empty($record->image)) {
                try {
                    $cloudImage = \Cloudinary\Uploader::upload(
                        $record->image,
                        array(
                            "quality" => 100,
                            "crop" => "fill",
                            "width" => 571,
                            "height" => 285
                        ));

                    $record->small_image = $cloudImage['url'];

                } catch (\Exception $e) {
//                    dd($e);
                }

                try {
                    $cloudImage = \Cloudinary\Uploader::upload(
                        $record->image,
                        array(
                            "crop" => "fill",
                            "quality" => 100,
                            "width" => 1000,
                            "height" => 695,
                            "x" => 0,
                            "y" => 0
                        ));

                    $record->big_image = $cloudImage['url'];

                } catch (\Exception $e) {
//                    dd($e);
                }
                try {

                    $cloudImage = \Cloudinary\Uploader::upload(
                        $record->image,
                        array(
                            "crop" => "thumb",
                            "quality" => 100,
                            "width" => 90,
                            "height" => 90
                        ));

                    $record->thumb_image = $cloudImage['url'];

                    echo "Inserted images for {$record->slug}\n";

                } catch (\Exception $e) {
//                    dd($e);
                }

                $record->save();
            }
        }
    }
}
