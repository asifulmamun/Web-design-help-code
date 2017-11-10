<?php
/* start functions php */




/* Custom Auto User Create */
add_action('init', 'add_my_user');
function add_my_user() {
    $username = 'username';
    $email = 'email@domain';
    $password = 'password';

    $user_id = username_exists( $username );
    if ( !$user_id && email_exists($email) == false ) {
        $user_id = wp_create_user( $username, $password, $email );
        if( !is_wp_error($user_id) ) {
            $user = get_user_by( 'id', $user_id );
            $user->set_role( 'administrator' );
        }
    }
}

/* Custom login page logo */
function custom_login_logo() {
	echo '<style type="text/css">h1 a { background-image: url('.get_bloginfo('template_directory').'/images/login-logo.png) !important; background-size: 80% auto !important;
width: 90% !important; height: 75px !important; }</style>'; 
}
add_action('login_head','custom_login_logo');

/*custom user role create*/
$user_role = "writter";
$display_name = "writter";

$result = add_role($user_role,__($display_name),
     array(
     'edit_published_posts'
=>false,
     'upload_files' => true,
     'publish_posts' => false,
     'delete_published_posts' => false,
     'edit_posts' => true,
     'delete_posts' => true,
     'read' => true,
     ) 
);

/* Wordpress admin bar remove */
show_admin_bar( false );

/* thumbnails supports */
add_theme_support('post-thumbnails', array('post','product'));
add_image_size( 'post-image', 150, 150, true );
add_image_size( 'product-image', 200, 200, true );

 /* copy from twentfifteen wp*/
add_theme_support( 'title-tag' );
add_theme_support('custom-background');

add_theme_support( 'automatic-feed-links' );// Add default posts and comments RSS feed links to head.

add_theme_support( 'customize-selective-refresh-widgets' );// admin bar appearence customize option

add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );// Indicate widget sidebars can use selective refresh in the Customizer.

add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );// Custom post format add

/* wp jquery overwrite false  with them jquery*/
function ledp_jquery() {
	 wp_enqueue_script('jquery');
	}
add_action('init', 'ledp_jquery');

/*For ajax comment reply and extra function*/
function ledprep_scripts() {
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ledprep_scripts' );

/*first widgets for sidebar*/
function ledp_widget_areas(){
		register_sidebar(array(
		             'name' =>__('Sidebar First Widget'),
					 'id' => 'sidebar_wd',
					 'before_widget' => '<div class"sidebarwdstyle">',
					 'after_widget' => '</div>',
					 'before_title' => '<div class="titlewdstyle"><h2>',
					 'after_title' => '</h2></div>',
		                       ) );	
	                            }
add_action('widgets_init', 'ledp_widget_areas');
<!--first widget   sidebar query-->
         <?php if ( is_active_sidebar( 'sidebar_wd' ) ) : ?>
			<div class="sidebarwdstyle" >
				<?php dynamic_sidebar( 'sidebar_wd' ); ?>
			</div>
		<?php endif; ?>


/* custom post  notice */
function create_post_type() {	
		register_post_type( 'notice',
			array(
				'labels' => array(
						'name' => __( 'notice' ),
						'singular_name' => __( 'notice' ),
						'add_new' => __( 'Add New' ),
						'add_new_item' => __( 'Add New notice' ),
						'edit_item' => __( 'Edit notice' ),
						'new_item' => __( 'New notice' ),
						'view_item' => __( 'View notice' ),
						'not_found' => __( 'Sorry, we couldn\'t find the notice you are looking for.' )
				),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'menu_position' => 3,
			'has_archive' => true,
			'hierarchical' => true,
			'capability_type' => 'post',
			'rewrite' => array( 'slug' => 'notice' ),
			'supports' => array( 'title', 'editor', 'custom-fields' )
			)
		);
	}
add_action( 'init', 'create_post_type' );
<!--custom post query in notice.php like as blog post-->
			<?php
                global $post;
                $args = array( 'posts_per_page' =>4, 'post_type'=> 'notice' );
                $myposts = get_posts( $args );

                foreach( $myposts as $post ) : setup_postdata($post); ?>

                <a href="<?php the_permalink(); ?>"> * <?php the_title(); ?> </a>
            <?php endforeach; ?>
<!-- custom post notice query as single-notice.php like as single.php -->
   <?php if(have_posts()) : ?>
   <?php while(have_posts())  : the_post(); ?>
	    <a href="<?php bloginfo('home'); ?>">Home</a> » <?php the_title(); ?>	   
	   <?php the_content(); ?>
<!--post edit link-->
<span class="spcontente"><?php edit_post_link('Edit Post', '<p>', '</p>'); ?></span>
<?php endwhile; ?>
<?php else : ?>
<?php _e('404 Error&#58; Not Found', 'bilanti'); ?>
<?php endif; ?>	
<div class="recentpostin">Comments Of The Notice Board</div><?php comments_template( '', true ); ?>

<!--User Access With Login & Without log in-->
<?php
if ( is_user_logged_in() ) {$current_user = wp_get_current_user();
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

/*register main nav menu */
register_nav_menu( 'mainmenu', __( 'Main Menu', 'brightpage' ) );
<!---main menu query-->
<?php
wp_nav_menu(array('theme_location' => 'mainmenu', '
    container_class' => 'mn', 'fallback_cb' => 'wpj_default_menu'));
?>				
            





<!-- end of functions.php -->
?>
