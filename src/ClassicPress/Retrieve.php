<?php

namespace FernleafSystems\ApiWrappers\WpHashes\ClassicPress;

use FernleafSystems\ApiWrappers\WpHashes;

class Retrieve extends WpHashes\Common\BaseRetrieve {

	protected function preFlight() {
		$this->setType( 'classicpress' );
	}
}
