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
		'header_cart_tabs' => array(
			'control_type' => 'codex_tab_control',
			'section'      => 'cart',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'codex' ),
					'target' => 'cart',
				),
				'design' => array(
					'label'  => __( 'Design', 'codex' ),
					'target' => 'cart_design',
				),
				'active' => 'general',
			),
		),
		'header_cart_tabs_design' => array(
			'control_type' => 'codex_tab_control',
			'section'      => 'cart_design',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'codex' ),
					'target' => 'cart',
				),
				'design' => array(
					'label'  => __( 'Design', 'codex' ),
					'target' => 'cart_design',
				),
				'active' => 'design',
			),
		),
		'header_cart_label' => array(
			'control_type' => 'codex_text_control',
			'section'      => 'cart',
			'sanitize'     => 'sanitize_text_field',
			'priority'     => 6,
			'default'      => codex()->default( 'header_cart_label' ),
			'label'        => esc_html__( 'Cart Label', 'codex' ),
			'live_method'     => array(
				array(
					'type'     => 'html',
					'selector' => '.header-mobile-cart-wrap .header-cart-label',
					'pattern'  => '$',
					'key'      => '',
				),
			),
		),
		'header_cart_icon' => array(
			'control_type' => 'codex_radio_icon_control',
			'section'      => 'cart',
			'priority'     => 10,
			'default'      => codex()->default( 'header_cart_icon' ),
			'label'        => esc_html__( 'Cart Icon', 'codex' ),
			'partial'      => array(
				'selector'            => '.header-cart-wrap',
				'container_inclusive' => true,
				'render_callback'     => 'codex\header_cart',
			),
			'input_attrs'  => array(
				'layout' => array(
					'shopping-bag' => array(
						'icon' => 'shoppingBag',
					),
					'shopping-cart' => array(
						'icon' => 'shoppingCart',
					),
				),
				'responsive' => false,
			),
		),
		'header_cart_style' => array(
			'control_type' => 'codex_radio_icon_control',
			'section'      => 'cart',
			'priority'     => 10,
			'default'      => codex()->default( 'header_cart_style' ),
			'label'        => esc_html__( 'Cart Click Action', 'codex' ),
			'transport'    => 'refresh',
			'input_attrs'  => array(
				'layout' => array(
					'link' => array(
						'name' => __( 'Link', 'codex' ),
					),
					'slide' => array(
						'name' => __( 'Popout Cart', 'codex' ),
					),
					'dropdown' => array(
						'name' => __( 'Dropdown Cart', 'codex' ),
					),
				),
				'responsive' => false,
			),
		),
		'header_cart_show_total' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'cart',
			'priority'     => 6,
			'partial'      => array(
				'selector'            => '.header-cart-wrap',
				'container_inclusive' => true,
				'render_callback'     => 'codex\header_cart',
			),
			'default'      => codex()->default( 'header_cart_show_total' ),
			'label'        => esc_html__( 'Show Item Total Indicator', 'codex' ),
		),
		'header_cart_icon_size' => array(
			'control_type' => 'codex_range_control',
			'section'      => 'cart_design',
			'label'        => esc_html__( 'Icon Size', 'codex' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.header-cart-wrap .header-cart-button .codex-svg-iconset',
					'property' => 'font-size',
					'pattern'  => '$',
					'key'      => 'size',
				),
			),
			'default'      => codex()->default( 'header_cart_icon_size' ),
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
		'header_cart_color' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'cart_design',
			'label'        => esc_html__( 'Cart Colors', 'codex' ),
			'default'      => codex()->default( 'header_cart_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.site-header-item .header-cart-wrap .header-cart-inner-wrap .header-cart-button',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.site-header-item .header-cart-wrap .header-cart-inner-wrap .header-cart-button:hover',
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
		'header_cart_background' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'cart_design',
			'label'        => esc_html__( 'Cart Background', 'codex' ),
			'default'      => codex()->default( 'header_cart_background' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.site-header-item .header-cart-wrap .header-cart-inner-wrap .header-cart-button',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.site-header-item .header-cart-wrap .header-cart-inner-wrap .header-cart-button:hover',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'hover',
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
				),
			),
		),
		'header_cart_total_color' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'cart_design',
			'label'        => esc_html__( 'Cart Total Colors', 'codex' ),
			'default'      => codex()->default( 'header_cart_total_color' ),
			'context'      => array(
				array(
					'setting'  => 'header_cart_show_total',
					'operator' => '=',
					'value'    => true,
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.header-cart-wrap .header-cart-button .header-cart-total',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.header-cart-wrap .header-cart-button:hover .header-cart-total',
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
		'header_cart_total_background' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'cart_design',
			'label'        => esc_html__( 'Cart Total Background', 'codex' ),
			'default'      => codex()->default( 'header_cart_total_background' ),
			'context'      => array(
				array(
					'setting'  => 'header_cart_show_total',
					'operator' => '=',
					'value'    => true,
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.header-cart-wrap .header-cart-button .header-cart-total',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.header-cart-wrap .header-cart-button:hover .header-cart-total',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'hover',
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
				),
			),
		),
		'header_cart_typography' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'cart_design',
			'label'        => esc_html__( 'Cart Label Font', 'codex' ),
			'context'      => array(
				array(
					'setting'  => 'header_cart_label',
					'operator' => '!empty',
					'value'    => '',
				),
			),
			'default'      => codex()->default( 'header_cart_typography' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '.header-cart-wrap .header-cart-button .header-cart-label',
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
				'id'      => 'header_cart_typography',
				'options' => 'no-color',
			),
		),
		'header_cart_padding' => array(
			'control_type' => 'codex_measure_control',
			'section'      => 'cart_design',
			'priority'     => 10,
			'default'      => codex()->default( 'header_cart_padding' ),
			'label'        => esc_html__( 'Cart Padding', 'codex' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.site-header-item .header-cart-wrap .header-cart-inner-wrap .header-cart-button',
					'property' => 'padding',
					'pattern'  => '$',
					'key'      => 'measure',
				),
			),
			'input_attrs'  => array(
				'responsive' => false,
			),
		),
		'header_cart_popup_side' => array(
			'control_type' => 'codex_radio_icon_control',
			'section'      => 'cart',
			'priority'     => 20,
			'default'      => codex()->default( 'header_cart_popup_side' ),
			'label'        => esc_html__( 'Slide-Out Side', 'codex' ),
			'context'      => array(
				array(
					'setting'    => 'header_cart_style',
					'operator'   => '=',
					'value'      => 'slide',
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => '#cart-drawer',
					'pattern'  => 'popup-drawer-side-$',
					'key'      => '',
				),
			),
			'input_attrs'  => array(
				'layout' => array(
					'left' => array(
						'tooltip' => __( 'Reveal from Left', 'codex' ),
						'name'    => __( 'Left', 'codex' ),
						'icon'    => '',
					),
					'right' => array(
						'tooltip' => __( 'Reveal from Right', 'codex' ),
						'name'    => __( 'Right', 'codex' ),
						'icon'    => '',
					),
				),
				'responsive' => false,
			),
		),
	)
);
