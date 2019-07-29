<?php

namespace FernleafSystems\ApiWrappers\WpHashes\WordPress;

use FernleafSystems\ApiWrappers\WpHashes;

class Retrieve extends WpHashes\Common\BaseRetrieve {

	const ENDPOINT_KEY = 'wordpress';

	/**
	 * @param string $sLocale
	 * @return $this
	 */
	public function setLocale( $sLocale ) {
		return $this->setRequestDataItem( 'locale', strtolower( $sLocale ) );
	}

	/**
	 * @return string[]
	 */
	protected function getCriticalRequestItems() {
		$aItems = parent::getCriticalRequestItems();
		$aItems[] = 'locale';
		return $aItems;
	}
}
