<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://mardis.studio
 * @since      1.0.0
 *
 * @package    Mardis_Studio_Core
 * @subpackage Mardis_Studio_Core/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Mardis_Studio_Core
 * @subpackage Mardis_Studio_Core/includes
 * @author     Levi Mardis <levi@mardis.studio>
 */
class Mardis_Studio_Core_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'mardis-studio-core',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
