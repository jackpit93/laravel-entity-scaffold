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
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            EntityScaffold::class
        ]);
    }
}
