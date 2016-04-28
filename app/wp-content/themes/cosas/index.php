<?php get_header(); ?>

	<div id="primary" class="content-area">
	    
		<main id="main" class="site-main">
            
            <?php /*query_posts( 'cat=-0&posts_per_page=3&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
            
                    if( $wp_query->current_post == 1 ) {?>
                    
                    
                    
                    <?php }
                        get_template_part( 'loop-index');
                endwhile;*/
            
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
            
            wp_reset_postdata(); ?>

		</main>
          
        <?php
        if ( wp_is_mobile() ) {?>
            <h3 class="titus">espectáculos</h3>

            <main id="main-2" class="site-main-2">
                <?php query_posts( 'category_name=espectaculos&posts_per_page=6&orderby=date&order=DESC' );
                        while ( have_posts() ) : the_post();
                        get_template_part( 'loop-espectaculo');
                    endwhile;
                ?>
            </main>

            <h3 class="titus">entrevista</h3>

            <main id="main-3" class="site-main-3">

                <?php query_posts( 'category_name=entrevista&posts_per_page=3&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
                        get_template_part( 'loop-entrevista');
                    endwhile;
                ?>

            </main>

            <h3 class="titus">nacional</h3>

            <main id="main-4" class="site-main-4">

                <?php 

                    $post = $posts[0]; $c=0;

                    query_posts( 'category_name=personaje-nacional,politica-nacional,espectaculos-nacional&posts_per_page=4&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();

                        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );

                        $c++;
                        if( $c == 1) :

                        ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php echo $src[0]; ?>');">

                            <a href="<?php echo get_permalink(); ?>" class="more-link"><i class="fa fa-plus"></i></a>

                        <?php else: ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <div class="img-post" style="background-image: url('<?php echo $src[0]; ?>');">
                                <a href="<?php echo get_permalink(); ?>" class="more-link"><i class="fa fa-plus"></i></a>
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
                                    <?php if (strlen($post->post_title) > 35) {
                                        echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...';
                                    } else {
                                        the_title();
                                    }?>
                                    </a>
                                </h2>
                                <div class="times-post">
                                    <i class="fa fa-clock-o"></i> <?php the_time('l, F g A');?>
                                </div>
                            </footer>
                        </article>
                    <?php endwhile; ?>
            </main>

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
                    <ul>
                        <?php query_posts( 'category_name=sociales&posts_per_page=-0&orderby=date&order=DESC' );
                            while ( have_posts() ) : the_post();
                                get_template_part( 'loop-sociales');
                            endwhile;
                        ?>
                    </ul>

                </div>
            </main>

            <main id="main-7" class="site-main-7">

                <svg x="0px" y="0px" viewBox="0 0 196.32 64.49">
                    <use xlink:href="#logo-cosas" class="logo-casas"/>
                </svg>

                <?php
                    global $switched;
                    switch_to_blog(3); //switched to blog id 2

                    // Get latest Post
                    $latest_posts = get_posts('cat=0&posts_per_page=4&orderby=date&order=DESC');
                    $cnt =0;
                ?> 

                <?php foreach($latest_posts as $post) : setup_postdata($post);
                    get_template_part( 'loop-casas');                               
                 endforeach ; ?>

                <?php restore_current_blog(); //switched back to main site ?>

            </main>
            
            <?php }else{ ?>
            
            <?php get_sidebar(); ?>
            
            <h3 class="titus">espectáculos</h3>
            
            <div id="main-2" class="site-main-2-mobile">
                <?php query_posts( 'category_name=espectaculos&posts_per_page=9&orderby=date&order=DESC' );
                        while ( have_posts() ) : the_post();
                        get_template_part( 'loop-espectaculo');
                    endwhile;
                ?>
            </div>
            
            <h3 class="titus">entrevista</h3>
            
            <div id="main-3" class="site-main-3-mobile">
                
                <?php query_posts( 'category_name=entrevista&posts_per_page=2&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
                        get_template_part( 'loop-entrevistamobile');
                    endwhile;
                ?>
                
            </div>
            
            <h3 class="titus-large">nacional</h3>
            
            <div id="main-4" class="site-main-4-mobile">
                
                <?php query_posts( 'category_name=personaje-nacional,politica-nacional,espectaculos-nacionala&posts_per_page=5&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();?>
                        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );?>
                         <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php echo $src[0]; ?>');">
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
                                    <?php if (strlen($post->post_title) > 35) {
                                        echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...';
                                    } else {
                                        the_title();
                                    }?>
                                    </a>
                                </h2>
                                <div class="times-post">
                                    <i class="fa fa-clock-o"></i> <?php the_time('l, F g A');?>
                                </div>
                            </footer>
                        </article>
                    <?php endwhile;
                ?>
                
            </div>
        <?php }?>
        
	</div>
	
	<?php if ( !wp_is_mobile() ){ ?>
        <main id="main-5" class="site-main-5-mobile">

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
        <main id="main-6" class="site-main-6-mobile">

            <h3 class="titus">sociales</h3>

            <div class="content-sociales">
                <ul>
                <?php query_posts( 'category_name=sociales&posts_per_page=-0&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
                        get_template_part( 'loop-sociales');
                    endwhile;
                ?>
                </ul>

            </div>
        </main>
        <main id="main-7" class="site-main-7-mobile">

            <svg x="0px" y="0px" viewBox="0 0 196.32 64.49">
                <use xlink:href="#logo-cosas" class="logo-casas"/>
            </svg>

            <?php/* query_posts( 'category_name=espectaculos&posts_per_page=4&orderby=date&order=DESC' );
                    while ( have_posts() ) : the_post();
                    get_template_part( 'loop-casas');
                endwhile;
            */?>
            <?php
                global $switched;
                switch_to_blog(3); //switched to blog id 2

                // Get latest Post
                $latest_posts = get_posts('cat=0&posts_per_page=4&orderby=date&order=DESC');
                $cnt =0;
            ?> 
            
            <?php foreach($latest_posts as $post) : setup_postdata($post);
                get_template_part( 'loop-casas');                               
             endforeach ; ?>

            <?php restore_current_blog(); //switched back to main site ?>

        </main>
	<?php } ?>

<?php get_footer(); ?>
