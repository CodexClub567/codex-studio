<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package Codex
 */

namespace Codex;

?>
<div class="site-header-item site-header-focus-item site-header-item-main-navigation header-navigation-layout-stretch-<?php echo ( Codex()->option( 'secondary_navigation_stretch' ) ? 'true' : 'false' ); ?> header-navigation-layout-fill-stretch-<?php echo ( Codex()->option( 'secondary_navigation_fill_stretch' ) ? 'true' : 'false' ); ?>" data-section="Codex_customizer_secondary_navigation">
	<?php
	/**
	 * Codex Secondary Navigation
	 *
	 * Hooked Codex\secondary_navigation
	 */
	do_action( 'Codex_secondary_navigation' );
	?>
</div><!-- data-section="secondary_navigation" -->
