<?php

namespace App\Providers;

use App\Services\ChatGPTService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
         // Bind the service class to the container
         $this->app->singleton(ChatGPTService::class, function ($app) {
            return new ChatGPTService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
