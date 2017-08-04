<?php

namespace Xentyo\TableRenderizer;

class Table extends Grid implements HtmlRenderable
{
    use HtmlElement;

    public function column($property, $name = '')
    {
        $column = new Column($property, $name);
        $this->addColumn($column);
        return $this;
    }

    public function row(array $values)
    {
        $row = new Row($values);
        return $row;
    }

    public function headers()
    {
        $headers = [];
        foreach ($this->columns as $key => $column) {
            $headers[] = $column->property();
        }
        return $headers;
    }

    public function render($id = null)
    {
    }
}
