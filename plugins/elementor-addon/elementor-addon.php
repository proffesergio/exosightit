<?php
/**
 * Plugin Name: Elementor ExoTest Addon
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-exo-addon
 */

function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/hello-world-widget-1.php' );
	require_once( __DIR__ . '/widgets/hello-world-widget-2.php' );
	require_once( __DIR__ . '/widgets/exosight-basic-widget-1.php' );

	$widgets_manager->register( new \Elementor_Hello_World_Widget_1() );
	$widgets_manager->register( new \Elementor_Hello_World_Widget_2() );
	$widgets_manager->register( new \Exosight_Basic_Widget_1() );

}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );

// add element categories
function register_new_finder_category($finder_categories_manager) {
	
	require_once( __DIR__ . '/finder-category.php' );

	$finder_categories_manager -> register( new New_Finder_Category() );
}
add_action( 'elementor/finder/register', 'register_new_finder_category' );

// function add_new_finder_items( array $categories ) {

// 	$categories['create']['items']['theme-template'] = [
// 		'title' => esc_html__( 'Add New Theme Template', 'textdomain' ),
// 		'icon' => 'plus-circle-o',
// 		'url' => $this->get_admin_templates_url() . '#add_new',
// 		'keywords' => [ 'template', 'theme', 'new', 'create' ],
// 	];
// 	return $categories;

// }
// add_filter( 'elementor/finder/categories', 'add_new_finder_items' );
