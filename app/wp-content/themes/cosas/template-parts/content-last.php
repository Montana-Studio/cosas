<?php
/**
 * Template part for displaying last posts category.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cosas
 */

?>

<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php

			if ( is_single() ) {
				the_title( '<p class="entry-title">', '</p>' );
			} else {
				the_title( '<p class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></p>' );
			}
		?>
	</header><!-- .entry-header -->

</li><!-- #post-## -->
