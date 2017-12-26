<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NewsJob implements ShouldQueue
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
        //
    }

    public function insertTarget($html)
    {
        return str_replace("href=", "target='_blank' href=", $html);
    }

    public function cleanUpDate($string)
    {
        $months = [
            "Jan" => "January",
            "Feb" => "February",
            "Mar" => "March",
            "Apr" => "April",
            "May" => "May",
            "Jun" => "June",
            "Jul" => "July",
            "Aug" => "August",
            "Sep" => "September",
            "Oct" => "October",
            "Nov" => "November",
            "Dec" => "December"
        ];

        $date = $string;

        foreach ($months as $abbr => $month) {
            $date = str_replace($month, $abbr, $date);
            $date = str_replace(",", " ", $date);
            $date = str_replace("  ", " ", $date);
        }

        return trim($date);
    }

    public function cleanHtml($html)
    {
        $html = str_replace("<p><br></p>", "", $html);
        $html = str_replace("<p> </p>", "", $html);
        $html = str_replace("<p><br></p>", "", $html);
        $html = str_replace("<p>&nbsp;</p>", "", $html);
        $html = str_replace("<br><br>", "<br>", $html);
        $html = str_replace("style=", "data-style=", $html);

        return $this->insertTarget($html);
    }

    public function cleanTitle($title)
    {
        $titleParts = explode("|", $title);
        $titleParts = explode(" - ", $titleParts[0]);
        return trim($titleParts[0]);
    }
}
