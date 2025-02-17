<?php
/**
 * Template part for displaying a post's featured image
 *
 * @package Codex
 */

namespace Codex;

// Audio or video attachments can have featured images, so they need to be specifically checked.
$support_slug = get_post_type();
if ( 'attachment' === $support_slug ) {
	if ( wp_attachment_is( 'audio' ) ) {
		$support_slug .= ':audio';
	} elseif ( wp_attachment_is( 'video' ) ) {
		$support_slug .= ':video';
	}
}

if ( post_password_required() || ! post_type_supports( $support_slug, 'thumbnail' ) || ! has_post_thumbnail() ) {
	return;
}
if ( is_singular( get_post_type() ) ) {
	?>
	<div class="post-thumbnail article-post-thumbnail Codex-thumbnail-position-<?php echo esc_attr( Codex()->get_feature_position() ); ?><?php echo ( 'behind' === Codex()->get_feature_position() ? ' align' . esc_attr( Codex()->option( 'post_feature_width', 'wide' ) ) : '' ); ?> Codex-thumbnail-ratio-<?php echo esc_attr( Codex()->option( $support_slug . '_feature_ratio', '2-3' ) ); ?>">
		<div class="post-thumbnail-inner">
			<?php the_post_thumbnail( apply_filters( 'Codex_single_featured_image_size', 'full' ), array( 'class' => 'post-top-featured') ); ?>
		</div>
	</div><!-- .post-thumbnail -->
	<?php
		if ( 'behind' !== Codex()->get_feature_position() && Codex()->option( $support_slug . '_feature_caption', false ) ) {
			$caption = get_the_post_thumbnail_caption();
			if ( ! empty( $caption ) ) {
				echo '<div class="article-post-thumbnail-caption content-bg">' . wp_kses_post( $caption ) . '</div>';
			}
		}
	?>
	<?php do_action( 'Codex_single_after_featured_image' ); ?>
	<?php
} else {
	?>
	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<div class="post-thumbnail-inner">
			<?php
			global $wp_query;
			$thumbnail_id = get_post_thumbnail_id();
			$alt          = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
			if ( 0 === $wp_query->current_post ) {
				the_post_thumbnail(
					'post-thumbnail',
					array(
						'class' => 'post-top-featured',
						'alt' => ! empty( $alt ) ? $alt : the_title_attribute(
							array(
								'echo' => false,
							)
						),
					)
				);
			} else {
				the_post_thumbnail(
					'post-thumbnail',
					array(
						'alt' => ! empty( $alt ) ? $alt : the_title_attribute(
							array(
								'echo' => false,
							)
						),
					)
				);
			}
			?>
		</div>
	</a><!-- .post-thumbnail -->
	<?php do_action( 'Codex_loop_after_featured_image' ); ?>
	<?php
}
