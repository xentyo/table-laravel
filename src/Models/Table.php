<?php

namespace Xentyo\TableRenderizer;

/**
 *
 */
class Table implements HtmlRenderable
{
    use HtmlElement;

    protected $grid;
    public function __construct(array $properties = [])
    {
        $this->grid = new Grid;
    }

    public function columns()
    {
        $this->grid->columns();
    }

    public function rows()
    {
        $this->grid->rows();
    }

    public function headers()
    {
        $headers = [];
        foreach ($columns as $key => $column) {
            $headers[] = $column->name();
        }
        return $headers;
    }

    public function render($id = null)
    {
    }
}
