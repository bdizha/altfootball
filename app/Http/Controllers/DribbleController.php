<?php

namespace App\Http\Controllers;

use App\Dribble;
use Illuminate\Http\Request;
use Auth;

class DribbleController extends Controller
{

    public function create(Request $request)
    {
        $user = Auth::user();
        $data = $request->all();
        $data['user_id'] = $user->id;

        $dribble = Dribble::where('type_id', $data['type_id'])
            ->where('user_id', $user->id)
            ->where('type', $data['type'])->first();

        if(empty($dribble->id)){
            $dribble = Dribble::create($data);
        }

        return json_encode($dribble->toArray());
    }
}
