<?php get_header(); ?>

	<div id="primary" class="content-area">
<div style="max-width:320px;margin:0 auto;">
<ins data-revive-zoneid="7" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
<script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
</div>
<div style="max-width:728px;margin:0 auto;">
<ins data-revive-zoneid="2" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
<script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
</div>	    
		<main id="main" class="site-main">
            
            <?php 
                if($GLOBALS['detectBlogs']['repost']==$GLOBALS['detectBlogs']['blogId']){
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
                    $args = array (
                        'cat'                    => '0',
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
                }
                // The Query
                $cosas = new WP_Query( $args );
                $cosas1 = new WP_Query( $args1 );

                // The Loop
                if ( $cosas->have_posts() ) {
                    $variable=1;

                    while ( $cosas->have_posts() ) {
                        $cosas->the_post();

                        get_template_part( 'loop-index');

                        if($variable == 1&&!wp_is_mobile()){ ?>
                            <div class="destacados">
                                <ul class="rslides" id="slider5">
                                <?php 
                                    if($cosas1->have_posts()){
                                        while ($cosas1->have_posts()){
                                            $cosas1->the_post();

                                            get_template_part( 'loop-last'); }

                                    }else{
                                        echo 'no hay post';
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
            //SI NO ES UN SUBDOMAIN
            }else{ 
        ?>
            
            <h3 class="titus">espectáculos</h3>

            <main id="main-2" class="site-main-2">
                <?php query_posts( 'category_name=espectaculos&posts_per_page=6&orderby=date&order=DESC' );
                        while ( have_posts() ) : the_post();
                        get_template_part( 'loop-espectaculo');
                    endwhile;
                ?>
            </main>

            <h3 class="titus">entrevistas</h3>

            <main id="main-3" class="site-main-3">

                <?php query_posts( 'category_name=entrevista&posts_per_page=3&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
                        get_template_part( 'loop-entrevista');
                    endwhile;
                ?>

            </main>
            
            <main id="main-8" class="site-main-8">
                
                <h3>instagram</h3>
                <div class="contInstagram">
                  <?php get_template_part('instagram'); ?> 
                </div>
                
            </main>
            <h3 class="titus">nacional</h3>

            <main id="main-4" class="site-main-4">

                <?php 

                    $post = $posts[0]; $c=0;

                    query_posts( 'category_name=entrevista,politica&posts_per_page=4&orderby=date&order=DESC' );
                    
                    while ( have_posts() ) : the_post();
                    
            
                    global $post, $posts;
                    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
                    $first_img = $matches [1] [0];

//                    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );

                    $c++;
                    if( $c == 1) :

                ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>');">

                        <a href="<?php echo get_permalink(); ?>" class="more-link">
                            <i class="fa fa-plus"></i>
                        </a>

                <?php else: ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <div class="img-post" style="background-image: url('<?php echo $src[0]; ?>');">
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
            <?php /*
            <main id="main-9" class="site-main-9">
                <h3>Horóscopo</h3>
                <div class="conte-horoscopo">
                  <div class="swiper-container">
                      
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

                                    <img src="<?php the_post_thumbnail_url();?>"/>
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
                        <div class="swiper-pagination"></div>
                        </div>
                        
                  </div>
                </div>
            </main>
            */?>
            <main id="main-5" class="site-main-5">

                <h3 class="titus">videos</h3>

                <div class="content-videos">
                    <ul class="rslides" id="slider4">
                        <?php query_posts( 'post_type=video-galeria&posts_per_page=3&orderby=date&order=DESC' );
                            while ( have_posts() ) : the_post();
                                get_template_part( 'loop-video');
                            endwhile;
                        ?>
                    </ul>

                </div>
            </main>
            
            <main id="main-6" class="site-main-6">

                <h3 class="titus">sociales</h3>

                <div class="content-sociales">
                    <ul class="marquee social-content">
                        <?php
                            // WP_Query arguments
                            $args = array (
                                'category_name'          => 'vidasocial',
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
        <?php get_sidebar(); ?>
           
        <?php
            //SI ES REPOST
            if($GLOBALS['detectBlogs']['repost']==$GLOBALS['detectBlogs']['blogId']){ 
        ?>
            <h3 class="titus">entretención</h3>
            
            <div id="main-2" class="site-main-2-mobile">
                <?php query_posts( 'category_name=entretencion-repost&posts_per_page=9&orderby=date&order=DESC' );
                        while ( have_posts() ) : the_post();
                        get_template_part( 'loop-espectaculo');
                    endwhile;
                ?>
            </div>
            
            <h3 class="titus">moda</h3>
            
            <div id="main-3" class="site-main-3-mobile">
                
                <?php query_posts( 'category_name=moda-repost&posts_per_page=2&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
                        get_template_part( 'loop-entrevistamobile');
                    endwhile;
                ?>
                
            </div>
            
        <?php
            }elseif($GLOBALS['detectBlogs']['lujo']==$GLOBALS['detectBlogs']['blogId']){
        ?>
        <h3 class="titus">moda</h3>
            
            <div id="main-2" class="site-main-2-mobile">
                <?php query_posts( 'category_name=moda&posts_per_page=9&orderby=date&order=DESC' );
                        while ( have_posts() ) : the_post();
                        get_template_part( 'loop-espectaculo');
                    endwhile;
                ?>
            </div>
            
            <h3 class="titus">De colección</h3>
            
            <div id="main-3" class="site-main-3-mobile">
                
                <?php query_posts( 'category_name=de-coleccion&posts_per_page=2&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
                        get_template_part( 'loop-entrevistamobile');
                    endwhile;
                ?>
                
            </div>
        <?php
            }else{ 
        ?>
            <h3 class="titus">espectáculos</h3>
            
            <div id="main-2" class="site-main-2-mobile">
                <?php query_posts( 'category_name=espectaculos&posts_per_page=9&orderby=date&order=DESC' );
                        while ( have_posts() ) : the_post();
                        get_template_part( 'loop-espectaculo');
                    endwhile;
                ?>
            </div>
            
            <h3 class="titus">entrevistas</h3>
            
            <div id="main-3" class="site-main-3-mobile">
                
                <?php query_posts( 'category_name=entrevista&posts_per_page=2&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
                        get_template_part( 'loop-entrevistamobile');
                    endwhile;
                ?>
                
            </div>
            
            <main id="main-8" class="site-main-8">
                
                <h3>instagram</h3>
                <div class="contInstagram">
                  <?php get_template_part('instagram'); ?> 
                </div>
                
            </main>
            
            <h3 class="titus-large">nacional</h3>
            
            <div id="main-4" class="site-main-4-mobile">
                
        <?php 
                query_posts( 'category_name=entrevista,politica&posts_per_page=5&orderby=date&order=DESC' );

                while ( have_posts() ) : the_post();
                
                global $post, $posts;
                $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
                $first_img = $matches [1] [0];
                
                //$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );
        ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>');">
                            
        <?php 
                //SI NO ES MOBILE
                if(!wp_is_mobile()){ 
        ?>
                    <div class="hover-content">
                        <div class="shares-post">
                            <p>comparte en</p>
                               
                            <a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)">
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
            }else{ 
    ?>
       
        <?php /*/<main id="main-5" class="site-main-5-mobile">

            <h3 class="titus">videos</h3>

            <div class="content-videos">
                <ul class="rslides">
                    <?php query_posts( 'post_type=video-galeria&posts_per_page=4&orderby=date&order=DESC' );
                        while ( have_posts() ) : the_post();
                            get_template_part( 'loop-video');
                        endwhile;
                    ?>
                </ul>

            </div>
        </main>
        */
        ?>
        <main id="main-6" class="site-main-6-mobile">

            <h3 class="titus">sociales</h3>

            <div class="content-sociales">
                
                <ul class="marquee social-content">
                    <?php
                        // WP_Query arguments
                        $args = array (
                            'category_name'          => 'vidasocial',
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
