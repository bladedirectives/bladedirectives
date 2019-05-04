<?php

namespace BladeDirectives\BladeDirectives;

use Illuminate\Support\ServiceProvider;

// use Radioactive\Directives\Directives;

class BladeDirectivesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        \BladeDirectives::load();
    }

    /**
     * Register laravel facade
     *
     * @return Radioactive\Directives\Directives
     */
    public function register()
    {
      $this->app->singleton('BladeDirectives', function ($app) {
          return new BladeDirectives();
      });
    }
}
