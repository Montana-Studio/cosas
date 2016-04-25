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
	
	<span><?php single_cat_title();?></span>
	<?php
		the_title('<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
	?>
</li><!-- #post-## -->
