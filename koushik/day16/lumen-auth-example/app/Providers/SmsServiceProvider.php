<?php
namespace App\Providers;
use App\Services\SmsService;
use Illuminate\Support\ServiceProvider;
class SmsServiceProvider extends ServiceProvider
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
        $this->app->singleton('SmsService', function($app){
            return new SmsService;
        });
    }
}