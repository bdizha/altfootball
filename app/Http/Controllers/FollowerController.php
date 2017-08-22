<?php

namespace App\Http\Controllers;

use App\Follower;
use Illuminate\Http\Request;
use Auth;

class FollowerController extends Controller
{

    public function save(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();
        $data['user_id'] = $user->id;

        $follower = Follower::where('user_id', $data['user_id'])
            ->where('followable_type', $data['followable_type'])
            ->where('followable_id', $data['followable_id'])
            ->first();

        if (empty($follower->id)) {
            $follower::create($data);
        } else {
            $follower->is_active = !$follower->is_active;
            $follower->save();
        }

        return json_encode($follower->toArray());
    }
}
