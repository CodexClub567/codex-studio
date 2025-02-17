<?php
/**
 * Header Main Row Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;

ob_start(); ?>
<div class="codex-compontent-tabs nav-tab-wrapper wp-clearfix">
	<a href="#" class="nav-tab codex-general-tab codex-compontent-tabs-button nav-tab-active" data-tab="general">
		<span><?php esc_html_e( 'General', 'codex' ); ?></span>
	</a>
</div>
<?php
$compontent_tabs = ob_get_clean();
$settings        = array(
	'footer_widget1_breaker' => array(
		'control_type' => 'codex_blank_control',
		'section'      => 'sidebar-widgets-footer1',
		'settings'     => false,
		'priority'     => 5,
		'description'  => $compontent_tabs,
	),
	'footer_widget1_align' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'sidebar-widgets-footer1',
		'label'        => esc_html__( 'Content Align', 'codex' ),
		'priority'     => 5,
		'default'      => codex()->default( 'footer_widget1_align' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.footer-widget1',
				'pattern'  => array(
					'desktop' => 'content-align-$',
					'tablet'  => 'content-tablet-align-$',
					'mobile'  => 'content-mobile-align-$',
				),
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'left'   => array(
					'tooltip'  => __( 'Left Align', 'codex' ),
					'dashicon' => 'editor-alignleft',
				),
				'center' => array(
					'tooltip'  => __( 'Center Align', 'codex' ),
					'dashicon' => 'editor-aligncenter',
				),
				'right'  => array(
					'tooltip'  => __( 'Right Align', 'codex' ),
					'dashicon' => 'editor-alignright',
				),
			),
			'responsive' => true,
		),
	),
	'footer_widget1_vertical_align' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'sidebar-widgets-footer1',
		'label'        => esc_html__( 'Content Vertical Align', 'codex' ),
		'priority'     => 5,
		'default'      => codex()->default( 'footer_widget1_vertical_align' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'  => array(
			array(
				'type'     => 'class',
				'selector' => '.footer-widget1',
				'pattern'  => array(
					'desktop' => 'content-valign-$',
					'tablet'  => 'content-tablet-valign-$',
					'mobile'  => 'content-mobile-valign-$',
				),
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'top' => array(
					'tooltip' => __( 'Top Align', 'codex' ),
					'icon'    => 'aligntop',
				),
				'middle' => array(
					'tooltip' => __( 'Middle Align', 'codex' ),
					'icon'    => 'alignmiddle',
				),
				'bottom' => array(
					'tooltip' => __( 'Bottom Align', 'codex' ),
					'icon'    => 'alignbottom',
				),
			),
			'responsive' => true,
		),
	),
);

Theme_Customizer::add_settings( $settings );

