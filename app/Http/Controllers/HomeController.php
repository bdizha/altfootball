<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
        $posts = Post::orderBy('created_at', 'desc')->paginate(100);

        return view('welcome', ['posts' => $posts]);
    }
}
