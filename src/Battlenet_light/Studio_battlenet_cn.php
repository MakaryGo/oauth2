<?php
/**
 *
 * phpBB Studio - Battle.net OAuth2 light. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, phpBB Studio, https://www.phpbbstudio.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace OAuth\OAuth2\Service;

use OAuth\Common\Consumer\Credentials;
use OAuth\Common\Http\Client\ClientInterface;
use OAuth\Common\Http\Uri\Uri;
use OAuth\Common\Http\Uri\UriInterface;
use OAuth\Common\Storage\TokenStorageInterface;

class Studio_battlenet_cn extends Studio_battlenet_base
{
	public function __construct(
		Credentials $credentials,
		ClientInterface $http_client,
		TokenStorageInterface $storage,
		$scopes = [],
		UriInterface $base_api_uri = null
	)
	{
		parent::__construct($credentials, $http_client, $storage, $scopes, $base_api_uri);

		$this->baseApiUri = new Uri('https://www.battlenet.com.cn/');
	}

	/**
	 * @return \OAuth\Common\Http\Uri\UriInterface
	 */
	public function getAuthorizationEndpoint()
	{
		return new Uri('https://www.battlenet.com.cn/oauth/authorize');
	}

	/**
	 * @return \OAuth\Common\Http\Uri\UriInterface
	 */
	public function getAccessTokenEndpoint()
	{
		return new Uri('https://www.battlenet.com.cn/oauth/token');
	}
}
