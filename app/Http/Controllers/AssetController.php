<?php

namespace App\Http\Controllers;

use App\Fanbase;
use App\Post;
use Illuminate\Http\Request;


class AssetController extends Controller
{
    public function show(Request $request)
    {
        return view('asset.show');
    }
}