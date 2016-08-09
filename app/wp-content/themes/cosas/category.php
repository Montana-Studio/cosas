<?php
get_header();
?>
<section class="page-content">
            <div class="breadcrumbs">

                <?php if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				} ?>

            </div>

            <h1 class="titus"><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>
            
            <div class="post-list">
              	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
               	<?php get_template_part('loop-paginas'); ?>
               	<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>
					<!-- /article -->

				<?php endif; ?>
            </div>
            <div class="pagination">
                <?php get_template_part('pagination'); ?>
            </div>
		</section>
<?php
get_footer();
?>
