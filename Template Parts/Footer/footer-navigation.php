<?php
/**
 * Template part for displaying the header Social Modual
 *
 * @package Codex
 */

namespace Codex;

$align        = ( Codex()->sub_option( 'footer_navigation_align', 'desktop' ) ? Codex()->sub_option( 'footer_navigation_align', 'desktop' ) : 'default' );
$tablet_align = ( Codex()->sub_option( 'footer_navigation_align', 'tablet' ) ? Codex()->sub_option( 'footer_navigation_align', 'tablet' ) : 'default' );
$mobile_align = ( Codex()->sub_option( 'footer_navigation_align', 'mobile' ) ? Codex()->sub_option( 'footer_navigation_align', 'mobile' ) : 'default' );

$valign        = ( Codex()->sub_option( 'footer_navigation_vertical_align', 'desktop' ) ? Codex()->sub_option( 'footer_navigation_vertical_align', 'desktop' ) : 'default' );
$tablet_valign = ( Codex()->sub_option( 'footer_navigation_vertical_align', 'tablet' ) ? Codex()->sub_option( 'footer_navigation_vertical_align', 'tablet' ) : 'default' );
$mobile_valign = ( Codex()->sub_option( 'footer_navigation_vertical_align', 'mobile' ) ? Codex()->sub_option( 'footer_navigation_vertical_align', 'mobile' ) : 'default' );

?>
<div class="footer-widget-area widget-area site-footer-focus-item footer-navigation-wrap content-align-<?php echo esc_attr( $align ); ?> content-tablet-align-<?php echo esc_attr( $tablet_align ); ?> content-mobile-align-<?php echo esc_attr( $mobile_align ); ?> content-valign-<?php echo esc_attr( $valign ); ?> content-tablet-valign-<?php echo esc_attr( $tablet_valign ); ?> content-mobile-valign-<?php echo esc_attr( $mobile_valign ); ?> footer-navigation-layout-stretch-<?php echo ( Codex()->option( 'footer_navigation_stretch' ) ? 'true' : 'false' ); ?>" data-section="Codex_customizer_footer_navigation">
	<div class="footer-widget-area-inner footer-navigation-inner">
		<?php
		/**
		 * Codex Footer Navigation
		 *
		 * Hooked Codex\footer_navigation
		 */
		do_action( 'Codex_footer_navigation' );
		?>
	</div>
</div><!-- data-section="footer_navigation" -->
