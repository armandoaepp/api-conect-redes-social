<?php
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------
$config =array(
		// "base_url" => "http://www.planeatec.com/app/gmail/demo/hybridauth/index.php",
		"base_url" => "http://planeatec.com/app/social/twiter/hybridauth/index.php",
		// "base_url" => "http://localhost/aepp/gmail1/demo/login-with.php",
		"providers" => array (

			"Google" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "252342145199-u3ljqqucpbmcsr3moqb8401t4ovomot3.apps.googleusercontent.com", "secret" => "UxunpIbFaVPWaQBBHoEQBEz6" ),
			),

			"Facebook" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "XXXXXXXXX", "secret" => "XXXXXXXX" ),
			),

			"Twitter" => array (
				"enabled" => true,
				"keys"    => array ( "key" => "AI2fUEQoEXBfGuYMsPnPlF9y9", "secret" => "rvhNhJvC42vW2Sp8pTY4a5W9ZOUliCZ6mAAD6U9y7FA0cxk8aX" )
			),
			// windows live
			"Live" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "000000004C12E90E", "secret" => "5kwSGahK0BJp0GyooSWdnTynTO0GfxHs" )
			),
		),
		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => false,
		"debug_file" => "",
	);
