<?php
/**
 * Template part for displaying the Mobile Header
 *
 * @package Codex
 */

namespace Codex;

?>

<div id="mobile-header" class="site-mobile-header-wrap">
	<div class="site-header-inner-wrap<?php echo esc_attr( 'top_main_bottom' === Codex()->option( 'mobile_header_sticky' ) ? ' Codex-sticky-header' : '' ); ?>"<?php
	if ( 'top_main_bottom' === Codex()->option( 'mobile_header_sticky' ) ) {
		echo ' data-shrink="' . ( Codex()->option( 'mobile_header_sticky_shrink' ) ? 'true' : 'false' ) . '"';
		echo ' data-reveal-scroll-up="' . ( Codex()->option( 'mobile_header_reveal_scroll_up' ) ? 'true' : 'false' ) . '"';
		if ( Codex()->option( 'mobile_header_sticky_shrink' ) ) {
			echo ' data-shrink-height="' . esc_attr( Codex()->sub_option( 'mobile_header_sticky_main_shrink', 'size' ) ) . '"';
		}
	}
	?>>
		<div class="site-header-upper-wrap">
			<div class="site-header-upper-inner-wrap<?php echo esc_attr( 'top_main' === Codex()->option( 'mobile_header_sticky' ) ? ' Codex-sticky-header' : '' ); ?>"<?php
			if ( 'top_main' === Codex()->option( 'mobile_header_sticky' ) ) {
				echo ' data-shrink="' . ( Codex()->option( 'mobile_header_sticky_shrink' ) ? 'true' : 'false' ) . '"';
				echo ' data-reveal-scroll-up="' . ( Codex()->option( 'mobile_header_reveal_scroll_up' ) ? 'true' : 'false' ) . '"';
				if ( Codex()->option( 'mobile_header_sticky_shrink' ) ) {
					echo ' data-shrink-height="' . esc_attr( Codex()->sub_option( 'mobile_header_sticky_main_shrink', 'size' ) ) . '"';
				}
			}
			?>>
			<?php
			/**
			 * Codex Top Header
			 *
			 * Hooked Codex_mobile_top_header 10
			 */
			do_action( 'Codex_mobile_top_header' );
			/**
			 * Codex Main Header
			 *
			 * Hooked Codex_mobile_main_header 10
			 */
			do_action( 'Codex_mobile_main_header' );
			?>
			</div>
		</div>
		<?php
		/**
		 * Codex Mobile Bottom Header
		 *
		 * Hooked Codex_mobile_bottom_header 10
		 */
		do_action( 'Codex_mobile_bottom_header' );
		?>
	</div>
</div>
