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
        $fanbases = Fanbase::orderBy('id', 'asc')->take(9)->get();

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

        return view('welcome', [
            'fanbases' => $fanbases,
            'popularPosts' => $popularPosts,
            'tags' => $tags,
            'post' => $post,
            'fans' => $fans,
            'user' => $this->getUserArray(),
            'meta' => $this->getMeta()
        ]);
    }
}