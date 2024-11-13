<?php
/**
 * Template part for displaying the a button in the mobile header.
 *
 * @package Codex
 */

namespace Codex;

?>
<div class="site-header-item site-header-focus-item" data-section="Codex_customizer_mobile_button">
	<?php
	/**
	 * Codex Mobile Header Button
	 *
	 * Hooked Codex\mobile_button
	 */
	do_action( 'Codex_mobile_button' );
	?>
</div><!-- data-section="mobile_button" -->
