<?php

namespace Xentyo\TableRenderizer;

use Illuminate\Support\HtmlString;

class Table extends Grid implements Interfaces\HtmlRenderable
{
    use Traits\HtmlElement;
    protected $trProps = [];

    public function headers()
    {
        $headers = [];
        foreach ($this->columns() as $key => $column) {
            $headers[] = $column->name();
        }
        return $headers;
    }

    protected function addRow(Row $row, array $props = [])
    {
        return parent::addRow($row, $this->trProps);
    }

    public function trProps(array $props = [])
    {
        $this->trProps = $props;
        return count($props) > 0 ? $this : $this->trProps;
    }

    public function render()
    {
        $view = view('XTRviews::table', ['table' => $this]);
        $html_str = new HtmlString($view);
        return $html_str->toHtml();
    }
}
