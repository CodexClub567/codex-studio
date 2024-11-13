<?php
/**
 * Breadcrumb Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;

Theme_Customizer::add_settings(
	array(
		'breadcrumb_engine' => array(
			'control_type' => 'codex_select_control',
			'section'      => 'breadcrumbs',
			'transport'    => 'refresh',
			'default'      => codex()->default( 'breadcrumb_engine' ),
			'label'        => esc_html__( 'Breadcrumb Engine', 'codex' ),
			'input_attrs'  => array(
				'options' => array(
					'' => array(
						'name' => __( 'Default', 'codex' ),
					),
					'rankmath' => array(
						'name' => __( 'RankMath (must have activated in plugin)', 'codex' ),
					),
					'yoast' => array(
						'name' => __( 'Yoast (must have activated in plugin)', 'codex' ),
					),
					'seopress' => array(
						'name' => __( 'SEOPress (must have activated in plugin)', 'codex' ),
					),
				),
			),
		),
		'breadcrumb_home_icon' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'breadcrumbs',
			'default'      => codex()->default( 'breadcrumb_home_icon' ),
			'label'        => esc_html__( 'Use icon for home?', 'codex' ),
			'transport'    => 'refresh',
			'context'      => array(
				array(
					'setting'    => 'breadcrumb_engine',
					'operator'   => '=',
					'value'      => '',
				),
			),
		),
	)
);
