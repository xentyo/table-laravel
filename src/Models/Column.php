<?php

namespace Xentyo\TableRenderizer;

/**
 *
 */
class Column extends TableList
{
    use Xentyo\KeyVal;

    public function __construct($property, $name = null)
    {
        $name = $name ?? ucwords(str_replace('_', ' ', $property));
        
        $this->keyval[$property] => $name;
        $this->key = $property;
        $this->val = $name;
    }

    public function property()
    {
        return $this->key;
    }

    public function name()
    {
        return $this->name;
    }
}
