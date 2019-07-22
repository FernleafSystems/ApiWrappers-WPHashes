<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Plugin;

use FernleafSystems\ApiWrappers\WpHashes;

class Retrieve extends WpHashes\Common\BaseRetrieve {

	/**
	 * @param $sSlug
	 * @return $this
	 */
	public function setSlug( $sSlug ) {
		return $this->setRequestDataItem( 'slug', $sSlug );
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
