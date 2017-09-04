<?php

namespace App\Http\Controllers;

use App\Fanbase;
use App\Post;
use Craft\Exception;
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


        $meta = $this->getMeta();
        $meta['title'] = 'Discover Fanbases';

        return view('fanbase.index', [
            'fanbases' => $fanbases,
            'meta' => $meta
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
            'toJson'=> $fanbase->toJson(),
            'posts' => $posts,
            'user' => $this->getUserArray()
        ]);
    }

    public function save(Request $request)
    {
        ini_set('memory_limit', '-1');

        try {

            $data = $request->all();
            $user = Auth::user();
            $data['user_id'] = $user->id;

            $image = "";
            $cover = "";

            if (!empty($data['image'])) {
                $image = $data['image'];
                unset($data['image']);
            }

            if (!empty($data['cover'])) {
                $cover = $data['cover'];
                unset($data['cover']);
            }

            if (empty($data['id'])) {
                $fanbase = Fanbase::create($data);
            } else {
                $fanbase = Fanbase::find($data['id']);
                $fanbase->update($data);
            }

            if (!empty($image) && strpos($image, 'fanbases') === false) {
                $data['image'] = $this->saveImageFile($image, 'fanbases', $fanbase->id);
            }
            else{
                $data['image'] = $image;
            }

            if (!empty($cover) && strpos($cover, 'fanbases') === false) {
                $data['cover'] = $this->saveImageFile($cover, 'fanbases', $fanbase->id . "_cover");
            }
            else{
                $data['cover'] = $cover;
            }

            $fanbase->update($data);

            return $fanbase->toJson();
        }
        catch(Exception $e){

        }
    }
}
