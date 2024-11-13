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
<div class="codex-build-tabs nav-tab-wrapper wp-clearfix">
	<a href="#" class="nav-tab preview-desktop codex-build-tabs-button" data-device="desktop">
		<span class="dashicons dashicons-desktop"></span>
		<span><?php esc_html_e( 'Desktop', 'codex' ); ?></span>
	</a>
	<a href="#" class="nav-tab preview-tablet preview-mobile codex-build-tabs-button" data-device="tablet">
		<span class="dashicons dashicons-smartphone"></span>
		<span><?php esc_html_e( 'Tablet / Mobile', 'codex' ); ?></span>
	</a>
</div>
<span class="button button-secondary codex-builder-hide-button codex-builder-tab-toggle"><span class="dashicons dashicons-no"></span><?php esc_html_e( 'Hide', 'codex' ); ?></span>
<span class="button button-secondary codex-builder-show-button codex-builder-tab-toggle"><span class="dashicons dashicons-edit"></span><?php esc_html_e( 'Header Builder', 'codex' ); ?></span>
<?php
$builder_tabs = ob_get_clean();
ob_start();
?>
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
	'header_builder' => array(
		'control_type' => 'codex_blank_control',
		'section'      => 'header_builder',
		'settings'     => false,
		'description'  => $builder_tabs,
		'context'      => array(
			array(
				'setting'  => 'blocks_header',
				'operator' => '!=',
				'value'    => true,
			),
		),
	),
	'header_desktop_items' => array(
		'control_type' => 'codex_builder_control',
		'section'      => 'header_builder',
		'default'      => codex()->default( 'header_desktop_items' ),
		'context'      => array(
			array(
				'setting' => '__device',
				'value'   => 'desktop',
			),
			array(
				'setting'  => 'blocks_header',
				'operator' => '!=',
				'value'    => true,
			),
		),
		'partial'      => array(
			'selector'            => '#masthead',
			'container_inclusive' => true,
			'render_callback'     => 'codex\header_markup',
		),
		'choices'      => array(
			'logo'          => array(
				'name'    => esc_html__( 'Logo', 'codex' ),
				'section' => 'title_tagline',
			),
			'navigation'          => array(
				'name'    => esc_html__( 'Primary Navigation', 'codex' ),
				'section' => 'codex_customizer_primary_navigation',
			),
			'navigation-2'        => array(
				'name'    => esc_html__( 'Secondary Navigation', 'codex' ),
				'section' => 'codex_customizer_secondary_navigation',
			),
			'search' => array(
				'name'    => esc_html__( 'Search', 'codex' ),
				'section' => 'codex_customizer_header_search',
			),
			'button'        => array(
				'name'    => esc_html__( 'Button', 'codex' ),
				'section' => 'codex_customizer_header_button',
			),
			'social'        => array(
				'name'    => esc_html__( 'Social', 'codex' ),
				'section' => 'codex_customizer_header_social',
			),
			'html'          => array(
				'name'    => esc_html__( 'HTML', 'codex' ),
				'section' => 'codex_customizer_header_html',
			),
		),
		'input_attrs'  => array(
			'group' => 'header_desktop_items',
			'rows'  => array( 'top', 'main', 'bottom' ),
			'zones' => array(
				'top' => array(
					'top_left'         => is_rtl() ? esc_html__( 'Top - Right', 'codex' ) : esc_html__( 'Top - Left', 'codex' ),
					'top_left_center'  => is_rtl() ? esc_html__( 'Top - Right Center', 'codex' ) : esc_html__( 'Top - Left Center', 'codex' ),
					'top_center'       => esc_html__( 'Top - Center', 'codex' ),
					'top_right_center' => is_rtl() ? esc_html__( 'Top - Left Center', 'codex' ) : esc_html__( 'Top - Right Center', 'codex' ),
					'top_right'        => is_rtl() ? esc_html__( 'Top - Left', 'codex' ) : esc_html__( 'Top - Right', 'codex' ),
				),
				'main' => array(
					'main_left'         => is_rtl() ? esc_html__( 'Main - Right', 'codex' ) : esc_html__( 'Main - Left', 'codex' ),
					'main_left_center'  => is_rtl() ? esc_html__( 'Main - Right Center', 'codex' ) : esc_html__( 'Main - Left Center', 'codex' ),
					'main_center'       => esc_html__( 'Main - Center', 'codex' ),
					'main_right_center' => is_rtl() ? esc_html__( 'Main - Left Center', 'codex' ) : esc_html__( 'Main - Right Center', 'codex' ),
					'main_right'        => is_rtl() ? esc_html__( 'Main - Left', 'codex' ) : esc_html__( 'Main - Right', 'codex' ),
				),
				'bottom' => array(
					'bottom_left'         => is_rtl() ? esc_html__( 'Bottom - Right', 'codex' ) : esc_html__( 'Bottom - Left', 'codex' ),
					'bottom_left_center'  => is_rtl() ? esc_html__( 'Bottom - Right Center', 'codex' ) : esc_html__( 'Bottom - Left Center', 'codex' ),
					'bottom_center'       => esc_html__( 'Bottom - Center', 'codex' ),
					'bottom_right_center' => is_rtl() ? esc_html__( 'Bottom - Left Center', 'codex' ) : esc_html__( 'Bottom - Right Center', 'codex' ),
					'bottom_right'        => is_rtl() ? esc_html__( 'Bottom - Left', 'codex' ) : esc_html__( 'Bottom - Right', 'codex' ),
				),
			),
		),
	),
	'header_tab_settings' => array(
		'control_type' => 'codex_blank_control',
		'section'      => 'header_layout',
		'settings'     => false,
		'priority'     => 1,
		'description'  => $compontent_tabs,
		'context'      => array(
			array(
				'setting'  => 'blocks_header',
				'operator' => '!=',
				'value'    => true,
			),
		),
	),
	'header_desktop_available_items' => array(
		'control_type' => 'codex_available_control',
		'section'      => 'header_layout',
		'settings'     => false,
		'input_attrs'  => array(
			'group'  => 'header_desktop_items',
			'zones'  => array( 'top', 'main', 'bottom' ),
		),
		'context'      => array(
			array(
				'setting' => '__device',
				'value'   => 'desktop',
			),
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'  => 'blocks_header',
				'operator' => '!=',
				'value'    => true,
			),
		),
	),
	'header_mobile_items' => array(
		'control_type' => 'codex_builder_control',
		'section'      => 'header_builder',
		'transport'    => 'refresh',
		'default'      => codex()->default( 'header_mobile_items' ),
		'context'      => array(
			array(
				'setting'  => '__device',
				'operator' => 'in',
				'value'    => array( 'tablet', 'mobile' ),
			),
			array(
				'setting'  => 'blocks_header',
				'operator' => '!=',
				'value'    => true,
			),
		),
		'partial'      => array(
			'selector'            => '#mobile-header',
			'container_inclusive' => true,
			'render_callback'     => 'codex\mobile_header',
		),
		'choices'      => array(
			'mobile-logo'          => array(
				'name'    => esc_html__( 'Logo', 'codex' ),
				'section' => 'title_tagline',
			),
			'mobile-navigation' => array(
				'name'    => esc_html__( 'Mobile Navigation', 'codex' ),
				'section' => 'codex_customizer_mobile_navigation',
			),
			// 'mobile-navigation2'          => array(
			// 	'name'    => esc_html__( 'Horizontal Navigation', 'codex' ),
			// 	'section' => 'mobile_horizontal_navigation',
			// ),
			'search' => array(
				'name'    => esc_html__( 'Search Toggle', 'codex' ),
				'section' => 'codex_customizer_header_search',
			),
			'mobile-button'        => array(
				'name'    => esc_html__( 'Button', 'codex' ),
				'section' => 'codex_customizer_mobile_button',
			),
			'mobile-social'        => array(
				'name'    => esc_html__( 'Social', 'codex' ),
				'section' => 'codex_customizer_mobile_social',
			),
			'mobile-html'          => array(
				'name'    => esc_html__( 'HTML', 'codex' ),
				'section' => 'codex_customizer_mobile_html',
			),
			'popup-toggle'          => array(
				'name'    => esc_html__( 'Trigger', 'codex' ),
				'section' => 'codex_customizer_mobile_trigger',
			),
		),
		'input_attrs'  => array(
			'group' => 'header_mobile_items',
			'rows'  => array( 'popup', 'top', 'main', 'bottom' ),
			'zones' => array(
				'popup' => array(
					'popup_content' => esc_html__( 'Popup Content', 'codex' ),
				),
				'top' => array(
					'top_left'   => is_rtl() ? esc_html__( 'Top - Right', 'codex' ) : esc_html__( 'Top - Left', 'codex' ),
					'top_center' => esc_html__( 'Top - Center', 'codex' ),
					'top_right'  => is_rtl() ? esc_html__( 'Top - Left', 'codex' ) : esc_html__( 'Top - Right', 'codex' ),
				),
				'main' => array(
					'main_left'   => is_rtl() ? esc_html__( 'Main - Right', 'codex' ) : esc_html__( 'Main - Left', 'codex' ),
					'main_center' => esc_html__( 'Main - Center', 'codex' ),
					'main_right'  => is_rtl() ? esc_html__( 'Main - Left', 'codex' ) : esc_html__( 'Main - Right', 'codex' ),
				),
				'bottom' => array(
					'bottom_left'   => is_rtl() ? esc_html__( 'Bottom - Right', 'codex' ) : esc_html__( 'Bottom - Left', 'codex' ),
					'bottom_center' => esc_html__( 'Bottom - Center', 'codex' ),
					'bottom_right'  => is_rtl() ? esc_html__( 'Bottom - Left', 'codex' ) : esc_html__( 'Bottom - Right', 'codex' ),
				),
			),
		),
	),
	'header_mobile_available_items' => array(
		'control_type' => 'codex_available_control',
		'section'      => 'header_layout',
		'settings'     => false,
		'input_attrs'  => array(
			'group'  => 'header_mobile_items',
			'zones'  => array( 'popup', 'top', 'main', 'bottom' ),
		),
		'context'      => array(
			array(
				'setting'  => '__device',
				'operator' => 'in',
				'value'    => array( 'tablet', 'mobile' ),
			),
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'  => 'blocks_header',
				'operator' => '!=',
				'value'    => true,
			),
		),
	),
	'header_transparent_link' => array(
		'control_type' => 'codex_focus_button_control',
		'section'      => 'header_layout',
		'settings'     => false,
		'priority'     => 20,
		'label'        => esc_html__( 'Transparent Header', 'codex' ),
		'input_attrs'  => array(
			'section' => 'codex_customizer_transparent_header',
		),
		'context'      => array(
			array(
				'setting'  => 'blocks_header',
				'operator' => '!=',
				'value'    => true,
			),
		),
	),
	'header_sticky_link' => array(
		'control_type' => 'codex_focus_button_control',
		'section'      => 'header_layout',
		'settings'     => false,
		'priority'     => 20,
		'label'        => esc_html__( 'Sticky Header', 'codex' ),
		'input_attrs'  => array(
			'section' => 'codex_customizer_header_sticky',
		),
		'context'      => array(
			array(
				'setting'  => 'blocks_header',
				'operator' => '!=',
				'value'    => true,
			),
		),
	),
	'header_wrap_background' => array(
		'control_type' => 'codex_background_control',
		'section'      => 'header_layout',
		'label'        => esc_html__( 'Header Background', 'codex' ),
		'default'      => codex()->default( 'header_wrap_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#masthead',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Header Background', 'codex' ),
		),
	),
	'header_mobile_switch' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'header_layout',
		'transport'    => 'refresh',
		'label'        => esc_html__( 'Screen size to switch to mobile header', 'codex' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'default'      => codex()->default( 'header_mobile_switch' ),
		'input_attrs'  => array(
			'min'        => array(
				'px'  => 0,
			),
			'max'        => array(
				'px'  => 4000,
			),
			'step'       => array(
				'px'  => 1,
			),
			'units'      => array( 'px' ),
			'responsive' => false,
		),
	),
);
if ( defined( 'codex_BLOCKS_VERSION' ) && version_compare( codex_BLOCKS_VERSION, '3.3.0', '>=' ) ) {
	$settings['blocks_header'] = array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'header_layout',
		'priority'     => 30,
		'description'  => esc_html__( 'Enable Block Header', 'codex' ),
		'default'      => codex()->default( 'blocks_header' ),
		'label'        => esc_html__( 'Enable Block Header', 'codex' ),
		'transport'    => 'refresh',
	);
	$settings['blocks_header_id'] = array(
		'control_type' => 'codex_select_control',
		'section'      => 'header_layout',
		'label'        => esc_html__( 'Header Block', 'codex' ),
		'transport'    => 'refresh',
		'priority'     => 30,
		'default'      => codex()->default( 'blocks_header_id' ),
		'input_attrs'  => array(
			'options' => codex()->block_header_options(),
		),
		'context'      => array(
			array(
				'setting'  => 'blocks_header',
				'operator' => '=',
				'value'    => true,
			),
		),
	);
} else {
	$settings['blocks_header'] = array();
}
Theme_Customizer::add_settings( $settings );

