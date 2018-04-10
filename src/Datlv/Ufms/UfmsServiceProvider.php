<?php namespace Datlv\Ufms;

use Illuminate\Support\ServiceProvider;

/**
 * The UfmsServiceProvider class
 *
 * @package Datlv\Ufms
 * @author  datlv <datle2011@gmail.com>
 */
class UfmsServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Code
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('ufms', function ($app) {
            return new Ufms;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'ufms',
        ];
    }
}
