<?php

namespace Xentyo\TableRenderizer\Traits;

trait KeyVal{
  protected $keyval = [];
  protected $key;
  protected $val;

  public function keyval()
  {
    return $this->$keyval;
  }
}

 ?>
