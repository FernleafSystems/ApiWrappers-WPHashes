<?php

namespace FernleafSystems\ApiWrappers\WpHashes;

/**
 * Class Connection
 * @package FernleafSystems\ApiWrappers\StatusCake
 */
class Connection extends \FernleafSystems\ApiWrappers\Base\Connection {

	const API_URL = 'https://wphashes.com/api';

	/**
	 * @return string
	 */
	public function getBaseUrl() {
		return static::API_URL;
	}
}
