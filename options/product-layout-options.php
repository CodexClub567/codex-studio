<?php
/**
 * Product Layout Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;

$settings = array(
	'product_layout_tabs' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'product_layout',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'product_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'product_layout_design',
			),
			'active' => 'general',
		),
	),
	'product_layout_tabs_design' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'product_layout_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'product_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'product_layout_design',
			),
			'active' => 'design',
		),
	),
	'info_product_title' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'product_layout',
		'priority'     => 2,
		'label'        => esc_html__( 'Product Above Content', 'codex' ),
		'settings'     => false,
	),
	'info_product_title_design' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'product_layout_design',
		'priority'     => 2,
		'label'        => esc_html__( 'Product Above Content', 'codex' ),
		'settings'     => false,
	),
	'product_above_layout' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'product_layout',
		'priority'     => 4,
		'default'      => codex()->default( 'product_above_layout' ),
		'label'        => esc_html__( 'Above Content Layout', 'codex' ),
		'transport'    => 'refresh',
		'input_attrs'  => array(
			'layout' => array(
				'title' => array(
					'tooltip' => __( 'Enables an Extra above content title area', 'codex' ),
					'name'    => __( 'Extra Title Area', 'codex' ),
					'icon'    => '',
				),
				'breadcrumbs' => array(
					'tooltip' => __( 'Enables Breadcrumbs', 'codex' ),
					'name'    => __( 'Breadcrumbs', 'codex' ),
					'icon'    => '',
				),
				'none' => array(
					'tooltip' => __( 'Hides this area', 'codex' ),
					'name'    => __( 'Nothing', 'codex' ),
					'icon'    => '',
				),
			),
			'responsive' => false,
			'class'      => 'codex-tiny-text',
		),
	),
	'product_title_inner_layout' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'product_layout',
		'priority'     => 4,
		'default'      => codex()->default( 'product_title_inner_layout' ),
		'label'        => esc_html__( 'Title Container Width', 'codex' ),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.product-hero-section',
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
	'product_title_align' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'product_layout',
		'label'        => esc_html__( 'Product Above Align', 'codex' ),
		'priority'     => 4,
		'default'      => codex()->default( 'product_title_align' ),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.product-title',
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
	'product_title_height' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'product_layout',
		'priority'     => 5,
		'label'        => esc_html__( 'Above Container Min Height', 'codex' ),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#inner-wrap .product-hero-section .entry-header',
				'property' => 'min-height',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => codex()->default( 'product_title_height' ),
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
	'product_title_elements' => array(
		'control_type' => 'codex_sorter_control',
		'section'      => 'product_layout',
		'priority'     => 6,
		'default'      => codex()->default( 'product_title_elements' ),
		'label'        => esc_html__( 'Above Elements', 'codex' ),
		'transport'    => 'refresh',
		'settings'     => array(
			'elements'    => 'product_title_elements',
			'above_title' => 'product_title_element_above_title',
			'breadcrumb'  => 'product_title_element_breadcrumb',
			'category'    => 'product_title_element_category',
		),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
		'input_attrs'  => array(
			'group' => 'product_title_element',
		),
	),
	'product_above_title_font' => array(
		'control_type' => 'codex_typography_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Product Above Title Font', 'codex' ),
		'default'      => codex()->default( 'product_above_title_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.product-hero-section .extra-title',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
		'input_attrs'  => array(
			'id'             => 'product_above_title_font',
			'headingInherit' => true,
		),
	),
	'product_above_category_font' => array(
		'control_type' => 'codex_typography_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Product Above Category Font', 'codex' ),
		'default'      => codex()->default( 'product_above_category_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.product-hero-section .single-category',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
		'input_attrs'  => array(
			'id'             => 'product_above_category_font',
			'headingInherit' => true,
		),
	),
	'product_title_breadcrumb_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Breadcrumb Colors', 'codex' ),
		'default'      => codex()->default( 'product_title_breadcrumb_color' ),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '!=',
				'value'      => 'none',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.product-title .codex-breadcrumbs',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.product-title .codex-breadcrumbs a:hover',
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
	'product_title_breadcrumb_font' => array(
		'control_type' => 'codex_typography_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Breadcrumb Font', 'codex' ),
		'default'      => codex()->default( 'product_title_breadcrumb_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.product-title .codex-breadcrumbs',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '!=',
				'value'      => 'none',
			),
		),
		'input_attrs'  => array(
			'id'      => 'product_title_breadcrumb_font',
			'options' => 'no-color',
		),
	),
	'product_title_background' => array(
		'control_type' => 'codex_background_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Product Above Area Background', 'codex' ),
		'default'      => codex()->default( 'product_title_background' ),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#inner-wrap .product-hero-section .entry-hero-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Product Above Title Background', 'codex' ),
		),
	),
	'product_title_featured_image' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'product_layout_design',
		'default'      => codex()->default( 'product_title_featured_image' ),
		'label'        => esc_html__( 'Use Featured Image for Background?', 'codex' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
	),
	'product_title_overlay_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Background Overlay Color', 'codex' ),
		'default'      => codex()->default( 'product_title_overlay_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.product-hero-section .hero-section-overlay',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
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
	'product_title_border' => array(
		'control_type' => 'codex_borders_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Border', 'codex' ),
		'default'      => codex()->default( 'product_title_border' ),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
		'settings'     => array(
			'border_top'    => 'product_title_top_border',
			'border_bottom' => 'product_title_bottom_border',
		),
		'live_method'     => array(
			'product_title_top_border' => array(
				array(
					'type'     => 'css_border',
					'selector' => '.product-hero-section .entry-hero-container-inner',
					'pattern'  => '$',
					'property' => 'border-top',
					'key'      => 'border',
				),
			),
			'product_title_bottom_border' => array( 
				array(
					'type'     => 'css_border',
					'selector' => '.product-hero-section .entry-hero-container-inner',
					'property' => 'border-bottom',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
	),
	'info_product_layout' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'product_layout',
		'priority'     => 10,
		'label'        => esc_html__( 'Product Layout', 'codex' ),
		'settings'     => false,
	),
	'info_product_layout_design' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'product_layout_design',
		'priority'     => 10,
		'label'        => esc_html__( 'Product Layout', 'codex' ),
		'settings'     => false,
	),
	'product_single_category_font' => array(
		'control_type' => 'codex_typography_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Product In Content Category Font', 'codex' ),
		'default'      => codex()->default( 'product_single_category_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.woocommerce div.product .product-single-category',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'             => 'product_single_category_font',
		),
	),
	'product_title_font' => array(
		'control_type' => 'codex_typography_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Product Title Font', 'codex' ),
		'default'      => codex()->default( 'product_title_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.woocommerce div.product .product_title',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'             => 'product_title_font',
			'headingInherit' => true,
		),
	),
	'product_layout' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'product_layout',
		'label'        => esc_html__( 'Product Layout', 'codex' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => codex()->default( 'product_layout' ),
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
	'product_sidebar_id' => array(
		'control_type' => 'codex_select_control',
		'section'      => 'product_layout',
		'label'        => esc_html__( 'Product Default Sidebar', 'codex' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => codex()->default( 'product_sidebar_id' ),
		'input_attrs'  => array(
			'options' => codex()->sidebar_options(),
		),
	),
	'product_content_style' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'product_layout',
		'label'        => esc_html__( 'Content Style', 'codex' ),
		'priority'     => 10,
		'default'      => codex()->default( 'product_content_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-product',
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
	'product_vertical_padding' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'product_layout',
		'label'        => esc_html__( 'Content Vertical Spacing', 'codex' ),
		'priority'     => 10,
		'default'      => codex()->default( 'product_vertical_padding' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-product',
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
	'product_content_elements' => array(
		'control_type' => 'codex_sorter_control',
		'section'      => 'product_layout',
		'priority'     => 10,
		'default'      => codex()->default( 'product_content_elements' ),
		'label'        => esc_html__( 'Product Elements', 'codex' ),
		'transport'    => 'refresh',
		'settings'     => array(
			'elements'     => 'product_content_elements',
			'category'     => 'product_content_element_category',
			'title'        => 'product_content_element_title',
			'rating'       => 'product_content_element_rating',
			'price'        => 'product_content_element_price',
			'excerpt'      => 'product_content_element_excerpt',
			'add_to_cart'  => 'product_content_element_add_to_cart',
			'extras'       => 'product_content_element_extras',
			'payments'     => 'product_content_element_payments',
			'product_meta' => 'product_content_element_product_meta',
			'share'        => 'product_content_element_share',
		),
		'input_attrs'  => array(
			'group' => 'product_content_element',
			'sortable' => false,
		),
	),
	'custom_quantity' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'product_layout',
		'priority'     => 10,
		'default'      => codex()->default( 'custom_quantity' ),
		'label'        => esc_html__( 'Use Custom Quantity Plus and Minus', 'codex' ),
		'transport'    => 'refresh',
	),
	'variation_direction' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'product_layout',
		'priority'     => 10,
		'default'      => codex()->default( 'variation_direction' ),
		'label'        => esc_html__( 'Product Variation Display', 'codex' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-product',
				'pattern'  => 'product-variation-style-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'horizontal' => array(
					'name' => __( 'Horizontal', 'codex' ),
				),
				'vertical' => array(
					'name' => __( 'Vertical', 'codex' ),
				),
			),
			'responsive' => false,
		),
	),
	'product_tab_style' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'product_layout',
		'label'        => esc_html__( 'Tab Style', 'codex' ),
		'priority'     => 10,
		'default'      => codex()->default( 'product_tab_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-product',
				'pattern'  => 'product-tab-style-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'normal' => array(
					'name' => __( 'Normal', 'codex' ),
				),
				'center' => array(
					'name' => __( 'Center', 'codex' ),
				),
			),
			'responsive' => false,
		),
	),
	'product_tab_title' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'product_layout',
		'priority'     => 10,
		'default'      => codex()->default( 'product_tab_title' ),
		'label'        => esc_html__( 'Show default headings in tab content', 'codex' ),
		'transport'    => 'refresh',
	),
	'product_additional_weight_dimensions' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'product_layout',
		'priority'     => 10,
		'default'      => codex()->default( 'product_additional_weight_dimensions' ),
		'label'        => esc_html__( 'Show Weight and Dimensions in Additional Information tab?', 'codex' ),
		'transport'    => 'refresh',
	),
	'product_related' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'product_layout',
		'priority'     => 10,
		'default'      => codex()->default( 'product_related' ),
		'label'        => esc_html__( 'Show Related Products?', 'codex' ),
		'transport'    => 'refresh',
	),
	'product_related_columns' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'product_layout',
		'priority'     => 10,
		'label'        => esc_html__( 'Related Products Columns', 'codex' ),
		'transport'    => 'refresh',
		'default'      => codex()->default( 'product_related_columns' ),
		'context'      => array(
			array(
				'setting'    => 'product_related',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'2' => array(
					'name' => __( '2', 'codex' ),
				),
				'3' => array(
					'name' => __( '3', 'codex' ),
				),
				'4' => array(
					'name' => __( '4', 'codex' ),
				),
			),
			'responsive' => false,
		),
	),
	'product_background' => array(
		'control_type' => 'codex_background_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Site Background', 'codex' ),
		'default'      => codex()->default( 'product_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single-product',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Product Background', 'codex' ),
		),
	),
	'product_content_background' => array(
		'control_type' => 'codex_background_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Content Background', 'codex' ),
		'default'      => codex()->default( 'product_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single-product .content-bg, body.single-product.content-style-unboxed .site',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Product Content Background', 'codex' ),
		),
	),
);

Theme_Customizer::add_settings( $settings );

