<?php
/**
 * Plugin Name: Easy Modules for Beaver Builder
 * Plugin URI: https://babuwp.com/
 * Description: Easy Modules for Beaver Builder modules.
 * Version: 1.1.0
 * Requires at least: 4.6
 * Tested up to: 6.0
 * Requires PHP: 5.6
 * Author: Md Abdul Kader
 * Author URI: https://profiles.wordpress.org/babuwpd/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       em
 * Domain Path:       /languages
 */
define( 'EASY_MODULE_DIR', plugin_dir_path( __FILE__ ) );
define( 'EASY_MODULE_URL', plugins_url( '/', __FILE__ ) );

require_once EASY_MODULE_DIR . 'classes/class-easy-module-loader.php';