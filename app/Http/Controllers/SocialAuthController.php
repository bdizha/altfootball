<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\SocialAccountService;
use Socialite;
use Auth;

class SocialAuthController extends Controller {

    protected $request;
    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function redirect() {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(SocialAccountService $service) {

        if (isset($this->request['error'])) {
            return redirect()->to('/');
        } else {
            try {
                $user = $service->createOrGetUser(Socialite::driver('facebook')->user());

                Auth::guard()->login($user, true);
            }
            catch(Exception $e){

            }
            return redirect()->to('/');
        }
    }

}