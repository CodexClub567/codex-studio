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
	'footer_social_tabs' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'footer_social',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'footer_social',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'footer_social_design',
			),
			'active' => 'general',
		),
	),
	'footer_social_tabs_design' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'footer_social_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'footer_social',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'footer_social_design',
			),
			'active' => 'design',
		),
	),
	'footer_social_title' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'footer_social',
		'sanitize'     => 'sanitize_text_field',
		'priority'     => 4,
		'label'        => esc_html__( 'Title', 'codex' ),
		'default'      => codex()->default( 'footer_social_title' ),
		'partial'      => array(
			'selector'            => '.footer-social-wrap',
			'container_inclusive' => true,
			'render_callback'     => 'codex\footer_social',
		),
	),
	'footer_social_items' => array(
		'control_type' => 'codex_social_control',
		'section'      => 'footer_social',
		'priority'     => 6,
		'default'      => codex()->default( 'footer_social_items' ),
		'label'        => esc_html__( 'Social Items', 'codex' ),
		'partial'      => array(
			'selector'            => '.footer-social-wrap',
			'container_inclusive' => true,
			'render_callback'     => 'codex\footer_social',
		),
	),
	'footer_social_show_label' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'footer_social',
		'priority'     => 8,
		'default'      => codex()->default( 'footer_social_show_label' ),
		'label'        => esc_html__( 'Show Icon Label?', 'codex' ),
		'partial'      => array(
			'selector'            => '.footer-social-wrap',
			'container_inclusive' => true,
			'render_callback'     => 'codex\footer_social',
		),
	),
	'footer_social_item_spacing' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'footer_social',
		'label'        => esc_html__( 'Item Spacing', 'codex' ),
		'default'      => codex()->default( 'footer_social_item_spacing' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#colophon .site-footer-wrap .footer-social-wrap .footer-social-inner-wrap',
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
	'footer_social_align' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'footer_social',
		'label'        => esc_html__( 'Content Align', 'codex' ),
		'priority'     => 10,
		'default'      => codex()->default( 'footer_social_align' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.footer-social',
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
	'footer_social_vertical_align' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'footer_social',
		'label'        => esc_html__( 'Content Vertical Align', 'codex' ),
		'priority'     => 10,
		'default'      => codex()->default( 'footer_social_vertical_align' ),
		'live_method'  => array(
			array(
				'type'     => 'class',
				'selector' => '.footer-social',
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
	'footer_social_style' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'footer_social_design',
		'priority'     => 10,
		'default'      => codex()->default( 'footer_social_style' ),
		'label'        => esc_html__( 'Social Style', 'codex' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.footer-social-inner-wrap',
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
	'footer_social_icon_size' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'footer_social_design',
		'label'        => esc_html__( 'Icon Size', 'codex' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.footer-social-wrap .footer-social-inner-wrap',
				'property' => 'font-size',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => codex()->default( 'footer_social_icon_size' ),
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
	'footer_social_brand' => array(
		'control_type' => 'codex_select_control',
		'section'      => 'footer_social_design',
		'transport'    => 'refresh',
		'default'      => codex()->default( 'footer_social_brand' ),
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
	'footer_social_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'footer_social_design',
		'label'        => esc_html__( 'Colors', 'codex' ),
		'default'      => codex()->default( 'footer_social_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.site-footer .site-footer-wrap .site-footer-section .footer-social-wrap .footer-social-inner-wrap .social-button',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.site-footer .site-footer-wrap .site-footer-section .footer-social-wrap .footer-social-inner-wrap .social-button:hover',
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
	'footer_social_background' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'footer_social_design',
		'label'        => esc_html__( 'Background Colors', 'codex' ),
		'default'      => codex()->default( 'footer_social_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.site-footer .site-footer-wrap .site-footer-section .footer-social-wrap .footer-social-inner-wrap .social-button',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.site-footer .site-footer-wrap .site-footer-section .footer-social-wrap .footer-social-inner-wrap .social-button:hover',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'context'      => array(
			array(
				'setting'  => 'footer_social_style',
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
	'footer_social_border_colors' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'footer_social_design',
		'label'        => esc_html__( 'Border Colors', 'codex' ),
		'default'      => codex()->default( 'footer_social_border' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.site-footer .site-footer-wrap .site-footer-section .footer-social-wrap .footer-social-inner-wrap .social-button',
				'property' => 'border-color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.site-footer .site-footer-wrap .site-footer-section .footer-social-wrap .footer-social-inner-wrap .social-button:hover',
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
	'footer_social_border' => array(
		'control_type' => 'codex_border_control',
		'section'      => 'footer_social_design',
		'label'        => esc_html__( 'Border', 'codex' ),
		'default'      => codex()->default( 'footer_social_border' ),
		'live_method'     => array(
			array(
				'type'     => 'css_border',
				'selector' => '.site-footer .site-footer-wrap .site-footer-section .footer-social-wrap .footer-social-inner-wrap .social-button',
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
	'footer_social_border_radius' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'footer_social_design',
		'label'        => esc_html__( 'Border Radius', 'codex' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.site-footer .site-footer-wrap .site-footer-section .footer-social-wrap .footer-social-inner-wrap .social-button',
				'property' => 'border-radius',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => codex()->default( 'footer_social_border_radius' ),
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
	'footer_social_typography' => array(
		'control_type' => 'codex_typography_control',
		'section'      => 'footer_social_design',
		'label'        => esc_html__( 'Font', 'codex' ),
		'context'      => array(
			array(
				'setting'  => 'footer_social_show_label',
				'operator' => '=',
				'value'    => true,
			),
		),
		'default'      => codex()->default( 'footer_social_typography' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.footer-social-wrap a.social-button .social-label',
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
			'id' => 'footer_social_typography',
			'options' => 'no-color',
		),
	),
	'footer_social_margin' => array(
		'control_type' => 'codex_measure_control',
		'section'      => 'footer_social_design',
		'priority'     => 10,
		'default'      => codex()->default( 'footer_social_margin' ),
		'label'        => esc_html__( 'Margin', 'codex' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#colophon .footer-social-wrap',
				'property' => 'margin',
				'pattern'  => '$',
				'key'      => 'measure',
			),
		),
		'input_attrs'  => array(
			'responsive' => false,
		),
	),
	'footer_social_link_to_social_links' => array(
		'control_type' => 'codex_focus_button_control',
		'section'      => 'footer_social',
		'settings'     => false,
		'priority'     => 25,
		'label'        => esc_html__( 'Set Social Links', 'codex' ),
		'input_attrs'  => array(
			'section' => 'codex_customizer_general_social',
		),
	),
);

Theme_Customizer::add_settings( $settings );

