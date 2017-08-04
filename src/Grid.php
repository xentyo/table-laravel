<?php

namespace xentyo\table;

/**
 *
 */
class Grid
{
    public static $INDEX_ROW = 0;
    protected $repeatableColumns = true;
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

    public function removeColumn(Column $column)
    {
        unset($this->grid[$column]);
    }

    public function addRow(Row $row)
    {
        $row = new Row($row->values(), ++self::$INDEX_ROW);
        foreach ($this->grid as $column => $rows) {
            foreach ($row->values() as $key => $value) {
                if ($column->name() == $key) {
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
