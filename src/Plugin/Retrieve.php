<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Plugin;

class Retrieve extends \FernleafSystems\ApiWrappers\WpHashes\Common\BaseRetrieve {

	public const ENDPOINT_KEY = 'plugin';

	public function setSlug( string $slug ) :static {
		return $this->setRequestDataItem( 'slug', \strtolower( $slug ) );
	}

	protected function getCriticalRequestItems() :array {
		return \array_merge( parent::getCriticalRequestItems(), [ 'slug' ] );
	}
}