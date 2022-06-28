<?php

namespace App\Providers;

use App\Models\Announcement;
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
    }
}
