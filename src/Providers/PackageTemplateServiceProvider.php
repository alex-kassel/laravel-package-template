<?php

namespace AlexKassel\PackageTemplate\Providers;

use Illuminate\Support\ServiceProvider;

class PackageTemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        
        // Load and publish views
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'package-template');
        $this->publishes([
            __DIR__.'/../../resources/views' => resource_path('views/vendor/package-template'),
        ], 'views');

        // Load and publish translations
        $this->loadTranslationsFrom(__DIR__.'/../../lang', 'package-template');
        $this->publishes([
            __DIR__.'/../../lang' => lang_path('vendor/package-template'),
        ], 'lang');

        // Load and publish migrations
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->publishes([
            __DIR__.'/../../database/migrations' => database_path('migrations'),
        ], 'migrations');

        // Publish config
        $this->publishes([
            __DIR__.'/../../config/package-template.php' => config_path('package-template.php'),
        ], 'config');

        // Publish assets
        $this->publishes([
            __DIR__.'/../../resources/assets' => public_path('vendor/package-template'),
        ], 'assets');
    }

    /**
     * Register services.
     */
    public function register(): void
    {
        // Merge config
        $this->mergeConfigFrom(__DIR__.'/../../config/package-template.php', 'package-template');
    }
}