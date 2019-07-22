<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Common;

use FernleafSystems\ApiWrappers\WpHashes;

class BaseRetrieve extends WpHashes\Api {

	/**
	 * @param $sType
	 * @return $this
	 */
	public function setType( $sType ) {
		return $this->setRequestDataItem( 'type', strtolower( $sType ) );
	}

	/**
	 * @param $sHash
	 * @return $this
	 */
	public function setHashAlgo( $sHash ) {
		return $this->setRequestDataItem( 'hash', strtolower( $sHash ) );
	}

	/**
	 * @param $sVersion
	 * @return $this
	 */
	public function setVersion( $sVersion ) {
		return $this->setRequestDataItem( 'version', strtolower( $sVersion ) );
	}

	/**
	 * @return string[]
	 */
	protected function getCriticalRequestItems() {
		return [ 'type', 'version', 'hash' ];
	}
}
