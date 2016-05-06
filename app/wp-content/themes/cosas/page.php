<?php
get_header();
?>
<section class="page-content">
            <div class="breadcrumbs">

                <?php the_breadcrumb(); ?>

            </div>

            <h1 class="titus"><?php the_title(); ?></h1>
            
            <div class="post-list">
            <?php
                if($GLOBALS['detectBlogs']['repost']==$GLOBALS['detectBlogs']['blogId']){
                    if(is_page('moda')){
                    
                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'moda-repost',
                            'posts_per_page'         => '9',
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
                                <?php get_template_part('loop-paginas'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();  

                    }elseif(is_page('belleza')){
                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'belleza-repost',
                            'posts_per_page'         => '9',
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
                                <?php get_template_part('loop-paginas'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();
                    }elseif(is_page('outdoor')){
                         // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'outdoor',
                            'posts_per_page'         => '9',
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
                                <?php get_template_part('loop-paginas'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();
                    }elseif(is_page('entretenimiento')){
                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'entretencion-repost',
                            'posts_per_page'         => '9',
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
                                <?php get_template_part('loop-paginas'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();
                    }
                }elseif($GLOBALS['detectBlogs']['lujo']==$GLOBALS['detectBlogs']['blogId']){
                    if(is_page('cultura')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'cultura',
                            'posts_per_page'         => '9',
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
                                <?php get_template_part('loop-paginas'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();  

                    }elseif(is_page('personajes')){
                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'personajes',
                            'posts_per_page'         => '9',
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
                                <?php get_template_part('loop-paginas'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();  
                    }elseif(is_page('de-coleccion')){
                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'de-coleccion',
                            'posts_per_page'         => '9',
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
                                <?php get_template_part('loop-paginas'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();  
                    }elseif(is_page('moda')){
                        
                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'moda',
                            'posts_per_page'         => '9',
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
                                <?php get_template_part('loop-paginas'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();  
                    }elseif('viajes'){
                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'viajes',
                            'posts_per_page'         => '9',
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
                                <?php get_template_part('loop-paginas'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();  
                    }elseif(is_page('ecoturismo')){
                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'ecoturismo',
                            'posts_per_page'         => '9',
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
                                <?php get_template_part('loop-paginas'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();  
                    }
                }else{
                    if(is_page('moda')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'tendencias',
                            'posts_per_page'         => '9',
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
                                <?php get_template_part('loop-paginas'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();  

                    } elseif(is_page('internacional')){
                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'realeza',
                            'posts_per_page'         => '9',
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
                                <?php get_template_part('loop-paginas'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();  
                    }elseif(is_page('cultura')){
                         // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'category_name'          => 'cultura',
                            'posts_per_page'         => '9',
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
                                <?php get_template_part('loop-paginas'); ?>
                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();  
                    }elseif(is_page('nacional')){
                         // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $args = array (
                            'category_name'          => 'entrevista',
                            'posts_per_page'         => '9',
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
                                    <?php get_template_part('loop-paginas'); ?>

                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();
                    }elseif(is_page('espectaculos')){
                         // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $args = array (
                            'category_name'          => 'espectaculos',
                            'posts_per_page'         => '9',
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
                                    <?php get_template_part('loop-paginas'); ?>

                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();
                    }elseif(is_page('belleza-y-salud')){
                         // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $args = array (
                            'category_name'          => 'belleza-y-salud',
                            'posts_per_page'         => '9',
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
                                    <?php get_template_part('loop-paginas'); ?>

                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();
                    }elseif(is_page('tecnologia')){
                         // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $args = array (
                            'category_name'          => 'tecnologia',
                            'posts_per_page'         => '9',
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
                                    <?php get_template_part('loop-paginas'); ?>

                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();
                    }elseif(is_page('tips-recomendados')){
                         // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $args = array (
                            'category_name'          => 'agendacosas',
                            'posts_per_page'         => '9',
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
                                    <?php get_template_part('loop-paginas'); ?>

                           <?php  }
                        } else { ?>

                            <article>

                                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                            </article>

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();
                    }
                }
            ?>
            </div>
            <div class="pagination">
                <?php get_template_part('pagination-main'); ?>
            </div>
		</section>
<?php
get_footer();
?>
