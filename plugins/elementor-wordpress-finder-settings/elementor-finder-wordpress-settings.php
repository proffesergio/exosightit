<?php
/**
 * Plugin Name: Elementor Finder WordPress Settings
 * Description: Custom WordPress settings links in Elementor Finder.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-finder-wordpress-settings
 *
 * Elementor tested up to: 3.16.0
 * Elementor Pro tested up to: 3.16.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Add custom Finder categories.
 *
 * Include finder file and register the class.
 *
 * @since 1.0.0
 * @param \Elementor\Core\Common\Modules\Finder\Categories_Manager $finder_categories_manager.
 * @return void
 */
function elementor_finder_wordpress_settings( $finder_categories_manager ) {

	require_once( __DIR__ . '/finder/wordpress-settings.php' );

	$finder_categories_manager->register( new Elementor_Finder_WordPress_Settings() );

};
add_action( 'elementor/finder/register', 'elementor_finder_wordpress_settings' );