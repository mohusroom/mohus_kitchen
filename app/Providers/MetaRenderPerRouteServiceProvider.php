<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MetaRenderPerRouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('metas', 'App\Services\RouteSupport\MetaRenderPerRouteService');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        require base_path('routes/metas.php');
    }
}
