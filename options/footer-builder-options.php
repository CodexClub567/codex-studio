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
<!-- <div class="codex-build-tabs nav-tab-wrapper wp-clearfix">
	<a href="#" class="nav-tab preview-desktop codex-build-tabs-button" data-device="desktop">
		<span class="dashicons dashicons-desktop"></span>
		<span><?php esc_html_e( 'Desktop', 'codex' ); ?></span>
	</a>
	<a href="#" class="nav-tab preview-tablet preview-mobile codex-build-tabs-button" data-device="tablet">
		<span class="dashicons dashicons-smartphone"></span>
		<span><?php esc_html_e( 'Tablet / Mobile', 'codex' ); ?></span>
	</a>
</div> -->
<span class="button button-secondary codex-builder-hide-button codex-builder-tab-toggle"><span class="dashicons dashicons-no"></span><?php esc_html_e( 'Hide', 'codex' ); ?></span>
<span class="button button-secondary codex-builder-show-button codex-builder-tab-toggle"><span class="dashicons dashicons-edit"></span><?php esc_html_e( 'Footer Builder', 'codex' ); ?></span>
<?php
$builder_tabs = ob_get_clean();
ob_start(); ?>
<div class="codex-compontent-tabs nav-tab-wrapper wp-clearfix">
	<a href="#" class="nav-tab codex-general-tab codex-compontent-tabs-button nav-tab-active" data-tab="general">
		<span><?php esc_html_e( 'General', 'codex' ); ?></span>
	</a>
	<a href="#" class="nav-tab codex-design-tab codex-compontent-tabs-button" data-tab="design">
		<span><?php esc_html_e( 'Design', 'codex' ); ?></span>
	</a>
</div>
<?php
$compontent_tabs = ob_get_clean();
$settings = array(
	'footer_builder' => array(
		'control_type' => 'codex_blank_control',
		'section'      => 'footer_builder',
		'settings'     => false,
		'description'  => $builder_tabs,
	),
	'footer_items' => array(
		'control_type' => 'codex_builder_control',
		'section'      => 'footer_builder',
		'default'      => codex()->default( 'footer_items' ),
		'partial'      => array(
			'selector'            => '#colophon',
			'container_inclusive' => true,
			'render_callback'     => 'codex\footer_markup',
		),
		'choices'      => array(
			'footer-navigation'          => array(
				'name'    => esc_html__( 'Footer Navigation', 'codex' ),
				'section' => 'codex_customizer_footer_navigation',
			),
			'footer-social'        => array(
				'name'    => esc_html__( 'Social', 'codex' ),
				'section' => 'codex_customizer_footer_social',
			),
			'footer-html'          => array(
				'name'    => esc_html__( 'Copyright', 'codex' ),
				'section' => 'codex_customizer_footer_html',
			),
			'footer-widget1' => array(
				'name'    => esc_html__( 'Widget 1', 'codex' ),
				'section' => 'sidebar-widgets-footer1',
			),
			'footer-widget2' => array(
				'name'    => esc_html__( 'Widget 2', 'codex' ),
				'section' => 'sidebar-widgets-footer2',
			),
			'footer-widget3' => array(
				'name'    => esc_html__( 'Widget 3', 'codex' ),
				'section' => 'sidebar-widgets-footer3',
			),
			'footer-widget4' => array(
				'name'    => esc_html__( 'Widget 4', 'codex' ),
				'section' => 'sidebar-widgets-footer4',
			),
			'footer-widget5' => array(
				'name'    => esc_html__( 'Widget 5', 'codex' ),
				'section' => 'sidebar-widgets-footer5',
			),
			'footer-widget6' => array(
				'name'    => esc_html__( 'Widget 6', 'codex' ),
				'section' => 'sidebar-widgets-footer6',
			),
		),
		'input_attrs'  => array(
			'group' => 'footer_items',
			'rows'  => array( 'top', 'middle', 'bottom' ),
			'zones' => array(
				'top' => array(
					'top_1' => esc_html__( 'Top - 1', 'codex' ),
					'top_2' => esc_html__( 'Top - 2', 'codex' ),
					'top_3' => esc_html__( 'Top - 3', 'codex' ),
					'top_4' => esc_html__( 'Top - 4', 'codex' ),
					'top_5' => esc_html__( 'Top - 5', 'codex' ),
				),
				'middle' => array(
					'middle_1' => esc_html__( 'Middle - 1', 'codex' ),
					'middle_2' => esc_html__( 'Middle - 2', 'codex' ),
					'middle_3' => esc_html__( 'Middle - 3', 'codex' ),
					'middle_4' => esc_html__( 'Middle - 4', 'codex' ),
					'middle_5' => esc_html__( 'Middle - 5', 'codex' ),
				),
				'bottom' => array(
					'bottom_1' => esc_html__( 'Bottom - 1', 'codex' ),
					'bottom_2' => esc_html__( 'Bottom - 2', 'codex' ),
					'bottom_3' => esc_html__( 'Bottom - 3', 'codex' ),
					'bottom_4' => esc_html__( 'Bottom - 4', 'codex' ),
					'bottom_5' => esc_html__( 'Bottom - 5', 'codex' ),
				),
			),
		),
	),
	'footer_tab_settings' => array(
		'control_type' => 'codex_blank_control',
		'section'      => 'footer_layout',
		'settings'     => false,
		'priority'     => 1,
		'description'  => $compontent_tabs,
	),
	'footer_available_items' => array(
		'control_type' => 'codex_available_control',
		'section'      => 'footer_layout',
		'settings'     => false,
		'input_attrs'  => array(
			'group'  => 'footer_items',
			'zones'  => array( 'top', 'middle', 'bottom' ),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
	),
	'footer_wrap_background' => array(
		'control_type' => 'codex_background_control',
		'section'      => 'footer_layout',
		'label'        => esc_html__( 'Footer Background', 'codex' ),
		'default'      => codex()->default( 'footer_wrap_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#colophon',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Footer Background', 'codex' ),
		),
	),
	'enable_footer_on_bottom' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'footer_layout',
		'default'      => codex()->default( 'enable_footer_on_bottom' ),
		'label'        => esc_html__( 'Keep footer on bottom of screen', 'codex' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
	),
);

Theme_Customizer::add_settings( $settings );

