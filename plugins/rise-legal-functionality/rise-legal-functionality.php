<?php
 /**
 *
 * @package   Rise Legal Functionality
 * @author    Joseph Lam & Terra Pope <joseph.lam91@gmail.com, terraepop@gmail.com>
 * @license   GPL-2.0+
 * @copyright 2015 Rise Legal
 *
 * @wordpress-plugin
 * Plugin Name: Rise Legal Functionality
 * Description: This very important plugin contains all of the core functionality for this website so that it remains theme-independent.
 * Version:     1.0.0
 * Author:      Your Name
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
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
 * Remove default blog posts option in the dashboard
 *
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/remove-posts.php' );

/**
 * Post types
 *
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/post-types.php' );

/**
 * Taxonomies
 *
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/taxonomies.php' );

/**
 * Alphabitize Resources
 *
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/alpha-sort.php' );
