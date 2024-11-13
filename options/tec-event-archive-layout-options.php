<?php
/**
 * Header Main Row Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;

$settings = array(
	'info_tribe_events_archive_layout' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'tribe_events_archive',
		'priority'     => 10,
		'label'        => esc_html__( 'Events Layout', 'codex' ),
		'settings'     => false,
	),
	'tribe_events_archive_layout' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'tribe_events_archive',
		'label'        => esc_html__( 'Events Layout', 'codex' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => codex()->default( 'tribe_events_archive_layout' ),
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
			'class'      => 'codex-three-col',
			'responsive' => false,
		),
	),
	'tribe_events_archive_sidebar_id' => array(
		'control_type' => 'codex_select_control',
		'section'      => 'tribe_events_archive',
		'label'        => esc_html__( 'Events Sidebar', 'codex' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => codex()->default( 'tribe_events_archive_sidebar_id' ),
		'input_attrs'  => array(
			'options' => codex()->sidebar_options(),
		),
	),
	'tribe_events_archive_content_background' => array(
		'control_type' => 'codex_background_control',
		'section'      => 'tribe_events_archive',
		'label'        => esc_html__( 'Events Background', 'codex' ),
		'default'      => codex()->default( 'tribe_events_archive_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.post-type-archive-tribe_events .site, body.post-type-archive-tribe_events.content-style-unboxed .site',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Events Background', 'codex' ),
		),
	),
);

Theme_Customizer::add_settings( $settings );

