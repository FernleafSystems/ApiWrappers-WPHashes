<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Plugin;

use FernleafSystems\ApiWrappers\WpHashes;

class Retrieve extends WpHashes\Common\BaseRetrieve {

	const ENDPOINT_KEY = 'plugin';

	/**
	 * @param string $sSlug
	 * @return $this
	 */
	public function setSlug( $sSlug ) {
		return $this->setRequestDataItem( 'slug', strtolower( $sSlug ) );
	}

	/**
	 * @return string[]
	 */
	protected function getCriticalRequestItems() {
		$aItems = parent::getCriticalRequestItems();
		$aItems[] = 'slug';
		return $aItems;
	}
}
