<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Vulnerabilities;

/**
 * @property int    $id
 * @property string $title
 * @property string $vuln_type
 * @property string $fixed_in
 * @property string $references
 * @property int    $updated_at
 * @property int    $created_at
 * @property int    $published_date
 */
class WpVulnVO extends \FernleafSystems\Utilities\Data\Adapter\DynPropertiesClass {

	public function getUrl() :string {
		return sprintf( 'https://wpvulndb.com/vulnerabilities/%s', $this->id );
	}
}