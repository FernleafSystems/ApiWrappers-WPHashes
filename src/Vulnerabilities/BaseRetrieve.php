<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Vulnerabilities;

use FernleafSystems\ApiWrappers\WpHashes;

abstract class BaseRetrieve extends WpHashes\Api {

	public const ENDPOINT_KEY = '';

	private ?RequestVO $request;

	public function __construct( $connection = null ) {
		parent::__construct( $connection );
		$this->setType( static::ENDPOINT_KEY );
	}

	/**
	 * @return WpVulnVO[]
	 */
	public function retrieve() :array {
		$vulnerabilities = [];
		if ( $this->req()->isLastRequestSuccess() ) {
			$data = $this->getDecodedResponseBody();
			if ( isset( $data[ 'vulnerabilities' ] ) && is_array( $data[ 'vulnerabilities' ] ) ) {
				$vulnerabilities = array_map(
					function ( array $vul ) {
						return ( new WpVulnVO() )->applyFromArray( $vul );
					},
					array_filter( $data[ 'vulnerabilities' ] )
				);
			}
		}
		return $vulnerabilities;
	}

	protected function getRequestVO() :RequestVO {
		if ( !isset( $this->request ) ) {
			$this->request = new RequestVO();
		}
		return $this->request;
	}

	public function setType( string $type ) :self {
		$this->getRequestVO()->type = $type;
		return $this;
	}

	public function setVersion( string $version ) :self {
		$this->getRequestVO()->version = $version;
		return $this;
	}

	protected function getUrlEndpoint() :string {
		return sprintf( '%s/%s', 'vulnerabilities', $this->getRequestVO()->type );
	}
}
