<?php

namespace FernleafSystems\ApiWrappers\WpHashes\Common;

/**
 * Class HashesVO
 * @package FernleafSystems\ApiWrappers\WpHashes
 * @property array    $meta
 * @property string[] $hashes
 * @property bool     $error
 * @property string   $message - typically only present if $error is true
 */
class HashesVO extends \FernleafSystems\ApiWrappers\Base\BaseVO {

}