<?php
/**
 * Plugin Name:     (WP-EXT) Document
 * Plugin URI:      https://metastore.pro/
 *
 * Description:     Document post type and more.
 *
 * Author:          Kitsune Solar
 * Author URI:      https://kitsune.solar/
 *
 * Version:         1.0.0
 *
 * Text Domain:     wp-ext-document
 * Domain Path:     /languages
 *
 * License:         GPLv3
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.html
 */

/**
 * Loading `WP_EXT_Document`.
 * ------------------------------------------------------------------------------------------------------------------ */

function run_wp_ext_document() {
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Document.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Document_Post_Type.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Document_Post_Field.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Document_Taxonomy.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Document_User_Role.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Document_Theme.class.php' );
//  require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Document_Template.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Document_ShortCode.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Document_Widget.class.php' );
}

run_wp_ext_document();
