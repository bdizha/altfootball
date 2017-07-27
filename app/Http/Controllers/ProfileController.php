<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function Create(Request $request)
    {
        if (Auth::guard()->check()) {
            $user = Auth::user();
            return view('profile.create', ['user' => $user]);
        }
    }
}
