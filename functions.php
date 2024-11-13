<?php
/**
 * codex functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package codex
 */

define( 'codex_VERSION', '1.2.9' );
define( 'codex_MINIMUM_WP_VERSION', '6.0' );
define( 'codex_MINIMUM_PHP_VERSION', '7.4' );

// Bail if requirements are not met.
if ( version_compare( $GLOBALS['wp_version'], codex_MINIMUM_WP_VERSION, '<' ) || version_compare( phpversion(), codex_MINIMUM_PHP_VERSION, '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}
// Include WordPress shims.
require get_template_directory() . '/inc/wordpress-shims.php';

// Load the `codex()` entry point function.
require get_template_directory() . '/inc/class-theme.php';

// Load the `codex()` entry point function.
require get_template_directory() . '/inc/functions.php';

// Initialize the theme.
call_user_func( 'codex\codex' );
