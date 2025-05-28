<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Vulnerabilities;

use FernleafSystems\ApiWrappers\WpHashes\{
	Api,
	Connection
};

abstract class BaseRetrieve extends Api {

	public const ENDPOINT_KEY = '';

	private ?RequestVO $request;

	public function __construct( ?Connection $connection = null ) {
		parent::__construct( $connection );
		$this->setType( static::ENDPOINT_KEY );
	}

	/**
	 * @return WpVulnVO[]
	 */
	public function retrieve() :array {
		$req = $this->req();
		return \array_map(
			fn( array $vul ) => ( new WpVulnVO() )->applyFromArray( $vul ),
			$req->isLastRequestSuccess() ? ( $this->getDecodedResponseBody()[ 'data' ][ 'vulnerabilities' ] ?? [] ) : []
		);
	}

	protected function getRequestVO() :RequestVO {
		return $this->request ??= new RequestVO();
	}

	public function setType( string $type ) :static {
		$this->getRequestVO()->type = $type;
		return $this;
	}

	public function setVersion( string $version ) :static {
		$this->getRequestVO()->version = $version;
		return $this;
	}

	protected function getUrlEndpoint() :string {
		return sprintf( '%s/%s', 'vulnerabilities', $this->getRequestVO()->type );
	}
}