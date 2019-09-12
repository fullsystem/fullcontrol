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
        $this->publishes([__DIR__ . '/../resources/img/public-image.jpg' => public_path('skeleton/img/public-image.jpg')], 'skeleton');
        $this->publishes([__DIR__ . '/../resources/compiled/css/skeleton.css' => public_path('skeleton/css/skeleton.css')], 'skeleton');
        $this->publishes([__DIR__ . '/../resources/compiled/js/skeleton.js' => public_path('skeleton/js/skeleton.js')], 'skeleton');

        // Automatically publish
        $this->publishAssets();
    }

    /**
     * Automatically publish assets.
     */
    public function publishAssets()
    {
        if (Config::get('skeleton.public.assets.automatically', true)) {
            Artisan::call('vendor:publish', ['--tag' => ['skeleton'], '--force' => true]);
        }
    }
}
