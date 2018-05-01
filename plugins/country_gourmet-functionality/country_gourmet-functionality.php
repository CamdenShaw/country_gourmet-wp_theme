<?php
/**
 * @package Country Gourmet Functionality
 * @author Camden Shaw <https://github.com/CamdenShaw>
 * 
 * @license GPL-2.0+
 * @link https://github.com/CamdenShaw/country_gourmet-wp_theme
 * @copyright 2018 Country Gourmet Cafe
 * 
 * @wordpress-plugin
 * Plugin Name: Country Gourmet Functionality
 * Description: This is a very important plugin that contains all of the core functionality for this website so it remains theme-independent.
 * Version: 1.0.0
 * License: GPL-2.0+
 * LicenseURI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * Define plugin directory
 * 
 * @since 1.0.0
 */
define( 'RF_DIR', dirname( __FILE__ ) );

/**
 * General housekeeping and plugin activation tasks
 * 
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/general.php' );
register_activation_hook( __FILE__, array( 'RF_General', 'plugin_activation' ) );

/**
 * Post types
 * 
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/taxonomies.php');