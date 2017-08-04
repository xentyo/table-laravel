<?php

namespace Xentyo\TableRenderizer;

/**
 *
 */
class Row extends TableList
{
    protected $index;

    public function __construct($values = [], $index = -1)
    {
        parent::__construct($values);
        $this->index = $index;
    }

    public function index()
    {
        return $this->index;
    }

    public function setIndex($index)
    {
        $this->index = $index;
    }

    public function addValue($value, Column $column = null)
    {
        if (is_null($column)) {
            return $this->values[] = $value;
        }
        return $this->values[$column->name()] = $value;
    }

    public function getValue($key)
    {
        return $this->values[$key];
    }
}
