<?php

namespace AnyImage\Pornsnag;

use Illuminate\Support\ServiceProvider;

class PornsnagServiceProvider extends ServiceProvider {
    /**
     * Register services.
     *
     * @return  void
     */
    public function register() {

        if ($this->app->runningInConsole()) {
        $this->publishes([
        __DIR__.'/../config/config.php' => config_path('pornsnag.php'),
        ], 'config');
        }

    }

    /**
     * Bootstrap services.
     *
     * @return  void
     */
    public function boot() {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'pornsnag');
    }
}
