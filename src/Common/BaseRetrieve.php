<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Common;

use FernleafSystems\ApiWrappers\WpHashes;

class BaseRetrieve extends WpHashes\Api {

	/**
	 * @param $sType
	 * @return $this
	 */
	public function setType( $sType ) {
		return $this->setRequestDataItem( 'type', $sType );
	}

	/**
	 * @param $sHash
	 * @return $this
	 */
	public function setHashAlgo( $sHash ) {
		return $this->setRequestDataItem( 'hash', $sHash );
	}

	/**
	 * @param $sHash
	 * @return $this
	 */
	public function setVersion( $sHash ) {
		return $this->setRequestDataItem( 'version', $sHash );
	}

	/**
	 * @return string[]
	 */
	protected function getCriticalRequestItems() {
		return [ 'type', 'version', 'hash' ];
	}
}
