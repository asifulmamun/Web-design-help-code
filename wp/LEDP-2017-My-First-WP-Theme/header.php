<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
 <title><?php wp_title(); ?></title>
 <meta charset="<?php bloginfo('charset'); ?>" />
 
 <!-----css----->
 <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
 <link href="<?php echo get_template_directory_uri(); ?>/post.css" rel="stylesheet" type="text/css">
 <link href="<?php echo get_template_directory_uri(); ?>/comment.css" rel="stylesheet" type="text/css">

 
 <!-----jquery----->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ledp.js"></script>


 <!-----extra----->
 <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 <?php wp_head(); ?>
 <head>
<body <?php body_class(); ?>>

 <!--log user option-->
   <?php
if ( is_user_logged_in() ) {

    $current_user = wp_get_current_user();
	echo '<div class="lu">
	<div class="lul"><a href="/wp-admin">Hi, <b>'.$current_user->display_name.'</b></a></div>
	
	 <div class="lur">
	 <a href="/wp-admin/profile.php">Profile</a>
	 <a href="/wp-admin/index.php">Dashboard</a>
	 <a href="/wp-admin/post-new.php">New Post</a>
	 <a href="/wp-admin/post-new.php/?post_type=product">Product</a>
	 <a href="/wp-admin/post-new.php/?post_type=notice">Notice</a>
	 <a href="#fmenu">Service Menu</a>
	 </div>
	 <!----lu---->
	 </div>
	';
} else {
	echo '';
} ?>
   </div>
   
	  <!--header logo-->
            <div class="menulogo">
                <div class="menulogo1">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu.png" alt="menu">
                </div>
                
                <div class="menulogo2">
                
                   <!-- dynamic header logo--> 
                <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'logo_uploader') ) : ?>    
						<a href="<?php bloginfo('home'); ?>"><img src="<?php get_option_tree( 'logo_uploader', '', 'true' ); ?>" alt=""/></a>
					<?php else : ?>
						<a href="<?php bloginfo('home'); ?>" >
						<img src="<?php echo get_template_directory_uri(); ?>/img/le.png" alt="logo">
						</a> 
					<?php endif;  endif; ?>
                </div>
            </div>
					  		  		  
					  		  		  
					  		  		  
       <!---main menu-->
            <div class="mn">
                 <?php
         			wp_nav_menu(array('theme_location' => 'mainmenu', '
    container_class' => 'mn', 'fallback_cb' => 'wpj_default_menu'));
	?>				
            </div>