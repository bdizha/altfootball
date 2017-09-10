<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create(Request $request)
    {
        if (Auth::guard()->check()) {
            $user = Auth::user();
            return view('profile.create', ['user' => $user]);
        } else {
            return redirect('/');
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();

        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->save();

        return redirect('/onboard/recommended');
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();

        if (!empty($data['image']) && strpos($data['image'], 'users') === false) {
            $data['image'] = $this->saveImageFile($data['image'], 'users', $user->id);
        }

        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->bio = $data['bio'];
        $user->website = $data['website'];
        $user->save();

        return true;
    }
}
