<?php
/**
* Plugin Name: Short Code
* Plugin URI: https://github.com/asifulmamun
* Description: This plugin requrie for custom short code or some custom function.
* Version: 1.0
* Author: Al Mamun
* Author URI: http://facebook.com/asifulmamun
**/

// Short Code [shortCodeName] for display this function #Result
function hiFunction(){
	
	// Simple hellow world
	$print = "Hello World";
	
	// This is value or content which will show in site post or page
	return $print;	
}

// hiFuntion register as a shortocode to [shortCodeName]
add_shortcode('shortCodeName', 'hiFunction');

?>
