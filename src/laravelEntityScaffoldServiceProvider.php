<?php

namespace MohammadNaj\laravelEntityScaffold;

use Illuminate\Support\ServiceProvider;
use MohammadNaj\laravelEntityScaffold\Console\EntityScaffold;

class laravelEntityScaffoldServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
//        $this->mergeConfigFrom(__DIR__.'/../config/laravel-entity-scaffold.php','laravel-entity-scaffold');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/entity-scaffold.php' => config_path('entity-scaffold.php')
            ],'entity-scaffold');
            $this->commands([
                EntityScaffold::class
            ]);

        }

    }
}
