<?php

namespace Sosamson\HelloWorld;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make(HelloWorldController::class);

	include(__DIR__ . '/routes.php');

	$this->loadViewsFrom(__DIR__ . 'views', 'HelloWorld');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
