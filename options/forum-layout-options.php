<?php
/**
 * Product Layout Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;

Theme_Customizer::add_settings(
	array(
		'forum_layout_tabs' => array(
			'control_type' => 'codex_tab_control',
			'section'      => 'forum_layout',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'codex' ),
					'target' => 'forum_layout',
				),
				'design' => array(
					'label'  => __( 'Design', 'codex' ),
					'target' => 'forum_layout_design',
				),
				'active' => 'general',
			),
		),
		'forum_layout_tabs_design' => array(
			'control_type' => 'codex_tab_control',
			'section'      => 'forum_layout_design',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'codex' ),
					'target' => 'forum_layout',
				),
				'design' => array(
					'label'  => __( 'Design', 'codex' ),
					'target' => 'forum_layout_design',
				),
				'active' => 'design',
			),
		),
		'info_forum_title' => array(
			'control_type' => 'codex_title_control',
			'section'      => 'forum_layout',
			'priority'     => 2,
			'label'        => esc_html__( 'Forum Title', 'codex' ),
			'settings'     => false,
		),
		'info_forum_title_design' => array(
			'control_type' => 'codex_title_control',
			'section'      => 'forum_layout_design',
			'priority'     => 2,
			'label'        => esc_html__( 'Forum Title', 'codex' ),
			'settings'     => false,
		),
		'forum_title' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'forum_layout',
			'priority'     => 3,
			'default'      => codex()->default( 'forum_title' ),
			'label'        => esc_html__( 'Show Forum Title?', 'codex' ),
			'transport'    => 'refresh',
		),
		'forum_title_layout' => array(
			'control_type' => 'codex_radio_icon_control',
			'section'      => 'forum_layout',
			'label'        => esc_html__( 'Forum Title Layout', 'codex' ),
			'transport'    => 'refresh',
			'priority'     => 4,
			'default'      => codex()->default( 'forum_title_layout' ),
			'context'      => array(
				array(
					'setting'    => 'forum_title',
					'operator'   => '=',
					'value'      => true,
				),
			),
			'input_attrs'  => array(
				'layout' => array(
					'normal' => array(
						'tooltip' => __( 'In Content', 'codex' ),
						'icon'    => 'incontent',
					),
					'above' => array(
						'tooltip' => __( 'Above Content', 'codex' ),
						'icon'    => 'abovecontent',
					),
				),
				'responsive' => false,
				'class'      => 'codex-two-col',
			),
		),
		'forum_title_inner_layout' => array(
			'control_type' => 'codex_radio_icon_control',
			'section'      => 'forum_layout',
			'priority'     => 4,
			'default'      => codex()->default( 'forum_title_inner_layout' ),
			'label'        => esc_html__( 'Title Container Width', 'codex' ),
			'context'      => array(
				array(
					'setting'    => 'forum_title',
					'operator'   => '=',
					'value'      => true,
				),
				array(
					'setting'    => 'forum_title_layout',
					'operator'   => '=',
					'value'      => 'above',
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => '.forum-hero-section',
					'pattern'  => 'entry-hero-layout-$',
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
				'responsive' => false,
			),
		),
		'forum_title_align' => array(
			'control_type' => 'codex_radio_icon_control',
			'section'      => 'forum_layout',
			'label'        => esc_html__( 'Forum Title Align', 'codex' ),
			'priority'     => 4,
			'default'      => codex()->default( 'forum_title_align' ),
			'context'      => array(
				array(
					'setting'    => 'forum_title',
					'operator'   => '=',
					'value'      => true,
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => '.forum-title',
					'pattern'  => array(
						'desktop' => 'title-align-$',
						'tablet'  => 'title-tablet-align-$',
						'mobile'  => 'title-mobile-align-$',
					),
					'key'      => '',
				),
			),
			'input_attrs'  => array(
				'layout' => array(
					'left' => array(
						'tooltip'  => __( 'Left Align Title', 'codex' ),
						'dashicon' => 'editor-alignleft',
					),
					'center' => array(
						'tooltip'  => __( 'Center Align Title', 'codex' ),
						'dashicon' => 'editor-aligncenter',
					),
					'right' => array(
						'tooltip'  => __( 'Right Align Title', 'codex' ),
						'dashicon' => 'editor-alignright',
					),
				),
				'responsive' => true,
			),
		),
		'forum_title_height' => array(
			'control_type' => 'codex_range_control',
			'section'      => 'forum_layout',
			'priority'     => 5,
			'label'        => esc_html__( 'Title Container Min Height', 'codex' ),
			'context'      => array(
				array(
					'setting'    => 'forum_title',
					'operator'   => '=',
					'value'      => true,
				),
				array(
					'setting'    => 'forum_title_layout',
					'operator'   => '=',
					'value'      => 'above',
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#inner-wrap .forum-hero-section .entry-header',
					'property' => 'min-height',
					'pattern'  => '$',
					'key'      => 'size',
				),
			),
			'default'      => codex()->default( 'forum_title_height' ),
			'input_attrs'  => array(
				'min'     => array(
					'px'  => 10,
					'em'  => 1,
					'rem' => 1,
					'vh'  => 2,
				),
				'max'     => array(
					'px'  => 800,
					'em'  => 12,
					'rem' => 12,
					'vh'  => 100,
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
		'forum_title_elements' => array(
			'control_type' => 'codex_sorter_control',
			'section'      => 'forum_layout',
			'priority'     => 6,
			'default'      => codex()->default( 'forum_title_elements' ),
			'label'        => esc_html__( 'Title Elements', 'codex' ),
			'transport'    => 'refresh',
			'settings'     => array(
				'elements'    => 'forum_title_elements',
				'title'       => 'forum_title_element_title',
				'breadcrumb'  => 'forum_title_element_breadcrumb',
				'search'      => 'forum_title_element_search',
				'description' => 'forum_title_element_description',
			),
			'context'      => array(
				array(
					'setting'    => 'forum_title',
					'operator'   => '=',
					'value'      => true,
				),
			),
			'input_attrs'  => array(
				'group' => 'forum_title_element',
			),
		),
		'forum_title_font' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'forum_layout_design',
			'label'        => esc_html__( 'Forum Title Font', 'codex' ),
			'default'      => codex()->default( 'forum_title_font' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '.forum-title h1',
					'property' => 'font',
					'key'      => 'typography',
				),
			),
			'context'      => array(
				array(
					'setting'    => 'forum_title',
					'operator'   => '=',
					'value'      => true,
				),
			),
			'input_attrs'  => array(
				'id'             => 'forum_title_font',
				'headingInherit' => true,
			),
		),
		'forum_title_search_width' => array(
			'control_type' => 'codex_range_control',
			'section'      => 'forum_layout_design',
			'label'        => esc_html__( 'Search Bar Width', 'codex' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.forum-title .bbp-search-form',
					'property' => 'width',
					'pattern'  => '$',
					'key'      => 'size',
				),
			),
			'default'      => codex()->default( 'forum_title_search_width' ),
			'input_attrs'  => array(
				'min'        => array(
					'px'  => 100,
					'em'  => 4,
					'rem' => 4,
				),
				'max'        => array(
					'px'  => 600,
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
		'forum_title_search_color' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'forum_layout_design',
			'label'        => esc_html__( 'Input Text Colors', 'codex' ),
			'default'      => codex()->default( 'forum_title_search_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.forum-title .bbp-search-form input.search-field, .forum-title .bbp-search-form .codex-search-icon-wrap',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.forum-title .bbp-search-form input.search-field:focus, .forum-title .bbp-search-form input.search-submit:hover ~ .codex-search-icon-wrap',
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
						'tooltip' => __( 'Focus Color', 'codex' ),
						'palette' => true,
					),
				),
			),
		),
		'forum_title_search_background' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'forum_layout_design',
			'label'        => esc_html__( 'Input Background', 'codex' ),
			'default'      => codex()->default( 'forum_title_search_background' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.forum-title .bbp-search-form input.search-field',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.forum-title .bbp-search-form input.search-field:focus',
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
						'tooltip' => __( 'Focus Color', 'codex' ),
						'palette' => true,
					),
				),
			),
		),
		'forum_title_search_border' => array(
			'control_type' => 'codex_border_control',
			'section'      => 'forum_layout_design',
			'label'        => esc_html__( 'Border', 'codex' ),
			'default'      => codex()->default( 'forum_title_search_border' ),
			'live_method'     => array(
				array(
					'type'     => 'css_border',
					'selector' => '.forum-title .bbp-search-form input.search-field',
					'pattern'  => '$',
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
		'forum_title_search_border_color' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'forum_layout_design',
			'label'        => esc_html__( 'Input Border Color', 'codex' ),
			'default'      => codex()->default( 'forum_title_search_border_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.forum-title .bbp-search-form input.search-field',
					'property' => 'border-color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.forum-title .bbp-search-form input.search-field:focus',
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
						'tooltip' => __( 'Focus Color', 'codex' ),
						'palette' => true,
					),
				),
			),
		),
		'forum_title_search_typography' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'forum_layout_design',
			'label'        => esc_html__( 'Font', 'codex' ),
			'default'      => codex()->default( 'forum_title_search_typography' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '.forum-title .bbp-search-form input.search-field',
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
				'id' => 'forum_title_search_typography',
				'options' => 'no-color',
			),
		),
		'forum_title_search_margin' => array(
			'control_type' => 'codex_measure_control',
			'section'      => 'forum_layout_design',
			'default'      => codex()->default( 'forum_title_search_margin' ),
			'label'        => esc_html__( 'Margin', 'codex' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.forum-title .bbp-search-form form',
					'property' => 'margin',
					'pattern'  => '$',
					'key'      => 'measure',
				),
			),
			'input_attrs'  => array(
				'responsive' => false,
			),
		),
		'forum_title_breadcrumb_color' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'forum_layout_design',
			'label'        => esc_html__( 'Breadcrumb Colors', 'codex' ),
			'default'      => codex()->default( 'forum_title_breadcrumb_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.forum-title .codex-breadcrumbs',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.forum-title .codex-breadcrumbs a:hover',
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
						'tooltip' => __( 'Link Hover Color', 'codex' ),
						'palette' => true,
					),
				),
			),
		),
		'forum_title_breadcrumb_font' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'forum_layout_design',
			'label'        => esc_html__( 'Breadcrumb Font', 'codex' ),
			'default'      => codex()->default( 'forum_title_breadcrumb_font' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '.forum-title .codex-breadcrumbs',
					'property' => 'font',
					'key'      => 'typography',
				),
			),
			'input_attrs'  => array(
				'id'      => 'forum_title_breadcrumb_font',
				'options' => 'no-color',
			),
		),
		'forum_title_description_color' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'forum_layout_design',
			'label'        => esc_html__( 'Description Colors', 'codex' ),
			'default'      => codex()->default( 'forum_title_description_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.forum-title .title-entry-description',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.forum-title .title-entry-description a:hover',
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
						'tooltip' => __( 'Link Hover Color', 'codex' ),
						'palette' => true,
					),
				),
			),
		),
		'forum_title_description_font' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'forum_layout_design',
			'label'        => esc_html__( 'Description Font', 'codex' ),
			'default'      => codex()->default( 'forum_title_description_font' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '.forum-title .title-entry-description',
					'property' => 'font',
					'key'      => 'typography',
				),
			),
			'input_attrs'  => array(
				'id'      => 'forum_title_description_font',
				'options' => 'no-color',
			),
		),
		'forum_title_background' => array(
			'control_type' => 'codex_background_control',
			'section'      => 'forum_layout_design',
			'label'        => esc_html__( 'Forum Above Area Background', 'codex' ),
			'default'      => codex()->default( 'forum_title_background' ),
			'context'      => array(
				array(
					'setting'    => 'forum_title',
					'operator'   => '=',
					'value'      => true,
				),
				array(
					'setting'    => 'forum_title_layout',
					'operator'   => '=',
					'value'      => 'above',
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'css_background',
					'selector' => '#inner-wrap .forum-hero-section .entry-hero-container-inner',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'base',
				),
			),
			'input_attrs'  => array(
				'tooltip'  => __( 'Forum Title Background', 'codex' ),
			),
		),
		'forum_title_featured_image' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'forum_layout_design',
			'default'      => codex()->default( 'forum_title_featured_image' ),
			'label'        => esc_html__( 'Use Featured Image for Background?', 'codex' ),
			'transport'    => 'refresh',
			'context'      => array(
				array(
					'setting'    => 'forum_title',
					'operator'   => '=',
					'value'      => true,
				),
				array(
					'setting'    => 'forum_title_layout',
					'operator'   => '=',
					'value'      => 'above',
				),
			),
		),
		'forum_title_overlay_color' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'forum_layout_design',
			'label'        => esc_html__( 'Background Overlay Color', 'codex' ),
			'default'      => codex()->default( 'forum_title_overlay_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.forum-hero-section .hero-section-overlay',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'color',
				),
			),
			'context'      => array(
				array(
					'setting'    => 'forum_title',
					'operator'   => '=',
					'value'      => true,
				),
				array(
					'setting'    => 'forum_title_layout',
					'operator'   => '=',
					'value'      => 'above',
				),
			),
			'input_attrs'  => array(
				'colors' => array(
					'color' => array(
						'tooltip' => __( 'Overlay Color', 'codex' ),
						'palette' => true,
					),
				),
				'allowGradient' => true,
			),
		),
		'forum_title_border' => array(
			'control_type' => 'codex_borders_control',
			'section'      => 'forum_layout_design',
			'label'        => esc_html__( 'Border', 'codex' ),
			'default'      => codex()->default( 'forum_title_border' ),
			'context'      => array(
				array(
					'setting'    => 'forum_title',
					'operator'   => '=',
					'value'      => true,
				),
				array(
					'setting'    => 'forum_title_layout',
					'operator'   => '=',
					'value'      => 'above',
				),
			),
			'settings'     => array(
				'border_top'    => 'forum_title_top_border',
				'border_bottom' => 'forum_title_bottom_border',
			),
			'live_method'     => array(
				'forum_title_top_border' => array(
					array(
						'type'     => 'css_border',
						'selector' => '.forum-hero-section .entry-hero-container-inner',
						'pattern'  => '$',
						'property' => 'border-top',
						'key'      => 'border',
					),
				),
				'forum_title_bottom_border' => array( 
					array(
						'type'     => 'css_border',
						'selector' => '.forum-hero-section .entry-hero-container-inner',
						'property' => 'border-bottom',
						'pattern'  => '$',
						'key'      => 'border',
					),
				),
			),
		),
		'info_forum_layout' => array(
			'control_type' => 'codex_title_control',
			'section'      => 'forum_layout',
			'priority'     => 10,
			'label'        => esc_html__( 'Forum Layout', 'codex' ),
			'settings'     => false,
		),
		'info_forum_layout_design' => array(
			'control_type' => 'codex_title_control',
			'section'      => 'forum_layout_design',
			'priority'     => 10,
			'label'        => esc_html__( 'Forum Layout', 'codex' ),
			'settings'     => false,
		),
		'forum_layout' => array(
			'control_type' => 'codex_radio_icon_control',
			'section'      => 'forum_layout',
			'label'        => esc_html__( 'Forum Layout', 'codex' ),
			'transport'    => 'refresh',
			'priority'     => 10,
			'default'      => codex()->default( 'forum_layout' ),
			'input_attrs'  => array(
				'layout' => array(
					'normal' => array(
						'tooltip' => __( 'Normal', 'codex' ),
						'icon' => 'normal',
					),
					'narrow' => array(
						'tooltip' => __( 'Narrow', 'codex' ),
						'icon' => 'narrow',
					),
					'fullwidth' => array(
						'tooltip' => __( 'Fullwidth', 'codex' ),
						'icon' => 'fullwidth',
					),
					'left' => array(
						'tooltip' => __( 'Left Sidebar', 'codex' ),
						'icon' => 'leftsidebar',
					),
					'right' => array(
						'tooltip' => __( 'Right Sidebar', 'codex' ),
						'icon' => 'rightsidebar',
					),
				),
				'responsive' => false,
				'class'      => 'codex-three-col',
			),
		),
		'forum_sidebar_id' => array(
			'control_type' => 'codex_select_control',
			'section'      => 'forum_layout',
			'label'        => esc_html__( 'Forum Default Sidebar', 'codex' ),
			'transport'    => 'refresh',
			'priority'     => 10,
			'default'      => codex()->default( 'forum_sidebar_id' ),
			'input_attrs'  => array(
				'options' => codex()->sidebar_options(),
			),
		),
		'forum_content_style' => array(
			'control_type' => 'codex_radio_icon_control',
			'section'      => 'forum_layout',
			'label'        => esc_html__( 'Content Style', 'codex' ),
			'priority'     => 10,
			'default'      => codex()->default( 'forum_content_style' ),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => 'body.single-forum',
					'pattern'  => 'content-style-$',
					'key'      => '',
				),
			),
			'input_attrs'  => array(
				'layout' => array(
					'boxed' => array(
						'tooltip' => __( 'Boxed', 'codex' ),
						'icon' => 'boxed',
					),
					'unboxed' => array(
						'tooltip' => __( 'Unboxed', 'codex' ),
						'icon' => 'narrow',
					),
				),
				'responsive' => false,
				'class'      => 'codex-two-col',
			),
		),
		'forum_vertical_padding' => array(
			'control_type' => 'codex_radio_icon_control',
			'section'      => 'forum_layout',
			'label'        => esc_html__( 'Content Vertical Padding', 'codex' ),
			'priority'     => 10,
			'default'      => codex()->default( 'forum_vertical_padding' ),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => 'body.single-forum',
					'pattern'  => 'content-vertical-padding-$',
					'key'      => '',
				),
			),
			'input_attrs'  => array(
				'layout' => array(
					'show' => array(
						'name' => __( 'Enable', 'codex' ),
					),
					'hide' => array(
						'name' => __( 'Disable', 'codex' ),
					),
					'top' => array(
						'name' => __( 'Top Only', 'codex' ),
					),
					'bottom' => array(
						'name' => __( 'Bottom Only', 'codex' ),
					),
				),
				'responsive' => false,
				'class'      => 'codex-two-grid',
			),
		),
		'forum_background' => array(
			'control_type' => 'codex_background_control',
			'section'      => 'forum_layout_design',
			'priority'     => 20,
			'label'        => esc_html__( 'Site Background', 'codex' ),
			'default'      => codex()->default( 'forum_background' ),
			'live_method'     => array(
				array(
					'type'     => 'css_background',
					'selector' => 'body.single-forum',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'base',
				),
			),
			'input_attrs'  => array(
				'tooltip' => __( 'Forum Background', 'codex' ),
			),
		),
		'forum_content_background' => array(
			'control_type' => 'codex_background_control',
			'section'      => 'forum_layout_design',
			'priority'     => 20,
			'label'        => esc_html__( 'Content Background', 'codex' ),
			'default'      => codex()->default( 'forum_content_background' ),
			'live_method'  => array(
				array(
					'type'     => 'css_background',
					'selector' => 'body.single-forum .content-bg, body.single-forum.content-style-unboxed .site',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'base',
				),
			),
			'input_attrs'  => array(
				'tooltip' => __( 'Forum Content Background', 'codex' ),
			),
		),
	)
);

