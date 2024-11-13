<?php
/**
 * Template part for displaying the header branding/logo
 *
 * @package Codex
 */

namespace Codex;

?>
<div class="site-header-item site-header-focus-item" data-section="title_tagline">
	<?php
	/**
	 * Codex Site Branding
	 *
	 * Hooked Codex\site_branding
	 */
	do_action( 'Codex_site_branding' );
	?>
</div><!-- data-section="title_tagline" -->
