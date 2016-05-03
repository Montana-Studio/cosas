<?php get_header(); ?>

<!-- PAGE CASAS -->
<div class="content-single">

        <div class="body-sidebar">

            <section class="section-loop-apaisado">

                <h1 class="title-section"><?php the_title(); ?></h1>

                    <?php 

                    if(is_page('arte')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'arte',
                            'posts_per_page'         => '10',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-apaisado'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();   

                    }elseif(is_page('arquitectura')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'arquitectura',
                            'posts_per_page'         => '10',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-apaisado'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_page('decoracion')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'decoracion',
                            'posts_per_page'         => '10',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-apaisado'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_page('diseño')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'diseno',
                            'posts_per_page'         => '10',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-apaisado'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_page('mi lugar')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'mi-lugar',
                            'posts_per_page'         => '10',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-apaisado'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_page('ilustres')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'ilustres',
                            'posts_per_page'         => '10',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-apaisado'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_page('en viaje')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'en-viaje',
                            'posts_per_page'         => '10',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-apaisado'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_page('entrevistas')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'entrevistas',
                            'posts_per_page'         => '10',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-apaisado'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }elseif(is_page('cocina')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'gastronomía',
                            'posts_per_page'         => '10',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $paginas = new WP_Query( $args );

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                                <?php get_template_part('loop-apaisado'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata(); 

                    }
                      
                    ?> 

                <div class="paginacion-sect">
                    <?php get_template_part('pagination'); ?>
                </div>

            </section>

        </div>

    </div>    

<?php get_footer(); ?>
