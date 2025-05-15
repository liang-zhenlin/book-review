<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiter;
use Illuminate\Http\Request;
use Illuminate\Queue\Middleware\RateLimited;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }


}
