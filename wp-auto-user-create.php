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
