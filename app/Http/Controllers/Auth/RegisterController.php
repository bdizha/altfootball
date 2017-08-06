<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Traits\CaptureIpTrait;
use Illuminate\Http\Request;
use App\Notifications\SendActivationEmail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/unverified';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $ipAddress = new CaptureIpTrait;
        $user = User::where("email", $data["email"])->first();

        if(empty($user->id)){
            $user = User::create([
                'nickname' => $data['nickname'],
                'email' => $data['email'],
                'password' => bcrypt($data['email']),
                'token'             => str_random(64),
                'ip_address' => $ipAddress->getClientIp()
            ]);
        }

        $this->sendNewActivationEmail($user, $user->token);

        return $user;
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function unverified()
    {
        if (Auth::guard()->check()) {
            $user = Auth::user();
            return view('auth.unverified', ['user' => $user]);
        }
        else{
            $this->redirectPath('/register');
        }
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function activate(Request $request, $token)
    {
        $user = User::where("token", $token)->first();
        if(empty($user->id)){
            $this->redirectPath('/register');
        }
        else{
            $user->is_active = true;
            $user->save();

            $this->guard()->login($user, true);

            return redirect($user->is_onboarded ? '/' : '/profile/create');
        }
    }

    public function sendNewActivationEmail(User $user, $token) {
        $user->notify(new SendActivationEmail($token));
    }
}
