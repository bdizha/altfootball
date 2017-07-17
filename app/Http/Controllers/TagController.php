<?php

namespace App\Http\Controllers;

use App\Fanbase;
use App\Post;
use App\Tag;

class TagController extends Controller
{
    public function show($slug)
    {
        $tag = Tag::where('slug', '=', $slug)->first();

        $posts = Post::whereHas('tags', function ($query) use ($tag) {
            $query->where('tags.id', $tag->id);
        })
            ->orderBy("posts.created_at", "DESC")
            ->take(24)
            ->get();

        $bases = Fanbase::orderBy('id', 'asc')->take(6)->get();

        return view('tag.show', [
            'tag' => $tag,
            'posts' => $posts,
            'bases' => $bases
        ]);
    }
}
