<?php
/**
 * The Editor customize control extends the WP_Customize_Control class.
 *
 * @package customizer-controls
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return;
}


/**
 * Class codex_Control_Blank
 *
 * @access public
 */
class codex_Control_Editor extends WP_Customize_Control {
	/**
	 * Control type
	 *
	 * @var string
	 */
	public $type = 'codex_editor_control';

	/**
	 * Additional arguments passed to JS.
	 *
	 * @var array
	 */
	public $default = array();

	/**
	 * Additional arguments passed to JS.
	 *
	 * @var array
	 */
	public $input_attrs = array();

	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 */
	public function to_json() {
		parent::to_json();
		$this->json['default']     = $this->default;
		$this->json['input_attrs'] = $this->input_attrs;
	}
	/**
	 * Empty Render Function to prevent errors.
	 */
	public function render_content() {
	}
}
$wp_customize->register_control_type( 'codex_Control_Editor' );
