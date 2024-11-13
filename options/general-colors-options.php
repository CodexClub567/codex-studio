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
		'info_background' => array(
			'control_type' => 'codex_title_control',
			'section'      => 'general_colors',
			'label'        => esc_html__( 'Backgrounds', 'codex' ),
			'settings'     => false,
		),
		'site_background' => array(
			'control_type' => 'codex_background_control',
			'section'      => 'general_colors',
			'label'        => esc_html__( 'Site Background', 'codex' ),
			'default'      => codex()->default( 'site_background' ),
			'live_method'     => array(
				array(
					'type'     => 'css_background',
					'selector' => 'body',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'base',
				),
			),
			'input_attrs'  => array(
				'tooltip'  => __( 'Site Background', 'codex' ),
			),
		),
		'content_background' => array(
			'control_type' => 'codex_background_control',
			'section'      => 'general_colors',
			'label'        => esc_html__( 'Content Background', 'codex' ),
			'default'      => codex()->default( 'content_background' ),
			'live_method'     => array(
				array(
					'type'     => 'css_background',
					'selector' => '.content-bg, body.content-style-unboxed .site',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'base',
				),
			),
			'input_attrs'  => array(
				'tooltip'  => __( 'Content Background', 'codex' ),
			),
		),
		'above_title_background' => array(
			'control_type' => 'codex_background_control',
			'section'      => 'general_colors',
			'label'        => esc_html__( 'Title Above Content Background', 'codex' ),
			'default'      => codex()->default( 'above_title_background' ),
			'live_method'     => array(
				array(
					'type'     => 'css_background',
					'selector' => '.wp-site-blocks .entry-hero-container-inner',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'base',
				),
			),
			'input_attrs'  => array(
				'tooltip'  => __( 'Title Above Content Background', 'codex' ),
			),
		),
		'above_title_overlay_color' => array(
			'control_type' => 'codex_color_control',
			'section'      => 'general_colors',
			'label'        => esc_html__( 'Title Above Content Overlay Color', 'codex' ),
			'default'      => codex()->default( 'above_title_overlay_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.entry-hero-container-inner .hero-section-overlay',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'color',
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
		'info_links' => array(
			'control_type' => 'codex_title_control',
			'section'      => 'general_colors',
			'label'        => esc_html__( 'Content Links', 'codex' ),
			'settings'     => false,
		),
		'link_color' => array(
			'control_type' => 'codex_color_link_control',
			'section'      => 'general_colors',
			'transport'    => 'refresh',
			'label'        => esc_html__( 'Links Color', 'codex' ),
			'default'      => codex()->default( 'link_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css_link',
					'selector' => 'a',
					'property' => 'color',
					'pattern'  => 'link-style-$',
					'key'      => 'base',
				),
			),
		),
	)
);

