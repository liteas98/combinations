<?php

namespace Liteas98\Combinations;

use Illuminate\Support\ServiceProvider;

class CombinationsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('combinations.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'combinations');

        // Register the main class to use with the facade
        $this->app->singleton('combinations', function () {
            return new Combinations;
        });
    }
}
