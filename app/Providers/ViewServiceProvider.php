<?php

namespace App\Providers;

use App\Category;
use App\Setting;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('front.inc.header', function ($view) {
            $view->with('cats', Category::all());
            $view->with('sett', Setting::select('logo', 'favicon')->first());
        });

        view()->composer('front.inc.footer', function ($view) {
            $view->with('sett', Setting::first());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
