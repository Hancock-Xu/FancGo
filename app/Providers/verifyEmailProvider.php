<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use verifyEmailService\verifyBrokerManager;

class verifyEmailProvider extends ServiceProvider
{
    
    protected $defer = true;
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('verifyEmail', function ($app){
            return new verifyBrokerManager($app);
        });
        
        $this->app->bind('verifyEmail.broker', function ($app) {
            return $app->make('verifyEmail')->broker();
        });
    }
    
    public function provides()
    {
        return ['verifyEmail', 'verifyEmail.broker'];
    }
}
