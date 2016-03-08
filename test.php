<?php
/**
 * @package Test
 */
/*
Plugin Name: Test
Plugin URI: http://test.com/
Description: test plugin
Version: 0.0.1
Author: Ariel Espinoza
Author URI: http://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: test
*/

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'Test_VERSION', '0.0.1' );
define( 'Test__MINIMUM_WP_VERSION', '0.1' );
define( 'Test__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'Test_DELETE_LIMIT', 100000 );

//add_action('wp_head','hello');

require_once( Test__PLUGIN_DIR . 'class.api_test.php' );

add_action('init',array('Api','init'));

?>
