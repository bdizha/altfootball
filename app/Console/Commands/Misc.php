<?php

namespace App\Console\Commands;

use App\Console\ImageFilter;
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

        $output = "/home/batanayi/Work/altfootball/public/images/e8b9ec3e2ee8972c01f0107acbee578e_output.jpg";

        try {
            $imageFilter = ImageFilter::factory('/home/batanayi/Work/altfootball/public/images/e8b9ec3e2ee8972c01f0107acbee578e.jpg', $output);
        } catch (Exception $e) {
            echo $e->getMessage();
            die;
        }

        foreach (array( 'altfootball') as $method) {
            $imageFilter->_output = "/home/batanayi/Work/altfootball/public/images/e8b9ec3e2ee8972c01f0107acbee578e_{$method}.jpg";; // we have to change output file to prevent overwrite
            $imageFilter->$method(); // apply current filter (from array)
        }

    }
}
