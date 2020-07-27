<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Gate;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**,
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->registerPolicies();

    Gate::define('create-user', function ($user) {
        return $user->isAdmin();
    });
    Gate::define('edit-user', function ($user) {
        return $user->isAdmin();
    });
    Gate::define('destroy-user', function ($user) {
        return $user->isAdmin();
    });
    Gate::define('view-user', function ($user) {
        return $user->isAdmin();
    });
    }
}


