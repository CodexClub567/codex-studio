<?php
/**
 * Template part for displaying a post's summary
 *
 * @package Codex
 */

namespace Codex;

use function get_post_type;
use function the_content;
use function the_excerpt;
$slug            = ( is_search() ? 'search' : get_post_type() );
$excerpt_element = Codex()->option( $slug . '_archive_element_excerpt' );
if ( isset( $excerpt_element ) && is_array( $excerpt_element ) && true === $excerpt_element['enabled'] ) {
	?>
	<div class="entry-summary">
		<?php
		if ( true === Codex()->sub_option( $slug . '_archive_element_excerpt', 'fullContent' ) ) {
			global $more; $more = 0;
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Read More<span class="screen-reader-text"> "%s"</span>', 'Codex' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
		} else {
			the_excerpt();
		}
		?>
	</div><!-- .entry-summary -->
	<?php
}
