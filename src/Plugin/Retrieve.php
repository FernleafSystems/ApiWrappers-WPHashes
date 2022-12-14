<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Plugin;

use FernleafSystems\ApiWrappers\WpHashes;

class Retrieve extends WpHashes\Common\BaseRetrieve {

	public const ENDPOINT_KEY = 'plugin';

	public function setSlug( string $slug ) :self {
		return $this->setRequestDataItem( 'slug', strtolower( $slug ) );
	}

	protected function getCriticalRequestItems() :array {
		return array_merge( parent::getCriticalRequestItems(), [ 'slug' ] );
	}
}
