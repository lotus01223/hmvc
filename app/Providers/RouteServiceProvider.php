<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        // $this->mapWebRoutes();
        $this->mapAdminRoutes();
        $this->mapCandidateRoutes();
        //
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
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
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
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }


    /**
     * Define the "admin" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => 'App\Modules\Admin\Controllers',
            'domain' => env('DOMAIN_ADMIN'),
        ], function ($routes) {
            require base_path('app/Modules/Admin/routes.php');
        });
    }

    /**
     * Define the "candidate" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapCandidateRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => 'App\Modules\Candidate\Controllers',
            'domain' => env('DOMAIN_CANDIDATE'),
        ], function ($routes) {
            require base_path('app/Modules/Candidate/routes.php');
        });
    }

}
