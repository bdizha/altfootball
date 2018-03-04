<?php

namespace App\Http\Controllers;

use App\Fanbase;
use App\Post;
use Auth;
use Carbon\Carbon;
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
            ->where('created_at', "<=", Carbon::now())
            ->orderBy('posts.created_at', 'desc')
            ->offset(($data['page'] * 2) + 1)
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

        $contentLength = strlen($post->content);

        $trendingPosts = Post::where("id", "!=", $post->id)
            ->orderBy("posts.views", "DESC")
            ->where("created_at", ">", Carbon::now()->subWeek(1))
            ->limit(floor($contentLength / 4000) + 20)
            ->get();

        $siblingPosts = Post::whereHas('fanbases', function ($query) use ($post) {
            $query->where('fanbases.id', $post->fanbase->id);
        })
            ->where("id", "!=", $post->id)
            ->orderBy("posts.created_at", "DESC")
            ->limit(6)
            ->get();

        if ($post->fanbase) {
            $fanbases = Fanbase::where("id", "!=", $post->fanbase->id)
                ->inRandomOrder()
                ->orderBy('id', 'asc')->take(3)->get();
        }

        $post->views += 1;
        $post->save();

        return view('post.show', [
            'comments' => json_encode($post->comments->toArray(), JSON_HEX_APOS),
            'post' => $post,
            'fanbases' => $fanbases,
            'trendingPosts' => $trendingPosts,
            'siblingPosts' => $siblingPosts,
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