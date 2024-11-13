<?php
/**
 * Template part for displaying a post's header
 *
 * @package Codex
 */

namespace Codex;

$classes   = array();
$classes[] = 'entry-header';
if ( is_singular( get_post_type() ) ) {
	$classes[] = get_post_type() . '-title';
	$classes[] = 'title-align-' . ( Codex()->sub_option( get_post_type() . '_title_align', 'desktop' ) ? Codex()->sub_option( get_post_type() . '_title_align', 'desktop' ) : 'inherit' );
	$classes[] = 'title-tablet-align-' . ( Codex()->sub_option( get_post_type() . '_title_align', 'tablet' ) ? Codex()->sub_option( get_post_type() . '_title_align', 'tablet' ) : 'inherit' );
	$classes[] = 'title-mobile-align-' . ( Codex()->sub_option( get_post_type() . '_title_align', 'mobile' ) ? Codex()->sub_option( get_post_type() . '_title_align', 'mobile' ) : 'inherit' );
}
?>
<header class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<?php
	do_action( 'Codex_single_before_entry_header' );
	/**
	 * Codex Entry Header
	 *
	 * Hooked Codex_entry_header 10
	 */
	do_action( 'Codex_entry_header', get_post_type(), 'normal' );
	
	do_action( 'Codex_single_after_entry_header' );
	?>
</header><!-- .entry-header -->
