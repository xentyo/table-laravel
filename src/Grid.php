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

    protected function addColumn(Column $column)
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

    protected function removeColumn(Column $column)
    {
        unset($this->grid[$column]);
    }

    public function column($property, $name = null)
    {
        $column = new Column($property, $name);
        $this->addColumn($column);
        return $this;
    }

    public function columns(array $columns = [])
    {
        foreach ($columns as $property => $name) {
            $this->addColumn(new Column($property, $name));
        }
        return count($columns) > 0 ? $this : $this->columns;
    }

    protected function addRow(Row $row, array $props = [])
    {
        $row->setIndex(++self::$INDEX_ROW);
        $row->props($props);
        foreach ($this->grid as $column => $rows) {
            foreach ($row->values() as $key => $value) {
                if ($column == $key) {
                    $this->grid[$column][$row->index()] = $value;
                }
            }
        }
        return $this->rows[] = $row;
    }

    public function row(array $values, array $props = [])
    {
        $row = new Row($values);
        $this->addRow($row, $props);
        return $row;
    }

    public function rows(array $rows = [], array $props = [])
    {
        foreach ($rows as $values) {
            $this->addRow(new Row($values), $props);
        }
        return count($rows) > 0 ? $this : $this->rows;
    }
}
