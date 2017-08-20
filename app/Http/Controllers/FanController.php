<?php

namespace App\Http\Controllers;

use App\Fan;
use App\Fanbase;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class FanController extends Controller
{
    public function show($slug)
    {
        $user = User::where('slug', '=', $slug)->first();

        $posts = Post::whereHas('user', function ($query) use ($user) {
            $query->where('users.id', $user->id);
        })
            ->orderBy("posts.created_at", "DESC")
            ->take(24)
            ->get();

        $fanbases = Fanbase::whereHas('users', function ($query) use ($user) {
            $query->where('users.id', $user->id);
        })
            ->orderBy("fanbases.name", "ASC")
            ->take(12)
            ->get();

        return view('fan.show', [
            'user' => $user,
            'posts' => $posts,
            'fanbases' => $fanbases
        ]);
    }

    public function followers($slug)
    {
        $user = User::where('slug', '=', $slug)->first();
        return view('fan.fans', [
            'user' => $user,
            'fans' => $user->followers(),
            'tabs' => $this->tabs($user, 'followers')
        ]);
    }

    public function following($slug)
    {
        $user = User::where('slug', '=', $slug)->first();

        return view('fan.fans', [
            'user' => $user,
            'fans' => $user->following(),
            'tabs' => $this->tabs($user, 'following')
        ]);
    }

    protected function tabs($user, $active)
    {
        $tabs = [
            'followers' =>
                [
                    'label' => 'Followers',
                    'count' => $user->followers()->count(),
                    'is_active' => false
                ],

            'following' =>
                [
                    'label' => 'Following',
                    'count' => $user->following()->count(),
                    'is_active' => false
                ]
        ];

        if (!empty($tabs[$active])) {
            $tabs[$active]['is_active'] = true;
        }

        return $tabs;
    }
}