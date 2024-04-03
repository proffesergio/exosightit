<?php
/**
 * Plugin Name: Elementor Finder Social Media
 * Description: Custom Social Media links in Elementor Finder.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-finder-social-media
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
function elementor_finder_social_media( $finder_categories_manager ) {

	require_once( __DIR__ . '/finder/social-media.php' );

	$finder_categories_manager->register( new Elementor_Finder_Social_Media() );

};
add_action( 'elementor/finder/register', 'elementor_finder_social_media' );