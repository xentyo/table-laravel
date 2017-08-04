<?php

namespace xentyo\table;

/**
 *
 */
class Column extends TableList
{
  protected $name;

  function __construct($name = '', $values = [])
  {
    parent::__construct($values);
    $this->name = $name;
  }

  public function name(){
    return $this->name;
  }
}


 ?>
