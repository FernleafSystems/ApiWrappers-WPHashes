<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Plugin;

use FernleafSystems\ApiWrappers\WpHashes;

class Retrieve extends WpHashes\Common\BaseRetrieve {

	const TYPE = 'plugin';

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
		$aParent = parent::getCriticalRequestItems();
		$aParent[] = 'slug';
		return $aParent;
	}
}
