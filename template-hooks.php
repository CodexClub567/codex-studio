<?php
/**
 * Calls in content using theme hooks.
 *
 * @package codex
 */

namespace codex;

use function codex\codex;
use function add_action;

defined( 'ABSPATH' ) || exit;

/**
 * codex Header.
 *
 * @see codex\header_markup();
 */
add_action( 'codex_header', 'codex\header_markup' );

/**
 * codex Header Rows
 *
 * @see codex\top_header();
 * @see codex\main_header();
 * @see codex\bottom_header();
 */
add_action( 'codex_top_header', 'codex\top_header' );
add_action( 'codex_main_header', 'codex\main_header' );
add_action( 'codex_bottom_header', 'codex\bottom_header' );

/**
 * codex Header Columns
 *
 * @see codex\header_column();
 */
add_action( 'codex_render_header_column', 'codex\header_column', 10, 2 );

/**
 * codex Mobile Header
 *
 * @see codex\mobile_header();
 */
add_action( 'codex_mobile_header', 'codex\mobile_header' );

/**
 * codex Mobile Header Rows
 *
 * @see codex\mobile_top_header();
 * @see codex\mobile_main_header();
 * @see codex\mobile_bottom_header();
 */
add_action( 'codex_mobile_top_header', 'codex\mobile_top_header' );
add_action( 'codex_mobile_main_header', 'codex\mobile_main_header' );
add_action( 'codex_mobile_bottom_header', 'codex\mobile_bottom_header' );

/**
 * codex Mobile Header Columns
 *
 * @see codex\mobile_header_column();
 */
add_action( 'codex_render_mobile_header_column', 'codex\mobile_header_column', 10, 2 );

/**
 * Desktop Header Elements.
 *
 * @see codex\site_branding();
 * @see codex\primary_navigation();
 * @see codex\secondary_navigation();
 * @see codex\header_html();
 * @see codex\header_button();
 * @see codex\header_cart();
 * @see codex\header_social();
 * @see codex\header_search();
 */
add_action( 'codex_site_branding', 'codex\site_branding' );
add_action( 'codex_primary_navigation', 'codex\primary_navigation' );
add_action( 'codex_secondary_navigation', 'codex\secondary_navigation' );
add_action( 'codex_header_html', 'codex\header_html' );
add_action( 'codex_header_button', 'codex\header_button' );
add_action( 'codex_header_cart', 'codex\header_cart' );
add_action( 'codex_header_social', 'codex\header_social' );
add_action( 'codex_header_search', 'codex\header_search' );
/**
 * Mobile Header Elements.
 *
 * @see codex\mobile_site_branding();
 * @see codex\navigation_popup_toggle();
 * @see codex\mobile_navigation();
 * @see codex\mobile_html();
 * @see codex\mobile_button();
 * @see codex\mobile_cart();
 * @see codex\mobile_social();
 * @see codex\primary_navigation();
 */
add_action( 'codex_mobile_site_branding', 'codex\mobile_site_branding' );
add_action( 'codex_navigation_popup_toggle', 'codex\navigation_popup_toggle' );
add_action( 'codex_mobile_navigation', 'codex\mobile_navigation' );
add_action( 'codex_mobile_html', 'codex\mobile_html' );
add_action( 'codex_mobile_button', 'codex\mobile_button' );
add_action( 'codex_mobile_cart', 'codex\mobile_cart' );
add_action( 'codex_mobile_social', 'codex\mobile_social' );

/**
 * Hero Title
 *
 * @see codex\hero_title();
 */
add_action( 'codex_hero_header', 'codex\hero_title' );

/**
 * Page Title area
 *
 * @see codex\codex_entry_header();
 */
add_action( 'codex_entry_hero', 'codex\codex_entry_header', 10, 2 );
add_action( 'codex_entry_header', 'codex\codex_entry_header', 10, 2 );

/**
 * Archive Title area
 *
 * @see codex\codex_entry_archive_header();
 */
add_action( 'codex_entry_archive_hero', 'codex\codex_entry_archive_header', 10, 2 );
add_action( 'codex_entry_archive_header', 'codex\codex_entry_archive_header', 10, 2 );

/**
 * Singular Content
 *
 * @see codex\single_markup();
 */
add_action( 'codex_single', 'codex\single_markup' );

/**
 * Singular Inner Content
 *
 * @see codex\single_content();
 */
add_action( 'codex_single_content', 'codex\single_content' );

/**
 * 404 Content
 *
 * @see codex\get_404_content();
 */
add_action( 'codex_404_content', 'codex\get_404_content' );

/**
 * Comments List
 *
 * @see codex\comments_list();
 */
add_action( 'codex_comments', 'codex\comments_list' );

/**
 * Comment Form
 *
 * @see codex\comments_form();
 */
function check_comments_form_order() {
	$priority = ( codex()->option( 'comment_form_before_list' ) ? 5 : 15 );
	add_action( 'codex_comments', 'codex\comments_form', $priority );
}
add_action( 'codex_comments', 'codex\check_comments_form_order', 1 );
/**
 * Archive Content
 *
 * @see codex\archive_markup();
 */
add_action( 'codex_archive', 'codex\archive_markup' );

/**
 * Archive Entry Content.
 *
 * @see codex\loop_entry();
 */
add_action( 'codex_loop_entry', 'codex\loop_entry' );

/**
 * Archive Entry thumbnail.
 *
 * @see codex\loop_entry_thumbnail();
 */
add_action( 'codex_loop_entry_thumbnail', 'codex\loop_entry_thumbnail' );

/**
 * Archive Entry header.
 *
 * @see codex\loop_entry_header();
 */
add_action( 'codex_loop_entry_content', 'codex\loop_entry_header', 10 );
/**
 * Archive Entry Summary.
 *
 * @see codex\loop_entry_summary();
 */
add_action( 'codex_loop_entry_content', 'codex\loop_entry_summary', 20 );
/**
 * Archive Entry Footer.
 *
 * @see codex\loop_entry_footer();
 */
add_action( 'codex_loop_entry_content', 'codex\loop_entry_footer', 30 );

/**
 * Archive Entry Taxonomies.
 *
 * @see codex\loop_entry_taxonomies();
 */
add_action( 'codex_loop_entry_header', 'codex\loop_entry_taxonomies', 10 );
/**
 * Archive Entry Title.
 *
 * @see codex\loop_entry_title();
 */
add_action( 'codex_loop_entry_header', 'codex\loop_entry_title', 20 );
/**
 * Archive Entry Meta.
 *
 * @see codex\loop_entry_meta();
 */
add_action( 'codex_loop_entry_header', 'codex\loop_entry_meta', 30 );

/**
 * Main Call for codex footer
 *
 * @see codex\footer_markup();
 */
add_action( 'codex_footer', 'codex\footer_markup' );

/**
 * Footer Top Row
 *
 * @see codex\top_footer();
 */
add_action( 'codex_top_footer', 'codex\top_footer' );

/**
 * Footer Middle Row
 *
 * @see codex\middle_footer()
 */
add_action( 'codex_middle_footer', 'codex\middle_footer' );

/**
 * Footer Bottom Row
 *
 * @see codex\bottom_footer()
 */
add_action( 'codex_bottom_footer', 'codex\bottom_footer' );

/**
 * Footer Column
 *
 * @see codex\footer_column()
 */
add_action( 'codex_render_footer_column', 'codex\footer_column', 10, 2 );


/**
 * Footer Elements
 *
 * @see codex\footer_html();
 * @see codex\footer_navigation()
 * @see codex\footer_social()
 */
add_action( 'codex_footer_html', 'codex\footer_html' );
add_action( 'codex_footer_navigation', 'codex\footer_navigation' );
add_action( 'codex_footer_social', 'codex\footer_social' );

/**
 * WP Footer.
 *
 * @see codex\scroll_up();
 */
add_action( 'wp_footer', 'codex\scroll_up' );
