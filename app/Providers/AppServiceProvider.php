<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     *
     * POUR REGLER L'ERREUR DE NOMBRE DE STRING
     * https://github.com/laravel/framework/issues/17508
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }
}
