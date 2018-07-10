<?php

namespace BmgApiV2Lib;

use Illuminate\Support\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/bemyguest.php' => config_path('bemyguest.php'),
        ]);
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'bemyguest');

        $this->app->singleton('bemyguest', function ($app) {
            $env = $app->environment('local')
                ? Environments::DEMO
                : Environments::LIVE_PRODUCTION_;

            return new BeMyGuest($app['config']['bemyguest']['key'], $env);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['bemyguest'];
    }
}
