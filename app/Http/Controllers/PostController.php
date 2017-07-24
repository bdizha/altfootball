<?php

namespace App\Http\Controllers;

use App\Fanbase;
use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function show(Request $request, $slug)
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

        $url = $request->fullUrl();

        return view('post.show', [
            'post' => $post,
            'url' => $url,
            'siblingPosts' => $siblingPosts,
            'fanbases' => $fanbases,
            'trendingPosts' => $trendingPosts
        ]);
    }
}