<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{

    public function create(Request $request)
    {
        $data = $request->all();

        $comment = Comment::create($data);

        return json_encode($comment->toArray());
    }
}
