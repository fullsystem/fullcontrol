<?php

namespace Skeleton;

use Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    /**
     * Service Boot.
     */
    public function boot()
    {
        // Config
        $this->mergeConfigFrom(__DIR__ . '/../config/skeleton.php', 'skeleton');

        // Views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'skeleton');

        // Assets
        $this->publishes([__DIR__ . '/../resources/img' => public_path('skeleton/img')], 'skeleton');
        $this->publishes([__DIR__ . '/../resources/compiled/fonts' => public_path('skeleton/fonts')], 'skeleton');
        $this->publishes([__DIR__ . '/../resources/compiled/css' => public_path('skeleton/css')], 'skeleton');
        $this->publishes([__DIR__ . '/../resources/compiled/js' => public_path('skeleton/js')], 'skeleton');
    }
}
