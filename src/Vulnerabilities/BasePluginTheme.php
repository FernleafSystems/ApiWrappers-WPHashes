<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Vulnerabilities;

abstract class BasePluginTheme extends BaseRetrieve {

	public function setSlug( string $slug ) :self {
		$this->getRequestVO()->slug = $slug;
		return $this;
	}

	protected function getUrlEndpoint() :string {
		$req = $this->getRequestVO();
		return sprintf( '%s/%s/%s', parent::getUrlEndpoint(), $req->slug, $req->version );
	}
}