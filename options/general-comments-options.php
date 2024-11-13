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
		'comment_form_before_list' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'general_comments',
			'default'      => codex()->default( 'comment_form_before_list' ),
			'label'        => esc_html__( 'Move Comments input above comment list.', 'codex' ),
			'transport'    => 'refresh',
		),
		'comment_form_remove_web' => array(
			'control_type' => 'codex_switch_control',
			'sanitize'     => 'codex_sanitize_toggle',
			'section'      => 'general_comments',
			'default'      => codex()->default( 'comment_form_remove_web' ),
			'label'        => esc_html__( 'Remove Comments Website field.', 'codex' ),
			'transport'    => 'refresh',
		),
	)
);
