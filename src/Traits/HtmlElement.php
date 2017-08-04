<?php

namespace Xentyo\TableRenderizer\Traits;

trait HtmlElement
{
    protected $properties = [];

    public function hasProperty($key)
    {
        foreach ($this->properties as $i => $prop) {
            if ($prop->key == $key) {
                return true;
            }
        }
        return false;
    }

    public function addProperty(Property $prop)
    {
        array_push($this->properties, $prop);
    }

    public function getProperties(){
      return $this->properties;
    }

    public function removeProperty($key)
    {
        foreach ($this->properties as $i => $prop) {
            if($prop->key == $key) {
              unset($this->properties[$i])
            }
        }
    }

    public function getProps()
    {
        $prop = '';
        foreach ($this->properties as $key => $prop) {
          $prop .= ' '.$prop->html();
        }
        return $prop;
    }
}
