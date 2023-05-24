<?php

namespace Seekahost\Pbn;
use Illuminate\Support\ServiceProvider;

class PbnServiceProvider extends ServiceProvider 
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'pbn');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    public function register()
    {
        
    }
}