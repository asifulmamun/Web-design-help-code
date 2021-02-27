<?php

/* Wordpress admin bar remove */
show_admin_bar( false );

/* jquery overwrite false */

	function ledp_jquery() {
	 wp_enqueue_script('jquery');
	}
add_action('init', 'ledp_jquery');


/* thumbnails supports */

add_theme_support('post-thumbnails', array('post','product'));

add_image_size( 'post-image', 150, 150, true );
add_image_size( 'product-image', 200, 200, true );

 // copy from twentfifteen wp
add_theme_support( 'title-tag' );

add_theme_support('custom-background');
	 	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

// admin bar appearence customize option
add_theme_support( 'customize-selective-refresh-widgets' );

	 // Indicate widget sidebars can use selective refresh in the Customizer.
add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	
	 	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );


/*
For ajax comment reply and extra function
*/
function ledprep_scripts() {

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'ledprep_scripts' );


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

/* custom post  product  */
function create_post_type_product() {	
		register_post_type( 'product',
			array(
				'labels' => array(
						'name' => __( 'product' ),
						'singular_name' => __( 'product' ),
						'add_new' => __( 'Add New' ),
						'add_new_item' => __( 'Add New product ' ),
						'edit_item' => __( 'Edit product' ),
						'new_item' => __( 'New product' ),
						'view_item' => __( 'View product' ),
						'not_found' => __( 'Sorry, we couldn\'t find the product you are looking for.' )
				),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'menu_position' => 20,
			'has_archive' => true,
			'hierarchical' => true,
			'capability_type' => 'post',
			'rewrite' => array( 'slug' => 'product' ),
			'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' )
			)
		);
		
	}
	add_action( 'init', 'create_post_type_product' );
	

/* first widgets for sidebar */	
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
								
/* second widgets for  sidebar */	
	function ledpnd_widget_areas(){
		register_sidebar(array(
		             'name' =>__('Sidebar Second Widget'),
					 'id' => 'sidebar_wdnd',
					 'before_widget' => '<div class"sidebarwdstylend">',
					 'after_widget' => '</div>',
					 'before_title' => '<div class="titlewdstylend"><h2>',
					 'after_title' => '</h2></div>',
		                       ) );	
	                            }
	
	add_action('widgets_init', 'ledpnd_widget_areas');
	
	
	
/* third widgets for  content */	
	function ledpcn_widget_areas(){
		register_sidebar(array(
		             'name' =>__('Content Widget'),
					 'id' => 'cnwd',
					 'before_widget' => '<div class"cnwdp">',
					 'after_widget' => '</div>',
					 'before_title' => '<div class="cnwdt"><h2>',
					 'after_title' => '</h2></div>',
		                       ) );	
	                            }
	
	add_action('widgets_init', 'ledpcn_widget_areas');

/* fourth widgets for  footer */	
	function ledpft_widget_areas(){
		register_sidebar(array(
		             'name' =>__('Footer Widget'),
					 'id' => 'ft',
					 'before_widget' => '<div class"ftp">',
					 'after_widget' => '</div>',
					 'before_title' => '<div class="ftt"><h2>',
					 'after_title' => '</h2></div>',
		                       ) );	
	                            }
	
	add_action('widgets_init', 'ledpft_widget_areas');

/* fifth widgets for  cetagory */	
	function ledpct_widget_areas(){
		register_sidebar(array(
		             'name' =>__('Cetagory after comment Widget'),
					 'id' => 'commentwd',
					 'before_widget' => '<div class"commentwdp">',
					 'after_widget' => '</div>',
					 'before_title' => '<div class="commentwdt"><h2>',
					 'after_title' => '</h2></div>',
		                       ) );	
	                            }
	
	add_action('widgets_init', 'ledpct_widget_areas');



	
	
/*cmb2 plugin linking*/	
	
	if( file_exists( dirname( __FILE__ ) . '/inc/metabox/init.php' ) ) 
	                    {
	                     require_once dirname( __FILE__ ) . '/inc/metabox/metabox.php';
	                     require_once dirname( __FILE__ ) . '/inc/metabox/init.php';
                         } 
	elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) )
	                      {
	                      require_once dirname( __FILE__ ) . '/CMB2/init.php';
                           } 	



/* Post views count */
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

/* Human time diff */
function human_time( $type = 'post' ) {
    $d = 'comment' == $type ? 'get_comment_time' : 'get_post_time';
    return human_time_diff($d('U'), current_time('timestamp')) . " " . __('ago');
}

/* Show user role*/
function get_user_role($id) {

    $user = new WP_User($id);

    return array_shift($user->roles);
} 







/*register main nav menu */

register_nav_menu( 'mainmenu', __( 'Main Menu', 'brightpage' ) );

// footer nav menu
register_nav_menu( 'footermenu', __( 'Footer Menu', 'brightpage' ) );
 

	

/* option tree for dynamic */
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_theme_mode', '__return_true' );
include_once( 'option-tree/ot-loader.php' );
include_once( 'inc/theme-options.php' );



/* Custom Pagination Function */
function wpbeginner_numeric_posts_nav() {
if( is_singular() )
return;
global $wp_query ;
/* Stop execution if there's only 1 page */
if( $wp_query ->max_num_pages <= 1 )
return;
$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
$max = intval( $wp_query ->max_num_pages );
/* Add current page to the array */
if ( $paged >= 1 )
$links [] = $paged ;
/* Add the pages around the current page to the array */
if ( $paged >= 3 ) {
$links [] = $paged - 1;
$links [] = $paged - 2;
}
if ( ( $paged + 2 ) <= $max ) {
$links [] = $paged + 2;
$links [] = $paged + 1;
}
echo '<div><ul>' . "\n" ;
/* Previous Post Link */
if ( get_previous_posts_link() )
printf( '<li>%s</li>' . "\n" , get_previous_posts_link() );
/* Link to first page, plus ellipses if necessary */
if ( ! in_array( 1, $links ) ) {
$class = 1 == $paged ? '' : '';
printf( '<li%s><a href="%s">%s</a></li>' . "\n" , $class , esc_url( get_pagenum_link( 1 ) ), '1' );
if ( ! in_array( 2, $links ) )
echo '<li>…</li>' ;
}
/* Link to current page, plus 2 pages in either direction if necessary */
sort( $links );
foreach ( ( array ) $links as $link ) {
$class = $paged == $link ? '' : '';
printf( '<li%s><a href="%s">%s</a></li>' . "\n" , $class , esc_url( get_pagenum_link( $link ) ), $link );
}
/* Link to last page, plus ellipses if necessary */
if ( ! in_array( $max , $links ) ) {
if ( ! in_array( $max - 1, $links ) )
echo '<li>…</li>' . "\n" ;
$class = $paged == $max ? '' : '';
printf( '<li%s><a href="%s">%s</a></li>' . "\n" , $class , esc_url( get_pagenum_link( $max ) ), $max );
}
/* Next Post Link */
if ( get_next_posts_link() )
printf( '<li>%s</li>' . "\n" , get_next_posts_link() );
echo '</ul></div>' . "\n" ;
}

/* custom user role */

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





																		

?>