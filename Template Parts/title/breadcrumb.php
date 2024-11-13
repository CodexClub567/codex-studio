<?php
/**
 * Template part for displaying a post's breadcrumb.
 *
 * @package Codex
 */

namespace Codex;

$item_type = get_post_type();
$elements  = Codex()->option( $item_type . '_title_element_breadcrumb' );
$args = array( 'show_title' => true );
if ( isset( $elements ) && is_array( $elements ) ) {
	if ( isset( $elements['show_title'] ) && ! $elements['show_title'] ) {
		$args['show_title'] = false;
	}
}
Codex()->print_breadcrumb( $args );