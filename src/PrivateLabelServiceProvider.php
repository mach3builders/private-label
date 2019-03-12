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
            return self::getPrivateLabelModel()->getByDomain();
        });
    }

    public static function determinePrivateLabelModel(): string
    {
        $privateLabel = config('private-label.model') ?? PrivateLabel::class;

        if (! is_a($privateLabel, PrivateLabel::class, true)) {
            return 'Config model is not valid';
        }

        return $privateLabel;
    }

    public static function getPrivateLabelModel()
    {
        $privateLabelModelClassName = self::determinePrivateLabelModel();

        return new $privateLabelModelClassName();
    }
}
