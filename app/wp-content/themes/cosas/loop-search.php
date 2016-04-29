<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="img-search-content" style="background-image:url('<?php the_post_thumbnail_url(); ?>');"></div>
        
		<span class="date"><i class="fa fa-clock-o"></i> <?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
        

	</article>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
