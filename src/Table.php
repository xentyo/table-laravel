<?php

namespace xentyo\table;

/**
 *
 */
class Table
{
    protected $grid;
    protected $properties;
    public function __construct(array $properties = [], Grid $grid = null)
    {
        if (is_null($grid)) {
            $this->grid = new Grid;
        }
        $this->columns($columns);
    }

    public function column($name)
    {
        $grid->addColumn(new Column((string) $name));
        return $this;
    }
}
