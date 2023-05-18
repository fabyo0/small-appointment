<?php

namespace App\Providers;

use App\Models\Settings;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;


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
        // default paginate
        Paginator::useBootstrap();

        $settings = Settings::first();

        view()->share([
            'settings' => $settings
        ]);
    }
}
