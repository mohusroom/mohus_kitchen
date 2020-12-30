<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AssetRenderPerRouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('assets', 'App\Services\RouteSupport\AssetRenderPerRouteService');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        require base_path('routes/assets.php');
    }
}
