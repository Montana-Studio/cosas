<?php get_header(); ?>

	<div id="primary" class="content-area">
        <div style="max-width:320px;margin:0 auto;">
            <ins data-revive-zoneid="6" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
            <script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
        </div>
        
        <div style="max-width:728px;margin:0 auto;">
            <ins data-revive-zoneid="2" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
            <script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
        </div>
        
		<main id="main" class="site-main">
            
            <?php 
                if($GLOBALS['detecBlogs']['couture']==$GLOBALS['detectBlogs']['blogId']){
                   // WP_Query arguments
                    $args = array (
                        'category_name'          => 'estilo',
                        'posts_per_page'         => '3',
                        'order'                  => 'DESC',
                        'orderby'                => 'date',
                    );
                    $args1 = array (
                        'category_name'          => 'disenadores',
                        'posts_per_page'         => '4',
                        'order'                  => 'DESC',
                        'orderby'                => 'date',
                    );
                }elseif($GLOBALS['detectBlogs']['repost']==$GLOBALS['detectBlogs']['blogId']){
                    // WP_Query arguments
                    $args = array (
                        'category_name'          => 'belleza-repost',
                        'posts_per_page'         => '3',
                        'order'                  => 'DESC',
                        'orderby'                => 'date',
                    );
                    $args1 = array (
                        'category_name'          => 'moda-repost',
                        'posts_per_page'         => '4',
                        'order'                  => 'DESC',
                        'orderby'                => 'date',
                    );
                }elseif($GLOBALS['detecBlogs']['lujo']==$GLOBALS['detectBlogs']['blogId']){
                    // WP_Query arguments
                    $args = array (
                        'category_name'          => 'personajes',
                        'posts_per_page'         => '3',
                        'order'                  => 'DESC',
                        'orderby'                => 'date',
                    );
                    $args1 = array (
                        'category_name'          => 'cultura',
                        'posts_per_page'         => '4',
                        'order'                  => 'DESC',
                        'orderby'                => 'date',
                    );
                }else{
                    // WP_Query arguments
                    
                    if(is_sticky()){ 
                        $args = array (
                            'posts_per_page'         => '2',
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                            'cat'                    => '-189'
                        );
                    }else{
                        $args = array (
                            'posts_per_page'         => '3',
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                            'ignore_sticky_posts'    => true,
                            'post_status'            => 'publish',
                            'cat'                    => '-189'
                        );
                    }
                    $args1 = array (
                        'category_name'          => 'recomendados',
                        'posts_per_page'         => '4',
                        'order'                  => 'DESC',
                        'orderby'                => 'date',
                        'cat'                    => '-189'
                    );
                };
            
                // The Query
                $cosas = new WP_Query( $args );
                $cosas1 = new WP_Query( $args1 );

                // The Loop
                if ( $cosas->have_posts() ) {
                    $variable=1;

                    while ( $cosas->have_posts() ) {
                        $cosas->the_post();

                        get_template_part( 'loop-index');

                        if($variable == 1){ ?>
                            <div class="destacados">
                                <ul class="rslides" id="slider5">
                                <?php 
                                    if($cosas1->have_posts()){
                                        while ($cosas1->have_posts()){
                                            $cosas1->the_post();

                                            get_template_part( 'loop-last'); }
                                    }else{
                                        echo '';
                                    }
                                    wp_reset_postdata();
                                ?>
                                </ul>
                            </div>
                        <?php }

                        $variable++;
                    }
                } else {
                    echo 'no hay post';
                }

                wp_reset_postdata(); 
            ?>
		</main>

        <div style="max-width:728px;margin:0 auto;">
            <ins data-revive-zoneid="9" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
            <script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
        </div>  
                
        <?php
            
        //SI ES MOBILE
        if ( wp_is_mobile() ) {
           //SI ES BLOG Repost
            if($GLOBALS['detectBlogs']['repost']==$GLOBALS['detectBlogs']['blogId']){ 
        ?>
            
            <h3 class="titus">entretención</h3>
            
            <main id="main-2" class="site-main-2">
               
                <?php query_posts( 'category_name=entretencion-repost&posts_per_page=6&orderby=date&order=DESC' );
                        while ( have_posts() ) : the_post();
                        get_template_part( 'loop-espectaculo');
                    endwhile;
                ?>
            </main>
            
            <h3 class="titus">Moda</h3>

            <main id="main-3" class="site-main-3">

                <?php query_posts( 'category_name=moda-repost&posts_per_page=3&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
                        get_template_part( 'loop-entrevista');
                    endwhile;
                ?>

            </main>
            
            <main id="main-7" class="site-main-7">

                <a href="<?php echo get_site_url($GLOBALS['detectBlogs']['casas']); ?>">
                
                    <svg viewBox="0 0 792 268">
                        <use xlink:href="#logo-casas" class="logo-casas"/>
                    </svg>

                </a>

                <?php
                    global $switched;
                    
                    switch_to_blog($GLOBALS['detectBlogs']['casas']);

                    $latest_posts = get_posts('cat=0&posts_per_page=4&orderby=date&order=DESC');
                    $cnt =0;
                             
                    foreach($latest_posts as $post) : setup_postdata($post);
                        get_template_part( 'loop-casas');                               
                    endforeach ;
                    restore_current_blog();
                
                ?>

            </main>
            
        <?php 
            }elseif($GLOBALS['detectBlogs']['lujo']==$GLOBALS['detectBlogs']['blogId']){
        ?>
            <h3 class="titus">moda</h3>
            
            <main id="main-2" class="site-main-2">
               
                <?php query_posts( 'category_name=moda&posts_per_page=6&orderby=date&order=DESC' );
                        while ( have_posts() ) : the_post();
                        get_template_part( 'loop-espectaculo');
                    endwhile;
                ?>
            </main>
            
            <h3 class="titus">De colección</h3>

            <main id="main-3" class="site-main-3">

                <?php query_posts( 'category_name=de-coleccion&posts_per_page=3&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
                        get_template_part( 'loop-entrevista');
                    endwhile;
                ?>

            </main>
            
            <main id="main-7" class="site-main-7">

                <a href="<?php echo get_site_url($GLOBALS['detectBlogs']['casas']); ?>">
                
                    <svg viewBox="0 0 792 268">
                        <use xlink:href="#logo-casas" class="logo-casas"/>
                    </svg>

                </a>

                <?php
                    global $switched;
                    
                    switch_to_blog($GLOBALS['detectBlogs']['casas']);

                    $latest_posts = get_posts('cat=0&posts_per_page=4&orderby=date&order=DESC');
                    $cnt =0;
                             
                    foreach($latest_posts as $post) : setup_postdata($post);
                        get_template_part( 'loop-casas');                               
                    endforeach ;
                    restore_current_blog();
                
                ?>

            </main>
            
        <?php
            }elseif($GLOBALS['detectBlogs']['couture']==$GLOBALS['detectBlogs']['blogId']){
        ?>
            <h3 class="titus">Estilo</h3>
            
            <main id="main-2" class="site-main-2">
               
                <?php query_posts( 'category_name=estilo&posts_per_page=6&orderby=date&order=DESC' );
                        while ( have_posts() ) : the_post();
                        get_template_part( 'loop-espectaculo');
                    endwhile;
                ?>
            </main>
            
            <h3 class="titus">Moda nacional</h3>

            <main id="main-3" class="site-main-3">

                <?php query_posts( 'category_name=moda-nacional&posts_per_page=3&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
                        get_template_part( 'loop-entrevista');
                    endwhile;
                ?>

            </main>
            
            <main id="main-7" class="site-main-7">

                <a href="<?php echo get_site_url($GLOBALS['detectBlogs']['casas']); ?>">
                
                    <svg viewBox="0 0 792 268">
                        <use xlink:href="#logo-casas" class="logo-casas"/>
                    </svg>

                </a>

                <?php
                    global $switched;
                    
                    switch_to_blog($GLOBALS['detectBlogs']['casas']);

                    $latest_posts = get_posts('cat=0&posts_per_page=4&orderby=date&order=DESC');
                    $cnt =0;
                             
                    foreach($latest_posts as $post) : setup_postdata($post);
                        get_template_part( 'loop-casas');                               
                    endforeach ;
                    restore_current_blog();
                
                ?>

            </main>
        <?php
            //SI NO ES UN SUBDOMAIN
            }else{ 
        ?>
            
            <h3 class="titus">espectáculos</h3>

            <main id="main-2" class="site-main-2">
                <?php 
                    // WP_Query arguments
                    $args = array (
                        'category_name'          => 'espectaculos',
                        'posts_per_page'         => '6',
                        'ignore_sticky_posts'    => false,
                        'order'                  => 'DESC',
                        'orderby'                => 'date',
                    );

                    // The Query
                    $espectaculos = new WP_Query( $args );

                    // The Loop
                    if ( $espectaculos->have_posts() ) {
                        while ( $espectaculos->have_posts() ) {
                            $espectaculos->the_post();
                            get_template_part( 'loop-espectaculo');
                        }
                    } else {
                        // no posts found
                    }

                    // Restore original Post Data
                    wp_reset_postdata();
                ?>
            </main>

            <h3 class="titus">entrevistas</h3>

            <main id="main-3" class="site-main-3">

                <?php query_posts( 'category_name=entrevistas&posts_per_page=3&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
                        get_template_part( 'loop-entrevista');
                    endwhile;
                ?>

            </main>
            
            <main id="main-8" class="site-main-8">
                
                <h3>instagram <i class="fa fa-instagram"></i></h3>
                <div class="contInstagram">
                  <?php get_template_part('instagram'); ?> 
                </div>
                
            </main>
            
            <h3 class="titus">nacional</h3>

            <main id="main-4" class="site-main-4">

                <?php 

                    $post = $posts[0]; $c=0;

                    query_posts( 'category_name=nacional&posts_per_page=4&orderby=date&order=DESC' );
                    
                    while ( have_posts() ) : the_post();
                    
            
                    global $post, $posts;
                    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
                    $first_img = $matches [1] [0];

                    $c++;
                    if( $c == 1) :

                ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('lazy'); ?> data-original="<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>">

                        <a href="<?php echo get_permalink(); ?>" class="more-link">
                            <i class="fa fa-plus"></i>
                        </a>

                <?php else: ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <div class="img-post lazy" data-original="<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>">
                            <a href="<?php echo get_permalink(); ?>" class="more-link">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>

                <?php endif; ?>

                        <footer class="entry-footer">
                            <?php
                                if ( is_single() ) {
                                    the_title( '<h1 class="entry-title">', '</h1>' );
                                } else {

                                $cats = get_the_category();
                            ?>
                                <span><?php echo $cats[0]->cat_name;?></span>

                            <?php } ?>

                            <h2 class="entry-title">
                                <a href="<?php echo esc_url( get_permalink() );?>" rel="bookmark">
                                <?php 
                                    if (strlen($post->post_title) > 35) {
                                        echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . '...';
                                    } else {
                                        the_title();
                                    }
                                ?>
                                </a>
                            </h2>
                            
                            <div class="times-post">
                                <i class="fa fa-clock-o"></i> <?php the_time('l, j F Y'); ?>
                            </div>
                            
                        </footer>
                        
                    </article>
                <?php endwhile; ?>
                
            </main>
            
            <main class="site-main-10" id="site-10">
                <span class="tit">Suscríbete a</span>
                <svg viewBox="0 0 759 232" class="menu-logo" x="0" y="0">
                    <use xlink:href="#logo-cosas" class="logo-menu"/>
                </svg>
                <span class="tit-bajada">
                    espectaculo cultura moda
                </span>
                <div class="btn-suscribe">
                    <a href="<?php echo get_site_url($GLOBALS['detectBlogs']['suscripciones']) ?>">suscríbete</a>
                </div>
            </main>
            
            <main id="main-9" class="site-main-9">
                <h3>Horóscopo</h3>
                <div class="conte-horoscopo">
                  <div class="swiper-hososcopo">
                      
                       <div class="swiper-wrapper">
                        <?php
                            // WP_Query arguments
                            $args = array (
                                'post_type' => array( 'horoscopo' ),
                                'posts_per_page'         => '12'
                            );
                            // The Query
                            $horoscopo = new WP_Query( $args );
                            // The Loop
                            if ( $horoscopo->have_posts() ) {
                                while ( $horoscopo->have_posts() ) {
                                    $horoscopo->the_post();
                        ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class('slide-item swiper-slide'); ?>>

                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                                    <img data-original="<?php the_post_thumbnail_url();?>" class="lazy"/>
                                    <?php
                                        the_title(''.'<small>','</small>'); 
                                    ?>
                                </a>

                            </div>
                        <?php
                                }
                            } else {
                                echo '<p>No hay horóscopo en este momento</p>';
                            }
                            // Restore original Post Data
                            wp_reset_postdata();
                        ?>
                        </div>
                        
                        <div class="swiper-pagination"></div>
                        
                  </div>
                </div>
            </main>

            <main id="main-5" class="site-main-5">

                <h3 class="titus">videos</h3>

                <div class="content-videos">
                    <div class="video-container">
                       <div class="swiper-wrapper">   
                            <?php 
                                    $args = array (
                                        'post_type'              => 'video-galeria',
                                        'posts_per_page'         => '3',
                                        'order'                  => 'DESC',
                                        'orderby'                => 'date',
                                    );

                                    // The Query
                                    $sociales = new WP_Query( $args );

                                    // The Loop
                                    if ( $sociales->have_posts() ) {
                                        while ( $sociales->have_posts() ) {
                                            $sociales->the_post();
                                            get_template_part( 'loop-video');
                                        }
                                    } else {
                                        // no posts found
                                    }

                                    // Restore original Post Data
                                    wp_reset_postdata(); 
                            ?>
                            <script type="text/javascript">
                                    function onYouTubePlayerAPIReady() {
                                        var players = document.querySelectorAll('.swiper-slide .embeVideo');
                                        for (var i = 0; i < players.length; i++) {
                                            new YT.Player(players[i], {
                                                playerVars: {'controls': 0,'rel':0,'showinfo':0},
                                                events:{
                                                    'onStateChange': onPlayerStateChange,
                                                },
                                                videoId: players[i].dataset.id
                                            });
                                        }
                                    }

                                    function onPlayerStateChange(event) {        
                                        if(event.data === 1){          
                                            jQuery(document).ready(function($){
                                                $('footer.titYoutube').fadeOut('slow');
                                            });
                                        }else if(event.data === 2||event.data === 0 ){
                                            jQuery(document).ready(function($){
                                                $('footer.titYoutube').fadeIn('slow');
                                            });
                                        }
                                    }
                            </script>
                       </div>
                       <div class="swiper-pagination"></div>
                    </div>

                </div>
            </main>
            
            <main id="main-6" class="site-main-6">

                <h3 class="titus">
					<span>sociales</span>
					<span class="ver-mas">
						<i class="fa fa-plus-circle"></i>
						<a href="<?php echo get_site_url(); ?>/category/vida-social" target="_self">ver mas</a>
					</span>
                </h3>

                <div class="content-sociales">
                    <ul class="marquee social-content">
                        <?php
                            // WP_Query arguments
                            $args = array (
                                'category_name'          => 'vida-social',
                                'order'                  => 'DESC',
                                'orderby'                => 'date',
                            );

                            // The Query
                            $sociales = new WP_Query( $args );

                            // The Loop
                            if ( $sociales->have_posts() ) {
                                while ( $sociales->have_posts() ) {
                                    $sociales->the_post();
                                    get_template_part( 'loop-sociales');
                                }
                            } else {
                                // no posts found
                            }

                            // Restore original Post Data
                            wp_reset_postdata();    
                        ?>
                    </ul>
                    
                    <div id="loadOverlay">
                       
                        <div class="closeimage"><i class="fa fa-times"></i></div>
                        <div class="loadimage">
                        </div>

                        <div class="dataimage"></div>
                        
                    </div>
                    
                </div>
            </main>
            
            <main id="main-7" class="site-main-7">

                <a href="<?php echo get_site_url($GLOBALS['detectBlogs']['casas']); ?>">
                
                    <svg viewBox="0 0 792 268">
                        <use xlink:href="#logo-casas" class="logo-casas"/>
                    </svg>

                </a>

                <?php
                    global $switched;
                    
                    switch_to_blog($GLOBALS['detectBlogs']['casas']);

                    // Get latest Post
                    $latest_posts = get_posts('cat=0&posts_per_page=4&orderby=date&order=DESC');
                    $cnt =0;
                    foreach($latest_posts as $post) : setup_postdata($post);
                        get_template_part( 'loop-casas');                               
                    endforeach ;
                    restore_current_blog();
                ?>
            </main>
        <?php 
            } 
        ?>
           
        <?php
        //SI NO ES MOBILE
        }else{ 
        ?>
           
        <?php
            //SI ES REPOST
            if($GLOBALS['detectBlogs']['repost']==$GLOBALS['detectBlogs']['blogId']){ 
        ?>
            <?php get_sidebar(); ?>
            <div id="main-2" class="site-main-2-mobile">
               
                <h3 class="titus">entretención</h3>
                <div style="display:block;">
                <?php
                    $args = array(
                        'category_name' => 'entretencion-repost',
                        'posts_per_page' => 9,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                     $entretencion = new WP_Query($args);
                    if($entretencion->have_posts()){
                        while($entretencion->have_posts()){
                            $entretencion->the_post();
                            get_template_part('loop-espectaculo');
                        }
                    }else{
                        
                    }
                    wp_reset_postdata();
                ?>
                </div>
            </div>
            
            <div id="main-3" class="site-main-3-mobile">
                <h3 class="titus">moda</h3>
                <?php query_posts( 'category_name=moda-repost&posts_per_page=2&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
                        get_template_part( 'loop-entrevistamobile');
                    endwhile;
                ?>
                
            </div>
            
        <?php
            }elseif($GLOBALS['detectBlogs']['lujo']==$GLOBALS['detectBlogs']['blogId']){
        ?>
            <?php get_sidebar(); ?>
            <div id="main-2" class="site-main-2-mobile">
                <h3 class="titus">moda</h3>
                <div style="display:block;">
                <?php query_posts( 'category_name=moda&posts_per_page=9&orderby=date&order=DESC' );
                        while ( have_posts() ) : the_post();
                        get_template_part( 'loop-espectaculo');
                    endwhile;
                ?>
                </div>
            </div>
            
            <div id="main-3" class="site-main-3-mobile">
                <h3 class="titus">De colección</h3>
                <?php query_posts( 'category_name=de-coleccion&posts_per_page=2&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
                        get_template_part( 'loop-entrevistamobile');
                    endwhile;
                ?>
                
            </div>
        <?php
            }elseif($GLOBALS['detectBlogs']['couture']==$GLOBALS['detectBlogs']['blogId']){
        ?>
            <?php get_sidebar(); ?>
            <div id="main-2" class="site-main-2-mobile">
                <h3 class="titus">Estilo</h3>
                <div style="display:block;">
                <?php query_posts( 'category_name=estilo&posts_per_page=9&orderby=date&order=DESC' );
                        while ( have_posts() ) : the_post();
                        get_template_part( 'loop-espectaculo');
                    endwhile;
                ?>
                </div>
            </div>
            
            <div id="main-3" class="site-main-3-mobile">
                
                <h3 class="titus">Moda Nacional</h3>
                <div style="display:block;">
                <?php query_posts( 'category_name=moda-nacional&posts_per_page=2&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
                        get_template_part( 'loop-entrevistamobile');
                    endwhile;
                ?>
                </div>
            </div>
        <?php
            
            }else{ 
        ?>
            
            <?php get_sidebar(); ?>
            
            <div id="main-2" class="site-main-2-mobile">
               
                <h3 class="titus">espectáculos</h3>
               <div style="display:block;">
                <?php 
                    // WP_Query arguments
                    $args = array (
                        'category_name'          => 'espectaculos',
                        'posts_per_page'         => '9',
                        'ignore_sticky_posts'    => false,
                        'order'                  => 'DESC',
                        'orderby'                => 'date',
                    );

                    // The Query
                    $espectaculos = new WP_Query( $args );

                    // The Loop
                    if ( $espectaculos->have_posts() ) {
                        while ( $espectaculos->have_posts() ) {
                            $espectaculos->the_post();
                            get_template_part( 'loop-espectaculo');
                        }
                    } else {
                        // no posts found
                    }

                    // Restore original Post Data
                    wp_reset_postdata();
                ?>
                </div>
            </div>
           
            <div id="main-3" class="site-main-3-mobile">
                
                <h3 class="titus">entrevistas</h3>
                <?php query_posts( 'category_name=entrevistas&posts_per_page=2&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
                        get_template_part( 'loop-entrevistamobile');
                    endwhile;
                ?>
                
                <main id="main-9" class="site-main-9">
                <h3>Horóscopo</h3>
                <div class="conte-horoscopo">
                  <div class="swiper-hososcopo">

                       <div class="swiper-wrapper">
                        <?php
                            // WP_Query arguments
                            $args = array (
                                'post_type' => array( 'horoscopo' ),
                                'posts_per_page'         => '12'
                            );
                            // The Query
                            $horoscopo = new WP_Query( $args );
                            // The Loop
                            if ( $horoscopo->have_posts() ) {
                                while ( $horoscopo->have_posts() ) {
                                    $horoscopo->the_post();
                        ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class('slide-item swiper-slide'); ?>>

                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                                    <img data-original="<?php the_post_thumbnail_url();?>" class="lazy"/>
                                    <?php
                                        the_title(''.'<small>','</small>'); 
                                    ?>
                                </a>

                            </div>
                        <?php
                                }
                            } else {
                                echo '<p>No hay horóscopo en este momento</p>';
                            }
                            // Restore original Post Data
                            wp_reset_postdata();
                        ?>
                        </div>
                        <div class="swiper-pagination"></div>
                  </div>
                </div>
            </main>
               
                <main class="site-main-10" id="site-10">
                    <span class="tit">Suscríbete a</span>
                    <svg viewBox="0 0 759 232" class="menu-logo" x="0" y="0">
                        <use xlink:href="#logo-cosas" class="logo-menu"/>
                    </svg>
                    <span class="tit-bajada">
                        espectaculo cultura moda
                    </span>
                    <div class="btn-suscribe">
                        <a href="<?php echo get_site_url($GLOBALS['detectBlogs']['suscripciones']) ?>">suscríbete</a>
                    </div>
                </main>
                 
            </div>
                
            <main id="main-8" class="site-main-8">
                
                <h3>instagram <i class="fa fa-instagram"></i></h3>
                <div class="contInstagram">
                  <?php get_template_part('instagram'); ?> 
                </div>
                
            </main>
            
            <h3 class="titus-large">nacional</h3>
            
            <div id="main-4" class="site-main-4-mobile">
                
            <?php 
                query_posts( 'category_name=nacional&posts_per_page=5&orderby=date&order=DESC' );

                while ( have_posts() ) : the_post();
                
                global $post, $posts;
                $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
                $first_img = $matches [1] [0];
                
            ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class('lazy'); ?> data-original="<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>">
                            
            <?php 
                //SI NO ES MOBILE
                if(!wp_is_mobile()){ 
            ?>
                    <div class="hover-content">
                        <div class="shares-post">
                            <p>comparte en</p>
                               
                            <!--a href="javascript:fbShare('<?php //echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php //echo the_permalink(); ?>', 520, 350)">
                                <i class="fa fa-facebook"></i>
                            </a-->

                           <a class='facebook_share' id='<?php echo the_permalink(); ?>' name='<?php the_title(); ?>' href="#">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)">
                                <i class="fa fa-pinterest"></i>
                            </a>

                            <a target="_blank" href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php echo the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;">
                                <i class="fa fa-google-plus"></i>
                            </a>

                        </div>
                        <div class="btn_more">
                            <a href="<?php echo get_permalink(); ?>">seguir leyendo</a>
                        </div>
                    </div>
            <?php 
                } 
            ?>
                            
                     <footer class="entry-footer">
            <?php
                        if ( is_single() ) {
                            the_title( '<h1 class="entry-title">', '</h1>' );
                        } else {

                        $cats = get_the_category();
            ?>
                        <span><?php echo $cats[0]->cat_name;?></span>

            <?php 
                        } 
            ?>

                        <h2 class="entry-title">
                            <a href="<?php echo esc_url( get_permalink() );?>" rel="bookmark">
                            <?php 
                                if (strlen($post->post_title) > 35) {
                                    echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . '...';
                                } else {
                                    the_title();
                                }
                            ?>
                            </a>
                        </h2>
                        <div class="times-post">
                            <i class="fa fa-clock-o"></i> <?php the_time('l, j F Y'); ?>
                        </div>
                    </footer>
                       
                </article>
        <?php 
                endwhile;
        ?>
                
            </div>
            
        <?php 
            }
        }
        ?>
        
	</div>
	
	<?php
    //SI NO ES MOBILE
    if ( !wp_is_mobile() ){ 
        //SI ES Repost
        if($GLOBALS['detectBlogs']['repost']==$GLOBALS['detectBlogs']['blogId']){ 
    ?>
        <main id="main-7" class="site-main-7-mobile">
           
            <a href="<?php echo get_site_url($GLOBALS['detectBlogs']['casas']); ?>">
                
                <svg viewBox="0 0 792 268">
                    <use xlink:href="#logo-casas" class="logo-casas"/>
                </svg>
                
            </a>
            
            <div class="maxcasas">
                <?php
                    global $switched;
                    
                    switch_to_blog($GLOBALS['detectBlogs']['casas']);

                    // Get latest Post
                    $latest_posts = get_posts('cat=0&posts_per_page=4&orderby=date&order=DESC'); 
                    $cnt =0;
                    foreach($latest_posts as $post) : setup_postdata($post);
                        get_template_part( 'loop-casas');                               
                    endforeach ;
                    restore_current_blog(); 
                ?>  
            </div>

        </main>
    <?php 
        }elseif($GLOBALS['detectBlogs']['lujo']==$GLOBALS['detectBlogs']['blogId']){
    ?>
        <main id="main-7" class="site-main-7-mobile">
           
            <a href="<?php echo get_site_url($GLOBALS['detectBlogs']['casas']); ?>">
                
                <svg viewBox="0 0 792 268">
                    <use xlink:href="#logo-casas" class="logo-casas"/>
                </svg>
                
            </a>
            
            <div class="maxcasas">
                <?php
                    global $switched;
                    
                    switch_to_blog($GLOBALS['detectBlogs']['casas']);

                    // Get latest Post
                    $latest_posts = get_posts('cat=0&posts_per_page=4&orderby=date&order=DESC'); 
                    $cnt =0;
                    foreach($latest_posts as $post) : setup_postdata($post);
                        get_template_part( 'loop-casas');                               
                    endforeach ;
                    restore_current_blog(); 
                ?>  
            </div>

        </main>
    <?php
        }elseif($GLOBALS['detectBlogs']['couture']==$GLOBALS['detectBlogs']['blogId']){
    ?>
        <main id="main-7" class="site-main-7-mobile">
           
            <a href="<?php echo get_site_url($GLOBALS['detectBlogs']['casas']); ?>">
                
                <svg viewBox="0 0 792 268">
                    <use xlink:href="#logo-casas" class="logo-casas"/>
                </svg>
                
            </a>
            
            <div class="maxcasas">
                <?php
                    global $switched;
                    
                    switch_to_blog($GLOBALS['detectBlogs']['casas']);

                    // Get latest Post
                    $latest_posts = get_posts('cat=0&posts_per_page=4&orderby=date&order=DESC'); 
                    $cnt =0;
                    foreach($latest_posts as $post) : setup_postdata($post);
                        get_template_part( 'loop-casas');                               
                    endforeach ;
                    restore_current_blog(); 
                ?>  
            </div>

        </main>
    <?php
        }else{ 
    ?>
        
        <main id="main-5" class="site-main-5-mobile">

            <h3 class="titus">videos</h3>

                <div class="content-video">
                    <div class="list-videos">

                        <?php 
                               $args = array (
                                    'post_type'              => 'video-galeria',
                                    'order'                  => 'DESC',
                                    'orderby'                => 'date',
                                );
                                $args2 = array (
                                    'post_type'              => 'video-galeria',
                                    'order'                  => 'DESC',
                                    'orderby'                => 'date',
                                );
                                // The Query
                                $videos = new WP_Query( $args );
                                $videos2 = new WP_Query( $args2 );

                                // The Loop
                                if ( $videos->have_posts() ) {
                                    $cantidad_videos =$videos->post_count;
                                    $cantidad_videos_loop = $cantidad_videos - 1; 
                                    $var=0;
                                    while ( $videos->have_posts() ) {
                                        $videos->the_post();
                                        if($var==0){
                                             get_template_part('loop-video1');
                                        }else{
                                            if($var==1){?>
                                               <div class="video-player">
                                                    <div class="swiper-container-video">
                                                        <div class="btn-nav-video btn-prev">Ver videos anteriores</div>
                                                            <div class="swiper-wrapper">
                                            <?  get_template_part('loop-video2');
                                            }else if($var < $cantidad_videos_loop){
                                                get_template_part('loop-video2');
                                            }else if($var == $cantidad_videos_loop){
                                                get_template_part('loop-video2'); ?>
                                                        </div>
                                                        <div class="btn-nav-video btn-next">Ver videos anteriores</div>
                                                   </div>
                                            </div>    
                                        <?   } 
                                        }
                                       $var++;
                                        
                                    }
                                } else {
                                    // no posts found
                                }

                                // Restore original Post Data
                                wp_reset_postdata();
                        ?>
                    </div> 
                </div>     
                <script type="text/javascript">
                    var playerss;
                    function onYouTubePlayerAPIReady() {
                        var players = document.querySelectorAll('.swiper-sliders .embeVideo');
                        for (var i = 0; i < players.length; i++) {
                            playerss = new YT.Player(players[i], {
                                playerVars: {'controls': 0,'rel':0,'showinfo':0},
                                events:{
                                    'onStateChange': onPlayerStateChange,
                                },
                                videoId: players[i].dataset.id
                            });
                        }
                    }
                    function onPlayerStateChange(event) {        
                        if(event.data === 1){          
                            jQuery(document).ready(function($){
                                $('.video-play .title-video-principal').fadeOut('slow');
                            });
                        }else if(event.data === 2||event.data === 0 ){
                            jQuery(document).ready(function($){
                                $('.video-play .title-video-principal').fadeIn('slow');
                            });
                        }
                    }
                    function loadVideo(videoID) {
                        if(playerss) { 
                            jQuery(document).ready(function($){
                                $.ajaxSetup({cache:false});
                                
                                $(".video-post").click(function(){
                                    var fecha = $(this).find('.date-video').text();
                                    var titulo = $(this).find('.title-video').text();
                                    
                                    $(".titulo-principal").html(titulo);
                                    $(".info-principal").html(fecha);
                                    playerss.loadVideoById(videoID);
                                    return false;
                                });
                                
                                
                            });
                        }
                    }
                </script>
        </main>
    
        <main id="main-6" class="site-main-6-mobile">

            <h3 class="titus">
            	<span>sociales</span>
            	<span class="ver-mas">
            		<i class="fa fa-plus-circle"></i>
            		<a href="<?php echo get_site_url(); ?>/category/vida-social" target="_self">ver mas</a>
            	</span>
            </h3>

            <div class="content-sociales">
                
                <ul class="marquee social-content">
                    <?php
                        // WP_Query arguments
                        $args = array (
                            'category_name'          => 'vida-social',
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                        );

                        // The Query
                        $sociales = new WP_Query( $args );

                        // The Loop
                        if ( $sociales->have_posts() ) {
                            while ( $sociales->have_posts() ) {
                                $sociales->the_post();
                                get_template_part( 'loop-sociales');
                            }
                        } else {
                            // no posts found
                        }

                        // Restore original Post Data
                        wp_reset_postdata();    
                    ?>
                </ul>
                <div id="loadOverlay">
                    <div class="closeimage"><i class="fa fa-times"></i></div>
                    <div class="loadimage">
                    </div>

                    <div class="dataimage"></div>

                </div>
            </div>
        </main>
        
        <main id="main-7" class="site-main-7-mobile">
            <a href="<?php echo get_site_url($GLOBALS['detectBlogs']['casas']); ?>">
                
                <svg viewBox="0 0 792 268">
                    <use xlink:href="#logo-casas" class="logo-casas"/>
                </svg>
                
            </a>
            
            <div class="maxcasas">
                <?php
                    global $switched;
                    
                    switch_to_blog($GLOBALS['detectBlogs']['casas']);

                    $latest_posts = get_posts('cat=0&posts_per_page=4&orderby=date&order=DESC'); 
                    $cnt =0;

                    foreach($latest_posts as $post) : setup_postdata($post);
                        get_template_part( 'loop-casas');                               
                    endforeach ;
                    restore_current_blog();
                ?>  
            </div>

        </main>
    <?php 
        } 
    } 
    get_footer();
    
    ?>
