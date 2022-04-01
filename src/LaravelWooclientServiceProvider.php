<?php

namespace Manuglopez\LaravelWooclient;

use Automattic\WooCommerce\Client;
use Illuminate\Support\ServiceProvider;

class LaravelWooclientServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-wooclient.php', 'laravel-wooclient');

        $this->publishConfig();
    }

    /**
     * Publish Config
     *
     * @return void
     */
    public function publishConfig(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/laravel-wooclient.php' => config_path('laravel-wooclient.php'),
            ], 'config');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {


        // Register facade
        $this->app->singleton('laravel-wooclient', function ($app) {
            $woocommerce_url = $app['config']->get('laravel-wooclient.woocommerce_url');
            $ck = $app['config']->get('laravel-wooclient.ck');
            $cs = $app['config']->get('laravel-wooclient.cs');
            $options = $app['config']->get('laravel-wooclient.options');
            $wooClient = new Client($woocommerce_url, $ck, $cs, $options);

            return new LaravelWooclient($wooClient);
        });
    }
}