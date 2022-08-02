<?php

namespace App\Providers;

use App\Models\Announcement;
use Illuminate\Support\Facades\Http;
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
        view()->composer('layouts.app-layout', function ($view) {
            $announcement = Announcement::first();

            $view->with([
                'bannerText' => $announcement->bannerText,
                'bannerColor' => $announcement->bannerColor,
                'isActive' => $announcement->isActive,
            ]);
        });

        Http::macro('movies', function () {
            return Http::withHeaders([
                'X-Example' => 'example',
            ])->withToken(config('services.tmdb.bearerToken'))
            ->baseUrl('https://api.themoviedb.org/3');
        });
    }
}
