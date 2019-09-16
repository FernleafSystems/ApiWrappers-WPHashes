<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Vulnerabilities;

abstract class BasePluginTheme extends BaseRetrieve {

	/**
	 * @param string $sSlug
	 * @return $this
	 */
	public function setSlug( $sSlug ) {
		$this->getRequestVO()->slug = $sSlug;
		return $this;
	}

	/**
	 * @return string
	 */
	protected function getUrlEndpoint() {
		$oReq = $this->getRequestVO();
		return sprintf( '%s/%s/%s', parent::getUrlEndpoint(), $oReq->slug, $oReq->version );
	}
}