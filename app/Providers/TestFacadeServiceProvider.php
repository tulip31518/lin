<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TestFacadeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('test',function() {
            return new \App\Test\TestFacades;
         });
    }
}
