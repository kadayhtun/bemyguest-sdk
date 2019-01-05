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
        $this->publishes(
            [
            $this->configPath() => config_path('bemyguest.php'),
            ],
            'config'
        );

        if (! file_exists(config_path('bemyguest.php'))) {
            copy($this->configPath(), config_path('bemyguest.php'));
        }
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'bemyguest');

        $this->app->singleton(
            'bemyguest',
            function ($app) {
                $config = $app['config']['bemyguest'];
                $env = $app->environment('production')
                ? Environments::LIVE_PRODUCTION_
                : Environments::DEMO;

                if ($config['user_agent']) {
                    Configuration::$userAgent = $config['user_agent'];
                }

                return new BeMyGuest($config['key'], $env);
            }
        );
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

    protected function configPath()
    {
        return  __DIR__ . '/../config/bemyguest.php';
    }
}
