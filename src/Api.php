<?php

namespace FernleafSystems\ApiWrappers\WpHashes;

use FernleafSystems\ApiWrappers\Base\BaseApi;

class Api extends BaseApi {

	const REQUEST_METHOD = 'get';

	public function getDefaultConnection() :Connection {
		return new Connection();
	}

	public function getVO() :Common\HashesVO {
		return new Common\HashesVO();
	}
}