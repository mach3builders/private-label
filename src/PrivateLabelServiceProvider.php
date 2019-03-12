<?php

namespace Mach3builders\PrivateLabel;

use Illuminate\Support\ServiceProvider;

class PrivateLabelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        $this->loadMigrationsFrom(__DIR__.'/../migrations');

        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('private-label.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/private-label.php', 'private-label');

        // Register the main class to use with the facade
        $this->app->singleton('private-label', function () {
            return new Repository;
        });
    }
}
