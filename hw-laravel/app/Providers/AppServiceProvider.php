<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //arregla un error con el tamaño de los strings (email, ...)
        Schema::defaultStringLength(191);

        //compartiendo datos para todas las vistas (especie de ServletContext para jsp)
         View::share('myGlobalData', 'mis datos globales');
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
