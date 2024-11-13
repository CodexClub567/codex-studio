<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package Codex
 */

namespace Codex;

?>
<div class="site-header-item site-header-focus-item site-header-item-main-navigation header-navigation-layout-stretch-<?php echo ( Codex()->option( 'primary_navigation_stretch' ) ? 'true' : 'false' ); ?> header-navigation-layout-fill-stretch-<?php echo ( Codex()->option( 'primary_navigation_fill_stretch' ) ? 'true' : 'false' ); ?>" data-section="Codex_customizer_primary_navigation">
	<?php
	/**
	 * Codex Primary Navigation
	 *
	 * Hooked Codex\primary_navigation
	 */
	do_action( 'Codex_primary_navigation' );
	?>
</div><!-- data-section="primary_navigation" -->
