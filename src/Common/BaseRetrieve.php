<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Common;

use FernleafSystems\ApiWrappers\WpHashes;

class BaseRetrieve extends WpHashes\Api {

	public const ENDPOINT_KEY = '';

	public function __construct( $connection = null ) {
		parent::__construct( $connection );
		$this->setType( static::ENDPOINT_KEY );
	}

	public function setType( string $type ) :self {
		return $this->setRequestDataItem( 'type', strtolower( $type ) );
	}

	public function setHashAlgo( string $hash ) :self {
		return $this->setRequestDataItem( 'hash', strtolower( $hash ) );
	}

	public function setVersion( string $version ) :self {
		return $this->setRequestDataItem( 'version', strtolower( $version ) );
	}

	protected function getCriticalRequestItems() :array {
		return [ 'type', 'version', 'hash' ];
	}

	protected function getUrlEndpoint() :string {
		return static::ENDPOINT_KEY;
	}
}
