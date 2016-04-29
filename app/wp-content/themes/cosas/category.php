<?php
get_header();
?>
<section class="page-content">
            <div class="breadcrumbs">

                <?php the_breadcrumb(); ?>

            </div>

            <h1 class="titus"><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>
            
            <div class="post-list">
                <?php get_template_part('loop-paginas'); ?>
            </div>
            <div class="pagination">
                <?php get_template_part('pagination-main'); ?>
            </div>
		</section>
<?php
get_footer();
?>
