<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://wprashed.com/
 * @since      1.0.0
 *
 * @package    Ml_Guest_Post
 * @subpackage Ml_Guest_Post/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ml_Guest_Post
 * @subpackage Ml_Guest_Post/includes
 * @author     Md Rashed Hossain <wprashed@icloud.com>
 */
class Ml_Guest_Post_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ml-guest-post',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
