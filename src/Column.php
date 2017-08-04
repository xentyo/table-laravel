<?php

namespace Xentyo\TableRenderizer;

/**
 *
 */
class Column extends TableList
{
    use Traits\KeyVal;

    public function __construct($property, $name = null)
    {
        $name = $name ?? ucwords(str_replace('_', ' ', $property));

        $this->keyval[$property] = $name;
        $this->key = $property;
        $this->val = $name;
    }

    public function property()
    {
        return $this->key;
    }

    public function name()
    {
        return $this->val;
    }

    public function toArray(){
      return [
        'property' => $this->property(),
        'name' => $this->name()
      ];
    }

    public static function create($mixed){
      if(is_string($mixed)){
        if(json_decode($mixed)){
          $mixed = json_decode($mixed);
          echo 'hola';
          return new Column($mixed['property'], $mixed['name']);
        }
      }
    }
}
