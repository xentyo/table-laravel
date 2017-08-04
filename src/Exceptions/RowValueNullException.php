<?php

namespace Xentyo\TableRenderizer\Exceptions;

/**
 *
 */
class RowValueNullException extends Exception
{
  public function __construct($column){
    $this->message = 'Row value at column['.$column.'] is null.';
  }
}



 ?>
