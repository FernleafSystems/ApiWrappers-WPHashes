# ApiWrappers-WPHashes
PHP API Wrapper for WP Hashes (WPHashes.com)

```php
	use FernleafSystems\ApiWrappers\WpHashes;

	$oHashVO = ( new WpHashes\Plugin\Retrieve() )
                  	->setVersion( '7.4.2' )
                  	->setHashAlgo( 'sha1' )
                  	->setSlug( 'wp-simple-firewall' )
                  	->asVo();
```