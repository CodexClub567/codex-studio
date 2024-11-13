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
	'info_llms_quiz_title' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'llms_quiz_layout',
		'priority'     => 2,
		'label'        => esc_html__( 'Quiz Title', 'codex' ),
		'settings'     => false,
	),
	'llms_quiz_title' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'llms_quiz_layout',
		'priority'     => 3,
		'default'      => codex()->default( 'llms_quiz_title' ),
		'label'        => esc_html__( 'Show Quiz Title?', 'codex' ),
		'transport'    => 'refresh',
	),
	'llms_quiz_title_layout' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'llms_quiz_layout',
		'label'        => esc_html__( 'Quiz Title Layout', 'codex' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => codex()->default( 'llms_quiz_title_layout' ),
		'context'      => array(
			array(
				'setting'    => 'llms_quiz_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'normal' => array(
					'tooltip' => __( 'In Content', 'codex' ),
					'icon'    => 'incontent',
				),
				'above' => array(
					'tooltip' => __( 'Above Content', 'codex' ),
					'icon'    => 'abovecontent',
				),
			),
			'responsive' => false,
			'class'      => 'codex-two-col',
		),
	),
	'llms_quiz_title_inner_layout' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'llms_quiz_layout',
		'priority'     => 4,
		'default'      => codex()->default( 'llms_quiz_title_inner_layout' ),
		'label'        => esc_html__( 'Title Container Width', 'codex' ),
		'context'      => array(
			array(
				'setting'    => 'llms_quiz_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'llms_quiz_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.llms_quiz-hero-section',
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
	'llms_quiz_title_align' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'llms_quiz_layout',
		'label'        => esc_html__( 'Quiz Title Align', 'codex' ),
		'priority'     => 4,
		'default'      => codex()->default( 'llms_quiz_title_align' ),
		'context'      => array(
			array(
				'setting'    => 'llms_quiz_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.llms_quiz-title',
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
	'info_llms_quiz_layout' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'llms_quiz_layout',
		'priority'     => 10,
		'label'        => esc_html__( 'Quiz Layout', 'codex' ),
		'settings'     => false,
	),
	'llms_quiz_layout' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'llms_quiz_layout',
		'label'        => esc_html__( 'Quiz Layout', 'codex' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => codex()->default( 'llms_quiz_layout' ),
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
	'llms_quiz_sidebar_id' => array(
		'control_type' => 'codex_select_control',
		'section'      => 'llms_quiz_layout',
		'label'        => esc_html__( 'Quiz Default Sidebar', 'codex' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => codex()->default( 'llms_quiz_sidebar_id' ),
		'input_attrs'  => array(
			'options' => codex()->sidebar_options(),
		),
	),
	'llms_quiz_content_style' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'llms_quiz_layout',
		'label'        => esc_html__( 'Content Style', 'codex' ),
		'priority'     => 10,
		'default'      => codex()->default( 'llms_quiz_content_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-llms_quiz',
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
	'llms_quiz_vertical_padding' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'llms_quiz_layout',
		'label'        => esc_html__( 'Content Vertical Spacing', 'codex' ),
		'priority'     => 10,
		'default'      => codex()->default( 'llms_quiz_vertical_padding' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-llms_quiz',
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
);

Theme_Customizer::add_settings( $settings );

