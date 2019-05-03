<?php

namespace bladeDirectives\bladeDirectives;

use Illuminate\Support\ServiceProvider;

// use Radioactive\Directives\Directives;

class DirectivesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        \Directives::load();
    }

    /**
     * Register laravel facade
     *
     * @return Radioactive\Directives\Directives
     */
    public function register()
    {
      $this->app->singleton('directives', function ($app) {
          return new Directives();
      });
    }
}
