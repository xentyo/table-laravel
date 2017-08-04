<?php

namespace Xentyo\TableRenderizer;

use Illuminate\Support\ServideProvider;

class TableServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
      $this->loadViewsFrom(__DIR__.'/../views', 'tableRender');

      $this->publishes([
        __DIR__.'/../../views' => base_path('resources/views/vendor/xentyo/table-renderizer'),
        'tableRender'
      ]);
    }

    public function register()
    {
    }
}
