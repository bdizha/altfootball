<?php

namespace App\Http\Controllers;

use App\Fanbase;
use App\Post;
use Illuminate\Http\Request;
use Auth;

class FanbaseController extends Controller
{
    public function index(Request $request)
    {
        $fanbases = Fanbase::orderBy("views", "DESC")
            ->take(24)
            ->get();

        return view('fanbase.index', [
            'fanbases' => $fanbases
        ]);
    }

    public function show($slug)
    {
        $fanbase = Fanbase::where('slug', '=', $slug)->first();

        $fanbase->views += 1;
        $fanbase->save();

        $posts = Post::whereHas('fanbases', function ($query) use ($fanbase) {
            $query->where('fanbases.id', $fanbase->id);
        })
            ->orderBy("posts.created_at", "DESC")
            ->take(12)
            ->get();

        return view('fanbase.show', [
            'fanbase' => $fanbase,
            'posts' => $posts,
            'user' => $this->getUserArray()
        ]);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();
        $data['user_id'] = $user->id;

        if(!empty($data['image'])){
            $data['image'] = $this->saveImageFile($data['image'], 'fanbases', time());
        }

        if(!empty($data['cover'])){
            $data['cover'] = $this->saveImageFile($data['cover'], 'fanbases', time());
        }

        $fanbase = Fanbase::create($data);
        $fanbase['user'] = $user;

        return json_encode($fanbase->toArray());
    }
}
