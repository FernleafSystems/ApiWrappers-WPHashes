<?php

namespace FernleafSystems\ApiWrappers\WpHashes;

use FernleafSystems\ApiWrappers\Base\BaseApi;
use FernleafSystems\ApiWrappers\WpHashes\Common\HashesVO;

class Api extends BaseApi {

	const REQUEST_METHOD = 'get';

	/**
	 * @return Connection
	 */
	public function getDefaultConnection() {
		return new Connection();
	}

	/**
	 * @return HashesVO
	 */
	public function getVO() {
		return new HashesVO();
	}
}