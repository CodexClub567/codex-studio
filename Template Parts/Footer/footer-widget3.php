<?php
/**
 * Template part for displaying the footer info
 *
 * @package Codex
 */

namespace Codex;

$align = ( Codex()->sub_option( 'footer_widget3_align', 'desktop' ) ? Codex()->sub_option( 'footer_widget3_align', 'desktop' ) : 'default' );
$tablet_align = ( Codex()->sub_option( 'footer_widget3_align', 'tablet' ) ? Codex()->sub_option( 'footer_widget3_align', 'tablet' ) : 'default' );
$mobile_align = ( Codex()->sub_option( 'footer_widget3_align', 'mobile' ) ? Codex()->sub_option( 'footer_widget3_align', 'mobile' ) : 'default' );

$valign = ( Codex()->sub_option( 'footer_widget3_vertical_align', 'desktop' ) ? Codex()->sub_option( 'footer_widget3_vertical_align', 'desktop' ) : 'default' );
$tablet_valign = ( Codex()->sub_option( 'footer_widget3_vertical_align', 'tablet' ) ? Codex()->sub_option( 'footer_widget3_vertical_align', 'tablet' ) : 'default' );
$mobile_valign = ( Codex()->sub_option( 'footer_widget3_vertical_align', 'mobile' ) ? Codex()->sub_option( 'footer_widget3_vertical_align', 'mobile' ) : 'default' );

?>
<div class="footer-widget-area widget-area site-footer-focus-item footer-widget3 content-align-<?php echo esc_attr( $align ); ?> content-tablet-align-<?php echo esc_attr( $tablet_align ); ?> content-mobile-align-<?php echo esc_attr( $mobile_align ); ?> content-valign-<?php echo esc_attr( $valign ); ?> content-tablet-valign-<?php echo esc_attr( $tablet_valign ); ?> content-mobile-valign-<?php echo esc_attr( $mobile_valign ); ?>" data-section="sidebar-widgets-footer3">
	<div class="footer-widget-area-inner site-info-inner">
		<?php
		dynamic_sidebar( 'footer3' );
		?>
	</div>
</div><!-- .footer-widget3 -->
