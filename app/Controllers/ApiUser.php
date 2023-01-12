<?php

namespace App\Controllers;

use \App\LibrariesOauth;
use \OAuth2\Request;
use Codeigniter\API\ResponseTrait;

class ApiUser extends BaseController
{
    use ResponseTrait;

	public function login()
	{
		$oauth = new Oauth();
        $request = new Request();
        $respond = $oauth->server->handleTokenRequest($request->createFromGlobals());
        $code = $respond->getStatusCode();
        $body = $respond->getResponseBody();
        return $this->respond(json_decode($body), $code);
	}
}