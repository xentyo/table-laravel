<?php

namespace Xentyo\TableRenderizer;

/**
 *
 */
class Table
{
    protected $grid;
    protected $properties;
    public function __construct(array $properties = [])
    {
        $this->grid = new Grid;
    }

    public function columns()
    {
        $this->grid->columns();
    }

    public function headers()
    {
        $headers = [];
        foreach ($columns as $key => $column) {
            $headers[] = $column->name();
        }
        return $headers;
    }

    public function addColumn($name)
    {
        return $this->grid->addColumn(new Column((string) $name));
    }

    public function addRow(array $values)
    {
        return $this->grid->addRow(new Row($values));
    }
}
