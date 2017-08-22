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

        return view('fan.show', [
            'user' => $user
        ]);
    }

    public function requesters($slug)
    {
        $user = User::where('slug', '=', $slug)->first();

        return view('fan.fans', [
            'user' => $user,
            'followers' => $user->requesters,
            'tabs' => $this->tabs($user, 'requesters')
        ]);
    }

    public function requested($slug)
    {
        $user = User::where('slug', '=', $slug)->first();

        return view('fan.fans', [
            'user' => $user,
            'followers' => $user->requested,
            'tabs' => $this->tabs($user, 'requested')
        ]);
    }

    protected function tabs($user, $active)
    {
        $tabs = [
            'requesters' =>
                [
                    'label' => 'Followers',
                    'count' => $user->requesters->count(),
                    'is_active' => false
                ],

            'requested' =>
                [
                    'label' => 'Following',
                    'count' => $user->requested->count(),
                    'is_active' => false
                ]
        ];

        if (!empty($tabs[$active])) {
            $tabs[$active]['is_active'] = true;
        }

        return $tabs;
    }
}