<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\SendActivationEmail;
use App\Traits\CaptureIpTrait;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Socialite;

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
     * @param  array $data
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
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        $ipAddress = new CaptureIpTrait;
        $user = User::where("email", $data["email"])->first();

        if (empty($user->id)) {
            $user = User::create([
                'nickname' => $data['nickname'],
                'email' => $data['email'],
                'password' => bcrypt($data['email']),
                'token' => str_random(64),
                'ip_address' => $ipAddress->getClientIp()
            ]);
        }

        $this->sendNewActivationEmail($user, $user->token);

        die(json_encode(['success' => true]));
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
        } else {
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
        if (empty($user->id)) {
            $this->redirectPath('/register');
        } else {
            $user->is_active = true;
            $user->save();

            $this->guard()->login($user, true);

            return redirect($user->is_onboarded ? '/' : '/profile/create');
        }
    }

    public function sendNewActivationEmail(User $user, $token)
    {
        $user->notify(new SendActivationEmail($token));
    }

    public function redirectToProvider()
    {
        return Socialite::with('facebook')->redirect();
    }

    public function handleProviderCallback(Request $request)
    {
        if (!empty($request['error'])) {
            return redirect()->to('/');
        } else {
            $facebookUser = Socialite::with('facebook')->user();
            dd($facebookUser);

            $ipAddress = new CaptureIpTrait;
            $user = User::where("email", $facebookUser->getEmail())->first();

            if (empty($user->id)) {
                $name = $facebookUser->getName();
                $nameParts = explode(" ", $name);

                $firstName = $nameParts[0];
                $lastName = "";
                if (!empty($nameParts[1])) {
                    $lastName = $nameParts[1];
                }

                $data = [
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                    'nickname' => $facebookUser->getNickname(),
                    'email' => $facebookUser->getEmail(),
                    'password' => bcrypt($facebookUser->getEmail()),
                    'token' => str_random(64),
                    'ip_address' => $ipAddress->getClientIp(),
                    'is_active' => true,
                    'image' => $facebookUser->getAvatar()
                ];

                $user = User::create($data);
            }

            $avatar = $facebookUser->getAvatar();
            if (!empty($avatar)) {
                $user->image = $avatar;
                $user->save();

                $imagePart = '/users/' . md5($user->id) . '.jpg';
                $this->imgix_purge("https://altfootball.imgix.net" . $imagePart);
            }

            $this->guard()->login($user, true);

        }
    }
}
