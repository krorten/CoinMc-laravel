<?php

namespace Kroten\CoinMc;

use Illuminate\Support\ServiceProvider;
use Kroten\CoinMc\CoinMcContainer;

class CoinMcServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('CoinMc', function () {
            return new CoinMcContainer();
        });
    }
}
