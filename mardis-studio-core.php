<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://mardis.studio
 * @since             1.0.0
 * @package           Mardis_Studio_Core
 *
 * @wordpress-plugin
 * Plugin Name:       Mardis Studio Core
 * Plugin URI:        https://mardis.studio
 * Description:       The central command of the Mardis Studio add-on suite. Effortlessly manage, sync, and enhance all your Mardis tools from this powerful core. 
 * Version:           1.0.0
 * Author:            Levi Mardis
 * Author URI:        https://mardis.studio/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mardis-studio-core
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MARDIS_STUDIO_CORE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mardis-studio-core-activator.php
 */
function activate_mardis_studio_core() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mardis-studio-core-activator.php';
	Mardis_Studio_Core_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mardis-studio-core-deactivator.php
 */
function deactivate_mardis_studio_core() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mardis-studio-core-deactivator.php';
	Mardis_Studio_Core_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mardis_studio_core' );
register_deactivation_hook( __FILE__, 'deactivate_mardis_studio_core' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mardis-studio-core.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mardis_studio_core() {

	$plugin = new Mardis_Studio_Core();
	$plugin->run();

}
run_mardis_studio_core();
