<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package codex
 */

namespace codex;

get_header();

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

codex()->print_styles( 'codex-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
do_action( 'codex_single' );

get_footer();
