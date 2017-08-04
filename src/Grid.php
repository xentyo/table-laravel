<?php

namespace Xentyo\TableRenderizer;

/**
 *
 */
class Grid
{
    public static $INDEX_ROW = 0;
    protected $grid = [];
    protected $rows = [];

    public function columns()
    {
        return array_keys($this->grid);
    }

    public function rows()
    {
        return $this->rows;
    }

    public function addColumn(Column $column)
    {
        $this->grid[$column] = [];
    }

    public function getColumn($key)
    {
        foreach ($this->columns() as $column) {
            if ($column->property() == $key) {
                return $column;
            }
        }
        return false;
    }

    public function removeColumn(Column $column)
    {
        unset($this->grid[$column]);
    }

    public function addRow(Row $row)
    {
        $row->setIndex(++self::$INDEX_ROW);
        foreach ($this->grid as $column => $rows) {
            foreach ($row->values() as $key => $value) {
                if ($column->property() == $key) {
                    $this->grid[$column][$row->index] = $value;
                }
            }
            if (isset($this->grid[$column])) {
                $this->grid[$column] = null;
            }
        }
        return $this->rows[] = $row;
    }
}
