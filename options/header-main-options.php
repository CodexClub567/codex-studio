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
	<a href="#" class="nav-tab codex-design-tab codex-compontent-tabs-button" data-tab="design">
		<span><?php esc_html_e( 'Design', 'codex' ); ?></span>
	</a>
</div>
<?php
$compontent_tabs = ob_get_clean();
$settings = array(
	'header_main_tabs' => array(
		'control_type' => 'codex_blank_control',
		'section'      => 'header_main',
		'settings'     => false,
		'priority'     => 1,
		'description'  => $compontent_tabs,
	),
	'header_main_layout' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'header_main',
		'priority'     => 4,
		'default'      => codex()->default( 'header_main_layout' ),
		'label'        => esc_html__( 'Layout', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => array(
					'desktop' => '.site-main-header-wrap',
					'tablet'  => '#mobile-header .site-main-header-wrap',
					'mobile'  => '#mobile-header .site-main-header-wrap',
				),
				'pattern'  => array(
					'desktop' => 'site-header-row-layout-$',
					'tablet'  => 'site-header-row-tablet-layout-$',
					'mobile'  => 'site-header-row-mobile-layout-$',
				),
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'standard' => array(
					'tooltip' => __( 'Background Fullwidth, Content Contained', 'codex' ),
					'name'    => __( 'Standard', 'codex' ),
					'icon'    => '',
				),
				'fullwidth' => array(
					'tooltip' => __( 'Background & Content Fullwidth', 'codex' ),
					'name'    => __( 'Fullwidth', 'codex' ),
					'icon'    => '',
				),
				'contained' => array(
					'tooltip' => __( 'Background & Content Contained', 'codex' ),
					'name'    => __( 'Contained', 'codex' ),
					'icon'    => '',
				),
			),
		),
	),
	'header_main_height' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'header_main',
		'priority'     => 5,
		'label'        => esc_html__( 'Min Height', 'codex' ),
		'transport'    => ( 'no' !== codex()->option( 'header_sticky' ) ? 'refresh' : 'postMessage' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#masthead .site-main-header-inner-wrap',
				'property' => 'min-height',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => codex()->default( 'header_main_height' ),
		'input_attrs'  => array(
			'min'     => array(
				'px'  => 10,
				'em'  => 1,
				'rem' => 1,
				'vh'  => 2,
			),
			'max'     => array(
				'px'  => 400,
				'em'  => 12,
				'rem' => 12,
				'vh'  => 40,
			),
			'step'    => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
				'vh'  => 1,
			),
			'units'   => array( 'px', 'em', 'rem', 'vh' ),
		),
	),
	'header_main_background' => array(
		'control_type' => 'codex_background_control',
		'section'      => 'header_main',
		'label'        => esc_html__( 'Main Row Background', 'codex' ),
		'default'      => codex()->default( 'header_main_background' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '.site-main-header-wrap .site-header-row-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Main Row Background', 'codex' ),
		),
	),
	'header_main_border' => array(
		'control_type' => 'codex_borders_control',
		'section'      => 'header_main',
		'label'        => esc_html__( 'Border', 'codex' ),
		'default'      => codex()->default( 'header_main_border' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'settings'     => array(
			'border_top'    => 'header_main_top_border',
			'border_bottom' => 'header_main_bottom_border',
		),
		'live_method'     => array(
			'header_main_top_border' => array(
				array(
					'type'     => 'css_border',
					'selector' => array(
						'desktop' => '.site-main-header-wrap .site-header-row-container-inner',
						'tablet'  => '#mobile-header .site-main-header-wrap .site-header-row-container-inner',
						'mobile'  => '#mobile-header .site-main-header-wrap .site-header-row-container-inner',
					),
					'pattern'  => array(
						'desktop' => '$',
						'tablet'  => '$',
						'mobile'  => '$',
					),
					'property' => 'border-top',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
			'header_main_bottom_border' => array( 
				array(
					'type'     => 'css_border',
					'selector' => array(
						'desktop' => '.site-main-header-wrap .site-header-row-container-inner',
						'tablet'  => '#mobile-header .site-main-header-wrap .site-header-row-container-inner',
						'mobile'  => '#mobile-header .site-main-header-wrap .site-header-row-container-inner',
					),
					'pattern'  => array(
						'desktop' => '$',
						'tablet'  => '$',
						'mobile'  => '$',
					),
					'property' => 'border-bottom',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
	),
	'header_main_padding' => array(
		'control_type' => 'codex_measure_control',
		'section'      => 'header_main',
		'default'      => codex()->default( 'header_main_padding' ),
		'label'        => esc_html__( 'Padding', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.site-main-header-wrap .site-header-row-container-inner>.site-container',
				'property' => 'padding',
				'pattern'  => '$',
				'key'      => 'measure',
			),
		),
		'input_attrs'  => array(
			'min'        => array(
				'px'  => 0,
				'em'  => 0,
				'rem' => 0,
			),
			'max'        => array(
				'px'  => 100,
				'em'  => 6,
				'rem' => 6,
			),
			'step'       => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
			),
			'units'      => array( 'px', 'em', 'rem' ),
			'responsive' => true,
		),
	),
	'header_main_trans_background' => array(
		'control_type' => 'codex_background_control',
		'section'      => 'header_main',
		'label'        => esc_html__( '(When Transparent Header) Main Row Background', 'codex' ),
		'default'      => codex()->default( 'header_main_trans_background' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
			array(
				'setting'  => 'transparent_header_enable',
				'operator' => '=',
				'value'    => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '.transparent-header #masthead .site-main-header-wrap .site-header-row-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Transparent Header Main Row Background', 'codex' ),
		),
	),
);

Theme_Customizer::add_settings( $settings );

