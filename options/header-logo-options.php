<?php
/**
 * Header Builder Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;

ob_start(); ?>
<div class="codex-compontent-tabs nav-tab-wrapper wp-clearfix">
	<a href="#" class="nav-tab codex-general-tab codex-compontent-tabs-button nav-tab-active" data-tab="general">
		<span><?php esc_html_e( 'General', 'codex' ); ?></span>
	</a>
	<a href="#" class="nav-tab codex-design-tab codex-compontent-tabs-button" data-tab="design">
		<span><?php esc_html_e( 'Design', 'codex' ); ?></span>
	</a>
</div>
<?php
$compontent_tabs = ob_get_clean();
$settings = array(
	'logo_settings' => array(
		'control_type' => 'codex_blank_control',
		'section'      => 'title_tagline',
		'settings'     => false,
		'priority'     => 1,
		'description'  => $compontent_tabs,
	),
	'logo_width' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'title_tagline',
		'priority'     => 5,
		'label'        => esc_html__( 'Logo Max Width', 'codex' ),
		'description'  => esc_html__( 'Define the maxium width for the logo', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'  => 'custom_logo',
				'operator' => '!empty',
				'value'    => '',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#masthead .custom-logo',
				'property' => 'max-width',
				'pattern'  => '$',
				'key'      => 'size',
			),
			array(
				'type'     => 'css',
				'selector' => '#masthead .site-branding a.brand img.svg-logo-image',
				'property' => 'width',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => codex()->default( 'logo_width' ),
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
				'em'  => 50,
				'rem' => 50,
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
			'units'   => array( 'px', 'em', 'rem', 'vw' ),
		),
	),
	'info_transparent_logo_in_use' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'title_tagline',
		'priority'     => 5,
		'description'        => esc_html__( '*NOTICE Custom transparent logo will show on pages that have the transparent header enabled. Change that in your transparent header settings.', 'codex' ),
		'settings'     => false,
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
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
	'use_mobile_logo' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'title_tagline',
		'transport'    => 'refresh',
		'priority'     => 6,
		'default'      => codex()->default( 'use_mobile_logo' ),
		'label'        => esc_html__( 'Different Logo for Mobile?', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'  => '__device',
				'operator' => 'in',
				'value'    => array( 'tablet', 'mobile' ),
			),
		),
	),
	'mobile_logo' => array(
		'control_type' => 'media',
		'section'      => 'title_tagline',
		'transport'    => 'refresh',
		'priority'     => 6,
		'mime_type'    => 'image',
		'default'      => '',
		'label'        => esc_html__( 'Mobile Logo', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'  => 'use_mobile_logo',
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
	'use_logo_icon' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'title_tagline',
		'transport'    => 'refresh',
		'priority'     => 6,
		'default'      => codex()->default( 'use_logo_icon' ),
		'label'        => esc_html__( 'Use Logo Icon?', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'  => 'custom_logo',
				'operator' => 'empty',
				'value'    => '',
			),
		),
		'partial'      => array(
			'selector'            => '#masthead',
			'container_inclusive' => true,
			'render_callback'     => 'codex\header_markup',
		),
	),
	'logo_icon' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'title_tagline',
		'priority'     => 6,
		'default'      => codex()->default( 'logo_icon' ),
		'label'        => esc_html__( 'Logo Icon', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'  => 'custom_logo',
				'operator' => 'empty',
				'value'    => '',
			),
			array(
				'setting'  => 'use_logo_icon',
				'operator' => '=',
				'value'    => true,
			),
		),
		'partial'      => array(
			'selector'            => '.logo-icon',
			'container_inclusive' => false,
			'render_callback'     => 'codex\logo_icon',
		),
		'input_attrs'  => array(
			'layout' => array(
				'logoArrow' => array(
					'icon' => 'logoArrow',
				),
				'logoCircle' => array(
					'icon' => 'logoCircle',
				),
				'logoLine' => array(
					'icon' => 'logoLine',
				),
				'custom' => array(
					'name' => __( 'Custom', 'codex' ),
				),
			),
			'responsive' => false,
			'class' => 'radio-icon-padding',
		),
	),
	'logo_icon_custom' => array(
		'control_type' => 'codex_textarea_control',
		'section'      => 'title_tagline',
		'priority'     => 6,
		'default'      => codex()->default( 'logo_icon_custom' ),
		'partial'      => array(
			'selector'            => '.logo-icon',
			'container_inclusive' => true,
			'render_callback'     => 'codex\logo_icon',
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'  => 'custom_logo',
				'operator' => 'empty',
				'value'    => '',
			),
			array(
				'setting'  => 'use_logo_icon',
				'operator' => '=',
				'value'    => true,
			),
			array(
				'setting'  => 'logo_icon',
				'operator' => '=',
				'value'    => 'custom',
			),
		),
		'input_attrs'  => array(
			'id' => 'logo_icon_custom',
		),
	),
	'logo_icon_width' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'title_tagline',
		'priority'     => 6,
		'label'        => esc_html__( 'Logo Icon Width', 'codex' ),
		'description'  => esc_html__( 'Define the width for the logo icon', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'  => 'custom_logo',
				'operator' => 'empty',
				'value'    => '',
			),
			array(
				'setting'  => 'use_logo_icon',
				'operator' => '=',
				'value'    => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#masthead .logo-icon',
				'property' => 'max-width',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => codex()->default( 'logo_icon_width' ),
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
				'em'  => 50,
				'rem' => 50,
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
			'units'   => array( 'px', 'em', 'rem', 'vw' ),
		),
	),
	'logo_icon_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'title_tagline',
		'label'        => esc_html__( 'Logo Icon Color', 'codex' ),
		'default'      => codex()->default( 'logo_icon_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#masthead .logo-icon',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
			array(
				'setting'  => 'custom_logo',
				'operator' => 'empty',
				'value'    => '',
			),
			array(
				'setting'  => 'use_logo_icon',
				'operator' => '=',
				'value'    => true,
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Color', 'codex' ),
					'palette' => true,
				),
			),
		),
	),
	'logo_layout' => array(
		'control_type' => 'codex_multi_radio_icon_control',
		'section'      => 'title_tagline',
		'priority'     => 6,
		'default'      => codex()->default( 'logo_layout' ),
		'label'        => esc_html__( 'Logo Layout', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'partial'      => array(
			'selector'            => '#masthead',
			'container_inclusive' => true,
			'render_callback'     => 'codex\header_markup',
		),
	),
	'brand_typography' => array(
		'control_type' => 'codex_typography_control',
		'section'      => 'title_tagline',
		'label'        => esc_html__( 'Site Title Font', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
			array(
				'setting'    => 'logo_layout',
				'operator'   => 'sub_object_contains',
				'sub_key'    => 'include',
				'responsive' => true,
				'value'      => 'title',
			),
		),
		'default'      => codex()->default( 'brand_typography' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => array(
					'desktop' => '#main-header .site-branding .site-title',
					'tablet'  => '#mobile-header .site-branding .site-title',
					'mobile'  => '#mobile-header .site-branding .site-title',
				),
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
			'id' => 'brand_typography',
		),
	),
	'brand_typography_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'title_tagline',
		'label'        => esc_html__( 'Site Title Hover and Active Colors', 'codex' ),
		'default'      => codex()->default( 'brand_typography_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#masthead .site-branding .site-title:hover',
				'pattern'  => '$',
				'property' => 'color',
				'key'      => 'hover',
			),
			array(
				'type'     => 'css',
				'selector' => '#main-header .header-html a:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
			array(
				'type'     => 'css',
				'selector' => 'body.home #masthead .site-branding .site-title',
				'pattern'  => '$',
				'property' => 'color',
				'key'      => 'active',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
			array(
				'setting'    => 'logo_layout',
				'operator'   => 'sub_object_contains',
				'sub_key'    => 'include',
				'responsive' => true,
				'value'      => 'title',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
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
	// Logo Tagline Typography.
	'brand_tag_typography' => array(
		'control_type' => 'codex_typography_control',
		'section'      => 'title_tagline',
		'label'        => esc_html__( 'Site Tagline Font', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
			array(
				'setting'    => 'logo_layout',
				'operator'   => 'sub_object_contains',
				'sub_key'    => 'include',
				'responsive' => true,
				'value'      => 'tagline',
			),
		),
		'default'      => codex()->default( 'brand_tag_typography' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => array(
					'desktop' => '#masthead .site-branding .site-description',
					'tablet'  => '#masthead .site-branding .site-description',
					'mobile'  => '#masthead .site-branding .site-description',
				),
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
			'id' => 'brand_tag_typography',
		),
	),
	'header_logo_padding' => array(
		'control_type' => 'codex_measure_control',
		'section'      => 'title_tagline',
		'priority'     => 15,
		'default'      => codex()->default( 'header_logo_padding' ),
		'label'        => esc_html__( 'Padding', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.site-branding',
				'property' => 'padding',
				'pattern'  => '$',
				'key'      => 'measure',
			),
		),
		'input_attrs'  => array(
			'min'        => array(
				'px'  => 0,
				'em'  => 0,
				'rem' => 0,
			),
			'max'        => array(
				'px'  => 100,
				'em'  => 6,
				'rem' => 6,
			),
			'step'       => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
			),
			'units'      => array( 'px', 'em', 'rem' ),
			'responsive' => true,
		),
	),
	'logo_link_to_site_icon' => array(
		'control_type' => 'codex_focus_button_control',
		'section'      => 'title_tagline',
		'settings'     => false,
		'priority'     => 25,
		'label'        => esc_html__( 'Site Icon', 'codex' ),
		'input_attrs'  => array(
			'section' => 'codex_customizer_site_identity',
		),
	),
	'site_logo_link' => array(
		'control_type' => 'codex_focus_button_control',
		'section'      => 'site_identity',
		'settings'     => false,
		'priority'     => 5,
		'label'        => esc_html__( 'Site Title and Logo Control', 'codex' ),
		'input_attrs'  => array(
			'section' => 'title_tagline',
		),
	),
	'post_archive_home_title' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'static_front_page',
		'transport'    => 'refresh',
		'default'      => codex()->default( 'post_archive_home_title' ),
		'label'        => esc_html__( 'Show site name for page title', 'codex' ),
		'context'      => array(
			array(
				'setting'    => 'show_on_front',
				'operator'   => '==',
				'value'      => 'posts',
			),
		),
	),
);

Theme_Customizer::add_settings( $settings );

