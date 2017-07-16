<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\Fanbase;

class TagController extends Controller
{
    public function show($slug)
    {
        $tag = Tag::where('slug', '=', $slug)->first();

        $posts = Post::orderBy("created_at", "DESC")->take(24)->get();
        $bases = Fanbase::orderBy('id', 'asc')->take(6)->get();

        return view('tag.show', [
            'tag' => $tag,
            'posts' => $posts,
            'bases' => $bases
        ]);
    }
}
