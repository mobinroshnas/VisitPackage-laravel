<?php

namespace Mobin\VisitPackage;

use Illuminate\Support\ServiceProvider;

class VisitServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Visit::make();
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }
}
