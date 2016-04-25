<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cosas
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('');">
	<?php get_permalink( get_post_thumbnail_id( $post->ID ) ); ?>
	<a href="<?php echo get_permalink(); ?>"><i class="fa fa-plus-circle"></i></a>
	<?php

        if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        }
	?>
	<footer class="entry-footer">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}the_time('l, F g a');
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
