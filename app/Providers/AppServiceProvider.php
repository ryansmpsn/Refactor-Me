<?php

namespace App\Providers;

use App\User;
use App\UserProfile;
use App\Observers\UserProfileObserver;
use Illuminate\Support\ServiceProvider;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        UserProfile::observe(UserProfileObserver::class);
    }
}
