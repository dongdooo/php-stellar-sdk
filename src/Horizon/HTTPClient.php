<?php

namespace Stellar\Horizon;

use GuzzleHttp\Client;

class HTTPClient
{
	/**
	*	@var GuzzleHttp\Client;
	**/
	protected $client;

	public function __construct($uri = "https://horizon-testnet.stellar.org/"){
		$this->client = new Client([
			"base_uri" 	=> $uri,
			"timeout" 	=> 2.0
		]);
	}

	public function getAccountDetails($account_id){
		return $this->client->get("/account/{$account_id}");
	}
}
