<?php

namespace xentyo\table\renderizer\Exceptions;

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
