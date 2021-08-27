<?php
/**
 * Plugin Name: Newspack Distributor Extensions
 * Description: Custom tweaks and extensions to the Distributor plugin.
 * Version: 1.0.0
 * Author: Automattic
 * Author URI: https://automattic.com
 * License: GPL2
 */

defined( 'ABSPATH' ) || exit;

// Define constants.
if ( ! defined( 'NEWSPACK_DISTRIBUTOR_PLUGIN_FILE' ) ) {
	define( 'NEWSPACK_DISTRIBUTOR_FILE', __FILE__ );
	define( 'NEWSPACK_DISTRIBUTOR_PLUGIN_FILE', plugin_dir_path( NEWSPACK_DISTRIBUTOR_FILE ) );
	define( 'NEWSPACK_DISTRIBUTOR_URL', plugin_dir_url( NEWSPACK_DISTRIBUTOR_FILE ) );
}

require_once NEWSPACK_DISTRIBUTOR_PLUGIN_FILE . '/includes/class-newspack-distributor.php';
