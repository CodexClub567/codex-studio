<?php
/**
 * Header Main Row Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;

$settings = array(
	'header_html_tabs' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'header_html',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'header_html',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'header_html_design',
			),
			'active' => 'general',
		),
	),
	'header_html_tabs_design' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'header_html_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'header_html',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'header_html_design',
			),
			'active' => 'design',
		),
	),
	'header_html_content' => array(
		'control_type' => 'codex_editor_control',
		'section'      => 'header_html',
		'sanitize'     => 'wp_kses_post',
		'priority'     => 4,
		'default'      => codex()->default( 'header_html_content' ),
		'partial'      => array(
			'selector'            => '.header-html',
			'container_inclusive' => true,
			'render_callback'     => 'codex\header_html',
		),
		'input_attrs'  => array(
			'id' => 'header_html',
		),
	),
	'header_html_wpautop' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'header_html',
		'default'      => codex()->default( 'header_html_wpautop' ),
		'label'        => esc_html__( 'Automatically Add Paragraphs', 'codex' ),
		'partial'      => array(
			'selector'            => '.header-html',
			'container_inclusive' => true,
			'render_callback'     => 'codex\header_html',
		),
	),
	'header_html_typography' => array(
		'control_type' => 'codex_typography_control',
		'section'      => 'header_html_design',
		'label'        => esc_html__( 'Font', 'codex' ),
		'default'      => codex()->default( 'header_html_typography' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '#main-header .header-html',
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
			'id' => 'header_html_typography',
		),
	),
	'header_html_link_style' => array(
		'control_type' => 'codex_select_control',
		'section'      => 'header_html_design',
		'default'      => codex()->default( 'header_html_link_style' ),
		'label'        => esc_html__( 'Link Style', 'codex' ),
		'input_attrs'  => array(
			'options' => array(
				'normal' => array(
					'name' => __( 'Underline', 'codex' ),
				),
				'plain' => array(
					'name' => __( 'No Underline', 'codex' ),
				),
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '#main-header .header-html',
				'pattern'  => 'inner-link-style-$',
				'key'      => '',
			),
		),
	),
	'header_html_link_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'header_html_design',
		'label'        => esc_html__( 'Link Colors', 'codex' ),
		'default'      => codex()->default( 'header_html_link_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#main-header .header-html a',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '#main-header .header-html a:hover',
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
	'header_html_margin' => array(
		'control_type' => 'codex_measure_control',
		'section'      => 'header_html_design',
		'priority'     => 10,
		'default'      => codex()->default( 'header_html_margin' ),
		'label'        => esc_html__( 'Margin', 'codex' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#main-header .header-html',
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

