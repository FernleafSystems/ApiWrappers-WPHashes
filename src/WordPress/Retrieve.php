<?php

namespace FernleafSystems\ApiWrappers\WpHashes\WordPress;

use FernleafSystems\ApiWrappers\WpHashes;

class Retrieve extends WpHashes\Common\BaseRetrieve {

	/**
	 * @param $sLocale
	 * @return $this
	 */
	public function setLocale( $sLocale ) {
		return $this->setRequestDataItem( 'locale', $sLocale );
	}

	/**
	 * @return string[]
	 */
	protected function getCriticalRequestItems() {
		$aParent = parent::getCriticalRequestItems();
		$aParent[] = 'locale';
		return $aParent;
	}
}
