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
            $data['image'] = $this->saveImageFile($data['image'], 'comments', time());
        }
        $comment = Comment::create($data);
        $comment['user'] = $comment->user;

        return json_encode($comment->toArray());
    }
}