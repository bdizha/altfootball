<?php

namespace App\Http\Controllers;

use App\Fanbase;
use App\Post;

class FanbaseController extends Controller
{
    public function show($slug)
    {
        $fanbase = Fanbase::where('slug', '=', $slug)->first();

        $posts = Post::whereHas('fanbases', function ($query) use ($fanbase) {
            $query->where('fanbases.id', $fanbase->id);
        })
            ->orderBy("posts.created_at", "DESC")
            ->take(24)
            ->get();

        return view('fanbase.show', [
            'fanbase' => $fanbase,
            'posts' => $posts
        ]);
    }
}
