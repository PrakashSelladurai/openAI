<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for your application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')  // Optional: Set a common prefix for all API routes
           // ->middleware('api')  // Use the API middleware group
            ->namespace($this->namespace)  // Use the controllers from the default namespace
            ->group(base_path('routes/api.php'));  // Define where your API routes are located
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::
        //middleware('web')  // Use the Web middleware group
            namespace($this->namespace)  // Use the controllers from the default namespace
            ->group(base_path('routes/web.php'));  // Define where your web routes are located
    }
}
