<?php

/**
 * Post Shordcode.
 *
 * @link       https://wprashed.com/
 * @since      1.0.0
 * @package    Ml_Guest_Post
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register Form shortcodes
 */
function ml_guest_post_form_register_shortcodes() {
    add_shortcode( 'mlgp-form', 'shortcode_ml_guest_post_form' );
}
add_action( 'init', 'ml_guest_post_form_register_shortcodes' );

/**
 * Form Shortcode Callback
 */

function shortcode_ml_guest_post_form( $atts ) {
    ?>
    
    <?php
    echo do_shortcode("[piklist_form form='guest-post' add_on='ml-guest-post']");

}