<?php

namespace Prajwal\Metronics;

use Illuminate\Support\ServiceProvider;

class MetronicsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ .'/routes/web.php');
        $this->loadViewsFrom(__DIR__ .'/resources/views', 'metronics');
        $this->loadMigrationsFrom(__DIR__ .'/database/migrations');

        $this->publishes([
            __DIR__.'/public/assets' => public_path('vendor/metronics'),
        ], 'public');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/metronics'),
        ], 'views');

        $this->publishes([
            __DIR__.'/database/migrations' => database_path('migrations/metronics'),
        ], 'migrations');

        $this->publishes([
            __DIR__.'/Entities' => app_path('Entities'),
        ], 'migrations');

    }

    public function register()
    {
    }
}
