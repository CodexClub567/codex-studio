<?php
/**
 * Sidebar Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;

ob_start(); ?>
<div class="codex-compontent-description">
	<p style="margin:0"><?php echo esc_html__( 'Title and Content settings affect legacy widgets. For block editor widgets use settings in the editor.', 'codex' ); ?></p>
</div>
<?php
$component_description = ob_get_clean();

Theme_Customizer::add_settings(
	array(
		'sidebar_tabs' => array(
			'control_type' => 'codex_tab_control',
			'section'      => 'sidebar',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'codex' ),
					'target' => 'sidebar',
				),
				'design' => array(
					'label'  => __( 'Design', 'codex' ),
					'target' => 'sidebar_design',
				),
				'active' => 'general',
			),
		),
		'sidebar_tabs_design' => array(
			'control_type' => 'codex_tab_control',
			'section'      => 'sidebar_design',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'codex' ),
					'target' => 'sidebar',
				),
				'design' => array(
					'label'  => __( 'Design', 'codex' ),
					'target' => 'sidebar_design',
				),
				'active' => 'design',
			),
		),
		'sidebar_width' => array(
			'control_type' => 'codex_range_control',
			'section'      => 'sidebar',
			'priority'     => 10,
			'label'        => esc_html__( 'Sidebar Width', 'codex' ),
			// 'context'      => array(
			// 	array(
			// 		'setting' => '__current_tab',
			// 		'value'   => 'general',
			// 	),
			// ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.has-sidebar:not(.has-left-sidebar) .content-container',
					'property' => 'grid-template-columns',
					'pattern'  => '1fr $',
					'key'      => 'size',
				),
				array(
					'type'     => 'css',
					'selector' => '.has-sidebar.has-left-sidebar .content-container',
					'property' => 'grid-template-columns',
					'pattern'  => '$ 1fr',
					'key'      => 'size',
				),
			),
			'default'      => codex()->default( 'sidebar_width' ),
			'input_attrs'  => array(
				'min'        => array(
					'px'  => 100,
					'em'  => 8,
					'rem' => 8,
					'%' => 5,
				),
				'max'        => array(
					'px'  => 600,
					'em'  => 30,
					'rem' => 30,
					'%'   => 60,
				),
				'step'       => array(
					'px'  => 1,
					'em'  => 0.01,
					'rem' => 0.01,
					'%' => 1,
				),
				'units'      => array( 'px', 'em', 'rem', '%' ),
				'responsive' => false,
			),
		),
		'sidebar_widget_spacing' => array(
			'control_type' => 'codex_range_control',
			'section'      => 'sidebar',
			'priority'     => 10,
			'label'        => esc_html__( 'Widget Spacing', 'codex' ),
			// 'context'      => array(
			// 	array(
			// 		'setting' => '__current_tab',
			// 		'value'   => 'general',
			// 	),
			// ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'property' => 'margin-bottom',
					'selector' => '.primary-sidebar.widget-area .widget',
					'pattern'  => '$',
					'key'      => 'size',
				),
			),
			'default'      => codex()->default( 'sidebar_widget_spacing' ),
			'input_attrs'  => array(
				'min'     => array(
					'px'  => 0,
					'em'  => 0,
					'rem' => 0,
				),
				'max'     => array(
					'px'  => 200,
					'em'  => 8,
					'rem' => 8,
				),
				'step'    => array(
					'px'  => 1,
					'em'  => 0.01,
					'rem' => 0.01,
				),
				'units'   => array( 'px', 'em', 'rem' ),
			),
		),
		'sidebar_widget_settings' => array(
			'control_type' => 'codex_blank_control',
			'section'      => 'sidebar_design',
			'settings'     => false,
			'priority'     => 1,
			'description'  => $component_description,
		),
		'sidebar_widget_title' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'sidebar_design',
			'label'        => esc_html__( 'Widget Titles', 'codex' ),
			// 'context'      => array(
			// 	array(
			// 		'setting' => '__current_tab',
			// 		'value'   => 'design',
			// 	),
			// ),
			'default'      => codex()->default( 'sidebar_widget_title' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '.primary-sidebar.widget-area .widget-title',
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
				'id' => 'sidebar_widget_title',
			),
		),
		'sidebar_widget_content' => array(
			'control_type' => 'codex_typography_control',
			'section'      => 'sidebar_design',
			'label'        => esc_html__( 'Widget Content', 'codex' ),
			// 'context'      => array(
			// 	array(
			// 		'setting' => '__current_tab',
			// 		'value'   => 'design',
			// 	),
			// ),
			'default'      => codex()->default( 'sidebar_widget_content' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '.primary-sidebar.widget-area .widget',
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
				'id' => 'sidebar_widget_content',
			),
		),
		'sidebar_link_style' => array(
			'control_type' => 'codex_select_control',
			'section'      => 'sidebar_design',
			'default'      => codex()->default( 'sidebar_link_style' ),
			'label'        => esc_html__( 'Link Style', 'codex' ),
			'input_attrs'  => array(
				'options' => array(
					'normal' => array(
						'name' => __( 'Underline on Hover', 'codex' ),
					),
					'underline' => array(
						'name' => __( 'Underline', 'codex' ),
					),
					'plain' => array(
						'name' => __( 'No Underline', 'codex' ),
					),
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => '.primary-sidebar',
					'pattern'  => 'sidebar-link-style-$',
					'key'      => '',
				),
			),
		),
		'sidebar_link_colors' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'sidebar_design',
			'label'        => esc_html__( 'Link Colors', 'codex' ),
			'default'      => codex()->default( 'sidebar_link_colors' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.primary-sidebar.widget-area .sidebar-inner-wrap a',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.primary-sidebar.widget-area .sidebar-inner-wrap a:hover',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'hover',
				),
			),
			// 'context'      => array(
			// 	array(
			// 		'setting' => '__current_tab',
			// 		'value'   => 'design',
			// 	),
			// ),
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
		'sidebar_background' => array(
			'control_type' => 'codex_background_control',
			'section'      => 'sidebar_design',
			'label'        => esc_html__( 'Sidebar Background', 'codex' ),
			'default'      => codex()->default( 'sidebar_background' ),
			// 'context'      => array(
			// 	array(
			// 		'setting' => '__current_tab',
			// 		'value'   => 'design',
			// 	),
			// ),
			'live_method'     => array(
				array(
					'type'     => 'css_background',
					'selector' => '.primary-sidebar.widget-area',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'base',
				),
			),
			'input_attrs'  => array(
				'tooltip'  => __( 'Sidebar Background', 'codex' ),
			),
		),
		'sidebar_divider_border' => array(
			'control_type' => 'codex_border_control',
			'section'      => 'sidebar_design',
			'label'        => esc_html__( 'Sidebar Divider Border', 'codex' ),
			'default'      => codex()->default( 'sidebar_divider_border' ),
			// 'context'      => array(
			// 	array(
			// 		'setting' => '__current_tab',
			// 		'value'   => 'design',
			// 	),
			// ),
			'live_method'     => array(
				array(
					'type'     => 'css_border',
					'selector' => '.has-sidebar.has-left-sidebar .primary-sidebar.widget-area',
					'pattern'  => '$',
					'property' => 'border-right',
					'pattern'  => '$',
					'key'      => 'border',
				),
				array(
					'type'     => 'css_border',
					'selector' => '.has-sidebar:not(.has-left-sidebar) .primary-sidebar.widget-area',
					'pattern'  => '$',
					'property' => 'border-left',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
		'sidebar_padding' => array(
			'control_type' => 'codex_measure_control',
			'section'      => 'sidebar_design',
			'priority'     => 10,
			'default'      => codex()->default( 'sidebar_padding' ),
			'label'        => esc_html__( 'Sidebar Padding', 'codex' ),
			// 'context'      => array(
			// 	array(
			// 		'setting' => '__current_tab',
			// 		'value'   => 'design',
			// 	),
			// ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.primary-sidebar.widget-area',
					'property' => 'padding',
					'pattern'  => '$',
					'key'      => 'measure',
				),
			),
			'input_attrs'  => array(
				'responsive' => true,
			),
		),
		'sidebar_sticky' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'sidebar',
			'default'      => codex()->default( 'sidebar_sticky' ),
			'label'        => esc_html__( 'Enable Sticky Sidebar', 'codex' ),
			'transport'    => 'refresh',
		),
		'sidebar_sticky_last_widget' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'sidebar',
			'default'      => codex()->default( 'sidebar_sticky_last_widget' ),
			'label'        => esc_html__( 'Only Stick Last Widget', 'codex' ),
			'transport'    => 'refresh',
			'context'      => array(
				array(
					'setting' => 'sidebar_sticky',
					'value'   => true,
				),
			),
		),
	)
);
