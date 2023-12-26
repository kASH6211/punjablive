<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $allowed_host = env('ALLOWED_DOMAINS');
       
        $explode = explode(',',$allowed_host);
       
        if (isset($_SERVER['HTTP_HOST'])) {
            $parseUrl = $_SERVER['HTTP_HOST'];
           
            if(!in_array($parseUrl,$explode)) {
                header($_SERVER['SERVER_PROTOCOL'].' 400 Bad Request');
                exit;
            }
        }  
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
    }
}
