<?php

namespace App\Http\Controllers;

use App\Fanbase;
use App\Post;
use Auth;
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

//        dd($post->comments->toArray());

        $post->views += 1;
        $post->save();

        $url = $request->fullUrl();

        return view('post.show', [
            'comments' => json_encode($post->comments->toArray(), JSON_HEX_APOS),
            'user' => json_encode(Auth::user()->toArray(), JSON_HEX_APOS),
            'post' => $post,
            'url' => $url,
            'siblingPosts' => $siblingPosts,
            'fanbases' => $fanbases,
            'trendingPosts' => $trendingPosts
        ]);
    }
}