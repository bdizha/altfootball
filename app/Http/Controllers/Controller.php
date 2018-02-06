<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $access_token = '';

    protected function saveImageFile($base64String = '', $table, $recordId)
    {
        $imagePart = '/' . $table . '/' . md5($recordId) . '.jpg';
        $filePart = '/images/' . $imagePart;
        $fileOutput = public_path('/') . $filePart;

        file_put_contents($fileOutput, base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64String)));

        $this->imgix_purge("https://altfootball.imgix.net" . $imagePart);

        return $imagePart;
    }

    protected function getUserArray()
    {
        if (Auth::check()) {
            $user = Auth::user();
        } else {
            $user = new User();
            $user->image = env("APP_URL") . "/images/pundit-main.jpg";
            $user->thumb_image = env("APP_URL") . "/images/pundit-main.jpg";
        }

        $userArray = [
            'id' => $user->id,
            'name' => $user->name,
            'image' => $user->image,
            'thumb_x' => $user->thumb_x,
            'slug' => $user->slug
        ];

        return json_encode($userArray, JSON_HEX_APOS);
    }

    public function getMeta()
    {
        $meta = [
            "url" => url()->current(),
            "title" => env("META_TITLE"),
            "description" => env("META_DESCRIPTION"),
            "image" => url()->current() . "/images/pundit-main.jpg"
        ];

        return $meta;
    }

    function imgix_purge($url)
    {
        $headers = array(
            'Content-Type:application/json',
            'Authorization: Basic ' . base64_encode(env("IMGIX_API_KEY") . ':')
        );
        $payload = json_encode(array("url" => $url));
        $curl = curl_init('https://api.imgix.com/v2/image/purger');
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

}