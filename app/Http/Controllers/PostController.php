<?php

namespace App\Http\Controllers;

use App\Fanbase;
use App\Post;
use Auth;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function index(Request $request)
    {
        $data = $request->all();

        $query = Post::with('user')
            ->orderBy('posts.created_at', 'desc')
            ->offset(12 + ($data['page'] * 2))
            ->limit(2);

        if (!empty($data['fanbase_id'])) {
            $posts = $query->whereHas('fanbases', function ($query) use ($data) {
                $query->where('fanbases.id', $data['fanbase_id']);
            })->get();
        } else {
            $posts = $query->get();
        }

        return json_encode($posts->toArray(), JSON_HEX_APOS);
    }

    public function show(Request $request, $slug)
    {
        $fanbases = [];
        $post = Post::where('slug', '=', $slug)->first();

        $trendingPosts = Post::where("id", "<", $post->id)
            ->orderBy("created_at", "DESC")->take(4)->get();

        $siblingPosts = Post::where("id", "<", $post->id)
            ->orderBy("created_at", "DESC")->take(2)->get();

        if ($post->fanbase) {
            $fanbases = Fanbase::where("id", "!=", $post->fanbase->id)
                ->orderBy('id', 'asc')->take(3)->get();
        }

        $post->views += 1;
        $post->save();

        $url = $request->fullUrl();

        return view('post.show', [
            'comments' => json_encode($post->comments->toArray(), JSON_HEX_APOS),
            'post' => $post,
            'url' => $url,
            'siblingPosts' => $siblingPosts,
            'fanbases' => $fanbases,
            'trendingPosts' => $trendingPosts,
            'user' => $this->getUserArray()
        ]);
    }

    public function save(Request $request)
    {
        $data = $request->all();

        if (!empty($data['image'])) {
            $data['image'] = $this->saveImageFile($data['image'], time());
        }
        $post = Post::create($data);
        $post['user'] = $data['user'];

        return json_encode($post->toArray());
    }
}