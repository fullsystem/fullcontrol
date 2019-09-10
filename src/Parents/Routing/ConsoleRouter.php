<?php

namespace Skeleton\Parents\Routing;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Console\Application as Artisan;

abstract class ConsoleRouter
{
    /**
     * @param Schedule $schedule
     */
    public function schedule(Schedule $schedule)
    {
    }

    /**
     * @param Artisan $artisan
     * @return void
     */
    abstract public function map(Artisan $artisan);
}
