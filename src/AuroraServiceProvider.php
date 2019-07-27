<?php

namespace bluehexagon\aurora;
use Illuminate\Support\ServiceProvider;

class AuroraServiceProvider extends ServiceProvider {
    
    public function boot()
    {
        // load routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // load views
        $this->loadViewsFrom(__DIR__.'/resources/views', 'aurora');

        // migrations
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }


    public function register()
    {
        # code...
    }
}