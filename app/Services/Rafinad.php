<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Rafinad {

	private $uri = 'https://rafinad.io/api/';
	private $token;

	public function __construct()
	{
		$this->token = env('RAFINAD_KEY', null);
	}

	public function getMyPrivateOffers($page = 0)
	{
		$response = Http::timeout(10)withHeaders([
    		'Authorization' => 'Token ' . $this->token,
		])->get($this->uri . 'v1/me/offers/webmaster');

		if($response->ok() && $response->status() == 200) {
			return $response->json();
		}

		return false;
	}
}