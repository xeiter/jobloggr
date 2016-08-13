<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://zaroutski.com
 * @since             1.0.0
 * @package           Jobloggr
 *
 * @wordpress-plugin
 * Plugin Name:       Jobloggr
 * Plugin URI:        http://jobloggr.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Anton Zaroutski
 * Author URI:        http://zaroutski.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jobloggr
 * Domain Path:       /languages
 * Plugin Type:       Piklist
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-jobloggr-activator.php
 */
function activate_jobloggr() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jobloggr-activator.php';
	Jobloggr_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-jobloggr-deactivator.php
 */
function deactivate_jobloggr() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jobloggr-deactivator.php';
	Jobloggr_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_jobloggr' );
register_deactivation_hook( __FILE__, 'deactivate_jobloggr' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-jobloggr.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_jobloggr() {

	$plugin = new Jobloggr();
	$plugin->run();

}
run_jobloggr();
