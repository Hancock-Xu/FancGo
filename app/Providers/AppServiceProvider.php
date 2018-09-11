<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('business_email',function ($attribute, $value){

            $businessEmailDomain = explode('@', $value)[1];

            $personalEmailDomain = [
                'qq.com',
                '163.com',
                'sina.com',
                'sina.cn',
                'gmail.com',
                'hotmail.com',
                'outlook.com',
                'yahoo.com',
                'vip.163.com',
                'vip.126.com',
                '126.com',
                '188.com',
                '136.com',
                'foxmail.com',
                'icloud.com',
                'matra.top',
                'wemel.top',
                'mailinator.com',
                'memsg.site',
                'ppetw.com'
            ];

            foreach ($personalEmailDomain as $emailDomain){
                if ($businessEmailDomain == $emailDomain){
                    return false;
                }
            }

            return true;

        });
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
