<?php
/**
 * codex\Elementor_Pro\Component class
 *
 * @package codex
 */

namespace codex\Elementor_Pro;

use codex\Component_Interface;
use Elementor;
use \ElementorPro\Modules\DynamicTags\Tags\Base\Data_Tag;
use \Elementor\Modules\DynamicTags\Module;
use \Elementor\Controls_Manager;
use function codex\codex;
use function add_action;

if ( class_exists( '\ElementorPro\Modules\DynamicTags\Tags\Base\Data_Tag' ) ) {

	/**
	 * Class for adding Elementor plugin support.
	 */
	class Elementor_Dynamic_Colors extends \ElementorPro\Modules\DynamicTags\Tags\Base\Data_Tag {

		/**
		 * Get Name
		 *
		 * Returns the Name of the tag
		 *
		 * @since 2.0.0
		 * @access public
		 *
		 * @return string
		 */
		public function get_name() {
			return 'codex-color-palette';
		}

		/**
		 * Get Title
		 *
		 * Returns the title of the Tag
		 *
		 * @since 2.0.0
		 * @access public
		 *
		 * @return string
		 */
		public function get_title() {
			return __( 'codex Color Palette', 'codex' );
		}

		/**
		 * Get Group
		 *
		 * Returns the Group of the tag
		 *
		 * @since 2.0.0
		 * @access public
		 *
		 * @return string
		 */
		public function get_group() {
			return 'codex-palette';
		}

		/**
		 * Get Categories
		 *
		 * Returns an array of tag categories
		 *
		 * @since 2.0.0
		 * @access public
		 *
		 * @return array
		 */
		public function get_categories() {
			return [ \Elementor\Modules\DynamicTags\Module::COLOR_CATEGORY ];
		}

		/**
		 * Register Controls
		 *
		 * Registers the Dynamic tag controls
		 *
		 * @since 2.0.0
		 * @access protected
		 *
		 * @return void
		 */
		protected function register_controls() {

			$variables = array(
				'palette1' => __( '1 - Accent', 'codex' ),
				'palette2' => __( '2 - Accent - alt', 'codex' ),
				'palette3' => __( '3 - Strongest text', 'codex' ),
				'palette4' => __( '4 - Strong Text', 'codex' ),
				'palette5' => __( '5 - Medium text', 'codex' ),
				'palette6' => __( '6 - Subtle Text', 'codex' ),
				'palette7' => __( '7 - Subtle Background', 'codex' ),
				'palette8' => __( '8 - Lighter Background', 'codex' ),
				'palette9' => __( '9 - White or offwhite', 'codex' ),
			);
			$this->add_control(
				'codex_palette',
				array(
					'label' => __( 'Color', 'codex' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'options' => $variables,
				)
			);
		}
		/**
		 * Get Value
		 *
		 * Returns the value of the Dynamic tag
		 *
		 * @since 2.0.0
		 * @access public
		 *
		 * @return void
		 */
		public function get_value( array $options = array() ) {
			$param_name = $this->get_settings( 'codex_palette' );
			if ( ! $param_name ) {
				return;
			}
			$value = 'var(--global-' . $param_name . ')';
			return $value;
		}
	}
}
