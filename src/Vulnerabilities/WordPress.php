<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Vulnerabilities;

class WordPress extends BaseRetrieve {

	public const ENDPOINT_KEY = 'wordpress';

	protected function getUrlEndpoint() :string {
		return sprintf( '%s/%s', parent::getUrlEndpoint(), $this->getRequestVO()->version );
	}
}