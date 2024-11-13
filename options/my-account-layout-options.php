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
	'info_woo_account_title' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'account_layout',
		'priority'     => 2,
		'label'        => esc_html__( 'My Account Navigation', 'codex' ),
		'settings'     => false,
	),
	'woo_account_navigation_avatar' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'account_layout',
		'priority'     => 3,
		'default'      => codex()->default( 'woo_account_navigation_avatar' ),
		'label'        => esc_html__( 'Show User Name and Avatar?', 'codex' ),
		'transport'    => 'refresh',
	),
	'woo_account_navigation_layout' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'account_layout',
		'label'        => esc_html__( 'Navigation Layout', 'codex' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => codex()->default( 'woo_account_navigation_layout' ),
		'input_attrs'  => array(
			'layout' => array(
				'left' => array(
					'tooltip' => __( 'Positioned on Left Content', 'codex' ),
					'name'    => __( 'Left', 'codex' ),
					'icon'    => '',
				),
				'above' => array(
					'tooltip' => __( 'Positioned on Top Content', 'codex' ),
					'name'    => __( 'Above', 'codex' ),
					'icon'    => '',
				),
				'right' => array(
					'tooltip' => __( 'Positioned on Right Content', 'codex' ),
					'name'    => __( 'Right', 'codex' ),
					'icon'    => '',
				),
			),
			'responsive' => false,
		),
	),
);

Theme_Customizer::add_settings( $settings );

