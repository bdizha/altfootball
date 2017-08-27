<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth;
use Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('isActive', function () {
            if (Auth::guard()->check()) {
                $user = Auth::user();
                return $user->is_active;
            }

            return false;
        });

        \Cloudinary::config(array(
            "cloud_name" => "altfootball",
            "api_key" => "565551878586399",
            "api_secret" => "n0Hbn1qbWj_JVRKRg9LYLgF4aRo"
        ));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
