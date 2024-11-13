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
	'header_social_tabs' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'header_social',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'header_social',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'header_social_design',
			),
			'active' => 'general',
		),
	),
	'header_social_tabs_design' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'header_social_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'header_social',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'header_social_design',
			),
			'active' => 'design',
		),
	),
	'header_social_items' => array(
		'control_type' => 'codex_social_control',
		'section'      => 'header_social',
		'priority'     => 6,
		'default'      => codex()->default( 'header_social_items' ),
		'label'        => esc_html__( 'Social Items', 'codex' ),
		'partial'      => array(
			'selector'            => '.header-social-wrap',
			'container_inclusive' => true,
			'render_callback'     => 'codex\header_social',
		),
	),
	'header_social_show_label' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'header_social',
		'priority'     => 8,
		'default'      => codex()->default( 'header_social_show_label' ),
		'label'        => esc_html__( 'Show Icon Label?', 'codex' ),
		'partial'      => array(
			'selector'            => '.header-social-wrap',
			'container_inclusive' => true,
			'render_callback'     => 'codex\header_social',
		),
	),
	'header_social_item_spacing' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'header_social',
		'label'        => esc_html__( 'Item Spacing', 'codex' ),
		'default'      => codex()->default( 'header_social_item_spacing' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.header-social-wrap .header-social-inner-wrap',
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
	'header_social_style' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'header_social_design',
		'priority'     => 10,
		'default'      => codex()->default( 'header_social_style' ),
		'label'        => esc_html__( 'Social Style', 'codex' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.header-social-inner-wrap',
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
	'header_social_icon_size' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'header_social_design',
		'label'        => esc_html__( 'Icon Size', 'codex' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.header-social-wrap .header-social-inner-wrap',
				'property' => 'font-size',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => codex()->default( 'header_social_icon_size' ),
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
	'header_social_brand' => array(
		'control_type' => 'codex_select_control',
		'section'      => 'header_social_design',
		'transport'    => 'refresh',
		'default'      => codex()->default( 'header_social_brand' ),
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
	'header_social_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'header_social_design',
		'label'        => esc_html__( 'Colors', 'codex' ),
		'default'      => codex()->default( 'header_social_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#main-header .header-social-wrap a.social-button',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '#main-header .header-social-wrap a.social-button:hover',
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
	'header_social_background' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'header_social_design',
		'label'        => esc_html__( 'Background Colors', 'codex' ),
		'default'      => codex()->default( 'header_social_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#main-header .header-social-wrap a.social-button',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '#main-header .header-social-wrap a.social-button:hover',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'context'      => array(
			array(
				'setting'  => 'header_social_style',
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
	'header_social_border_colors' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'header_social_design',
		'label'        => esc_html__( 'Border Colors', 'codex' ),
		'default'      => codex()->default( 'header_social_border' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#main-header .header-social-wrap a.social-button',
				'property' => 'border-color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '#main-header .header-social-wrap a.social-button:hover',
				'property' => 'border-color',
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
	'header_social_border' => array(
		'control_type' => 'codex_border_control',
		'section'      => 'header_social_design',
		'label'        => esc_html__( 'Border', 'codex' ),
		'default'      => codex()->default( 'header_social_border' ),
		'live_method'     => array(
			array(
				'type'     => 'css_border',
				'selector' => '.header-social-wrap a.social-button',
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
	'header_social_border_radius' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'header_social_design',
		'label'        => esc_html__( 'Border Radius', 'codex' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.header-social-wrap a.social-button',
				'property' => 'border-radius',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => codex()->default( 'header_social_border_radius' ),
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
	'header_social_typography' => array(
		'control_type' => 'codex_typography_control',
		'section'      => 'header_social_design',
		'label'        => esc_html__( 'Font', 'codex' ),
		'context'      => array(
			array(
				'setting'  => 'header_social_show_label',
				'operator' => '=',
				'value'    => true,
			),
		),
		'default'      => codex()->default( 'header_social_typography' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.header-social-wrap a.social-button .social-label',
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
			'id' => 'header_social_typography',
			'options' => 'no-color',
		),
	),
	'header_social_margin' => array(
		'control_type' => 'codex_measure_control',
		'section'      => 'header_social_design',
		'priority'     => 10,
		'default'      => codex()->default( 'header_social_margin' ),
		'label'        => esc_html__( 'Margin', 'codex' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#main-header .header-social-wrap',
				'property' => 'margin',
				'pattern'  => '$',
				'key'      => 'measure',
			),
		),
		'input_attrs'  => array(
			'responsive' => false,
		),
	),
	'header_social_link_to_social_links' => array(
		'control_type' => 'codex_focus_button_control',
		'section'      => 'header_social',
		'settings'     => false,
		'priority'     => 25,
		'label'        => esc_html__( 'Set Social Links', 'codex' ),
		'input_attrs'  => array(
			'section' => 'codex_customizer_general_social',
		),
	),
);

Theme_Customizer::add_settings( $settings );