<?php

namespace xentyo\table\renderizer;

/**
 *
 */
class Property
{
    protected $key;
    protected $value;
    public function __construct($key, $value = '')
    {
        $this->key = $key;
        $this->value = $value;
    }

    public function __string(){
      return $this->key.'="'.$this->value.'"';
    }
}
