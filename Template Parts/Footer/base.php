<?php
/**
 * Template part for displaying the footer info
 *
 * @package Codex
 */

namespace Codex;

if ( Codex()->has_content() ) {
	Codex()->print_styles( 'Codex-content' );
}
Codex()->print_styles( 'Codex-footer' );

?>
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-footer-wrap">
		<?php
		/**
		 * Codex Top footer
		 *
		 * Hooked Codex\top_footer
		 */
		do_action( 'Codex_top_footer' );
		/**
		 * Codex Middle footer
		 *
		 * Hooked Codex\middle_footer
		 */
		do_action( 'Codex_middle_footer' );
		/**
		 * Codex Bottom footer
		 *
		 * Hooked Codex\bottom_footer
		 */
		do_action( 'Codex_bottom_footer' );
		?>
	</div>
</footer><!-- #colophon -->

