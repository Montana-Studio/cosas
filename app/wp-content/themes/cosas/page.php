<?php
get_header();
?>
<section class="page-content">
            <div class="breadcrumbs">

                <?php the_breadcrumb(); ?>

            </div>
<div style="max-width:728px;margin:0 auto;">
<ins data-revive-zoneid="4" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
<script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
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
                    }elseif(is_page('entretencion')){
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
                    }elseif(is_page('exito')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        // The Query
                        $paginas = new WP_Query( $args ); 

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                           <?php  }
                        } else { ?>

                            <div class="empty-section">

                                <div class="inside-empty-section">
                                    <h2>¡Transacción realizada con éxito!</h2>
                                    <a class="button" href="<?php echo get_site_url(4); ?>">volver al home</a>  
                                </div>

                            </div> 

                        <?php }

                        wp_reset_postdata(); 

                    }elseif(is_page('fracaso')){

                        // WP_Query arguments
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        // The Query
                        $paginas = new WP_Query( $args ); 

                        // The Loop
                        if ( $paginas->have_posts() ) {
                            while ( $paginas->have_posts() ) {
                                $paginas->the_post(); ?>
                           <?php  }
                        } else { ?>

                            <div class="empty-section">

                                <div class="inside-empty-section">
                                    <h2>¡Tenemos un problema, intentanlo nuevamente!</h2>
                                    <a class="button" href="<?php echo get_site_url(4); ?>">volver al home</a>  
                                </div>

                            </div> 

                        <?php }

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
