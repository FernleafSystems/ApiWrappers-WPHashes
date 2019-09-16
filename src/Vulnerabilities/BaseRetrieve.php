<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Vulnerabilities;

use FernleafSystems\ApiWrappers\WpHashes;

abstract class BaseRetrieve extends WpHashes\Api {

	const ENDPOINT_KEY = '';

	/**
	 * @var RequestVO
	 */
	private $oReq;

	public function __construct( $oConnection = null ) {
		parent::__construct( $oConnection );
		$this->setType( static::ENDPOINT_KEY );
	}

	/**
	 * @return WpVulnVO[]
	 */
	public function retrieve() {
		$aVulns = [];
		if ( $this->req()->isLastRequestSuccess() ) {
			$aData = $this->getDecodedResponseBody();
			if ( is_array( $aData[ 'vulnerabilities' ] ) ) {
				$aVulns = array_map(
					function ( $aVuln ) {
						return ( new WpVulnVO() )->applyFromArray( $aVuln );
					},
					array_filter( $aData[ 'vulnerabilities' ] )
				);
			}
		}
		return $aVulns;
	}

	/**
	 * @return RequestVO
	 */
	protected function getRequestVO() {
		if ( !isset( $this->oReq ) ) {
			$this->oReq = new RequestVO();
		}
		return $this->oReq;
	}

	/**
	 * @param string $sType
	 * @return $this
	 */
	public function setType( $sType ) {
		$this->getRequestVO()->type = $sType;
		return $this;
	}

	/**
	 * @param string $sVersion
	 * @return $this
	 */
	public function setVersion( $sVersion ) {
		$this->getRequestVO()->version = $sVersion;
		return $this;
	}

	/**
	 * @return string
	 */
	protected function getUrlEndpoint() {
		return sprintf( '%s/%s', 'vulnerabilities', $this->getRequestVO()->type );
	}
}
