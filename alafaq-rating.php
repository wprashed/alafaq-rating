<?php

/**
 *
 * @link              https://wprashed.com/
 * @since             1.0.0
 * @package           Ml_Guest_Post
 *
 * @wordpress-plugin
 * Plugin Name:       Alafaq Rating
 * Plugin URI:        https://wprashed.com/
 * Description:       This plugin will for guest post
 * Version:           1.0.0
 * Author:            Md Rashed Hossain
 * Author URI:        https://wprashed.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ml-guest-post
 * Domain Path:       /languages
 * Plugin Type: Piklist
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/**
 * Currently plugin version.
 */
define( 'ML_GUEST_POST_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ml-guest-post-activator.php
 */
function activate_ml_guest_post() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ml-guest-post-activator.php';
	Ml_Guest_Post_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ml-guest-post-deactivator.php
 */
function deactivate_ml_guest_post() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ml-guest-post-deactivator.php';
	Ml_Guest_Post_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ml_guest_post' );
register_deactivation_hook( __FILE__, 'deactivate_ml_guest_post' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ml-guest-post.php';

/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 */
function run_ml_guest_post() {

	$plugin = new Ml_Guest_Post();
	$plugin->run();

}

/**
 * The core framework include.
 */
include_once 'framework/piklist.php';



/**
 * Load Custom Post.
 */
include_once 'parts/post/post.php';

/**
 * Load Custom Post Taxonomy.
 */
include_once 'parts/post/taxonomy.php';

/**
 * Load Custom Post Pagination.
 */
include_once 'parts/post/pagination.php';

/**
 * Load Custom Post Shortcode.
 */
include_once 'parts/post/post-shortcode.php';

/**
 * Load Form Shortcode.
 */
include_once 'parts/forms/form-shortcode.php';

/**
* Except Filter
*/
function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
* Restrict Access
*/

add_action( 'init', 'blockusers_init' ); function blockusers_init() { if ( is_admin() && ! current_user_can( 'administrator' ) && ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) { wp_redirect( home_url() ); exit; } }

run_ml_guest_post();