<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codex
 */

namespace codex;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! codex()->has_sidebar() ) {
	return;
}
codex()->print_styles( 'codex-sidebar' );

?>
<aside id="secondary" role="complementary" class="primary-sidebar widget-area <?php echo esc_attr( codex()->sidebar_id_class() ); ?> sidebar-link-style-<?php echo esc_attr( codex()->option( 'sidebar_link_style' ) ); ?>">
	<div class="sidebar-inner-wrap">
		<?php
		/**
		 * Hook for before sidebar.
		 */
		do_action( 'codex_before_sidebar' );

		codex()->display_sidebar();
		/**
		 * Hook for after sidebar.
		 */
		do_action( 'codex_after_sidebar' );
		?>
	</div>
</aside><!-- #secondary -->
