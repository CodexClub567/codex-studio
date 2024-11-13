<?php
/**
 * Header Top Row Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;

$codex_trans_settings = array(
	'transparent_header_tabs' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'transparent_header',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'transparent_header',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'transparent_header_design',
			),
			'active' => 'general',
		),
	),
	'transparent_header_tabs_design' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'transparent_header_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'transparent_header',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'transparent_header_design',
			),
			'active' => 'design',
		),
	),
	'transparent_header_enable' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'transparent_header',
		'priority'     => 5,
		'default'      => codex()->default( 'transparent_header_enable' ),
		'label'        => esc_html__( 'Enable Transparent Header?', 'codex' ),
		'transport'    => 'refresh',
	),
	'transparent_header_archive' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'transparent_header',
		'priority'     => 5,
		'default'      => codex()->default( 'transparent_header_archive' ),
		'label'        => esc_html__( 'Disable Search and Archives?', 'codex' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'  => 'transparent_header_enable',
				'operator' => '=',
				'value'    => true,
			),
		),
	),
	'transparent_header_page' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'transparent_header',
		'priority'     => 5,
		'default'      => codex()->default( 'transparent_header_page' ),
		'label'        => esc_html__( 'Disable on Pages?', 'codex' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'  => 'transparent_header_enable',
				'operator' => '=',
				'value'    => true,
			),
		),
	),
	'transparent_header_post' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'transparent_header',
		'priority'     => 5,
		'default'      => codex()->default( 'transparent_header_post' ),
		'label'        => esc_html__( 'Disable on Posts?', 'codex' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'  => 'transparent_header_enable',
				'operator' => '=',
				'value'    => true,
			),
		),
	),
	'transparent_header_device' => array(
		'control_type' => 'codex_check_icon_control',
		'section'      => 'transparent_header',
		'priority'     => 10,
		'transport'    => 'refresh',
		'default'      => codex()->default( 'transparent_header_device' ),
		'label'        => esc_html__( 'Enable for:', 'codex' ),
		'context'      => array(
			array(
				'setting'  => 'transparent_header_enable',
				'operator' => '=',
				'value'    => true,
			),
		),
		'input_attrs'  => array(
			'options' => array(
				'desktop' => array(
					'name' => __( 'Desktop', 'codex' ),
					'icon' => 'desktop',
				),
				'mobile' => array(
					'name' => __( 'Mobile', 'codex' ),
					'icon' => 'smartphone',
				),
			),
		),
	),
	'transparent_header_custom_logo' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'transparent_header',
		'transport'    => 'refresh',
		'priority'     => 12,
		'default'      => codex()->default( 'transparent_header_custom_logo' ),
		'label'        => esc_html__( 'Different Logo for Transparent Header?', 'codex' ),
		'context'      => array(
			array(
				'setting'    => 'logo_layout',
				'operator'   => 'sub_object_contains',
				'sub_key'    => 'include',
				'responsive' => true,
				'value'      => 'logo',
			),
			array(
				'setting'  => 'transparent_header_enable',
				'operator' => '=',
				'value'    => true,
			),
		),
	),
	'transparent_header_logo' => array(
		'control_type' => 'media',
		'section'      => 'transparent_header',
		'transport'    => 'refresh',
		'priority'     => 12,
		'mime_type'    => 'image',
		'default'      => '',
		'label'        => esc_html__( 'Transparent Header Logo', 'codex' ),
		'context'      => array(
			array(
				'setting'    => 'logo_layout',
				'operator'   => 'sub_object_contains',
				'sub_key'    => 'include',
				'responsive' => true,
				'value'      => 'logo',
			),
			array(
				'setting'  => 'transparent_header_enable',
				'operator' => '=',
				'value'    => true,
			),
			array(
				'setting'  => 'transparent_header_custom_logo',
				'operator' => '=',
				'value'    => true,
			),
		),
	),
	'transparent_header_logo_width' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'transparent_header',
		'priority'     => 12,
		'label'        => esc_html__( 'Logo Max Width', 'codex' ),
		'description'  => esc_html__( 'Define the maxium width for the logo', 'codex' ),
		'context'      => array(
			array(
				'setting'    => 'logo_layout',
				'operator'   => 'sub_object_contains',
				'sub_key'    => 'include',
				'responsive' => true,
				'value'      => 'logo',
			),
			array(
				'setting'  => 'transparent_header_enable',
				'operator' => '=',
				'value'    => true,
			),
			array(
				'setting'  => 'transparent_header_custom_logo',
				'operator' => '=',
				'value'    => true,
			),
			array(
				'setting'  => 'transparent_header_logo',
				'operator' => '!empty',
				'value'    => '',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .site-branding img',
				'property' => 'max-width',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => codex()->default( 'transparent_header_logo_width' ),
		'input_attrs'  => array(
			'min'     => array(
				'px'  => 10,
				'em'  => 1,
				'rem' => 1,
				'vw'  => 2,
				'%'   => 2,
			),
			'max'     => array(
				'px'  => 800,
				'em'  => 12,
				'rem' => 12,
				'vw'  => 80,
				'%'   => 80,
			),
			'step'    => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
				'vw'  => 1,
				'%'   => 1,
			),
			'units'   => array( 'px', 'em', 'rem', 'vw', '%' ),
		),
	),
	'transparent_header_custom_mobile_logo' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'transparent_header',
		'transport'    => 'refresh',
		'priority'     => 12,
		'default'      => codex()->default( 'use_mobile_logo' ),
		'label'        => esc_html__( 'Different Logo for Mobile?', 'codex' ),
		'context'      => array(
			array(
				'setting'    => 'logo_layout',
				'operator'   => 'sub_object_contains',
				'sub_key'    => 'include',
				'responsive' => true,
				'value'      => 'logo',
			),
			array(
				'setting'  => 'transparent_header_enable',
				'operator' => '=',
				'value'    => true,
			),
			array(
				'setting'  => 'transparent_header_custom_logo',
				'operator' => '=',
				'value'    => true,
			),
			array(
				'setting'  => 'transparent_header_logo',
				'operator' => '!empty',
				'value'    => '',
			),
			array(
				'setting'  => '__device',
				'operator' => 'in',
				'value'    => array( 'tablet', 'mobile' ),
			),
		),
	),
	'transparent_header_mobile_logo' => array(
		'control_type' => 'media',
		'section'      => 'transparent_header',
		'transport'    => 'refresh',
		'priority'     => 12,
		'mime_type'    => 'image',
		'default'      => '',
		'label'        => esc_html__( 'Mobile Logo', 'codex' ),
		'context'      => array(
			array(
				'setting'    => 'logo_layout',
				'operator'   => 'sub_object_contains',
				'sub_key'    => 'include',
				'responsive' => true,
				'value'      => 'logo',
			),
			array(
				'setting'  => 'transparent_header_enable',
				'operator' => '=',
				'value'    => true,
			),
			array(
				'setting'  => 'transparent_header_custom_mobile_logo',
				'operator' => '=',
				'value'    => true,
			),
			array(
				'setting'  => 'transparent_header_custom_logo',
				'operator' => '=',
				'value'    => true,
			),
			array(
				'setting'  => '__device',
				'operator' => 'in',
				'value'    => array( 'tablet', 'mobile' ),
			),
		),
	),
	'transparent_logo_icon_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'transparent_header_design',
		'label'        => esc_html__( 'Logo Icon Color', 'codex' ),
		'default'      => codex()->default( 'transparent_logo_icon_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .site-branding .logo-icon',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Initial Color', 'codex' ),
					'palette' => true,
				),
			),
		),
	),
	'transparent_header_site_title_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'transparent_header_design',
		'label'        => esc_html__( 'Site Title Color', 'codex' ),
		'default'      => codex()->default( 'transparent_header_site_title_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .site-branding .site-title, .transparent-header #main-header .site-branding .site-description, .mobile-transparent-header #mobile-header .site-branding .site-title, .mobile-transparent-header #mobile-header .site-branding .site-description',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Initial Color', 'codex' ),
					'palette' => true,
				),
			),
		),
	),
	'transparent_header_navigation_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'transparent_header_design',
		'label'        => esc_html__( 'Navigation Colors', 'codex' ),
		'default'      => codex()->default( 'transparent_header_navigation_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.transparent-header .header-navigation .header-menu-container > ul > li.menu-item > a, .transparent-header .mobile-toggle-open-container .menu-toggle-open, .transparent-header .search-toggle-open-container .search-toggle-open',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header .header-navigation .header-menu-container > ul > li.menu-item > a:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header .header-navigation .header-menu-container > ul > li.menu-item.current-menu-item > a, .transparent-header .header-navigation .header-menu-container > ul > li.menu-item.current_page_item > a',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'active',
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
				'active' => array(
					'tooltip' => __( 'Active Color', 'codex' ),
					'palette' => true,
				),
			),
		),
	),
	'transparent_header_navigation_background' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'transparent_header_design',
		'label'        => esc_html__( 'Navigation Items Background', 'codex' ),
		'default'      => codex()->default( 'transparent_header_navigation_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.transparent-header .header-menu-container > ul > li.menu-item > a',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header .header-menu-container > ul > li.menu-item > a:hover',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'hover',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header .header-menu-container > ul > li.menu-item.current-menu-item > a, .transparent-header .header-menu-container > ul > li.menu-item.current_page_item > a',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'active',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Initial Background', 'codex' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Hover Background', 'codex' ),
					'palette' => true,
				),
				'active' => array(
					'tooltip' => __( 'Active Background', 'codex' ),
					'palette' => true,
				),
			),
		),
	),
	'transparent_header_button_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'transparent_header_design',
		'label'        => esc_html__( 'Button Colors', 'codex' ),
		'default'      => codex()->default( 'transparent_header_button_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .header-button, .mobile-transparent-header .mobile-header-button-wrap .mobile-header-button',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .header-button:hover, .mobile-transparent-header .mobile-header-button-wrap .mobile-header-button:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .header-button, .mobile-transparent-header .mobile-header-button-wrap .mobile-header-button',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'background',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .header-button:hover, .mobile-transparent-header .mobile-header-button-wrap .mobile-header-button:hover',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'backgroundHover',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .header-button, .mobile-transparent-header .mobile-header-button-wrap .mobile-header-button',
				'property' => 'border-color',
				'pattern'  => '$',
				'key'      => 'border',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .header-button:hover, .mobile-transparent-header .mobile-header-button-wrap .mobile-header-button:hover',
				'property' => 'border-color',
				'pattern'  => '$',
				'key'      => 'borderHover',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Color', 'codex' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Hover Color', 'codex' ),
					'palette' => true,
				),
				'background' => array(
					'tooltip' => __( 'Background', 'codex' ),
					'palette' => true,
				),
				'backgroundHover' => array(
					'tooltip' => __( 'Background Hover', 'codex' ),
					'palette' => true,
				),
				'border' => array(
					'tooltip' => __( 'Border', 'codex' ),
					'palette' => true,
				),
				'borderHover' => array(
					'tooltip' => __( 'Border Hover', 'codex' ),
					'palette' => true,
				),
			),
		),
	),
	'transparent_header_social_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'transparent_header_design',
		'label'        => esc_html__( 'Social Colors', 'codex' ),
		'default'      => codex()->default( 'transparent_header_social_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.transparent-header .header-social-wrap a.social-button, .mobile-transparent-header #mobile-header .header-mobile-social-wrap a.social-button',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header .header-social-wrap a.social-button:hover, .mobile-transparent-header #mobile-header .header-mobile-social-wrap a.social-button:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header .header-social-wrap a.social-button, .mobile-transparent-header #mobile-header .header-mobile-social-wrap a.social-button',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'background',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header .header-social-wrap a.social-button:hover, .mobile-transparent-header #mobile-header .header-mobile-social-wrap a.social-button:hover',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'backgroundHover',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header .header-social-wrap a.social-button, .mobile-transparent-header #mobile-header .header-mobile-social-wrap a.social-button',
				'property' => 'border-color',
				'pattern'  => '$',
				'key'      => 'border',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header .header-social-wrap a.social-button:hover, .mobile-transparent-header #mobile-header .header-mobile-social-wrap a.social-button:hover',
				'property' => 'border-color',
				'pattern'  => '$',
				'key'      => 'borderHover',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Color', 'codex' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Hover Color', 'codex' ),
					'palette' => true,
				),
				'background' => array(
					'tooltip' => __( 'Background', 'codex' ),
					'palette' => true,
				),
				'backgroundHover' => array(
					'tooltip' => __( 'Background Hover', 'codex' ),
					'palette' => true,
				),
				'border' => array(
					'tooltip' => __( 'Border', 'codex' ),
					'palette' => true,
				),
				'borderHover' => array(
					'tooltip' => __( 'Border Hover', 'codex' ),
					'palette' => true,
				),
			),
		),
	),
	'transparent_header_html_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'transparent_header_design',
		'label'        => esc_html__( 'HTML Colors', 'codex' ),
		'default'      => codex()->default( 'transparent_header_html_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .header-html,.mobile-transparent-header .mobile-html',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .header-html a, .mobile-transparent-header .mobile-html a',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'link',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .header-html a:hover, .mobile-transparent-header .mobile-html a:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'context'      => array(
			array(
				'setting'  => '__device',
				'operator' => '==',
				'value'    => 'desktop',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Color', 'codex' ),
					'palette' => true,
				),
				'link' => array(
					'tooltip' => __( 'Link Color', 'codex' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Link Hover', 'codex' ),
					'palette' => true,
				),
			),
		),
	),
	'transparent_header_background' => array(
		'control_type' => 'codex_background_control',
		'section'      => 'transparent_header_design',
		'label'        => esc_html__( 'Transparent Header Background', 'codex' ),
		'default'      => codex()->default( 'transparent_header_background' ),
		'context'      => array(
			array(
				'setting'  => 'transparent_header_enable',
				'operator' => '=',
				'value'    => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => array(
					'desktop' => '.transparent-header #wrapper #masthead',
					'tablet'  => '.mobile-transparent-header #wrapper #masthead',
					'mobile'  => '.mobile-transparent-header #wrapper #masthead',
				),
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Transparent Header Background', 'codex' ),
		),
	),
	'transparent_header_bottom_border' => array(
		'control_type' => 'codex_border_control',
		'section'      => 'transparent_header_design',
		'label'        => esc_html__( 'Bottom Border', 'codex' ),
		'default'      => codex()->default( 'transparent_header_bottom_border' ),
		'context'      => array(
			array(
				'setting'  => 'transparent_header_enable',
				'operator' => '=',
				'value'    => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_border',
				'selector' => array(
					'desktop' => '.transparent-header #wrapper #masthead',
					'tablet'  => '.mobile-transparent-header #wrapper #masthead',
					'mobile'  => '.mobile-transparent-header #wrapper #masthead',
				),
				'property' => 'border-bottom',
				'pattern'  => '$',
				'key'      => 'border',
			),
		),
	),
);

if ( class_exists( 'woocommerce' ) ) {
	$codex_trans_settings = array_merge(
		$codex_trans_settings,
		array(
			'transparent_header_product' => array(
				'control_type' => 'codex_switch_control',
				'sanitize'     => 'codex_sanitize_toggle',
				'section'      => 'transparent_header',
				'priority'     => 5,
				'default'      => codex()->default( 'transparent_header_product' ),
				'label'        => esc_html__( 'Disable on Products?', 'codex' ),
				'transport'    => 'refresh',
				'context'      => array(
					array(
						'setting'  => 'transparent_header_enable',
						'operator' => '=',
						'value'    => true,
					),
				),
			),
			'transparent_header_cart_color' => array(
				'control_type' => 'codex_color_control',
				'section'      => 'transparent_header_design',
				'label'        => esc_html__( 'Cart Colors', 'codex' ),
				'default'      => codex()->default( 'transparent_header_cart_color' ),
				'live_method'     => array(
					array(
						'type'     => 'css',
						'selector' => '.transparent-header #main-header .header-cart-wrap .header-cart-button, .mobile-transparent-header #mobile-header .header-mobile-cart-wrap .header-cart-button',
						'property' => 'color',
						'pattern'  => '$',
						'key'      => 'color',
					),
					array(
						'type'     => 'css',
						'selector' => '.transparent-header #main-header .header-cart-wrap .header-cart-button:hover, .mobile-transparent-header #mobile-header .header-mobile-cart-wrap .header-cart-button:hover',
						'property' => 'color',
						'pattern'  => '$',
						'key'      => 'hover',
					),
					array(
						'type'     => 'css',
						'selector' => '.transparent-header #main-header .header-cart-wrap .header-cart-button, .mobile-transparent-header #mobile-header .header-mobile-cart-wrap .header-cart-button',
						'property' => 'background',
						'pattern'  => '$',
						'key'      => 'background',
					),
					array(
						'type'     => 'css',
						'selector' => '.transparent-header #main-header .header-cart-wrap .header-cart-button:hover, .mobile-transparent-header #mobile-header .header-mobile-cart-wrap .header-cart-button:hover',
						'property' => 'background',
						'pattern'  => '$',
						'key'      => 'backgroundHover',
					),
				),
				'input_attrs'  => array(
					'colors' => array(
						'color' => array(
							'tooltip' => __( 'Color', 'codex' ),
							'palette' => true,
						),
						'hover' => array(
							'tooltip' => __( 'Hover Color', 'codex' ),
							'palette' => true,
						),
						'background' => array(
							'tooltip' => __( 'Background', 'codex' ),
							'palette' => true,
						),
						'backgroundHover' => array(
							'tooltip' => __( 'Background Hover', 'codex' ),
							'palette' => true,
						),
					),
				),
			),
			'transparent_header_cart_total_color' => array(
				'control_type' => 'codex_color_control',
				'section'      => 'transparent_header_design',
				'label'        => esc_html__( 'Cart Total Colors', 'codex' ),
				'default'      => codex()->default( 'transparent_header_cart_total_color' ),
				'live_method'     => array(
					array(
						'type'     => 'css',
						'selector' => '.transparent-header #main-header .header-cart-wrap .header-cart-button .header-cart-total, .mobile-transparent-header #mobile-header .header-mobile-cart-wrap .header-cart-button .header-cart-total',
						'property' => 'color',
						'pattern'  => '$',
						'key'      => 'color',
					),
					array(
						'type'     => 'css',
						'selector' => '.transparent-header #main-header .header-cart-wrap .header-cart-button:hover .header-cart-total, .mobile-transparent-header #mobile-header .header-mobile-cart-wrap .header-cart-button:hover .header-cart-total',
						'property' => 'color',
						'pattern'  => '$',
						'key'      => 'hover',
					),
					array(
						'type'     => 'css',
						'selector' => '.transparent-header #main-header .header-cart-wrap .header-cart-button .header-cart-total, .mobile-transparent-header #mobile-header .header-mobile-cart-wrap .header-cart-button .header-cart-total',
						'property' => 'background',
						'pattern'  => '$',
						'key'      => 'background',
					),
					array(
						'type'     => 'css',
						'selector' => '.transparent-header #main-header .header-cart-wrap .header-cart-button:hover .header-cart-total, .mobile-transparent-header #mobile-header .header-mobile-cart-wrap .header-cart-button:hover .header-cart-total',
						'property' => 'background',
						'pattern'  => '$',
						'key'      => 'backgroundHover',
					),
				),
				'input_attrs'  => array(
					'colors' => array(
						'color' => array(
							'tooltip' => __( 'Color', 'codex' ),
							'palette' => true,
						),
						'hover' => array(
							'tooltip' => __( 'Hover Color', 'codex' ),
							'palette' => true,
						),
						'background' => array(
							'tooltip' => __( 'Background', 'codex' ),
							'palette' => true,
						),
						'backgroundHover' => array(
							'tooltip' => __( 'Background Hover', 'codex' ),
							'palette' => true,
						),
					),
				),
			),
		)
	);
}

$codex_trans_post_types        = codex()->get_post_types_objects();
$codex_trans_extras_post_types = array();
$codex_trans_add_extras        = false;
foreach ( $codex_trans_post_types as $post_type_item ) {
	$post_type_name  = $post_type_item->name;
	$post_type_label = $post_type_item->label;
	$ignore_type     = codex()->get_transparent_post_types_to_ignore();
	if ( ! in_array( $post_type_name, $ignore_type, true ) ) {
		$codex_trans_add_extras = true;
		$codex_trans_extras_post_types[ 'transparent_header_' . $post_type_name ] = array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'transparent_header',
			'priority'     => 5,
			'default'      => true,
			'label'        => esc_html__( 'Disable on', 'codex' ) . ' ' . $post_type_label . '?',
			'transport'    => 'refresh',
			'context'      => array(
				array(
					'setting'  => 'transparent_header_enable',
					'operator' => '=',
					'value'    => true,
				),
			),
		);
		if ( 'tribe_events' === $post_type_name ) {
			$codex_trans_extras_post_types[ 'transparent_header_tribe_events_archive' ] = array(
				'control_type' => 'codex_switch_control',
				'sanitize'     => 'codex_sanitize_toggle',
				'section'      => 'transparent_header',
				'priority'     => 5,
				'default'      => true,
				'label'        => esc_html__( 'Disable on Events Archive?', 'codex' ),
				'transport'    => 'refresh',
				'context'      => array(
					array(
						'setting'  => 'transparent_header_enable',
						'operator' => '=',
						'value'    => true,
					),
				),
			);
		}
	}
}
if ( $codex_trans_add_extras ) {
	$codex_trans_settings = array_merge(
		$codex_trans_settings,
		$codex_trans_extras_post_types
	);
}
Theme_Customizer::add_settings( $codex_trans_settings );

