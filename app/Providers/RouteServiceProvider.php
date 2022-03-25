<?php

namespace App\Providers;

use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
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

        $this->mapRoutes();
    }

    /**
     * Define the "store front" routes for the application.
     *
     * This is for Storefront
     *
     * @return void
     */
    protected function mapRoutes()
    {
        // Prefix /shop is specific for Garmin project
        // If you're reusing this project, you can remove it or change to anything
        Route::group(['prefix' => '/', 'namespace' => $this->namespace, 'middleware' => ['web', 'localization']], base_path('routes/web.php'));

        Route::group(['prefix' => 'en', 'namespace' => $this->namespace, 'as' => 'en.', 'middleware' => ['web', 'localization']], base_path('routes/web.php'));
    }
}
