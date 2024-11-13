<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codex
 */

namespace codex;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hook for bottom of inner wrap.
 */
do_action( 'codex_after_content' );
?>
	</div><!-- #inner-wrap -->
	<?php
	do_action( 'codex_before_footer' );
	/**
	 * codex footer hook.
	 *
	 * @hooked codex/footer_markup - 10
	 */
	do_action( 'codex_footer' );

	do_action( 'codex_after_footer' );
	?>
</div><!-- #wrapper -->
<?php do_action( 'codex_after_wrapper' ); ?>

<?php wp_footer(); ?>
</body>
</html>
