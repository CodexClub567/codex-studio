<?php
/**
 * The main archive template file
 *
 * @package codex
 */

namespace codex;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

codex()->print_styles( 'codex-content' );
/**
 * Hook for main archive content.
 */
do_action( 'codex_archive' );

get_footer();
