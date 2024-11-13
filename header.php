<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codex
 */

namespace codex;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js" <?php codex()->print_microdata( 'html' ); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
/**
 * codex before wrapper hook.
 */
do_action( 'codex_before_wrapper' );
?>
<div id="wrapper" class="site wp-site-blocks">
	<?php
	/**
	 * codex before header hook.
	 *
	 * @hooked codex_do_skip_to_content_link - 2
	 */
	do_action( 'codex_before_header' );

	/**
	 * codex header hook.
	 *
	 * @hooked codex/header_markup - 10
	 */
	do_action( 'codex_header' );

	do_action( 'codex_after_header' );
	?>

	<div id="inner-wrap" class="wrap kt-clear">
		<?php
		/**
		 * Hook for top of inner wrap.
		 */
		do_action( 'codex_before_content' );
		?>
