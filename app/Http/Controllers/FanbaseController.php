<?php

namespace App\Http\Controllers;

use App\Fanbase;
use App\Post;
use Illuminate\Http\Request;

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

        if(!empty($data['image'])){
            $data['image'] = $this->saveImageFile($data['image'], time());
        }
        $post = Fanbase::create($data);
        $post['user'] = $data['user'];

        return json_encode($post->toArray());
    }
}
