<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MadWeb\Robots\RobotsFacade;

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
        RobotsFacade::setShouldIndexCallback(function () {
            return app()->environment('production');
        });
    }
}
