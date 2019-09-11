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

        $this->publishes([__DIR__ . '/../resources/compiled/css/skeleton.css' => public_path('skeleton/css/app.css')], 'skeleton');
        $this->publishes([__DIR__ . '/../resources/compiled/js/skeleton.js' => public_path('skeleton/js/app.js')], 'skeleton');
    }

    protected function publishAssets()
    {
        Artisan::call('vendor:publish', ['--tag' => 'skeleton', '--force' => true]);
    }
}
