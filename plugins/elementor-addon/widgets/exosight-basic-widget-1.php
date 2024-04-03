<?php
class Exosight_Basic_Widget_1 extends \Elementor\Widget_Base {

	public function get_name() {
		return 'exosight-basic-widget-1';
	}

	public function get_title() {
		return esc_html__( 'Exosight Basics', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic', 'testcategory' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function render() {
		?>

		<p> Hello World </p>

		<?php
	}

	protected function content_template() {
		?>

		<p> Hello World </p>

		<?php
	}
}