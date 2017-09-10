<?php namespace App;

use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountService
{

    public function createOrGetUser(ProviderUser $providerUser)
    {

        $account = SocialAccount::whereProvider('facebook')
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook'
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();
            if (!$user) {
                $user = Socialite::driver('facebook')->user();

                $ipAddress = new CaptureIpTrait;
                $user = User::where("email", $user->getEmail())->first();

                if (empty($user->id)) {
                    $name = $user->getName();
                    $nameParts = explode(" ", $name);

                    $firstName = $nameParts[0];
                    $lastName = "";
                    if (!empty($nameParts[1])) {
                        $lastName = $nameParts[1];
                    }

                    $data = [
                        'first_name' => $firstName,
                        'last_name' => $lastName,
                        'nickname' => $user->getNickname(),
                        'email' => $user->getEmail(),
                        'password' => bcrypt($user->getEmail()),
                        'token' => str_random(64),
                        'ip_address' => $ipAddress->getClientIp(),
                        'is_active' => true,
                        'image' => $user->getAvatar()
                    ];

                    $user = User::create($data);
                }

                $avatar = $user->getAvatar();
                if (!empty($avatar)) {
                    $user->image = $avatar;
                    $user->save();

                    $imagePart = '/users/' . md5($user->id) . '.jpg';
                    $this->imgix_purge("https://altfootball.imgix.net" . $imagePart);
                }
            }

            $account->user_id = $user["id"];
            $account->save();

            return $user;
        }
    }

}