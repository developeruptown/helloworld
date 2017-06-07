<?php

namespace UptownDev\HelloWorld;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/Http/routes/web/routes.php';

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('UptownDev\HelloWorld\Http\Controllers\HelloWorldController');
        $this->loadViewsFrom(__DIR__.'/Http/resources/views', 'helloworld');
    }
}