<?php

/**
 * Custom Post.
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

function ml_guest_post_register() {

	/**
	 * Post Type: Guest Posts.
	 */

	$labels = [
		"name" => __( "Customer Ratings", "ml-guest-post" ),
		"singular_name" => __( "Customer Rating", "ml-guest-post" ),
	];

	$args = [
		"label" => __( "Customer Ratings", "ml-guest-post" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "cratings", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-edit-large",
		"supports" => [ "title", "editor" ],
		"show_in_graphql" => false,
	];

	register_post_type( "cratings", $args );
}

add_action( 'init', 'ml_guest_post_register' );
