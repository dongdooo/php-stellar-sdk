<?php

namespace Stellar\Horizon;

class Transaction
{
  public function __construct($source, array $options = []){
    $this->source = $source;
  }
}
