<?php

namespace FernleafSystems\ApiWrappers\WpHashes;

class Api extends \FernleafSystems\ApiWrappers\Base\BaseApi {

	public const REQUEST_METHOD = 'get';

	public function getDefaultConnection() :Connection {
		return new Connection();
	}

	public function getVO() :Common\HashesVO {
		return new Common\HashesVO();
	}
}