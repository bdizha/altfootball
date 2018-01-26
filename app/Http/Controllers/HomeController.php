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

        $date = Carbon::now()->subDays(7);

        $popularPosts = Post::orderBy('views', 'desc')
            ->where('created_at', '>=', $date)
            ->take(3)->get();

        $tags = Tag::withCount('posts')
            ->orderBy("posts_count", "DESC")
            ->take(12)
            ->get();

        $fans = User::withCount('posts')
            ->orderBy("posts_count", "DESC")
            ->take(4)
            ->get();

        $post = Post::with('user')
            ->where('created_at', "<=", Carbon::now())
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->first();

        $posts = Post::with('user')
            ->where('created_at', "<=", Carbon::now())
            ->where("id", "!=", $post->id)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();

        return view('welcome', [
            'bases' => $bases,
            'popularPosts' => $popularPosts,
            'tags' => $tags,
            'post' => $post,
            'posts' => $posts,
            'fans' => $fans,
            'user' => $this->getUserArray(),
            'meta' => $this->getMeta()
        ]);
    }
}