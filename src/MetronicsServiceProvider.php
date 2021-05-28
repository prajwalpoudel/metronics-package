<?php

namespace Prajwal\Metronics;

use Illuminate\Support\ServiceProvider;

class MetronicsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ .'/routes/web.php');
        $this->loadViewsFrom(__DIR__ .'/resources/views', 'metronics');

        $this->publishes([
            __DIR__.'/public/assets' => public_path('vendor/metronics'),
        ], 'public');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/metronics'),
        ]);

    }

    public function register()
    {
    }
}
