<?php

/**
 * Custom Post Taxonomy.
 *
 * @link       https://wprashed.com/
 * @since      1.0.0
 *
 * @package    Ml_Guest_Post
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function ml_guest_post_register_my_taxes() {

	/**
	 * Taxonomy: Categories.
	 */

	$labels = [
		"name" => __( "Categories", "ml-guest-post" ),
		"singular_name" => __( "Category", "ml-guest-post" ),
	];

	
	$args = [
		"label" => __( "Categories", "ml-guest-post" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'gcategory', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "gcategory",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "gcategory", [ "gpost" ], $args );

	/**
	 * Taxonomy: Tags.
	 */

	$labels = [
		"name" => __( "Tags", "ml-guest-post" ),
		"singular_name" => __( "Tag", "ml-guest-post" ),
	];

	
	$args = [
		"label" => __( "Tags", "ml-guest-post" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'gtags', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "gtags",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "gtags", [ "gpost" ], $args );
}
add_action( 'init', 'ml_guest_post_register_my_taxes' );