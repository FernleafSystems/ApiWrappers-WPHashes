<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Vulnerabilities;

class WordPress extends BaseRetrieve {

	const ENDPOINT_KEY = 'wordpress';

	/**
	 * @return string
	 */
	protected function getUrlEndpoint() {
		return sprintf( '%s/%s', parent::getUrlEndpoint(), $this->getRequestVO()->version );
	}
}