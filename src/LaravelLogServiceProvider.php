<?php
/**
 * Created by PhpStorm.
 * User: bp
 * Date: 7/20/21
 * Time: 10:30 AM
 */

namespace Peter\LaravelLog;


use Illuminate\Support\ServiceProvider;

class LaravelLogServiceProvider extends ServiceProvider
{
    public function boot()
    {

        $this->publishes([
            __DIR__.'/view/laravellog.blade.php' => base_path('resources/views/log/laravel-log'),
        ]);
    }
    public function register()
    {
        // Register a class in the service container
        $this->app->bind('laravel_log', function ($app) {
            return new LaravelLog();
        });
    }
}