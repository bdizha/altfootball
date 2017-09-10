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
        $user = User::with(['received', 'sent', 'fanbases'])
            ->where('slug', '=', $slug)
            ->first();

        return view('fan.show', [
            'user' => $user,
            'toJson'=> $user->toKoJs()
        ]);
    }

    public function received($slug)
    {
        $user = User::where('slug', '=', $slug)->first();

        return view('fan.fans', [
            'user' => $user,
            'followers' => $user->received,
            'tabs' => $this->tabs($user, 'received')
        ]);
    }

    public function sent($slug)
    {
        $user = User::where('slug', '=', $slug)->first();

        return view('fan.fans', [
            'user' => $user,
            'followers' => $user->sent,
            'tabs' => $this->tabs($user, 'sent')
        ]);
    }

    protected function tabs($user, $active)
    {
        $tabs = [
            'received' =>
                [
                    'label' => 'Followers',
                    'count' => $user->received->count(),
                    'is_active' => false
                ],

            'sent' =>
                [
                    'label' => 'Following',
                    'count' => $user->sent->count(),
                    'is_active' => false
                ]
        ];

        if (!empty($tabs[$active])) {
            $tabs[$active]['is_active'] = true;
        }

        return $tabs;
    }
}