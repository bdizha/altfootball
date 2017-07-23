<?php

namespace App\Http\Controllers;

use App\Fanbase;
use App\Post;
use App\User;

class FanController extends Controller
{
    public function show($slug)
    {
        $fan = User::where('slug', '=', $slug)->first();

        $posts = Post::whereHas('user', function ($query) use ($fan) {
            $query->where('users.id', $fan->id);
        })
            ->orderBy("posts.created_at", "DESC")
            ->take(24)
            ->get();

        $fanbases = Fanbase::whereHas('users', function ($query) use ($fan) {
            $query->where('users.id', $fan->id);
        })
            ->orderBy("fanbases.name", "ASC")
            ->take(12)
            ->get();

        return view('fan.show', [
            'fan' => $fan,
            'posts' => $posts,
            'fanbases' => $fanbases
        ]);
    }

    public function followers($slug)
    {
        $fan = User::where('slug', '=', $slug)->first();

        $followers = User::orderBy("first_name", "ASC")
            ->orderBy("last_name", "ASC")
            ->take(24)
            ->get();

        return view('fan.fans', [
            'fan' => $fan,
            'fans' => $followers
        ]);
    }

    public function following($slug)
    {
        $fan = User::where('slug', '=', $slug)->first();

        $following = User::orderBy("first_name", "ASC")
            ->orderBy("last_name", "ASC")
            ->take(24)
            ->get();

        return view('fan.fans', [
            'fan' => $fan,
            'fans' => $following
        ]);
    }
}