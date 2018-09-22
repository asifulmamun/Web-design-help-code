/* Paste any wher in themes functios.php */

/* Custom login page logo */
add_action('login_head','custom_login_logo');
function custom_login_logo() {
	echo '<style type="text/css">h1 a { background-image: url(http://login.png) !important; background-size: 80% auto !important;
width: 90% !important; height: 75px !important; }</style>'; 
}
