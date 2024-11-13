<?php
/**
 * Group Layout Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;

$settings = array(
	'sfwd_groups_layout_tabs' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'sfwd_groups_layout',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'sfwd_groups_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'sfwd_groups_layout_design',
			),
			'active' => 'general',
		),
	),
	'sfwd_groups_layout_tabs_design' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'sfwd_groups_layout_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'sfwd_groups_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'sfwd_groups_layout_design',
			),
			'active' => 'design',
		),
	),
	'info_groups_title' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'sfwd_groups_layout',
		'priority'     => 2,
		'label'        => esc_html__( 'Group Title', 'codex' ),
		'settings'     => false,
	),
	'info_groups_title_design' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'sfwd_groups_layout_design',
		'priority'     => 2,
		'label'        => esc_html__( 'Group Title', 'codex' ),
		'settings'     => false,
	),
	'groups_title' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'sfwd_groups_layout',
		'priority'     => 3,
		'default'      => codex()->default( 'groups_title' ),
		'label'        => esc_html__( 'Show Group Title?', 'codex' ),
		'transport'    => 'refresh',
	),
	'groups_title_layout' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'sfwd_groups_layout',
		'label'        => esc_html__( 'Group Title Layout', 'codex' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => codex()->default( 'groups_title_layout' ),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
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
	'groups_title_inner_layout' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'sfwd_groups_layout',
		'priority'     => 4,
		'default'      => codex()->default( 'groups_title_inner_layout' ),
		'label'        => esc_html__( 'Title Container Width', 'codex' ),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'groups_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.groups-hero-section',
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
	'groups_title_align' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'sfwd_groups_layout',
		'label'        => esc_html__( 'Group Title Align', 'codex' ),
		'priority'     => 4,
		'default'      => codex()->default( 'groups_title_align' ),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.groups-title',
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
	'groups_title_height' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'sfwd_groups_layout',
		'priority'     => 5,
		'label'        => esc_html__( 'Title Container Min Height', 'codex' ),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'groups_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#inner-wrap .groups-hero-section .entry-header',
				'property' => 'min-height',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => codex()->default( 'groups_title_height' ),
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
	'groups_title_elements' => array(
		'control_type' => 'codex_sorter_control',
		'section'      => 'sfwd_groups_layout',
		'priority'     => 6,
		'default'      => codex()->default( 'groups_title_elements' ),
		'label'        => esc_html__( 'Title Elements', 'codex' ),
		'transport'    => 'refresh',
		'settings'     => array(
			'elements'    => 'groups_title_elements',
			'title' => 'groups_title_element_title',
			'breadcrumb'  => 'groups_title_element_breadcrumb',
		),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'group' => 'groups_title_element',
		),
	),
	'groups_title_font' => array(
		'control_type' => 'codex_typography_control',
		'section'      => 'sfwd_groups_layout_design',
		'label'        => esc_html__( 'Group Title Font', 'codex' ),
		'default'      => codex()->default( 'groups_title_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.groups-title h1',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'id'             => 'groups_title_font',
			'headingInherit' => true,
		),
	),
	'groups_title_breadcrumb_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'sfwd_groups_layout_design',
		'label'        => esc_html__( 'Breadcrumb Colors', 'codex' ),
		'default'      => codex()->default( 'groups_title_breadcrumb_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.groups-title .codex-breadcrumbs',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.groups-title .codex-breadcrumbs a:hover',
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
	'groups_title_breadcrumb_font' => array(
		'control_type' => 'codex_typography_control',
		'section'      => 'sfwd_groups_layout_design',
		'label'        => esc_html__( 'Breadcrumb Font', 'codex' ),
		'default'      => codex()->default( 'groups_title_breadcrumb_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.groups-title .codex-breadcrumbs',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'      => 'groups_title_breadcrumb_font',
			'options' => 'no-color',
		),
	),
	'groups_title_background' => array(
		'control_type' => 'codex_background_control',
		'section'      => 'sfwd_groups_layout_design',
		'label'        => esc_html__( 'Group Above Area Background', 'codex' ),
		'default'      => codex()->default( 'groups_title_background' ),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'groups_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#inner-wrap .groups-hero-section .entry-hero-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Group Title Background', 'codex' ),
		),
	),
	'groups_title_featured_image' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'sfwd_groups_layout_design',
		'default'      => codex()->default( 'groups_title_featured_image' ),
		'label'        => esc_html__( 'Use Featured Image for Background?', 'codex' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'groups_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
	),
	'groups_title_overlay_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'sfwd_groups_layout_design',
		'label'        => esc_html__( 'Background Overlay Color', 'codex' ),
		'default'      => codex()->default( 'groups_title_overlay_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.groups-hero-section .hero-section-overlay',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'groups_title_layout',
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
	'groups_title_border' => array(
		'control_type' => 'codex_borders_control',
		'section'      => 'sfwd_groups_layout_design',
		'label'        => esc_html__( 'Border', 'codex' ),
		'default'      => codex()->default( 'groups_title_border' ),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'groups_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'settings'     => array(
			'border_top'    => 'groups_title_top_border',
			'border_bottom' => 'groups_title_bottom_border',
		),
		'live_method'     => array(
			'groups_title_top_border' => array(
				array(
					'type'     => 'css_border',
					'selector' => '.groups-hero-section .entry-hero-container-inner',
					'pattern'  => '$',
					'property' => 'border-top',
					'key'      => 'border',
				),
			),
			'groups_title_bottom_border' => array( 
				array(
					'type'     => 'css_border',
					'selector' => '.groups-hero-section .entry-hero-container-inner',
					'property' => 'border-bottom',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
	),
	'info_sfwd_groups_layout' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'sfwd_groups_layout',
		'priority'     => 10,
		'label'        => esc_html__( 'Group Layout', 'codex' ),
		'settings'     => false,
	),
	'info_sfwd_groups_layout_design' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'sfwd_groups_layout_design',
		'priority'     => 10,
		'label'        => esc_html__( 'Group Layout', 'codex' ),
		'settings'     => false,
	),
	'groups_layout' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'sfwd_groups_layout',
		'label'        => esc_html__( 'Group Layout', 'codex' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => codex()->default( 'groups_layout' ),
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
	'groups_sidebar_id' => array(
		'control_type' => 'codex_select_control',
		'section'      => 'sfwd_groups_layout',
		'label'        => esc_html__( 'Group Default Sidebar', 'codex' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => codex()->default( 'groups_sidebar_id' ),
		'input_attrs'  => array(
			'options' => codex()->sidebar_options(),
		),
	),
	'groups_content_style' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'sfwd_groups_layout',
		'label'        => esc_html__( 'Content Style', 'codex' ),
		'priority'     => 10,
		'default'      => codex()->default( 'groups_content_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-groups',
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
	'groups_vertical_padding' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'sfwd_groups_layout',
		'label'        => esc_html__( 'Content Vertical Padding', 'codex' ),
		'priority'     => 10,
		'default'      => codex()->default( 'groups_vertical_padding' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-groups',
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
	'groups_feature' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'sfwd_groups_layout',
		'priority'     => 20,
		'default'      => codex()->default( 'groups_feature' ),
		'label'        => esc_html__( 'Show Featured Image?', 'codex' ),
		'transport'    => 'refresh',
	),
	'groups_feature_position' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'sfwd_groups_layout',
		'label'        => esc_html__( 'Featured Image Position', 'codex' ),
		'priority'     => 20,
		'transport'    => 'refresh',
		'default'      => codex()->default( 'groups_feature_position' ),
		'context'      => array(
			array(
				'setting'    => 'groups_feature',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'above' => array(
					'name' => __( 'Above', 'codex' ),
				),
				'behind' => array(
					'name' => __( 'Behind', 'codex' ),
				),
				'below' => array(
					'name' => __( 'Below', 'codex' ),
				),
			),
			'responsive' => false,
		),
	),
	'groups_feature_ratio' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'sfwd_groups_layout',
		'label'        => esc_html__( 'Featured Image Ratio', 'codex' ),
		'priority'     => 20,
		'default'      => codex()->default( 'groups_feature_ratio' ),
		'context'      => array(
			array(
				'setting'    => 'groups_feature',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-groups .article-post-thumbnail',
				'pattern'  => 'codex-thumbnail-ratio-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'inherit' => array(
					'name' => __( 'Inherit', 'codex' ),
				),
				'1-1' => array(
					'name' => __( '1:1', 'codex' ),
				),
				'3-4' => array(
					'name' => __( '4:3', 'codex' ),
				),
				'2-3' => array(
					'name' => __( '3:2', 'codex' ),
				),
				'9-16' => array(
					'name' => __( '16:9', 'codex' ),
				),
				'1-2' => array(
					'name' => __( '2:1', 'codex' ),
				),
			),
			'responsive' => false,
			'class' => 'codex-three-col-short',
		),
	),
	'groups_background' => array(
		'control_type' => 'codex_background_control',
		'section'      => 'sfwd_groups_layout_design',
		'priority'     => 20,
		'label'        => esc_html__( 'Site Background', 'codex' ),
		'default'      => codex()->default( 'groups_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single-groups',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Group Background', 'codex' ),
		),
	),
	'groups_content_background' => array(
		'control_type' => 'codex_background_control',
		'section'      => 'sfwd_groups_layout_design',
		'priority'     => 20,
		'label'        => esc_html__( 'Content Background', 'codex' ),
		'default'      => codex()->default( 'groups_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single-groups .content-bg, body.single-groups.content-style-unboxed .site',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Group Content Background', 'codex' ),
		),
	),
);

Theme_Customizer::add_settings( $settings );

