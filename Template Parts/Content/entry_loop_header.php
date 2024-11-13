<?php
/**
 * Template part for displaying a post's header
 *
 * @package Codex
 */

namespace Codex;

?>
<header class="entry-header">

	<?php
	/**
	 * Hook for entry header.
	 *
	 * @hooked Codex\loop_entry_taxonomies - 10
	 * @hooked Codex\loop_entry_title - 20
	 * @hooked Codex\loop_entry_meta - 30
	 */
	do_action( 'Codex_loop_entry_header' );
	?>
</header><!-- .entry-header -->
