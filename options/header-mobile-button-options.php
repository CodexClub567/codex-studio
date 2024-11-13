<?php
/**
 * Header Main Row Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;

Theme_Customizer::add_settings(
	array(
		'mobile_button_tabs' => array(
			'control_type' => 'codex_tab_control',
			'section'      => 'mobile_button',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'codex' ),
					'target' => 'mobile_button',
				),
				'design' => array(
					'label'  => __( 'Design', 'codex' ),
					'target' => 'mobile_button_design',
				),
				'active' => 'general',
			),
		),
		'mobile_button_tabs_design' => array(
			'control_type' => 'codex_tab_control',
			'section'      => 'mobile_button_design',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'codex' ),
					'target' => 'mobile_button',
				),
				'design' => array(
					'label'  => __( 'Design', 'codex' ),
					'target' => 'mobile_button_design',
				),
				'active' => 'design',
			),
		),
		'mobile_button_style' => array(
			'control_type' => 'codex_radio_icon_control',
			'section'      => 'mobile_button',
			'priority'     => 4,
			'default'      => codex()->default( 'mobile_button_style' ),
			'label'        => esc_html__( 'Button Style', 'codex' ),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => '.mobile-header-button-wrap .mobile-header-button',
					'pattern'  => 'button-style-$',
					'key'      => '',
				),
			),
			'input_attrs'  => array(
				'layout' => array(
					'filled' => array(
						'name'    => __( 'Filled', 'codex' ),
					),
					'outline' => array(
						'name'    => __( 'Outline', 'codex' ),
						'icon'    => '',
					),
				),
				'responsive' => false,
			),
		),
		'mobile_button_size' => array(
			'control_type' => 'codex_radio_icon_control',
			'section'      => 'mobile_button',
			'priority'     => 4,
			'default'      => codex()->default( 'mobile_button_size' ),
			'label'        => esc_html__( 'Button Size', 'codex' ),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => '.mobile-header-button-wrap .mobile-header-button',
					'pattern'  => 'button-size-$',
					'key'      => '',
				),
			),
			'input_attrs'  => array(
				'layout' => array(
					'small' => array(
						'name'    => __( 'Small', 'codex' ),
					),
					'medium' => array(
						'name'    => __( 'Medium', 'codex' ),
						'icon'    => '',
					),
					'large' => array(
						'name'    => __( 'Large', 'codex' ),
						'icon'    => '',
					),
				),
				'responsive' => false,
			),
		),
		'mobile_button_label' => array(
			'control_type' => 'codex_text_control',
			'section'      => 'mobile_button',
			'priority'     => 4,
			'sanitize'     => 'sanitize_text_field',
			'label'        => esc_html__( 'Label', 'codex' ),
			'default'      => codex()->default( 'mobile_button_label' ),
			'live_method'     => array(
				array(
					'type'     => 'html',
					'selector' => '.mobile-header-button-wrap .mobile-header-button',
					'pattern'  => '$',
					'key'      => '',
				),
			),
		),
		'mobile_button_link' => array(
			'control_type' => 'codex_text_control',
			'section'      => 'mobile_button',
			'sanitize'     => 'esc_url_raw',
			'label'        => esc_html__( 'URL', 'codex' ),
			'priority'     => 4,
			'default'      => codex()->default( 'mobile_button_link' ),
			'partial'      => array(
				'selector'            => '.mobile-header-button-wrap',
				'container_inclusive' => true,
				'render_callback'     => 'codex\mobile_button',
			),
		),
		'mobile_button_target' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'mobile_button',
			'priority'     => 6,
			'default'      => codex()->default( 'mobile_button_target' ),
			'label'        => esc_html__( 'Open in New Tab?', 'codex' ),
		),
		'mobile_button_nofollow' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'mobile_button',
			'priority'     => 6,
			'default'      => codex()->default( 'mobile_button_nofollow' ),
			'label'        => esc_html__( 'Set link to nofollow?', 'codex' ),
		),
		'mobile_button_sponsored' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'mobile_button',
			'priority'     => 6,
			'default'      => codex()->default( 'mobile_button_sponsored' ),
			'label'        => esc_html__( 'Set link attribute Sponsored?', 'codex' ),
		),
		'mobile_button_visibility' => array(
			'control_type' => 'codex_radio_icon_control',
			'section'      => 'mobile_button',
			'priority'     => 4,
			'default'      => codex()->default( 'mobile_button_visibility' ),
			'label'        => esc_html__( 'Button Visibility', 'codex' ),
			'partial'      => array(
				'selector'            => '.mobile-header-button-wrap',
				'container_inclusive' => true,
				'render_callback'     => 'codex\mobile_button',
			),
			'input_attrs'  => array(
				'layout' => array(
					'all' => array(
						'name'    => __( 'Everyone', 'codex' ),
					),
					'loggedout' => array(
						'name'    => __( 'Logged Out Only', 'codex' ),
					),
					'loggedin' => array(
						'name'    => __( 'Logged In Only', 'codex' ),
					),
				),
				'responsive' => false,
			),
		),
		'mobile_button_color' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'mobile_button_design',
			'label'        => esc_html__( 'Text Colors', 'codex' ),
			'default'      => codex()->default( 'mobile_button_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.mobile-header-button-wrap .mobile-header-button-inner-wrap .mobile-header-button',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.mobile-header-button-wrap .mobile-header-button-inner-wrap .mobile-header-button:hover',
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
		'mobile_button_background' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'mobile_button_design',
			'label'        => esc_html__( 'Background Colors', 'codex' ),
			'default'      => codex()->default( 'mobile_button_background' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.mobile-header-button-wrap .mobile-header-button-inner-wrap .mobile-header-button',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.mobile-header-button-wrap .mobile-header-button-inner-wrap .mobile-header-button:hover',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'hover',
				),
			),
			'context'      => array(
				array(
					'setting'    => 'mobile_button_style',
					'operator'   => '=',
					'value'      => 'filled',
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
		'mobile_button_border_colors' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'mobile_button_design',
			'label'        => esc_html__( 'Border Colors', 'codex' ),
			'default'      => codex()->default( 'mobile_button_border' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.mobile-header-button-wrap .mobile-header-button-inner-wrap .mobile-header-button',
					'property' => 'border-color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.mobile-header-button-wrap .mobile-header-button-inner-wrap .mobile-header-button:hover',
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
		'mobile_button_border' => array(
			'control_type' => 'codex_border_control',
			'section'      => 'mobile_button_design',
			'label'        => esc_html__( 'Border', 'codex' ),
			'default'      => codex()->default( 'mobile_button_border' ),
			'live_method'     => array(
				array(
					'type'     => 'css_border',
					'selector' => '.mobile-header-button-wrap .mobile-header-button-inner-wrap .mobile-header-button',
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
		'mobile_button_radius' => array(
			'control_type' => 'codex_measure_control',
			'section'      => 'mobile_button_design',
			'priority'     => 10,
			'default'      => codex()->default( 'mobile_button_radius' ),
			'label'        => esc_html__( 'Border Radius', 'codex' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.mobile-header-button-wrap .mobile-header-button-inner-wrap .mobile-header-button',
					'property' => 'border-radius',
					'pattern'  => '$',
					'key'      => 'measure',
				),
			),
			'input_attrs'  => array(
				'responsive' => false,
			),
		),
		'mobile_button_typography' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'mobile_button_design',
			'label'        => esc_html__( 'Font', 'codex' ),
			'default'      => codex()->default( 'mobile_button_typography' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '.mobile-header-button-wrap .mobile-header-button-inner-wrap .mobile-header-button',
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
				'id' => 'mobile_button_typography',
				'options' => 'no-color',
			),
		),
		'mobile_button_shadow' => array(
			'control_type' => 'codex_shadow_control',
			'section'      => 'mobile_button_design',
			'label'        => esc_html__( 'Button Shadow', 'codex' ),
			'live_method'     => array(
				array(
					'type'     => 'css_boxshadow',
					'selector' => '.mobile-header-button-wrap .mobile-header-button-inner-wrap .mobile-header-button',
					'property' => 'box-shadow',
					'pattern'  => '$',
					'key'      => '',
				),
			),
			'default'      => codex()->default( 'mobile_button_shadow' ),
		),
		'mobile_button_shadow_hover' => array(
			'control_type' => 'codex_shadow_control',
			'section'      => 'mobile_button_design',
			'label'        => esc_html__( 'Button Hover State Shadow', 'codex' ),
			'live_method'     => array(
				array(
					'type'     => 'css_boxshadow',
					'selector' => '.mobile-header-button-wrap .mobile-header-button-inner-wrap .mobile-header-button',
					'property' => 'box-shadow',
					'pattern'  => '$',
					'key'      => '',
				),
			),
			'default'      => codex()->default( 'mobile_button_shadow_hover' ),
		),
		'mobile_button_margin' => array(
			'control_type' => 'codex_measure_control',
			'section'      => 'mobile_button_design',
			'priority'     => 10,
			'default'      => codex()->default( 'mobile_button_margin' ),
			'label'        => esc_html__( 'Margin', 'codex' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.mobile-header-button-wrap .mobile-header-button',
					'property' => 'margin',
					'pattern'  => '$',
					'key'      => 'measure',
				),
			),
			'input_attrs'  => array(
				'responsive' => false,
			),
		),
	)
);
