<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Plugin;

use FernleafSystems\ApiWrappers\WpHashes;

class Retrieve extends WpHashes\Common\BaseRetrieve {

	protected function preFlight() {
		$this->setType( 'plugin' );
	}

	/**
	 * @param $sSlug
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
