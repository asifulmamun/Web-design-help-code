<?php
add_action( 'cmb2_admin_init', 'yourprefix_register_demo_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function yourprefix_register_demo_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_yourprefix_demo_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'About of Author', 'cmb2' ),
		'object_types'  => array( 'post',), // Post type
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	) );

	$cmb_demo->add_field( array(
		'name'       =>'Fellings',
		'id'         => 'fellings',
		'type'       => 'text',
		
	) );
}


// for custom post product
add_action( 'cmb2_admin_init', 'product_register_demo_metabox' );

function product_register_demo_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_register_demo_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Product Valu', 'cmb2' ),
		'object_types'  => array( 'product',),
	) );

	$cmb_demo->add_field( array(
		'name'       =>'How much before',
		'id'         => 'valu1',
		'type'       => 'text',
		
	) );
	
	$cmb_demo->add_field( array(
		'name'       =>'How much after',
		'id'         => 'valu2',
		'type'       => 'text',
		
	) );
	
	}

