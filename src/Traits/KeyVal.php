<?php

namespace Xentyo;

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
