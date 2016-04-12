<?php

namespace Stellar;

class Account
{
    /**
    * @var String $id
    **/
    protected $id;

    /**
    * @var Integer $paging_token
    **/
    protected $paging_token;

    /**
    * @var String
    **/
    protected $account_id;

    /**
    * @var String
    **/
    protected $sequence;

    /**
    * @var Array
    **/
    protected $balances;

    public function __construct(){

    }
}
