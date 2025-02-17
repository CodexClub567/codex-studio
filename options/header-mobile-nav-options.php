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
	'mobile_navigation_tabs' => array(
		'control_type' => 'codex_blank_control',
		'section'      => 'mobile_navigation',
		'settings'     => false,
		'priority'     => 1,
		'description'  => $compontent_tabs,
	),
	'mobile_navigation_link' => array(
		'control_type' => 'codex_focus_button_control',
		'section'      => 'mobile_navigation',
		'settings'     => false,
		'priority'     => 5,
		'label'        => esc_html__( 'Select Menu', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'input_attrs'  => array(
			'section' => 'menu_locations',
		),
	),
	'mobile_navigation_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'mobile_navigation',
		'label'        => esc_html__( 'Colors', 'codex' ),
		'default'      => codex()->default( 'mobile_navigation_color' ),
		'live_method'  => array(
			array(
				'type'     => 'css',
				'selector' => '.mobile-navigation ul li:not(.menu-item-has-children) > a, .mobile-navigation ul li.menu-item-has-children > .drawer-nav-drop-wrap',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.mobile-navigation ul li:not(.menu-item-has-children) > a:hover, .mobile-navigation ul li.menu-item-has-children > .drawer-nav-drop-wrap:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
			array(
				'type'     => 'css',
				'selector' => '.mobile-navigation ul li.current-menu-item:not(.menu-item-has-children) > a, .mobile-navigation ul li.current-menu-item.menu-item-has-children > .drawer-nav-drop-wrap',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'active',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
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
	'mobile_navigation_background' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'mobile_navigation',
		'priority'     => 20,
		'label'        => esc_html__( 'Background', 'codex' ),
		'default'      => codex()->default( 'mobile_navigation_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.mobile-navigation ul li:not(.menu-item-has-children) > a, .mobile-navigation ul li.menu-item-has-children > .drawer-nav-drop-wrap',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.mobile-navigation ul li:not(.menu-item-has-children) > a:hover, .mobile-navigation ul li.menu-item-has-children > .drawer-nav-drop-wrap:hover',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'hover',
			),
			array(
				'type'     => 'css',
				'selector' => '.mobile-navigation ul li.current-menu-item:not(.menu-item-has-children) > a, .mobile-navigation ul li.current-menu-item.menu-item-has-children > .drawer-nav-drop-wrap',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'active',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
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
	'mobile_navigation_divider' => array(
		'control_type' => 'codex_border_control',
		'section'      => 'mobile_navigation',
		'priority'     => 20,
		'label'        => esc_html__( 'Item Divider', 'codex' ),
		'default'      => codex()->default( 'mobile_navigation_divider' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_border',
				'selector' => '.mobile-navigation ul li.menu-item-has-children .drawer-nav-drop-wrap, .mobile-navigation ul li:not(.menu-item-has-children) a ',
				'pattern'  => '$',
				'property' => 'border-bottom',
				'pattern'  => '$',
				'key'      => 'border',
			),
			array(
				'type'     => 'css_border',
				'selector' => '.mobile-navigation ul li.menu-item-has-children .drawer-nav-drop-wrap button',
				'pattern'  => '$',
				'property' => 'border-left',
				'pattern'  => '$',
				'key'      => 'border',
			),
		),
		'input_attrs'  => array(
			'responsive' => false,
		),
	),
	'mobile_navigation_typography' => array(
		'control_type' => 'codex_typography_control',
		'section'      => 'mobile_navigation',
		'priority'     => 20,
		'label'        => esc_html__( 'Font', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'default'      => codex()->default( 'mobile_navigation_typography' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.mobile-navigation ul li',
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
			'id'      => 'mobile_navigation_typography',
			'options' => 'no-color',
		),
	),
	'mobile_navigation_vertical_spacing' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'mobile_navigation',
		'priority'     => 20,
		'label'        => esc_html__( 'Items Vertical Spacing', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.mobile-navigation ul li a',
				'property' => 'padding-top',
				'pattern'  => '$',
				'key'      => 'size',
			),
			array(
				'type'     => 'css',
				'selector' => '.mobile-navigation ul li a',
				'property' => 'padding-bottom',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => codex()->default( 'mobile_navigation_vertical_spacing' ),
		'input_attrs'  => array(
			'min'        => array(
				'px'  => 0,
				'em'  => 0,
				'rem' => 0,
				'vh'  => 0,
			),
			'max'        => array(
				'px'  => 100,
				'em'  => 12,
				'rem' => 12,
				'vh'  => 12,
			),
			'step'       => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
				'vh'  => 0.01,
			),
			'units'      => array( 'px', 'em', 'rem', 'vh' ),
			'responsive' => false,
		),
	),
	'mobile_navigation_collapse' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'mobile_navigation',
		'priority'     => 20,
		'default'      => codex()->default( 'mobile_navigation_collapse' ),
		'label'        => esc_html__( 'Collapse sub menu items?', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'partial'      => array(
			'selector'            => '#mobile-site-navigation',
			'container_inclusive' => true,
			'render_callback'     => 'codex\mobile_navigation',
		),
	),
	'mobile_navigation_parent_toggle' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'mobile_navigation',
		'priority'     => 20,
		'default'      => codex()->default( 'mobile_navigation_parent_toggle' ),
		'label'        => esc_html__( 'Entire parent menu item expands sub menu', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting' => 'mobile_navigation_collapse',
				'value'   => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.mobile-navigation',
				'pattern'  => 'drawer-navigation-parent-toggle-$',
				'key'      => '',
			),
		),
	),
);

Theme_Customizer::add_settings( $settings );

