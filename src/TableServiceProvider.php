<?php

namespace Xentyo\TableRenderizer;

use Illuminate\Support\ServideProvider;

class TableServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../views', 'views');
        $this->publishes([__DIR__.'/../../views' => resource_path('views/vendor/courier')]);
    }

    public function register()
    {
        $this->app->bind('Table', function () {
            return new Xentyo\TableRenderizer\Table;
        });
    }
}
