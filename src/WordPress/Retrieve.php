<?php

namespace FernleafSystems\ApiWrappers\WpHashes\WordPress;

class Retrieve extends \FernleafSystems\ApiWrappers\WpHashes\Common\BaseRetrieve {

	public const ENDPOINT_KEY = 'wordpress';

	public function setLocale( string $locale ) :static {
		return $this->setRequestDataItem( 'locale', strtolower( $locale ) );
	}

	protected function getCriticalRequestItems() :array {
		return array_merge( parent::getCriticalRequestItems(), [ 'locale' ] );
	}
}
