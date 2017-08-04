<?php

namespace Xentyo\TableRenderizer;

/**
 *
 */
class Grid
{
    protected static $INDEX_ROW = 0;
    protected $grid = [];
    protected $rows = [];
    protected $columns = [];

    public function columns()
    {
        return $this->columns;
    }

    public function rows()
    {
        return $this->rows;
    }

    public function addColumn(Column $column)
    {
        $this->grid[$column->property()] = [];
        $this->columns[] = $column;
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
                if ($column == $key) {
                    $this->grid[$column][$row->index()] = $value;
                }
            }
        }
        return $this->rows[] = $row;
    }
}
