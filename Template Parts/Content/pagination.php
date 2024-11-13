<?php
/**
 * Template part for displaying a pagination
 *
 * @package Codex
 */

namespace Codex;

the_posts_pagination(
	apply_filters(
		'Codex_pagination_args',
		array(
			'mid_size'           => 2,
			'prev_text'          => '<span class="screen-reader-text">' . __( 'Previous Page', 'Codex' ) . '</span>' . Codex()->get_icon( 'arrow-left', _x( 'Previous', 'previous set of archive results', 'Codex' ) ),
			'next_text'          => '<span class="screen-reader-text">' . __( 'Next Page', 'Codex' ) . '</span>' . Codex()->get_icon( 'arrow-right', _x( 'Next', 'next set of archive results', 'Codex' ) ),
			'screen_reader_text' => __( 'Page navigation', 'Codex' ),
		)
	)
);
