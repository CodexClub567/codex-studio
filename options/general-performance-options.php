<?php
/**
 * Header Builder Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;

ob_start(); ?>
<div class="codex-compontent-custom fonts-flush-button wp-clearfix">
	<span class="customize-control-title">
		<?php esc_html_e( 'Flush Local Fonts Cache', 'codex' ); ?>
	</span>
	<span class="description customize-control-description">
		<?php esc_html_e( 'Click the button to reset the local fonts cache', 'codex' ); ?>
	</span>
	<input type="button" class="button codex-flush-local-fonts-button" name="codex-flush-local-fonts-button" value="<?php esc_attr_e( 'Flush Local Font Files', 'codex' ); ?>" />
</div>
<?php
$codex_flush_button = ob_get_clean();

Theme_Customizer::add_settings(
	array(
		'microdata' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'general_performance',
			'default'      => codex()->default( 'microdata' ),
			'label'        => esc_html__( 'Enable Microdata Schema', 'codex' ),
		),
		'theme_json_mode' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'general_performance',
			'default'      => codex()->default( 'theme_json_mode' ),
			'label'        => esc_html__( 'Enable Optimized Group Block', 'codex' ),
		),
		'enable_scroll_to_id' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'general_performance',
			'default'      => codex()->default( 'enable_scroll_to_id' ),
			'label'        => esc_html__( 'Enable Scroll To ID', 'codex' ),
		),
		'lightbox' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'general_performance',
			'default'      => codex()->default( 'lightbox' ),
			'label'        => esc_html__( 'Enable Lightbox', 'codex' ),
		),
		'load_fonts_local' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'general_performance',
			'default'      => codex()->default( 'load_fonts_local' ),
			'label'        => esc_html__( 'Load Google Fonts Locally', 'codex' ),
		),
		'preload_fonts_local' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'general_performance',
			'default'      => codex()->default( 'preload_fonts_local' ),
			'label'        => esc_html__( 'Preload Local Fonts', 'codex' ),
			'context'      => array(
				array(
					'setting'    => 'load_fonts_local',
					'operator'   => '==',
					'value'      => true,
				),
			),
		),
		'load_fonts_local_flush' => array(
			'control_type' => 'codex_blank_control',
			'section'      => 'general_performance',
			'settings'     => false,
			'description'  => $codex_flush_button,
			'context'      => array(
				array(
					'setting'    => 'load_fonts_local',
					'operator'   => '==',
					'value'      => true,
				),
			),
		),
		'enable_preload' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'general_performance',
			'default'      => codex()->default( 'enable_preload' ),
			'label'        => esc_html__( 'Enable CSS Preload', 'codex' ),
		),
	)
);
