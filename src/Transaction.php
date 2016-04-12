<?php

namespace Stellar;

class Transaction
{
  public function __construct($source, array $options = []){
    $this->source = $source;
  }
}
