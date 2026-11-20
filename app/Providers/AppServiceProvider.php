<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Support\Facades\View::composer(['partials.header', 'layouts.app', 'partials.footer', 'home'], function ($view) {
            try {
                $navDestinations = \App\Models\Destination::active()->get(['id', 'name', 'slug', 'country_code', 'flag']);
            } catch (\Throwable $e) {
                $navDestinations = collect();
            }
            $view->with('navDestinations', $navDestinations);
        });
    }
}
