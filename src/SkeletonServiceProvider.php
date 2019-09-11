<?php

namespace Skeleton;

use Artisan;
use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    /**
     * Service Boot.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'skeleton');

        // Public assets
        $this->publishes([__DIR__ . '/../resources/compiled/css/public.css' => public_path('skeleton/css/public.css')], 'skeleton');
        $this->publishes([__DIR__ . '/../resources/compiled/js/public.js' => public_path('skeleton/js/public.js')], 'skeleton');

        // App assets
        $this->publishes([__DIR__ . '/../resources/compiled/css/app.css' => public_path('skeleton/css/app.css')], 'skeleton');
        $this->publishes([__DIR__ . '/../resources/compiled/js/app.js' => public_path('skeleton/js/app.js')], 'skeleton');
    }
}
