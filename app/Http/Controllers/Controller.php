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

    protected function saveImageFile($base64String = '', $table, $recordId)
    {
        $types = [
            'png',
            'gif',
            'jpeg',
            'jpg'
        ];

        $extension = 'png';
        foreach ($types as $type) {
            if (strpos($base64String, $type) !== false) {
                $extension = $type;
            }
        }

        $filePart = '/images/' . $table . '/' . md5($recordId) . '.' . $extension;

        $fileOutput = public_path('/') . $filePart;

        file_put_contents($fileOutput, base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64String)));

        return url('/') . $filePart;
    }

    protected function getUserArray()
    {
        if (Auth::check()) {
            $user = Auth::user();
        } else {
            $user = new User();
        }

        $userArray = [
            'id' => $user->id,
            'name' => $user->name,
            'image' => $user->image,
            'slug' => $user->slug
        ];

        return json_encode($userArray, JSON_HEX_APOS);
    }

    protected function uploadImage($url)
    {
        $image = \Cloudinary\Uploader::upload($url);

        dd($image);
    }


}