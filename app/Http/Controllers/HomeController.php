<?php

namespace App\Http\Controllers;

use App\Fanbase;
use App\Post;
use App\Tag;
use App\TagPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function index(Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(24);
        $bases = Fanbase::orderBy('id', 'asc')->take(6)->get();

//        dd($posts[0]);

        $tags = Tag::withCount('posts')
            ->orderBy("posts_count", "DESC")
            ->take(12)
            ->get();

        return view('welcome', [
            'posts' => $posts,
            'bases' => $bases,
            'tags' => $tags
        ]);
    }
}