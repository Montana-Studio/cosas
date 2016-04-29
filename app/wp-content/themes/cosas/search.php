<?php get_header(); ?>
    <h1>
        <?php echo sprintf( __( '%s Resultados para &nbsp;<span>', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></span>
    </h1>
<section>

    <?php get_template_part('loop-search'); ?>

</section>

<?php get_template_part('pagination'); ?>

<?php get_footer(); ?>
