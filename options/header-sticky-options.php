<?php
/**
 * Header Sticky Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;

$settings = array(
	'header_sticky_tabs' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'header_sticky',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'header_sticky',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'header_sticky_design',
			),
			'active' => 'general',
		),
	),
	'header_sticky_tabs_design' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'header_sticky_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'header_sticky',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'header_sticky_design',
			),
			'active' => 'design',
		),
	),
	'header_sticky' => array(
		'control_type' => 'codex_select_control',
		'section'      => 'header_sticky',
		'priority'     => 10,
		'transport'    => 'refresh',
		'default'      => codex()->default( 'header_sticky' ),
		'label'        => esc_html__( 'Enable Sticky Header?', 'codex' ),
		'input_attrs'  => array(
			'options' => array(
				'no' => array(
					'name' => __( 'No', 'codex' ),
				),
				'main' => array(
					'name' => __( 'Yes - Only Main Row', 'codex' ),
				),
				'top_main' => array(
					'name' => __( 'Yes - Top Row & Main Row', 'codex' ),
				),
				'top_main_bottom' => array(
					'name' => __( 'Yes - Whole Header', 'codex' ),
				),
				'top' => array(
					'name' => __( 'Yes - Only Top Row', 'codex' ),
				),
				'bottom' => array(
					'name' => __( 'Yes - Only Bottom Row', 'codex' ),
				),
			),
		),
	),
	'header_reveal_scroll_up' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'header_sticky',
		'default'      => codex()->default( 'header_reveal_scroll_up' ),
		'label'        => esc_html__( 'Enable Reveal Sticky on Scroll up', 'codex' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'  => 'header_sticky',
				'operator' => '!=',
				'value'    => 'no',
			),
		),
	),
	'header_sticky_shrink' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'header_sticky',
		'default'      => codex()->default( 'header_sticky_shrink' ),
		'label'        => esc_html__( 'Enable Main Row Shrinking', 'codex' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'  => 'header_sticky',
				'operator' => '!=',
				'value'    => 'no',
			),
		),
	),
	'header_sticky_main_shrink' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'header_sticky',
		'label'        => esc_html__( 'Main Row Shrink Height', 'codex' ),
		'context'      => array(
			array(
				'setting'  => 'header_sticky_shrink',
				'operator' => '=',
				'value'    => true,
			),
			array(
				'setting'  => 'header_sticky',
				'operator' => 'contain',
				'value'    => 'main',
			),
		),
		'default'      => codex()->default( 'header_sticky_main_shrink' ),
		'input_attrs'  => array(
			'min'        => array(
				'px'  => 5,
				'em'  => 0,
				'rem' => 0,
			),
			'max'        => array(
				'px'  => 400,
				'em'  => 12,
				'rem' => 12,
			),
			'step'       => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
			),
			'units'      => array( 'px' ),
			'responsive' => false,
		),
	),
	'header_sticky_custom_logo' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'header_sticky',
		'transport'    => 'refresh',
		'default'      => codex()->default( 'header_sticky_custom_logo' ),
		'label'        => esc_html__( 'Different Logo for Stuck Header?', 'codex' ),
		'context'      => array(
			array(
				'setting'    => 'logo_layout',
				'operator'   => 'sub_object_contains',
				'sub_key'    => 'include',
				'responsive' => true,
				'value'      => 'logo',
			),
			array(
				'setting'  => 'header_sticky',
				'operator' => '!=',
				'value'    => 'no',
			),
		),
	),
	'header_sticky_logo' => array(
		'control_type' => 'media',
		'section'      => 'header_sticky',
		'transport'    => 'refresh',
		'mime_type'    => 'image',
		'default'      => '',
		'label'        => esc_html__( 'Stuck Header Logo', 'codex' ),
		'context'      => array(
			array(
				'setting'    => 'logo_layout',
				'operator'   => 'sub_object_contains',
				'sub_key'    => 'include',
				'responsive' => true,
				'value'      => 'logo',
			),
			array(
				'setting'  => 'header_sticky',
				'operator' => '!=',
				'value'    => 'no',
			),
			array(
				'setting'  => 'header_sticky_custom_logo',
				'operator' => '=',
				'value'    => true,
			),
		),
	),
	'header_sticky_logo_width' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'header_sticky',
		'label'        => esc_html__( 'Logo Max Width', 'codex' ),
		'description'  => esc_html__( 'Define the maxium width for the logo', 'codex' ),
		'context'      => array(
			array(
				'setting'  => 'header_sticky',
				'operator' => '!=',
				'value'    => 'no',
			),
			array(
				'setting'    => 'logo_layout',
				'operator'   => 'sub_object_contains',
				'sub_key'    => 'include',
				'responsive' => true,
				'value'      => 'logo',
			),
			array(
				'setting'  => 'header_sticky_custom_logo',
				'operator' => '=',
				'value'    => true,
			),
			array(
				'setting'  => 'header_sticky_logo',
				'operator' => '!empty',
				'value'    => '',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .site-branding img',
				'property' => 'max-width',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => codex()->default( 'header_sticky_logo_width' ),
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
	'info_mobile_header_sticky' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'header_sticky',
		'priority'     => 20,
		'label'        => esc_html__( 'Mobile Sticky', 'codex' ),
		'settings'     => false,
	),
	'mobile_header_sticky' => array(
		'control_type' => 'codex_select_control',
		'section'      => 'header_sticky',
		'priority'     => 20,
		'transport'    => 'refresh',
		'default'      => codex()->default( 'mobile_header_sticky' ),
		'label'        => esc_html__( 'Enable Sticky for Mobile?', 'codex' ),
		'input_attrs'  => array(
			'options' => array(
				'no' => array(
					'name' => __( 'No', 'codex' ),
				),
				'main' => array(
					'name' => __( 'Yes - Only Main Row', 'codex' ),
				),
				'top_main' => array(
					'name' => __( 'Yes - Top Row & Main Row', 'codex' ),
				),
				'top_main_bottom' => array(
					'name' => __( 'Yes - Whole Header', 'codex' ),
				),
				'top' => array(
					'name' => __( 'Yes - Only Top Row', 'codex' ),
				),
				'bottom' => array(
					'name' => __( 'Yes - Only Bottom Row', 'codex' ),
				),
			),
		),
	),
	'mobile_header_reveal_scroll_up' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'header_sticky',
		'priority'     => 20,
		'default'      => codex()->default( 'header_reveal_scroll_up' ),
		'label'        => esc_html__( 'Enable Reveal Sticky on Scroll up', 'codex' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'  => 'mobile_header_sticky',
				'operator' => '!=',
				'value'    => 'no',
			),
		),
	),
	'mobile_header_sticky_shrink' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'header_sticky',
		'priority'     => 20,
		'default'      => codex()->default( 'mobile_header_sticky_shrink' ),
		'label'        => esc_html__( 'Enabled Main Row Shrinking', 'codex' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'  => 'mobile_header_sticky',
				'operator' => '!=',
				'value'    => 'no',
			),
		),
	),
	'mobile_header_sticky_main_shrink' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'header_sticky',
		'priority'     => 20,
		'label'        => esc_html__( 'Main Row Shrink Height', 'codex' ),
		'context'      => array(
			array(
				'setting'  => 'mobile_header_sticky_shrink',
				'operator' => '=',
				'value'    => true,
			),
			array(
				'setting'  => 'mobile_header_sticky',
				'operator' => 'contain',
				'value'    => 'main',
			),
		),
		'default'      => codex()->default( 'mobile_header_sticky_main_shrink' ),
		'input_attrs'  => array(
			'min'        => array(
				'px'  => 5,
				'em'  => 0,
				'rem' => 0,
			),
			'max'        => array(
				'px'  => 400,
				'em'  => 12,
				'rem' => 12,
			),
			'step'       => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
			),
			'units'      => array( 'px' ),
			'responsive' => false,
		),
	),
	'header_sticky_custom_mobile_logo' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'header_sticky',
		'transport'    => 'refresh',
		'priority'     => 20,
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
				'setting'  => 'mobile_header_sticky',
				'operator' => '!=',
				'value'    => 'no',
			),
		),
	),
	'header_sticky_mobile_logo' => array(
		'control_type' => 'media',
		'section'      => 'header_sticky',
		'transport'    => 'refresh',
		'priority'     => 20,
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
				'setting'  => 'mobile_header_sticky',
				'operator' => '!=',
				'value'    => 'no',
			),
			array(
				'setting'  => 'header_sticky_custom_mobile_logo',
				'operator' => '=',
				'value'    => true,
			),
		),
	),
	'header_sticky_site_title_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'header_sticky_design',
		'label'        => esc_html__( 'Site Title Color', 'codex' ),
		'default'      => codex()->default( 'header_sticky_site_title_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .site-branding .site-title, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .site-branding .site-description',
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
	'header_sticky_logo_icon_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'header_sticky_design',
		'label'        => esc_html__( 'Logo Icon Color', 'codex' ),
		'default'      => codex()->default( 'header_sticky_logo_icon_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .site-branding .logo-icon',
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
	'header_sticky_navigation_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'header_sticky_design',
		'label'        => esc_html__( 'Navigation Colors', 'codex' ),
		'default'      => codex()->default( 'header_sticky_navigation_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-menu-container > ul > li > a, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .mobile-toggle-open-container .menu-toggle-open, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .search-toggle-open-container .search-toggle-open',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-menu-container > ul > li > a:hover, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .mobile-toggle-open-container .menu-toggle-open:hover, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .search-toggle-open-container .search-toggle-open:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-menu-container > ul > li.current-menu-item > a, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-menu-container > ul > li.current_page_item > a',
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
	'header_sticky_navigation_background' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'header_sticky_design',
		'label'        => esc_html__( 'Navigation Items Background', 'codex' ),
		'default'      => codex()->default( 'header_sticky_navigation_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-menu-container > ul > li > a',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-menu-container > ul > li > a:hover',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'hover',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-menu-container > ul > li.current-menu-item > a, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-menu-container > ul > li.current_page_item > a',
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
	'header_sticky_button_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'header_sticky_design',
		'label'        => esc_html__( 'Button Colors', 'codex' ),
		'default'      => codex()->default( 'header_sticky_button_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-button, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .mobile-header-button-wrap .mobile-header-button',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-button:hover, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .mobile-header-button-wrap .mobile-header-button:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-button, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .mobile-header-button-wrap .mobile-header-button',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'background',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-button:hover, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .mobile-header-button-wrap .mobile-header-button:hover',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'backgroundHover',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-button, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .mobile-header-button-wrap .mobile-header-button',
				'property' => 'border-color',
				'pattern'  => '$',
				'key'      => 'border',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-button:hover, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .mobile-header-button-wrap .mobile-header-button:hover',
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
	'header_sticky_social_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'header_sticky_design',
		'label'        => esc_html__( 'Social Colors', 'codex' ),
		'default'      => codex()->default( 'header_sticky_social_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-social-wrap a.social-button, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-mobile-social-wrap a.social-button',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-social-wrap a.social-button:hover, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-mobile-social-wrap a.social-button:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-social-wrap a.social-button, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-mobile-social-wrap a.social-button',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'background',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-social-wrap a.social-button:hover, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-mobile-social-wrap a.social-button:hover',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'backgroundHover',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-social-wrap a.social-button, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-mobile-social-wrap a.social-button',
				'property' => 'border-color',
				'pattern'  => '$',
				'key'      => 'border',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-social-wrap a.social-button:hover, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-mobile-social-wrap a.social-button:hover',
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
	'header_sticky_html_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'header_sticky_design',
		'label'        => esc_html__( 'HTML Colors', 'codex' ),
		'default'      => codex()->default( 'header_sticky_html_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-html,#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .mobile-html',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-html a, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .mobile-html a',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'link',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-html a:hover, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .mobile-html a:hover',
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
	'header_sticky_background' => array(
		'control_type' => 'codex_background_control',
		'section'      => 'header_sticky_design',
		'label'        => esc_html__( 'Sticky Header Background', 'codex' ),
		'default'      => codex()->default( 'header_sticky_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '.wp-site-blocks #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start):not(.site-header-row-container), .wp-site-blocks #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) > .site-header-row-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Sticky Header Background', 'codex' ),
		),
	),
	'header_sticky_bottom_border' => array(
		'control_type' => 'codex_border_control',
		'section'      => 'header_sticky_design',
		'label'        => esc_html__( 'Sticky Bottom Border', 'codex' ),
		'default'      => codex()->default( 'header_sticky_bottom_border' ),
		'live_method'     => array(
			array(
				'type'     => 'css_border',
				'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start)',
				'property' => 'border-bottom',
				'pattern'  => '$',
				'key'      => 'border',
			),
		),
	),
);
if ( class_exists( 'woocommerce' ) ) {
	$settings = array_merge(
		$settings,
		array(
			'header_sticky_cart_color' => array(
				'control_type' => 'codex_color_control',
				'section'      => 'header_sticky_design',
				'label'        => esc_html__( 'Cart Colors', 'codex' ),
				'default'      => codex()->default( 'header_sticky_cart_color' ),
				'live_method'     => array(
					array(
						'type'     => 'css',
						'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-cart-wrap .header-cart-button, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-mobile-cart-wrap .header-cart-button',
						'property' => 'color',
						'pattern'  => '$',
						'key'      => 'color',
					),
					array(
						'type'     => 'css',
						'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-cart-wrap .header-cart-button:hover, , #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-mobile-cart-wrap .header-cart-button:hover',
						'property' => 'color',
						'pattern'  => '$',
						'key'      => 'hover',
					),
					array(
						'type'     => 'css',
						'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-cart-wrap .header-cart-button, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-mobile-cart-wrap .header-cart-button',
						'property' => 'background',
						'pattern'  => '$',
						'key'      => 'background',
					),
					array(
						'type'     => 'css',
						'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-cart-wrap .header-cart-button:hover, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-mobile-cart-wrap .header-cart-button:hover',
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
			'header_sticky_cart_total_color' => array(
				'control_type' => 'codex_color_control',
				'section'      => 'header_sticky_design',
				'label'        => esc_html__( 'Cart Total Colors', 'codex' ),
				'default'      => codex()->default( 'header_sticky_cart_total_color' ),
				'live_method'     => array(
					array(
						'type'     => 'css',
						'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-cart-wrap .header-cart-button .header-cart-total, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-mobile-cart-wrap .header-cart-button .header-cart-total',
						'property' => 'color',
						'pattern'  => '$',
						'key'      => 'color',
					),
					array(
						'type'     => 'css',
						'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-cart-wrap .header-cart-button:hover .header-cart-total, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-mobile-cart-wrap .header-cart-button:hover .header-cart-total',
						'property' => 'color',
						'pattern'  => '$',
						'key'      => 'hover',
					),
					array(
						'type'     => 'css',
						'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-cart-wrap .header-cart-button .header-cart-total, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-mobile-cart-wrap .header-cart-button .header-cart-total',
						'property' => 'background',
						'pattern'  => '$',
						'key'      => 'background',
					),
					array(
						'type'     => 'css',
						'selector' => '#masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-cart-wrap .header-cart-button:hover .header-cart-total, #masthead .codex-sticky-header.item-is-fixed:not(.item-at-start) .header-mobile-cart-wrap .header-cart-button:hover .header-cart-total',
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

Theme_Customizer::add_settings( $settings );

