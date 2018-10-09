<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 06.10.2018
 * Time: 21:34
 */

namespace TendoPay\Integration\DragonPay;

use Illuminate\Support\ServiceProvider;

class DragonPayServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(DragonPayService::class, function ($app) {
            return new DragonPayService();
        });

        $this->loadMigrationsFrom(__DIR__ . '/../../migrations');
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {

    }
}
