<?php
/**
 * Colorizer
 *
 * @package           Colorizer
 * @author            Brad Potter
 * @license           GPL-2.0+
 * @link              http://www.bradpotter.com/plugins/colorizer
 * @copyright         Copyright (c) 2014, Brad Potter
 *
 * @wordpress-plugin
 * Plugin Name:       Colorizer
 * Plugin URI:        https://github.com/bradpotter/colorizer
 * Description:       Adds Theme Customizer color options to the Genesis Framework.
 * Version:           1.0.0
 * Author:            Brad Potter
 * Author URI:        http://www.bradpotter.com
 * Text Domain:       colorizer
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/bradpotter/colorizer
 * GitHub Branch:     master
 */

/**
 * Prevent direct access to the plugin
 *
 */
if ( !defined( 'ABSPATH' ) ) {
    die( "Sorry, you are not allowed to access this page directly." );
}

/**
 * Define a constant for directories
 *
 */
define( 'COLORIZER_LIB', dirname( __FILE__ ) . '/lib/' );
define( 'COLORIZER_SKIN', dirname( __FILE__ ) . '/skin/' );
define( 'COLORIZER_URL' , WP_PLUGIN_URL . '/' . str_replace( basename( __FILE__ ), "" , plugin_basename( __FILE__ ) ) );

/**
 * Initialize Colorizer
 *
 */
function colorizer_init() {
 
    load_plugin_textdomain( 'colorizer', false, basename( dirname( __FILE__ ) ) . '/languages/' );
    
	if ( is_admin ) {

	require_once( COLORIZER_LIB . 'colorizer-functions.php' );

	}

}
add_action( 'genesis_init', 'colorizer_init', 99 );

/**
 * Load Colorizer Style Sheet
 *
 */
function colorizer_style_sheet() {

	wp_enqueue_style( 'colorizer-style-sheet', COLORIZER_URL . 'css/colorizer-style.css', array(), '1.0.0' );

}
add_action( 'admin_enqueue_scripts', 'colorizer_style_sheet' );
