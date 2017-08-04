<?php

namespace Xentyo\TableRenderizer;

use Illuminate\Support\ServiceProvider;

class TableServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'XTRviews');
        $this->publishes([
          __DIR__.'/../config/xentyo/laravel-table-renderizer.php' => config_path('xentyo/laravel-table-renderizer.php')
        ], 'config');
        $this->publishes([
          __DIR__.'/../views' => resource_path('views/vendor/xentyo/laravel-table-renderizer')
        ], 'XTRviews');
    }

    public function register()
    {
        $this->app->bind('Table', function () {
            return new Xentyo\TableRenderizer\Table;
        });
    }
}
