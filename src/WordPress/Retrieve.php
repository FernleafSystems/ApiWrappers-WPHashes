<?php

namespace FernleafSystems\ApiWrappers\WpHashes\WordPress;

use FernleafSystems\ApiWrappers\WpHashes;

class Retrieve extends WpHashes\Common\BaseRetrieve {

	public const ENDPOINT_KEY = 'wordpress';

	public function setLocale( string $locale ) :self {
		return $this->setRequestDataItem( 'locale', strtolower( $locale ) );
	}

	protected function getCriticalRequestItems() :array {
		return array_merge( parent::getCriticalRequestItems(), [ 'locale' ] );
	}
}
