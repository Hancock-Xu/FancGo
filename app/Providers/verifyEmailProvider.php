<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use VerifyEmailService\VerifyBrokerManager;

class VerifyEmailProvider extends ServiceProvider
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
            return new VerifyBrokerManager($app);
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
