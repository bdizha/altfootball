<?php

namespace App\Http\Controllers;

use App\Fanbase;
use App\Post;

class PostController extends Controller
{
    public function show($slug)
    {
        $fanbases = [];
        $post = Post::where('slug', '=', $slug)->first();

        $trendingPosts = Post::where("id", "<", $post->id)
            ->orderBy("created_at", "DESC")->take(4)->get();

        $siblingPosts = Post::where("id", "<", $post->id)
            ->orderBy("created_at", "DESC")->take(2)->get();

        if($post->fanbase()) {
            $fanbases = Fanbase::where("id", "!=", $post->fanbase()->id)
                ->orderBy('id', 'asc')->take(3)->get();
        }

        $post->views += 1;
        $post->save();


        return view('post.show', [
            'post' => $post,
            'siblingPosts' => $siblingPosts,
            'fanbases' => $fanbases,
            'trendingPosts' => $trendingPosts
        ]);
    }
}