<?php

namespace App\Http\Controllers;

use App\Fanbase;
use App\UserFanbase;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        if (!Auth::guard()->check()) {
            return redirect('/');
        }

        $titles = [
            'recommended' => [
                'h2' => 'FANBASES ARE COMMUNITIES FORMED AROUND SHARED INTERESTS',
                'h3' => 'We recommend joining these',
                'step' => 2
            ],
            'featured' => [
                'h2' => 'FEATURING THE BIGGEST NAMES IN FOOTBALL',
                'h3' => 'Fanbases we love',
                'step' => 3
            ]
        ];

        $route = Route::currentRouteName();
        $query = Fanbase::orderBy("views", "DESC");

        $user = Auth::user();


        if ($route == 'recommended') {
            $fanbases = $query->take(10)->get();
        } else {
            $fanbases = $query->offset(10)
                ->take(10)->get();
        }

        return view('profile.onboard', [
            'user' => $user,
            'fanbases' => $fanbases,
            'route' => $route,
            'titles' => $titles
        ]);
    }

    public function store(Request $request)
    {
        if (!Auth::guard()->check()) {
            return redirect('/');
        }

        $user = Auth::user();

        $data = $request->all();
        foreach ($data['fanbases'] as $fanbaseId) {
            $fb = UserFanbase::where('user_id', $user->id)
                ->where('fanbase_id', $fanbaseId)->first();

            if (empty($fb->id)) {
                UserFanbase::create([
                    'user_id' => $user->id,
                    'fanbase_id' => $fanbaseId
                ]);
            }
        }

        $route = $data['route'];

        if ($route == 'featured') {

            $user->is_onboarded = true;
            $user->save();

            return redirect('/');
        } else {
            return redirect('/onboard/featured');
        }
    }
}
