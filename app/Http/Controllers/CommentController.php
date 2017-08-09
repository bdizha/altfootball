<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{

    public function create(Request $request)
    {
        $data = $request->all();

        if(!empty($data['image'])){
            $data['image'] = $this->saveImageFile($data['image'], time());
        }
        $comment = Comment::create($data);
        $comment['user'] = $data['user'];

        return json_encode($comment->toArray());
    }

    protected function saveImageFile($base64String = '', $commentId){
        $types = [
            'png',
            'gif',
            'jpeg',
            'jpg'
        ];

        $extension = 'png';
        foreach($types as $type){
            if(strpos($base64String, $type) !== false){
                $extension = $type;
            }
        }

        $filePart = '/images/comments/' . md5($commentId) . '.' . $extension;

        $fileOutput = public_path('/') . $filePart;

        file_put_contents($fileOutput, base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64String)));

        return url('/') . $filePart;
    }
}
