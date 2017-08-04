<?php

namespace Xentyo\TableRenderizer;

use Illuminate\Support\ServideProvider;

class TableServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../views', 'tableRender');
    }

    public function register()
    {
    }
}
