<?php
/**
 * Plugin Name: Easy Modules
 * Plugin URI: https://easymodule.abdul-k.com/
 * Description: Easy Modules for Beaver Builder modules.
 * Version: 1.0
 * Requires at least: 4.6
 * Tested up to: 5.9
 * Requires PHP: 5.6
 * Author: Easy Module
 * Author URI: https://abdul-k.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       em
 * Domain Path:       /languages
 */
define( 'EASY_MODULE_DIR', plugin_dir_path( __FILE__ ) );
define( 'EASY_MODULE_URL', plugins_url( '/', __FILE__ ) );

require_once EASY_MODULE_DIR . 'classes/class-easy-module-loader.php';