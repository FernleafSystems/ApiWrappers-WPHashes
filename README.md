# ApiWrappers-WPHashes
PHP API Wrapper for WP Hashes (WPHashes.com)

```php
	use FernleafSystems\ApiWrappers\WpHashes;

	$oHashVO = ( new WpHashes\Plugin\Retrieve() )
                  	->setVersion( '7.4.2' )
                  	->setHashAlgo( 'sha1' )
                  	->setSlug( 'wp-simple-firewall' )
                  	->asVo();

    // Get the MD5 hashes for Swedish WordPress 5.2 
	$oHashVO = ( new WpHashes\WordPress\Retrieve() )
                  	->setVersion( '5.2' )
                  	->setHashAlgo( 'md5' )
                  	->setLocale( 'sv_se' )
                  	->asVo();
```