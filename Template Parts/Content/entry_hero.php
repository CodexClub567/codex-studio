<?php
/**
 * Template part for displaying a post's Hero header
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
<section role="banner" class="entry-hero <?php echo esc_attr( get_post_type() ) . '-hero-section'; ?> <?php echo esc_attr( 'entry-hero-layout-' . Codex()->option( get_post_type() . '_title_inner_layout' ) ); ?>">
	<div class="entry-hero-container-inner">
		<div class="hero-section-overlay"></div>
		<div class="hero-container site-container">
			<header class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
				<?php
				/**
				 * Codex Entry Hero
				 *
				 * Hooked Codex_entry_header 10
				 */
				do_action( 'Codex_entry_hero', get_post_type(), 'above' );
				?>
			</header><!-- .entry-header -->
		</div>
	</div>
</section><!-- .entry-hero -->
