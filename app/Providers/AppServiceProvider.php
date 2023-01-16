<?php

namespace App\Providers;

use App\Models\Pasar;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
     */
    public function boot()
    {
        Gate::define('pasar', function (Pasar $users) {
            return $users->hasRole('pasar');
        });
        Gate::define('admin', function (Pasar $users) {
            return $users->hasRole('admin');
        });
    }
}
