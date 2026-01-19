<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     */
    //public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and routes.
     */
    public function boot(): void
    {
        $this->routes(function () {
            //WEB Routing
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
            Route::middleware('web')
                ->group(base_path('routes/touhid.php'));
            Route::middleware('web')
                ->group(base_path('routes/shams.php'));


            //API Routing
            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));
        });
    }
}
