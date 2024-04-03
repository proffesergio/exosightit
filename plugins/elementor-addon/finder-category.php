<?php

class New_Finder_Category extends \Elementor\Core\Common\Modules\Finder\Base_Category {
    public function get_id() {
        return 'exosight-elements';
    }

	public function get_title() {
        return esc_html__( 'Exosight Elements', 'elementor-exo-addon' );
    }

	public function get_category_items( array $options = [] ) {
        return [
			'elementor-website' => [
				'title' => esc_html__( 'Elementor', 'elementor-exo-addon' ),
				'icon' => 'elementor',
				'url' => 'https://elementor.com/',
				'keywords' => [ 'elementor', 'website' ],
			],
			'wordpress-website' => [
				'title' => esc_html__( 'WordPress', 'elementor-exo-addon' ),
				'icon' => 'wordpress',
				'url' => 'https://wordpress.org/',
				'keywords' => [ 'wordpress', 'website' ],
			],
		];
    }

	public function is_dynamic() {}

    
}