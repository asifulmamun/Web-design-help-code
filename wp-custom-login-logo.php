<?php
/**
* Plugin Name: Your Site Name
* Plugin URI: https://github.com/asifulmamun
* Description: This plugin requried this site. It's using custom functions.
* Version: 1.0
* Author: Al Mamun
* Author URI: http://facebook.com/asifulmamun
**/

/* Custom login page logo */
add_action('login_head','custom_login_logo');
function custom_login_logo() {
	echo '<style type="text/css">h1 a { background-image: url(http://login.png) !important; background-size: 80% auto !important;
width: 90% !important; height: 75px !important; }</style>'; 
}



// --- Plugin End
/*
   -------------------- INSTALLATION -------------------
	-- Copy this code and create a text raw file then paste in this file all copied code.
		--- CHANGE/REPLACE YOUR url(http://login.png) WITH YOUR IMAGE LINK 'http://login.png'
	-- Then save this file with extention your plugin name.php ".php" extention.
	-- Then same create a folder with same name and this php file put in this folder then create this file as a zip (compressed)
	-- Then you can Upload to your WordPress web site and active.
*/
?>
