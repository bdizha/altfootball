<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();

        $trendingPosts = Post::where("id", "<", $post->id)
            ->orderBy("created_at", "DESC")->take(4)->get();

        return view('post.show', [
            'post' => $post,
            'trendingPosts' => $trendingPosts
        ]);
    }
}