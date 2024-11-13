<?php
/**
 * Header Builder Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;

Theme_Customizer::add_settings(
	array(
		// 'load_font_pairing' => array(
		// 	'control_type' => 'codex_font_pairing',
		// 	'section'      => 'general_typography',
		// 	'label'        => esc_html__( 'Font Pairings', 'codex' ),
		// 	'settings'     => false,
		// ),
		'base_font' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'general_typography',
			'label'        => esc_html__( 'Base Font', 'codex' ),
			'default'      => codex()->default( 'base_font' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => 'body',
					'property' => 'font',
					'key'      => 'typography',
				),
				array(
					'type'     => 'css',
					'property' => '--global-body-font-family',
					'selector' => 'body',
					'pattern'  => '$',
					'key'      => 'family',
				),
			),
			'input_attrs'  => array(
				'id'         => 'base_font',
				'canInherit' => false,
			),
		),
		'load_base_italic' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'general_typography',
			'default'      => codex()->default( 'load_base_italic' ),
			'label'        => esc_html__( 'Load Italics Font Styles', 'codex' ),
			'context'      => array(
				array(
					'setting' => 'base_font',
					'operator'   => 'load_italic',
					'value'   => 'true',
				),
			),
		),
		'info_heading' => array(
			'control_type' => 'codex_title_control',
			'section'      => 'general_typography',
			'label'        => esc_html__( 'Headings', 'codex' ),
			'settings'     => false,
		),
		'heading_font' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'general_typography',
			'label'        => esc_html__( 'Heading Font Family', 'codex' ),
			'default'      => codex()->default( 'heading_font' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => 'h1,h2,h3,h4,h5,h6',
					'property' => 'font',
					'key'      => 'family',
				),
				array(
					'type'     => 'css',
					'property' => '--global-heading-font-family',
					'selector' => 'body',
					'pattern'  => '$',
					'key'      => 'family',
				),
			),
			'input_attrs'  => array(
				'id'      => 'heading_font',
				'options' => 'family',
			),
		),
		'h1_font' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'general_typography',
			'label'        => esc_html__( 'H1 Font', 'codex' ),
			'default'      => codex()->default( 'h1_font' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => 'h1',
					'property' => 'font',
					'key'      => 'typography',
				),
			),
			'input_attrs'  => array(
				'id'             => 'h1_font',
				'headingInherit' => true,
			),
		),
		'h2_font' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'general_typography',
			'label'        => esc_html__( 'H2 Font', 'codex' ),
			'default'      => codex()->default( 'h2_font' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => 'h2',
					'property' => 'font',
					'key'      => 'typography',
				),
			),
			'input_attrs'  => array(
				'id'             => 'h2_font',
				'headingInherit' => true,
			),
		),
		'h3_font' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'general_typography',
			'label'        => esc_html__( 'H3 Font', 'codex' ),
			'default'      => codex()->default( 'h3_font' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => 'h3',
					'property' => 'font',
					'key'      => 'typography',
				),
			),
			'input_attrs'  => array(
				'id'             => 'h3_font',
				'headingInherit' => true,
			),
		),
		'h4_font' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'general_typography',
			'label'        => esc_html__( 'H4 Font', 'codex' ),
			'default'      => codex()->default( 'h4_font' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => 'h4',
					'property' => 'font',
					'key'      => 'typography',
				),
			),
			'input_attrs'  => array(
				'id'             => 'h4_font',
				'headingInherit' => true,
			),
		),
		'h5_font' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'general_typography',
			'label'        => esc_html__( 'H5 Font', 'codex' ),
			'default'      => codex()->default( 'h5_font' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => 'h5',
					'property' => 'font',
					'key'      => 'typography',
				),
			),
			'input_attrs'  => array(
				'id'             => 'h5_font',
				'headingInherit' => true,
			),
		),
		'h6_font' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'general_typography',
			'label'        => esc_html__( 'H6 Font', 'codex' ),
			'default'      => codex()->default( 'h6_font' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => 'h6',
					'property' => 'font',
					'key'      => 'typography',
				),
			),
			'input_attrs'  => array(
				'id'             => 'h6_font',
				'headingInherit' => true,
			),
		),
		'info_above_title_heading' => array(
			'control_type' => 'codex_title_control',
			'section'      => 'general_typography',
			'label'        => esc_html__( 'Title Above Content', 'codex' ),
			'settings'     => false,
		),
		'title_above_font' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'general_typography',
			'label'        => esc_html__( 'H1 Title', 'codex' ),
			'default'      => codex()->default( 'title_above_font' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '.entry-hero h1',
					'property' => 'font',
					'key'      => 'typography',
				),
			),
			'input_attrs'  => array(
				'id'             => 'title_above_font',
				'headingInherit' => true,
			),
		),
		'title_above_breadcrumb_font' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'general_typography',
			'label'        => esc_html__( 'Breadcrumbs', 'codex' ),
			'default'      => codex()->default( 'title_above_breadcrumb_font' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '.entry-hero .codex-breadcrumbs',
					'property' => 'font',
					'key'      => 'typography',
				),
			),
			'input_attrs'  => array(
				'id'      => 'title_above_breadcrumb_font',
			),
		),
		'font_rendering' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'general_typography',
			'transport'    => 'refresh',
			'default'      => codex()->default( 'font_rendering' ),
			'label'        => esc_html__( 'Enable Font Smoothing', 'codex' ),
		),
		'google_subsets' => array(
			'control_type' => 'codex_check_icon_control',
			'section'      => 'general_typography',
			'sanitize'     => 'codex_sanitize_google_subsets',
			'priority'     => 20,
			'default'      => array(),
			'label'        => esc_html__( 'Google Font Subsets', 'codex' ),
			'input_attrs'  => array(
				'options' => array(
					'latin-ext' => array(
						'name' => __( 'Latin Extended', 'codex' ),
					),
					'cyrillic' => array(
						'name' => __( 'Cyrillic', 'codex' ),
					),
					'cyrillic-ext' => array(
						'name' => __( 'Cyrillic Extended', 'codex' ),
					),
					'greek' => array(
						'name' => __( 'Greek', 'codex' ),
					),
					'greek-ext' => array(
						'name' => __( 'Greek Extended', 'codex' ),
					),
					'vietnamese' => array(
						'name' => __( 'Vietnamese', 'codex' ),
					),
					'arabic' => array(
						'name' => __( 'Arabic', 'codex' ),
					),
					'khmer' => array(
						'name' => __( 'Khmer', 'codex' ),
					),
					'chinese' => array(
						'name' => __( 'Chinese', 'codex' ),
					),
					'chinese-simplified' => array(
						'name' => __( 'Chinese Simplified', 'codex' ),
					),
					'tamil' => array(
						'name' => __( 'Tamil', 'codex' ),
					),
					'bengali' => array(
						'name' => __( 'Bengali', 'codex' ),
					),
					'devanagari' => array(
						'name' => __( 'Devanagari', 'codex' ),
					),
					'hebrew' => array(
						'name' => __( 'Hebrew', 'codex' ),
					),
					'korean' => array(
						'name' => __( 'Korean', 'codex' ),
					),
					'thai' => array(
						'name' => __( 'Thai', 'codex' ),
					),
					'telugu' => array(
						'name' => __( 'Telugu', 'codex' ),
					),
				),
			),
		),
	)
);
