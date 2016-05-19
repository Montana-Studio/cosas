<?php
get_header();
?>
<section class="page-content">
           
            <div class="breadcrumbs">

                <?php the_breadcrumb(); ?>

            </div>
<div style="max-width:320px;margin:0 auto;">
<ins data-revive-zoneid="7" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
<script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
</div>
<div style="max-width:728px;margin:0 auto;">
<ins data-revive-zoneid="4" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
<script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
</div>       
            <h1 class="titus"><?php the_title(); ?></h1>
            
            <div class="post-list">
            <?php
                //LOOP REPOST
                if($GLOBALS['detectBlogs']['repost']==$GLOBALS['detectBlogs']['blogId']){
                    
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    
                    if(is_page('moda')){
                        $args = array (
                            'category_name'          => 'moda-repost',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }elseif(is_page('belleza')){
                        $args = array (
                            'category_name'          => 'belleza-repost',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }elseif(is_page('outdoor')){
                        $args = array (
                            'category_name'          => 'outdoor',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }elseif(is_page('entretencion')){
                        $args = array (
                            'category_name'          => 'entretencion-repost',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        ); 
                    }
                    // The Query
                    $paginas = new WP_Query( $args );

                    // The Loop
                    if ( $paginas->have_posts() ) {
                        while ( $paginas->have_posts() ) {
                            $paginas->the_post();
                            get_template_part('loop-paginas');
                        }
                    } else {
                ?>

                    <article>

                        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                    </article>

                <?php 
                    }
                    wp_reset_postdata(); 
                
                //LOOP LUJO
                }elseif($GLOBALS['detectBlogs']['lujo']==$GLOBALS['detectBlogs']['blogId']){
                    
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    
                    if(is_page('cultura')){
                        $args = array (
                            'category_name'          => 'cultura',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }elseif(is_page('personajes')){
                        
                        $args = array (
                            'category_name'          => 'personajes',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }elseif(is_page('de-coleccion')){
                        
                        $args = array (
                            'category_name'          => 'de-coleccion',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }elseif(is_page('moda')){
                        
                        
                        $args = array (
                            'category_name'          => 'moda',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }elseif(is_page('viajes')){
                        
                        $args = array (
                            'category_name'          => 'viajes',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }elseif(is_page('ecoturismo')){
                        
                        $args = array (
                            'category_name'          => 'ecoturismo',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }
                    // The Query
                    $paginas = new WP_Query( $args );

                    // The Loop
                    if ( $paginas->have_posts() ) {
                        while ( $paginas->have_posts() ) {
                            $paginas->the_post();
                            get_template_part('loop-paginas');
                        }
                    } else {
                ?>

                    <article>

                        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                    </article>

                <?php 
                    }
                    wp_reset_postdata(); 
                }elseif($GLOBALS['detectBlogs']['couture']==$GLOBALS['detectBlogs']['blogId']){
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    
                    if(is_page('disenadores')){
                        $args = array (
                            'category_name'          => 'disenadores',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }elseif(is_page('estilo')){
                        $args = array (
                            'category_name'          => 'estilo',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }elseif(is_page('moda-nacional')){
                        $args = array (
                            'category_name'          => 'moda-nacional',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }elseif(is_page('pasarela-internacional')){
                        $args = array (
                            'category_name'          => 'pasarela-internacional',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }elseif(is_page('street-style')){
                        $args = array (
                            'category_name'          => 'street-style',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }elseif(is_page('the-list')){
                        $args = array (
                            'category_name'          => 'the-list',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }
                    // The Query
                    $paginas = new WP_Query( $args );

                    // The Loop
                    if ( $paginas->have_posts() ) {
                        while ( $paginas->have_posts() ) {
                            $paginas->the_post();
                            get_template_part('loop-paginas');
                        }
                    } else {
                ?>

                    <article>

                        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                    </article>

                <?php 
                    }
                    wp_reset_postdata(); 
                //LOOP COSAS
                }else{
                    
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    if(is_page('moda')){
                        $args = array (
                            'category_name'          => 'tendencias',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                    } elseif(is_page('internacional')){
                        
                        $args = array (
                            'category_name'          => 'realeza',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        ); 
                    }elseif(is_page('cultura')){
                         
                        $args = array (
                            'category_name'          => 'cultura',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                        
                    }elseif(is_page('nacional')){
                         

                        $args = array (
                            'category_name'          => 'entrevista',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }elseif(is_page('espectaculos')){
                         

                        $args = array (
                            'category_name'          => 'espectaculos',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                    }elseif(is_page('belleza-y-salud')){
                         

                        $args = array (
                            'category_name'          => 'belleza-y-salud',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    }elseif(is_page('tecnologia')){
                         

                        $args = array (
                            'category_name'          => 'tecnologia',
                            'posts_per_page'         => '9',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                    }elseif(is_page('tips-recomendados')){
                         

                        $args = array (
                            'category_name'          => 'agendacosas',
                            'posts_per_page'         => '10',
                            'paged'                  => $paged,
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );
                    } 
                    // The Query
                    $paginas = new WP_Query( $args );

                    // The Loop
                    if ( $paginas->have_posts() ) {
                        
                        while ( $paginas->have_posts() ) {
                            $paginas->the_post();
                            
                            get_template_part('loop-paginas');
                        }
                    } else {
                ?>

                    <article>

                        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                    </article>

                <?php 
                    }
                    wp_reset_postdata(); 
                }
            ?>
            </div>
            
            <div class="pagination">
                <?php get_template_part('pagination-main'); ?>
            </div>
            
		</section>
		
<?php get_footer(); ?>
