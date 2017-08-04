<?php

namespace Xentyo\TableRenderizer;

use Illuminate\Support\HtmlString;

class Table extends Grid implements Interfaces\HtmlRenderable
{
    use Traits\HtmlElement;

    public function column($property, $name = '')
    {
        $column = new Column($property, $name);
        $this->addColumn($column);
        return $this;
    }

    public function row(array $values)
    {
        $row = new Row($values);
        $this->addRow($row);
        return $row;
    }

    public function headers()
    {
        $headers = [];
        foreach ($this->columns() as $key => $column) {
            $headers[] = $column->name();
        }
        return $headers;
    }

    public function prop($key, $value)
    {
        $this->addProperty(new Property($key, $value));
        return $this;
    }

    public function props(array $props = [])
    {
        foreach ($props as $key => $value) {
            $this->prop($key, $value);
        }
        return count($props) > 0 ? $this : $this->getProps();
    }

    public function render()
    {
        $view = view('XTRviews::table', ['table' => $this]);
        $html_str = new HtmlString($view);
        // echo $html_str->toHtml();
        return $html_str->toHtml();
    }
}
