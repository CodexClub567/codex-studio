<?php
/**
 * Template part for displaying the Footer Social Module
 *
 * @package Codex
 */

namespace Codex;

$align        = ( Codex()->sub_option( 'footer_social_align', 'desktop' ) ? Codex()->sub_option( 'footer_social_align', 'desktop' ) : 'default' );
$tablet_align = ( Codex()->sub_option( 'footer_social_align', 'tablet' ) ? Codex()->sub_option( 'footer_social_align', 'tablet' ) : 'default' );
$mobile_align = ( Codex()->sub_option( 'footer_social_align', 'mobile' ) ? Codex()->sub_option( 'footer_social_align', 'mobile' ) : 'default' );

$valign        = ( Codex()->sub_option( 'footer_social_vertical_align', 'desktop' ) ? Codex()->sub_option( 'footer_social_vertical_align', 'desktop' ) : 'default' );
$tablet_valign = ( Codex()->sub_option( 'footer_social_vertical_align', 'tablet' ) ? Codex()->sub_option( 'footer_social_vertical_align', 'tablet' ) : 'default' );
$mobile_valign = ( Codex()->sub_option( 'footer_social_vertical_align', 'mobile' ) ? Codex()->sub_option( 'footer_social_vertical_align', 'mobile' ) : 'default' );
if ( ! wp_style_is( 'Codex-header', 'enqueued' ) ) {
	wp_enqueue_style( 'Codex-header' );
}
?>
<div class="footer-widget-area widget-area site-footer-focus-item footer-social content-align-<?php echo esc_attr( $align ); ?> content-tablet-align-<?php echo esc_attr( $tablet_align ); ?> content-mobile-align-<?php echo esc_attr( $mobile_align ); ?> content-valign-<?php echo esc_attr( $valign ); ?> content-tablet-valign-<?php echo esc_attr( $tablet_valign ); ?> content-mobile-valign-<?php echo esc_attr( $mobile_valign ); ?>" data-section="Codex_customizer_footer_social">
	<div class="footer-widget-area-inner footer-social-inner">
		<?php
		/**
		 * Codex Footer Social
		 *
		 * Hooked Codex\footer_social
		 */
		do_action( 'Codex_footer_social' );
		?>
	</div>
</div><!-- data-section="footer_social" -->
