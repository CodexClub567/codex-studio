<?php
/**
 * Template part for displaying the header
 *
 * @package Codex
 */

namespace Codex;

Codex()->print_styles( 'Codex-header' );
?>
<header id="masthead" class="site-header" role="banner" <?php Codex()->print_microdata( 'header' ); ?>>
	<div id="main-header" class="site-header-wrap">
		<div class="site-header-inner-wrap<?php echo esc_attr( 'top_main_bottom' === Codex()->option( 'header_sticky' ) ? ' Codex-sticky-header' : '' ); ?>"<?php
		if ( 'top_main_bottom' === Codex()->option( 'header_sticky' ) ) {
			echo ' data-reveal-scroll-up="' . ( Codex()->option( 'header_reveal_scroll_up' ) ? 'true' : 'false' ) . '"';
			echo ' data-shrink="' . ( Codex()->option( 'header_sticky_shrink' ) ? 'true' : 'false' ) . '"';
			if ( Codex()->option( 'header_sticky_shrink' ) ) {
				echo ' data-shrink-height="' . esc_attr( Codex()->sub_option( 'header_sticky_main_shrink', 'size' ) ) . '"';
			}
		}
		?>>
			<div class="site-header-upper-wrap">
				<div class="site-header-upper-inner-wrap<?php echo esc_attr( 'top_main' === Codex()->option( 'header_sticky' ) ? ' Codex-sticky-header' : '' ); ?>"<?php
				if ( 'top_main' === Codex()->option( 'header_sticky' ) ) {
					echo ' data-reveal-scroll-up="' . ( Codex()->option( 'header_reveal_scroll_up' ) ? 'true' : 'false' ) . '"';
					echo ' data-shrink="' . ( Codex()->option( 'header_sticky_shrink' ) ? 'true' : 'false' ) . '"';
					if ( Codex()->option( 'header_sticky_shrink' ) ) {
						echo ' data-shrink-height="' . esc_attr( Codex()->sub_option( 'header_sticky_main_shrink', 'size' ) ) . '"';
					}
				}
				?>>
					<?php
					/**
					 * Codex Top Header
					 *
					 * Hooked Codex\top_header
					 */
					do_action( 'Codex_top_header' );
					/**
					 * Codex Main Header
					 *
					 * Hooked Codex\main_header
					 */
					do_action( 'Codex_main_header' );
					?>
				</div>
			</div>
			<?php
			/**
			 * Codex Bottom Header
			 *
			 * Hooked Codex\bottom_header
			 */
			do_action( 'Codex_bottom_header' );
			?>
		</div>
	</div>
	<?php
	/**
	 * Codex Mobile Header
	 *
	 * Hooked Codex\mobile_header
	 */
	do_action( 'Codex_mobile_header' );
	?>
</header><!-- #masthead -->
