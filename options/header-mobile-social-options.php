<?php
/**
 * Header Builder Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;

$settings = array(
	'mobile_social_tabs' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'mobile_social',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'mobile_social',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'mobile_social_design',
			),
			'active' => 'general',
		),
	),
	'mobile_social_tabs_design' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'mobile_social_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'mobile_social',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'mobile_social_design',
			),
			'active' => 'design',
		),
	),
	'header_mobile_social_items' => array(
		'control_type' => 'codex_social_control',
		'section'      => 'mobile_social',
		'priority'     => 6,
		'default'      => codex()->default( 'header_mobile_social_items' ),
		'label'        => esc_html__( 'Social Items', 'codex' ),
		'partial'      => array(
			'selector'            => '.header-mobile-social-wrap',
			'container_inclusive' => true,
			'render_callback'     => 'codex\mobile_social',
		),
	),
	'header_mobile_social_show_label' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'mobile_social',
		'priority'     => 8,
		'default'      => codex()->default( 'header_mobile_social_show_label' ),
		'label'        => esc_html__( 'Show Icon Label?', 'codex' ),
		'partial'      => array(
			'selector'            => '.header-mobile-social-wrap',
			'container_inclusive' => true,
			'render_callback'     => 'codex\mobile_social',
		),
	),
	'header_mobile_social_item_spacing' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'mobile_social',
		'label'        => esc_html__( 'Item Spacing', 'codex' ),
		'default'      => codex()->default( 'header_mobile_social_item_spacing' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.header-mobile-social-wrap .header-mobile-social-inner-wrap',
				'property' => 'gap',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'input_attrs'  => array(
			'min'        => array(
				'px'  => 0,
				'em'  => 0,
				'rem' => 0,
			),
			'max'        => array(
				'px'  => 50,
				'em'  => 3,
				'rem' => 3,
			),
			'step'       => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
			),
			'units'      => array( 'px', 'em', 'rem' ),
			'responsive' => false,
		),
	),
	'header_mobile_social_style' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'mobile_social',
		'priority'     => 10,
		'default'      => codex()->default( 'header_mobile_social_style' ),
		'label'        => esc_html__( 'Social Style', 'codex' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.header-mobile-social-inner-wrap',
				'pattern'  => 'social-style-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'filled' => array(
					'name' => __( 'Filled', 'codex' ),
				),
				'outline' => array(
					'name' => __( 'Outline', 'codex' ),
				),
			),
			'responsive' => false,
		),
	),
	'header_mobile_social_icon_size' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'mobile_social_design',
		'label'        => esc_html__( 'Icon Size', 'codex' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.header-mobile-social-wrap .header-mobile-social-inner-wrap',
				'property' => 'font-size',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => codex()->default( 'header_mobile_social_icon_size' ),
		'input_attrs'  => array(
			'min'        => array(
				'px'  => 0,
				'em'  => 0,
				'rem' => 0,
			),
			'max'        => array(
				'px'  => 100,
				'em'  => 12,
				'rem' => 12,
			),
			'step'       => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
			),
			'units'      => array( 'px', 'em', 'rem' ),
			'responsive' => false,
		),
	),
	'header_mobile_social_brand' => array(
		'control_type' => 'codex_select_control',
		'section'      => 'mobile_social_design',
		'transport'    => 'refresh',
		'default'      => codex()->default( 'header_mobile_social_brand' ),
		'label'        => esc_html__( 'Use Brand Colors?', 'codex' ),
		'input_attrs'  => array(
			'options' => array(
				'' => array(
					'name' => __( 'No', 'codex' ),
				),
				'always' => array(
					'name' => __( 'Yes', 'codex' ),
				),
				'onhover' => array(
					'name' => __( 'On Hover', 'codex' ),
				),
				'untilhover' => array(
					'name' => __( 'Until Hover', 'codex' ),
				),
			),
		),
	),
	'header_mobile_social_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'mobile_social_design',
		'label'        => esc_html__( 'Colors', 'codex' ),
		'default'      => codex()->default( 'header_mobile_social_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.header-mobile-social-wrap a.social-button',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.header-mobile-social-wrap a.social-button:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Initial Color', 'codex' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Hover Color', 'codex' ),
					'palette' => true,
				),
			),
		),
	),
	'header_mobile_social_background' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'mobile_social_design',
		'label'        => esc_html__( 'Background Colors', 'codex' ),
		'default'      => codex()->default( 'header_mobile_social_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.header-mobile-social-wrap a.social-button',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.header-mobile-social-wrap a.social-button:hover',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'context'      => array(
			array(
				'setting'  => 'header_mobile_social_style',
				'operator' => '=',
				'value'    => 'filled',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Initial Color', 'codex' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Hover Color', 'codex' ),
					'palette' => true,
				),
			),
		),
	),
	'header_mobile_social_border_colors' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'mobile_social_design',
		'label'        => esc_html__( 'Border Colors', 'codex' ),
		'default'      => codex()->default( 'header_mobile_social_border' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#mobile-header .header-mobile-social-wrap a.social-button, #mobile-drawer .header-mobile-social-wrap a.social-button',
				'property' => 'border-color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '#mobile-header .header-mobile-social-wrap a.social-button:hover, #mobile-drawer .header-mobile-social-wrap a.social-button:hover',
				'property' => 'border-color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( ' Color', 'codex' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Hover Color', 'codex' ),
					'palette' => true,
				),
			),
		),
	),
	'header_mobile_social_border' => array(
		'control_type' => 'codex_border_control',
		'section'      => 'mobile_social_design',
		'label'        => esc_html__( 'Border', 'codex' ),
		'default'      => codex()->default( 'header_mobile_social_border' ),
		'live_method'     => array(
			array(
				'type'     => 'css_border',
				'selector' => '.header-mobile-social-wrap a.social-button',
				'property' => 'border',
				'pattern'  => '$',
				'key'      => 'border',
			),
		),
		'input_attrs'  => array(
			'responsive' => false,
			'color'      => false,
		),
	),
	'header_mobile_social_border_radius' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'mobile_social_design',
		'label'        => esc_html__( 'Border Radius', 'codex' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.header-mobile-social-wrap a.social-button',
				'property' => 'border-radius',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => codex()->default( 'header_mobile_social_border_radius' ),
		'input_attrs'  => array(
			'min'        => array(
				'px'  => 0,
				'em'  => 0,
				'rem' => 0,
				'%'   => 0,
			),
			'max'        => array(
				'px'  => 100,
				'em'  => 12,
				'rem' => 12,
				'%'   => 100,
			),
			'step'       => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
				'%'   => 1,
			),
			'units'      => array( 'px', 'em', 'rem', '%' ),
			'responsive' => false,
		),
	),
	'header_mobile_social_typography' => array(
		'control_type' => 'codex_typography_control',
		'section'      => 'mobile_social_design',
		'label'        => esc_html__( 'Font', 'codex' ),
		'context'      => array(
			array(
				'setting'  => 'header_mobile_social_show_label',
				'operator' => '=',
				'value'    => true,
			),
		),
		'default'      => codex()->default( 'header_mobile_social_typography' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.header-mobile-social-wrap a.social-button .social-label',
				'pattern'  => array(
					'desktop' => '$',
					'tablet'  => '$',
					'mobile'  => '$',
				),
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id' => 'header_mobile_social_typography',
			'options' => 'no-color',
		),
	),
	'header_mobile_social_margin' => array(
		'control_type' => 'codex_measure_control',
		'section'      => 'mobile_social_design',
		'priority'     => 10,
		'default'      => codex()->default( 'header_mobile_social_margin' ),
		'label'        => esc_html__( 'Margin', 'codex' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#mobile-header .header-mobile-social-wrap, #mobile-drawer .header-mobile-social-wrap',
				'property' => 'margin',
				'pattern'  => '$',
				'key'      => 'measure',
			),
		),
		'input_attrs'  => array(
			'responsive' => false,
		),
	),
);

Theme_Customizer::add_settings( $settings );

