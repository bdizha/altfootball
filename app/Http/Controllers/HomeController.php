<?php

namespace App\Http\Controllers;

use App\Fanbase;
use App\Post;
use App\Tag;
use App\User;
use Auth;
use Carbon\Carbon;
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
        $bases = Fanbase::orderBy('id', 'asc')->take(10)->get();

        $tags = Tag::withCount('posts')
            ->orderBy("posts_count", "DESC")
            ->limit(200)
            ->get();

        $fans = User::withCount('posts')
            ->orderBy("posts_count", "DESC")
            ->take(4)
            ->get();

        $posts = [];
        $posts['hot'] = Post::with('user')
            ->where('created_at', "<=", Carbon::now())
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $posts['top'] = Post::with('user')
            ->where('created_at', "<=", Carbon::now())
            ->offset(5)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();

        return view('welcome', [
            'bases' => $bases,
            'posts' => $posts,
            'tags' => $tags,
            'fans' => $fans,
            'user' => $this->getUserArray(),
            'meta' => $this->getMeta()
        ]);
    }
}