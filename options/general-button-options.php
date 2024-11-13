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
		'buttons_color' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'general_buttons',
			'label'        => esc_html__( 'Text Colors', 'codex' ),
			'default'      => codex()->default( 'buttons_color' ),
			'live_method'     => array(
				array(
					'type'     => 'global',
					'selector' => '--global-palette-btn',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'global',
					'selector' => '--global-palette-btn-hover',
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
		'buttons_background' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'general_buttons',
			'label'        => esc_html__( 'Background Colors', 'codex' ),
			'default'      => codex()->default( 'buttons_background' ),
			'live_method'     => array(
				array(
					'type'     => 'global',
					'selector' => '--global-palette-btn-bg',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'global',
					'selector' => '--global-palette-btn-bg-hover',
					'property' => 'background',
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
				'allowGradient' => true,
			),
		),
		'buttons_border_colors' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'general_buttons',
			'label'        => esc_html__( 'Border Colors', 'codex' ),
			'default'      => codex()->default( 'buttons_border' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => 'button, .button, .wp-block-button__link, input[type="button"], input[type="reset"], input[type="submit"]',
					'property' => 'border-color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => 'button:hover, .button:hover, .wp-block-button__link:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover',
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
		'buttons_border' => array(
			'control_type' => 'codex_border_control',
			'section'      => 'general_buttons',
			'label'        => esc_html__( 'Border', 'codex' ),
			'default'      => codex()->default( 'buttons_border' ),
			'live_method'     => array(
				array(
					'type'     => 'css_border',
					'selector' => 'button, .button, .wp-block-button__link, input[type="button"], input[type="reset"], input[type="submit"]',
					'property' => 'border',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
			'input_attrs'  => array(
				'responsive' => true,
				'color'      => false,
			),
		),
		'buttons_border_radius' => array(
			'control_type' => 'codex_range_control',
			'section'      => 'general_buttons',
			'label'        => esc_html__( 'Border Radius', 'codex' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => 'button, .button, .wp-block-button__link, input[type="button"], input[type="reset"], input[type="submit"]',
					'property' => 'border-radius',
					'pattern'  => '$',
					'key'      => 'size',
				),
			),
			'default'      => codex()->default( 'buttons_border_radius' ),
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
				'responsive' => true,
			),
		),
		'buttons_typography' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'general_buttons',
			'label'        => esc_html__( 'Font', 'codex' ),
			'default'      => codex()->default( 'buttons_typography' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => 'button, .button, .wp-block-button__link, input[type="button"], input[type="reset"], input[type="submit"]',
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
				'id' => 'buttons_typography',
				'options' => 'no-color',
			),
		),
		'buttons_padding' => array(
			'control_type' => 'codex_measure_control',
			'section'      => 'general_buttons',
			'priority'     => 10,
			'default'      => codex()->default( 'buttons_padding' ),
			'label'        => esc_html__( 'Padding', 'codex' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => 'button, .button, .wp-block-button__link, input[type="button"], input[type="reset"], input[type="submit"]',
					'property' => 'padding',
					'pattern'  => '$',
					'key'      => 'measure',
				),
			),
			'input_attrs'  => array(
				'responsive' => true,
			),
		),
		'buttons_shadow' => array(
			'control_type' => 'codex_shadow_control',
			'section'      => 'general_buttons',
			'priority'     => 20,
			'label'        => esc_html__( 'Button Shadow', 'codex' ),
			'live_method'     => array(
				array(
					'type'     => 'css_boxshadow',
					'selector' => 'button, .button, .wp-block-button__link, input[type="button"], input[type="reset"], input[type="submit"]',
					'property' => 'box-shadow',
					'pattern'  => '$',
					'key'      => '',
				),
			),
			'default'      => codex()->default( 'buttons_shadow' ),
		),
		'buttons_shadow_hover' => array(
			'control_type' => 'codex_shadow_control',
			'section'      => 'general_buttons',
			'priority'     => 20,
			'label'        => esc_html__( 'Button Hover State Shadow', 'codex' ),
			'live_method'     => array(
				array(
					'type'     => 'css_boxshadow',
					'selector' => 'button:hover, .button:hover, .wp-block-button__link:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover',
					'property' => 'box-shadow',
					'pattern'  => '$',
					'key'      => '',
				),
			),
			'default'      => codex()->default( 'buttons_shadow_hover' ),
		),
	)
);
