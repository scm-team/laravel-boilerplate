<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DaoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Dao Registration
        $this->app->bind("App\Interfaces\Dao\Auth\LoginDaoInterface", "App\Dao\Auth\LoginDao");
        $this->app->bind("App\Interfaces\Dao\Auth\RegisterDaoInterface", "App\Dao\Auth\RegisterDao");

        // Business logic registration
        $this->app->bind("App\Interfaces\Services\Auth\LoginServiceInterface", "App\Services\Auth\LoginService"); 
        $this->app->bind("App\Interfaces\Services\Auth\RegisterServiceInterface", "App\Services\Auth\RegisterService"); 
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
