<?php

namespace Xentyo\TableRenderizer\Exceptions;

/**
 *
 */
class ColumnAlreadyExistsException extends Exception
{
  public function __construct(){
    $this->message = 'Columns already exists';
  }
}



 ?>
