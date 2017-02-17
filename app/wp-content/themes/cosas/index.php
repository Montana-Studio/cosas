<?php get_header(); ?>
    <script src="<?php echo  get_template_directory_uri() ?>/js/vimeo.player.js"></script>
    <script src="<?php echo  get_template_directory_uri() ?>/js/youtube.api.js"></script>
    <script src="<?php echo  get_template_directory_uri() ?>/js/videos.js"></script>
    <div id="primary" class="content-area">
        <div style="margin:0 auto;clear:both;display:block;max-width:300px;">
            <ins data-revive-zoneid="30" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
            <script>
            (function () {
              var d = document, s = d.createElement('script'), p = d.location.protocol,
                  i = d.getElementsByTagName('ins'), j = i[i.length-1];
              try {
                s.src = p === 'http:' ? 'http://bloques.cosas.com/activos4.0/www/innerdev/asyncjs.php' :
                  'https://bloques.cosas.com/activos4.0/www/delivery/asyncjs.php';
                s.async = true; j.appendChild(s);
              } catch (e) {}
            })();
            </script>
        </div>
        <div style="max-width:320px;margin:0 auto;">

            <ins data-revive-zoneid="6" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
            <script>
            (function () {
              var d = document, s = d.createElement('script'), p = d.location.protocol,
                  i = d.getElementsByTagName('ins'), j = i[i.length-1];
              try {
                s.src = p === 'http:' ? 'http://bloques.cosas.com/activos4.0/www/innerdev/asyncjs.php' :
                  'https://bloques.cosas.com/activos4.0/www/delivery/asyncjs.php';
                s.async = true; j.appendChild(s);
              } catch (e) {}
            })();
            </script>
       
        </div>
        
        <div style="max-width:728px;margin:0 auto;">

            <ins data-revive-zoneid="2" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
            <script>
            (function () {
              var d = document, s = d.createElement('script'), p = d.location.protocol,
                  i = d.getElementsByTagName('ins'), j = i[i.length-1];
              try {
                s.src = p === 'http:' ? 'http://bloques.cosas.com/activos4.0/www/innerdev/asyncjs.php' :
                  'https://bloques.cosas.com/activos4.0/www/delivery/asyncjs.php';
                s.async = true; j.appendChild(s);
              } catch (e) {}
            })();
            </script>
       
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
                            'cat'                    => '-189,-881'
                        );
                    }else{
                        $args = array (
                            'posts_per_page'         => '3',
                            'order'                  => 'DESC',
                            'orderby'                => 'date',
                            'ignore_sticky_posts'    => true,
                            'post_status'            => 'publish',
                            'cat'                    => '-189,-881'
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
        
        <!-- BRANDED BANNERS -->
        
        <?php if(wp_is_mobile()){ ?>
            <div class="branded-content">
                <div class="branded-box">

                    <ins data-revive-zoneid="13" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
                    <script>
                    (function () {
                      var d = document, s = d.createElement('script'), p = d.location.protocol,
                          i = d.getElementsByTagName('ins'), j = i[i.length-1];
                      try {
                        s.src = p === 'http:' ? 'http://bloques.cosas.com/activos4.0/www/innerdev/asyncjs.php' :
                          'https://bloques.cosas.com/activos4.0/www/delivery/asyncjs.php';
                        s.async = true; j.appendChild(s);
                      } catch (e) {}
                    })();
                    </script>
            
                </div>
                
                <div class="branded-box">

                    <ins data-revive-zoneid="14" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
                    <script>
                    (function () {
                      var d = document, s = d.createElement('script'), p = d.location.protocol,
                          i = d.getElementsByTagName('ins'), j = i[i.length-1];
                      try {
                        s.src = p === 'http:' ? 'http://bloques.cosas.com/activos4.0/www/innerdev/asyncjs.php' :
                          'https://bloques.cosas.com/activos4.0/www/delivery/asyncjs.php';
                        s.async = true; j.appendChild(s);
                      } catch (e) {}
                    })();
                    </script>
                    
                </div>
            </div>
        <?php } ?>
        
        
        <div style="max-width:970px;margin:0 auto;display:block;clear:both;">

            <ins data-revive-zoneid="23" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
            <script>
            (function () {
              var d = document, s = d.createElement('script'), p = d.location.protocol,
                  i = d.getElementsByTagName('ins'), j = i[i.length-1];
              try {
                s.src = p === 'http:' ? 'http://bloques.cosas.com/activos4.0/www/innerdev/asyncjs.php' :
                  'https://bloques.cosas.com/activos4.0/www/delivery/asyncjs.php';
                s.async = true; j.appendChild(s);
              } catch (e) {}
            })();
            </script>
        </div>
        
        <div style="max-width:728px;margin:0 auto;">

            <ins data-revive-zoneid="9" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
            <script>
            (function () {
              var d = document, s = d.createElement('script'), p = d.location.protocol,
                  i = d.getElementsByTagName('ins'), j = i[i.length-1];
              try {
                s.src = p === 'http:' ? 'http://bloques.cosas.com/activos4.0/www/innerdev/asyncjs.php' :
                  'https://bloques.cosas.com/activos4.0/www/delivery/asyncjs.php';
                s.async = true; j.appendChild(s);
              } catch (e) {}
            })();
            </script>
       
        </div>
        
        <div style="max-width:970px;margin:0 auto;">

            <ins data-revive-zoneid="15" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
            <script>
            (function () {
              var d = document, s = d.createElement('script'), p = d.location.protocol,
                  i = d.getElementsByTagName('ins'), j = i[i.length-1];
              try {
                s.src = p === 'http:' ? 'http://bloques.cosas.com/activos4.0/www/innerdev/asyncjs.php' :
                  'https://bloques.cosas.com/activos4.0/www/delivery/asyncjs.php';
                s.async = true; j.appendChild(s);
              } catch (e) {}
            })();
            </script>
    
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
            <script type='text/javascript'>//<![CDATA[
               document.MAX_ct0 = unescape('{clickurl_enc}');

               var m3_u = (location.protocol=='https:'?'https://bloques.cosas.com/activos4.0/www/delivery/ajs.php':'http://bloques.cosas.com/activos4.0/www/innerdev/ajs.php');
               var m3_r = Math.floor(Math.random()*99999999999);
               if (!document.MAX_used) document.MAX_used = ',';
               document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
               document.write ("?zoneid=33");
               document.write ('&amp;cb=' + m3_r);
               if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
               document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
               document.write ("&amp;loc=" + escape(window.location));
               if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
               if (document.context) document.write ("&context=" + escape(document.context));
               if ((typeof(document.MAX_ct0) != 'undefined') && (document.MAX_ct0.substring(0,4) == 'http')) {
                   document.write ("&amp;ct0=" + escape(document.MAX_ct0));
               }
               if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
               document.write ("'><\/scr"+"ipt>");
            //]]>
            </script><noscript><a href='http://bloques.cosas.com/activos4.0/www/innerdev/ck.php?n=a9735427&amp;cb={random}' target='_blank'><img src='http://bloques.cosas.com/activos4.0/www/innerdev/avw.php?zoneid=33&amp;cb={random}&amp;n=a9735427&amp;ct0={clickurl_enc}' border='0' alt='' /></a></noscript>
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
                  <?php// get_template_part('instagram'); ?> 
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

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>');">

                        <a href="<?php echo get_permalink(); ?>" class="more-link">
                            <i class="fa fa-plus"></i>
                        </a>

                <?php else: ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <div class="img-post" style="background-image: url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>');">
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
                                        $condicion1 = htmlspecialchars(substr(the_title($before = null, $after = null, FALSE), 49,1) . '...', ENT_QUOTES, 'UTF-8');
                                        $condicion2 = htmlspecialchars(substr(the_title($before = null, $after = null, FALSE), 48,1) . '...', ENT_QUOTES, 'UTF-8');

                                        if(strlen($condicion1) == 0 ||strlen($condicion2) == 0){
                                            echo substr(the_title($before = '', $after = '', FALSE), 0, 45) . '...';
                                        }else{
                                            echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . '...';
                                        }
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
            <?php if(wp_is_mobile()){ ?>
               <aside class="sidebar">
                 <div class="columnas">

                    <div class="headernegro">

                        <div class="subheadcolumnas">
                            <span>COLUMNAS</span>
                        </div>

                        <div class="subheadtodos">
                            <?php
                                $category_id = get_cat_ID( 'columnas' );
                                $category_link = get_category_link( $category_id );
                            ?>
                            <a href="<?php echo esc_url( $category_link ); ?>">
                                <i class="fa fa-plus"></i> Ver todas
                            </a>
                        </div>
                    </div>

                    <div class="bodycolumnas">
                       <div class="swiper-columnas">
                        <div class="swiper-wrapper">
                            <?php
                            // WP_Query arguments
                            $args = array (
                                'category_name'          => 'columnas',
                                'posts_per_page'         => '9',
                                'order'                  => 'DESC',
                                'orderby'                => 'date',
                            );

                            // The Query
                            $columnas = new WP_Query( $args );

                            // The Loop
                            if ( $columnas->have_posts() ) {
                                while ( $columnas->have_posts() ) {
                                    $columnas->the_post(); 
                                ?>
                                <div class="swiper-slide">
                                    <a id="post-<?php the_ID(); ?>" <?php post_class('columnauno'); ?> href="<?php echo the_permalink(); ?>">
                                        <div class="fotocolumnauno">
                                           
                                            <div class="img-author" style="background-image:url('<?php echo the_field('img-columnista'); ?>');"></div>
                                        </div>
                                        <div class="data-columnas">
                                            <div class="titulocolumnauno">
                                                <h3>
                                                    <?php
                                                        if (strlen($post->post_title) > 20) {

                                                            echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . '...';

                                                        } else {
                                                            the_title();
                                                        }
                                                    ?>
                                                </h3>
                                                <small class="tituloeditor" >
                                                    <?php echo the_field('nombre_columnista'); ?>
                                                </small>  
                                            </div> 
                                            <div class="textocolumnauno">
                                                Seguir leyendo ->
                                            </div>
                                        </div>
                                    </a>
                               </div> 
                                <?php 
                                }
                            } else {
                                // no posts found
                            }

                            // Restore original Post Data
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="vermenos">
                            VER MENOS <i class="fa fa-angle-up"></i>
                        </div>
                        <div class="vermas">
                            VER MÁS EDITORES <i class="fa fa-angle-down"></i>
                        </div>
                        </div>

                    </div>

                </div>
               </aside>
            <?php } ?>
            <main id="main-9" class="site-main-9">
                <h3 class="titus">Horóscopo</h3>

                <div class="conte-horoscopo">
                        <?php
                            // WP_Query arguments
                            $args = array (
                                'post_type' => array( 'horoscopo' ),
                                'posts_per_page' => '12'
                            );
                            // The Query
                            $horoscopo = new WP_Query( $args );
                            // The Loop
                            if ( $horoscopo->have_posts() ) {
                                while ( $horoscopo->have_posts() ) {
                                    $horoscopo->the_post();
                        ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class('zodiac-sign'); ?>>

                                <div class="iconAccess">
                                    <div class="hor">
                                        <img src="<?php the_post_thumbnail_url();?>"/>
                                        <?php
                                            the_title(''.'<small>','</small>'); 
                                        ?>
                                    </div>


                                    <div class="contentSign">
                                        <div class="zodiacContent">
                                            <div class="zodiacName">
                                                <h3><?php the_title(); ?></h3>
                                                <div class="closeZodiac"><span><i class="fa fa-close"></i></span></div>
                                            </div>
                                            <img class="imgZodiac" />
                                            <div class="dateZociac">
                                                <i class="fa fa-clock-o"></i>
                                                <small><?php the_weekday(); ?>,</small>
                                                <small><?php echo substr(get_the_date(),0,2); ?></small>
                                                <small><?php the_time('F Y'); ?></small>
                                            </div>
                                            <?php the_content();?>

                                            <div class="shareZodiac">
                                                <span>compartir</span>
                                                <ul>
                                                    <li class="facebook_share_1"><i class="fa fa-facebook"></i></li>
                                                    <li class="twitter_share_1"><i class="fa fa-twitter"></i></li>
                                                    <li class="pinterest_share_1"><i class="fa fa-pinterest-p"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


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
            </main>
            <script>
                (function ($, root, undefined) {
                    $(function () {

                        'use strict';

                        $('.hor').on('click', function(){
                            var urlImg = $(this).find('img').attr('src');
                            $(this).next('.contentSign').fadeIn(100,function(){
                                $(this).find('img').attr('src',urlImg);
                            }); 
                        });
                        $('.closeZodiac').click(function(){
                            var parentId = $('.contentSign').hide();
                        });

                        $('.facebook_share_1').click(function(){                        
                            var signo = $(this).parent().parent().siblings('.zodiacName').children('h3').text();
                            var texto = $(this).parent().parent().siblings('p').text();
                            

                            window.location.href="https://www.facebook.com/dialog/feed?app_id=259189257792642&link=http%3A%2F%2Fcosas.com&picture=http%3A%2F%2Fcosas.com&name=Horoscopo%20-%20"+signo+"&caption=%20&description="+texto+"&redirect_uri=http%3A%2F%2Fcosas.com%2F";
                        });

                        $('.twitter_share_1').click(function(){
                            var signo = $(this).parent().parent().siblings('.zodiacName').children('h3').text();
                            var texto = $(this).parent().parent().siblings('p').text().substring(0,109);    
                            texto= texto + '...';
                            window.location.href="http://twitter.com/intent/tweet?text=El%20Tarot%20para%20"+signo+"%20indica:%20"+texto;
                        });

                        $('.pinterest_share_1').click(function(){
                            var url = 'http://cosas.com/wp-content/uploads/2016/06/img-cosas-defalut.png';
                            var signo = $(this).parent().parent().siblings('.zodiacName').children('h3').text();
                            var texto = $(this).parent().parent().siblings('p').text().substring(0,109);
                            window.location.href="https://pinterest.com/pin/create/button/?url="+url+"&media="+url+"&description=El%20Tarot%20para%20"+signo+"%20indica:%20"+texto;
                        });

                    });
                })(jQuery, this);
            </script>
            <main id="main-5" class="site-main-5">

                <h3 class="titus">videos</h3>

                <div class="content-videos">
                    <div class="video-container">
                       <div class="swiper-wrapper">   
                            <?php 
                                    $args = array (
                                        'post_type'              => 'video-galeria',
                                        'posts_per_page'         => '1',
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
                         
                       </div>
                       <div class="swiper-pagination"></div>
                    </div>

                </div>
            </main>
            
            <main id="main-6" class="site-main-6">

                <h3 class="titus">sociales</h3>

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
                
                <script type='text/javascript'>//<![CDATA[
               document.MAX_ct0 = unescape('{clickurl_enc}');

               var m3_u = (location.protocol=='https:'?'https://bloques.cosas.com/activos4.0/www/delivery/ajs.php':'http://bloques.cosas.com/activos4.0/www/innerdev/ajs.php');
               var m3_r = Math.floor(Math.random()*99999999999);
               if (!document.MAX_used) document.MAX_used = ',';
               document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
               document.write ("?zoneid=33");
               document.write ('&amp;cb=' + m3_r);
               if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
               document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
               document.write ("&amp;loc=" + escape(window.location));
               if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
               if (document.context) document.write ("&context=" + escape(document.context));
               if ((typeof(document.MAX_ct0) != 'undefined') && (document.MAX_ct0.substring(0,4) == 'http')) {
                   document.write ("&amp;ct0=" + escape(document.MAX_ct0));
               }
               if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
               document.write ("'><\/scr"+"ipt>");
            //]]>
            </script><noscript><a href='http://bloques.cosas.com/activos4.0/www/innerdev/ck.php?n=a9735427&amp;cb={random}' target='_blank'><img src='http://bloques.cosas.com/activos4.0/www/innerdev/avw.php?zoneid=33&amp;cb={random}&amp;n=a9735427&amp;ct0={clickurl_enc}' border='0' alt='' /></a></noscript>

<<<<<<< HEAD
                <h3 class="titus">vida social</h3>
                
                <div class="vidaSocial">
                    <div class="swiper-vSocial">
                        <div class="swiper-wrapper">
                            <?php
                                $args = array(
                                    'category_name' => 'vida-social',
                                );
                                $vsocial = new WP_Query( $args );
                                if ( $vsocial->have_posts() ) {
                                    while ( $vsocial->have_posts() ) {
                                        $vsocial->the_post();
                            ?>

                                <div id="post-<?php the_ID(); ?>" class="swiper-slide">
                                    <?php 
                                        global $post, $posts;
                                        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
                                        $first_img = $matches [1] [0];
                                    ?>

                                    <img src="<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>" alt="">

                                    <div class="metaContent">
                                        <div class="metaVsocial">
                                            <?php the_title(); ?>
                                        </div>
                                    </div>
                                </div>

                            <?php
                                    }
                                } else {
                                    echo 'Upps!! Nada para mostrar';
                                }
                                wp_reset_postdata();
                            ?>
                        </div>
                         <div class="swiper-pagination"></div>
                        <?php
                            $category_id = get_cat_ID('Vida Social');
                            $category_link = get_category_link( $category_id );
                        ?>
                        <a class="btnVsocial" href="<?php echo esc_url( $category_link ); ?>">ver más eventos</a>
                    </div>  
                </div>
=======
				<h3 class="titus">vida social</h3>
				
				<div class="vidaSocial">
					<div class="swiper-vSocial">
						<div class="swiper-wrapper">
							<?php
								$args = array(
									'category_name' => 'vida-social',
								);
								$vsocial = new WP_Query( $args );
								if ( $vsocial->have_posts() ) {
									while ( $vsocial->have_posts() ) {
										$vsocial->the_post();
							?>

								<div id="post-<?php the_ID(); ?>" class="swiper-slide">
									<?php 
										global $post, $posts;
										$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
										$first_img = $matches [1] [0];
									?>

									<img src="<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>" alt="">

									<div class="metaContent">
										<div class="metaVsocial">
											<?php the_title(); ?>
										</div>
									</div>
								</div>

							<?php
									}
								} else {
									echo 'Upps!! Nada para mostrar';
								}
								wp_reset_postdata();
							?>
						</div>
						 <div class="swiper-pagination"></div>
						<?php
							$category_id = get_cat_ID('Vida Social');
							$category_link = get_category_link( $category_id );
						?>
						<a class="btnVsocial" href="<?php echo esc_url( $category_link ); ?>">ver más eventos</a>
					</div>	
				</div>
>>>>>>> 042ae351bb587494425903bdba3a625f21e87f2d
               <h3 class="titus">espectáculos</h3>
               <div style="display:block;">
                    <?php 
                    // WP_Query arguments
                    $latest_cpt = get_posts("numberposts=3");
                    $args = array (
                        'category_name'          => 'espectaculos',
                        'posts_per_page'         => '6',
                        'ignore_sticky_posts'    => false,
                        'order'                  => 'DESC',
                        'orderby'                => 'date',
                        'post__not_in' => array( $latest_cpt[0]->ID, $latest_cpt[1]->ID, $latest_cpt[2]->ID )

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
                <?php
                $latest_cpt = get_posts("numberposts=3");
                $args = array (
                    'category_name'          => 'entrevistas',
                    'posts_per_page'         => '2',
                    'order'                  => 'DESC',
                    'orderby'                => 'date',
                    'post__not_in' => array( $latest_cpt[0]->ID, $latest_cpt[1]->ID, $latest_cpt[2]->ID )
                );

                query_posts( $args );
                    while ( have_posts() ) : the_post();
                        get_template_part( 'loop-entrevistamobile');
                    endwhile;
                ?>
                <main id="main-9" class="site-main-9">
                    <h3 class="titus">Horóscopo</h3>

                    <div class="conte-horoscopo">
                            <?php
                                // WP_Query arguments
                                $args = array (
                                    'post_type' => array( 'horoscopo' ),
                                    'posts_per_page' => '12'
                                );
                                // The Query
                                $horoscopo = new WP_Query( $args );
                                // The Loop
                                if ( $horoscopo->have_posts() ) {
                                    while ( $horoscopo->have_posts() ) {
                                        $horoscopo->the_post();
                            ?>
                                <div id="post-<?php the_ID(); ?>" <?php post_class('zodiac-sign'); ?>>

                                    <div class="iconAccess">
                                        <div class="hor">
                                            <img src="<?php the_post_thumbnail_url();?>"/>
                                            <?php
                                                the_title(''.'<small>','</small>'); 
                                            ?>
                                        </div>


                                        <div class="contentSign">
                                        
                                            <div class="zodiacContent">
                                                <div class="zodiacName">
                                                    <h3><?php the_title(); ?></h3>
                                                    <div class="closeZodiac"><span><i class="fa fa-close"></i></span></div>
                                                </div>
                                                <img class="imgZodiac" />
                                                <div class="dateZociac">
                                                    <i class="fa fa-clock-o"></i>
                                                    <small><?php the_weekday(); ?>,</small>
                                                    <small><?php echo substr(get_the_date(),0,2); ?></small>
                                                    <small><?php the_time('F Y'); ?></small>
                                                </div>
                                                <?php the_content();?>

                                                <div class="shareZodiac">
                                                    <span>compartir</span>
                                                    <ul>
                                                        <li class="facebook_share_1"><i class="fa fa-facebook"></i></li>
                                                        <li class="twitter_share_1"><i class="fa fa-twitter"></i></li>
                                                        <li class="pinterest_share_1"><i class="fa fa-pinterest-p"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


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
                </main>
                <script>
                    (function ($, root, undefined) {
                        $(function () {

                            'use strict';

                            $('.hor').on('click', function(){
                                var urlImg = $(this).find('img').attr('src');
                                $(this).next('.contentSign').fadeIn(100,function(){
                                    $(this).find('img').attr('src',urlImg);
                                }); 
                                console.log(urlImg);
                            });
                            $('.closeZodiac').click(function(){
                                var parentId = $('.contentSign').hide();
                            });

                            /*$('.facebook_share_1').click(function(){
                                console.log($(this))
                                var signo = $(this).siblings("h3").text();                          
                                var texto = $(this).siblings("small").text();

                                window.location.href="https://www.facebook.com/dialog/feed?app_id=259189257792642&link=http%3A%2F%2Fcosas.com&picture=http%3A%2F%2Fcosas.com&name=Horoscopo%20-%20"+signo+"&caption=%20&description="+texto+"&redirect_uri=http%3A%2F%2Fcosas.com%2F";
                            });

                            $('.twitter_share_1').click(function(){
                                var signo = $(this).siblings("h3").text();                          
                                var texto = $(this).siblings("small").text().substring(0,109);
                                texto= texto + '...';
                                //var res = str.substring(4, 1);
                                window.location.href="http://twitter.com/intent/tweet?text=El%20Tarot%20para%20"+signo+"%20indica:%20"+texto;
                            });

                            $('.pinterest_share_1').click(function(){
                                var url = 'http://cosas.com/wp-content/uploads/2016/06/img-cosas-defalut.png';
                                var signo = $(this).siblings("h3").text();                          
                                var texto = $(this).siblings("small").text();
                                window.location.href="https://pinterest.com/pin/create/button/?url="+url+"&media="+url+"&description=El%20Tarot%20para%20"+signo+"%20indica:%20"+texto;
                            });*/

                            $('.facebook_share_1').click(function(){                        
                                var signo = $(this).parent().parent().siblings('.zodiacName').children('h3').text();
                                var texto = $(this).parent().parent().siblings('p').text();
                                

                                window.location.href="https://www.facebook.com/dialog/feed?app_id=259189257792642&link=http%3A%2F%2Fcosas.com&picture=http%3A%2F%2Fcosas.com&name=Horoscopo%20-%20"+signo+"&caption=%20&description="+texto+"&redirect_uri=http%3A%2F%2Fcosas.com%2F";
                            });

                            $('.twitter_share_1').click(function(){
                                var signo = $(this).parent().parent().siblings('.zodiacName').children('h3').text();
                                var texto = $(this).parent().parent().siblings('p').text().substring(0,109);    
                                texto= texto + '...';
                                window.location.href="http://twitter.com/intent/tweet?text=El%20Tarot%20para%20"+signo+"%20indica:%20"+texto;
                            });

                            $('.pinterest_share_1').click(function(){
                                var url = 'http://cosas.com/wp-content/uploads/2016/06/img-cosas-defalut.png';
                                var signo = $(this).parent().parent().siblings('.zodiacName').children('h3').text();
                                var texto = $(this).parent().parent().siblings('p').text().substring(0,109);
                                window.location.href="https://pinterest.com/pin/create/button/?url="+url+"&media="+url+"&description=El%20Tarot%20para%20"+signo+"%20indica:%20"+texto;
                            });

                        });
                    })(jQuery, this);

                </script>
                 
            </div>
                
            <main id="main-8" class="site-main-8">
                
                <h3>instagram <i class="fa fa-instagram"></i></h3>
                <div class="contInstagram">
                  <?php //get_template_part('instagram'); ?> 
                </div>
                
            </main>
            
            <h3 class="titus-large">nacional</h3>
            
            <div id="main-4" class="site-main-4-mobile">
                
            <?php 


                $latest_cpt = get_posts("numberposts=3");
                $args = array(
                    'category_name'=> 'nacional',
                    'posts_per_page'    => 5,
                    'orderby'    => 'date',
                    'order' => 'DESC',
                    'post__not_in' => array( $latest_cpt[0]->ID, $latest_cpt[1]->ID, $latest_cpt[2]->ID )

                );
                query_posts( $args );

                while ( have_posts() ) : the_post();
                
                global $post, $posts;
                $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
                $first_img = $matches [1] [0];
            ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>');" data-extra="<?php echo $test ?>">
                            
            <?php 
                //SI NO ES MOBILE
                if(!wp_is_mobile()){ 
            ?>
                    <div class="hover-content">
                        <div class="shares-post">
                            <p>comparte en</p>
                               
                            <a class='facebook_share' title='<?php echo the_permalink(); ?>' name='<?php the_title(); ?>' href="#">
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
        }
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
        <?php /*
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
                                            if($var==1){ ?>
                                               <div class="video-player">
                                                    <div class="swiper-container-video">
                                                        <div class="btn-nav-video btn-prev">Ver videos anteriores</div>
                                                            <div class="swiper-wrapper">
                                            <?php  get_template_part('loop-video2');
                                            }else if($var < $cantidad_videos_loop){
                                                get_template_part('loop-video2');
                                            }else if($var == $cantidad_videos_loop){
                                                get_template_part('loop-video2'); ?>
                                                        </div>
                                                        <div class="btn-nav-video btn-next">Ver videos anteriores</div>
                                                   </div>
                                            </div>    
                                        <?php   } 
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

        </main>
    
        */ ?>
        <main id="main-6" class="site-main-6-mobile">

            <h3 class="titus">sociales</h3>

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