<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package Codex
 */

namespace Codex;

?>
<div class="site-header-item site-header-focus-item site-header-item-mobile-navigation mobile-navigation-layout-stretch-<?php echo ( Codex()->option( 'mobile_navigation_stretch' ) ? 'true' : 'false' ); ?>" data-section="Codex_customizer_mobile_navigation">
	<?php
	/**
	 * Codex Mobile Navigation
	 *
	 * Hooked Codex\mobile_navigation
	 */
	do_action( 'Codex_mobile_navigation' );
	?>
</div><!-- data-section="mobile_navigation" -->
