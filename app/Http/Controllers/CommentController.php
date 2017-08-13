<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;

class CommentController extends Controller
{

    public function create(Request $request)
    {
        $user = Auth::user();
        $data = $request->all();
        $data['user_id'] = $user->id;

        if(!empty($data['image'])){
            $data['image'] = $this->saveImageFile($data['image'], 'comments', time());
        }
        $comment = Comment::create($data);
        $comment['user'] = $comment->user;

        return json_encode($comment->toArray());
    }
}