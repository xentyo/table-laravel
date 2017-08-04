<?php

namespace Xentyo\TableRenderizer;

use Illuminate\Support\ServideProvider;

class TableServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../views', 'tableView');

    }

    public function register()
    {
      $this->app->bind('table', function(){
        return new Xentyo\TableRenderizer\Table;
      });
    }
}
