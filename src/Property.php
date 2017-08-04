<?php

namespace Xentyo\TableRenderizer;

/**
 *
 */
class Property
{
    use Traits\KeyVal;
    public function __construct($key, $val = '')
    {
        $this->keyval[$key] = $val;
        $this->key =$key;
        $this->val = $val;
    }

    public function html()
    {
        return $this->key.'="'.$this->val.'"';
    }

    public function toArray()
    {
        return $this->keyval;
    }
}
