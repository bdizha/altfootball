<?php

namespace App\Http\Controllers;

use App\Fanbase;
use App\Post;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redis;

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

    public function save(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();
        $data['user_id'] = $user->id;

        if(!empty($data['image']) && strpos($data['image'], 'altfootball') === false){
            if(!empty($data['id'])) {
                Redis::del('fanbase:image:' . $data['id']);
            }
            $data['image'] = $this->saveImageFile($data['image'], 'fanbases', time());
        }

        if(!empty($data['cover']) && strpos($data['cover'], 'altfootball') === false){
            if(!empty($data['id'])) {
                Redis::del('fanbase:cover:' . $data['id']);
            }
            $data['cover'] = $this->saveImageFile($data['cover'], 'fanbases', time());
        }

        if(empty($data['id'])){
            $fanbase = Fanbase::create($data);
        }
        else{
            $fanbase = Fanbase::find($data['id']);
            $fanbase->update($data);
        }

        return $fanbase->toJson();
    }
}
