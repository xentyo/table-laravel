<?php

namespace Xentyo\TableRenderizer;

use Illuminate\Support\HtmlString;

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

    public function prop($key, $value){
      $this->addProperty(new Property($key, $value));
      return $this;
    }

    public function props(){
      return $this->getProps();
    }

    public function render()
    {
      return new HtmlString(view('views::table', ['table', $this]))->render();
    }
}
