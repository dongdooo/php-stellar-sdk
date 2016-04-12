<?php

namespace Stellar\Horizon;

use GuzzleHttp\Client;

class Asset
{

  const ASSET_TYPE_NATIVE;
  const ASSET_TYPE_CREDIT_ALPHANUM4;
  const ASSET_TYPE_CREDIT_ALPHANUM12;

  public function __construct($code, $issuer = None)
  {
    if(strlen($code) > 12){
      throw new RuntimeException("Asset code must be 12 characters max", 1);
    }

    $this->code = $code;
    $this->issuer = $issuer;
  }
}
