<?php
/**
 * The main single item template file.
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
 * Hook for everything, makes for better elementor theming support.
 */
do_action( 'codex_single' );

get_footer();
