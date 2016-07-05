<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\VerifyEmailService\VerifyBrokerManager;

class VerifyEmailProvider extends ServiceProvider
{
    
    protected $defer = true;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerVerifyEmailBroker();
    }

    public function registerVerifyEmailBroker()
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
