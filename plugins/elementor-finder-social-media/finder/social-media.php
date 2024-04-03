<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor Finder - Social Media
 *
 * Provides searchable items to social media websites.
 */
class Elementor_Finder_Social_Media extends \Elementor\Core\Common\Modules\Finder\Base_Category {

	/**
	 * Get finder category id.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Finder category id.
	 */
	public function get_id() {
		return 'social-media';
	}

	/**
	 * Get finder category title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Finder category title.
	 */
	public function get_title() {
		return esc_html__( 'Social Media Websites', 'elementor-finder-social-media' );
	}

	/**
	 * Get finder category items.
	 *
	 * @since 1.0.0
	 * @access public
	 * @param array $options
	 * @return array An array of category items.
	 */
	public function get_category_items( array $options = [] ) {
		return [
			'facebook' => [
				'title' => esc_html__( 'Facebook', 'elementor-finder-social-media' ),
				'icon' => 'facebook',
				'url' => 'https://facebook.com/',
				'keywords' => [ 'facebook', 'social', 'media' ],
			],
			'twitter' => [
				'title' => esc_html__( 'Twitter', 'elementor-finder-social-media' ),
				'icon' => 'twitter',
				'url' => 'https://twitter.com/',
				'keywords' => [ 'twitter', 'social', 'media' ],
			],
			'pinterest' => [
				'title' => esc_html__( 'Pinterest', 'elementor-finder-social-media' ),
				'icon' => 'pinterest',
				'url' => 'https://www.pinterest.com/',
				'keywords' => [ 'pinterest', 'social', 'media' ],
			],
		];
	}

}