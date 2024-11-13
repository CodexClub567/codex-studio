<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package Codex
 */

namespace Codex;

?>
<div class="site-header-item site-header-focus-item site-header-item-navgation-popup-toggle" data-section="Codex_customizer_mobile_trigger">
	<?php
	/**
	 * Codex Mobile Navigation Popup Toggle
	 *
	 * Hooked Codex\navigation_popup_toggle
	 */
	do_action( 'Codex_navigation_popup_toggle' );
	?>
</div><!-- data-section="mobile_trigger" -->
