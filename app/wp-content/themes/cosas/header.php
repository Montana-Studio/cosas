<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php 
            wp_head();
            $blog_id = get_current_blog_id();
        ?>
        
	</head>
	<body <?php body_class(); ?>>
        
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.6";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        <?php get_template_part('content-svg'); ?>
        
        <div id="menu-content" class="menu-list">
           <a href="<?php echo site_url();?>">
                <?php if(1==$blog_id){ ?>
                    <svg viewBox="0 0 759 232" class="menu-logo">
                        <use xlink:href="#logo-cosas" class="logo-menu"/>
                    </svg>
                <?php } ?>
            </a>
            <div class="menu">
                <?php html5blank_nav('header-menu'); ?>
            </div>

            <div class="redes">
                <ul>
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa fa-youtube-play"></i></a></li>
                </ul>
            </div>

            <div class="network">
                <ul>
                    <li>
                        <svg viewBox="0 0 759 232">
                            <use xlink:href="#logo-cosas" class="net-menu"/>
                        </svg>
                    </li>
                    
                    <li>
                        
                        <svg viewBox="0 0 751.333 195.333">
                            
                            <use xlink:href="#logo-casas" class="net-menu"/>
                            
                        </svg>
                        
                    </li>
                    <li>
                        
                        <svg viewBox="0 0 759 232">
                            
                            <use xlink:href="#logo-couture" class="net-menu"/>
                            
                        </svg>
                        
                    </li>
                    <li>
                        
                        <svg viewBox="0 0 1088 199">
                            
                            <use xlink:href="#logo-lujo" class="net-menu"/>
                            
                        </svg>
                        
                    </li>
                    <li>
                        
                        <svg viewBox="0 0 640 268">
                            
                            <use xlink:href="#logo-repost" class="net-menu"/>
                            
                        </svg>
                        
                    </li>
                </ul>
            </div>

        </div>
		<!-- wrapper -->
		<div id="page" class="site">

            <div class="search-content">
		
                <?php echo get_search_form(); ?>

            </div>
            <header id="masthead" class="site-header">

                <div class="logo-medio">
                    <a href="<?php echo site_url();?>">
                    <?php if(1==$blog_id){ ?>
                        <svg  viewBox="0 0 759 232">
                            <use xlink:href="#logo-cosas" class="logo-head"/>
                        </svg>
                    <?php } ?>
                    </a>
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <i class="fa fa-bars"></i>
                </nav><!-- #site-navigation -->

                <div class="main-search">
                    <i class="fa fa-search"></i>
                </div>
                
                <div class="meta-info hide">
                    
                    <span><?php echo date('l, F g A'); ?></span>
                    
                    <div class="redes">
                        <ul>
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                    
                </div>

            </header><!-- #masthead -->
            
    
                <div class="last-content">
                    
                    <div class="nav-deskt">
                        
                        <?php html5blank_nav('header-menu'); ?>
                        
                        <div class="tools">
                            
                            <div class="main-search">
                                <i class="fa fa-search"></i>
                            </div>
                            
                            <div class="lasts">

                                <span>17</span>
                                <p>nuevos articulos</p>

                                <i class="fa fa-angle-down"></i>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="main-last">

                        <span>17</span>
                        <p>nuevos articulos</p>

                    </div>

                    <div class="post-last">

                        <ul class="rslides" id="slider3">
                            <?php
                                $args = array (
                                    'post_type' => array( 'post' ),
                                    'posts_per_page' => '17',
                                    'order' => 'DESC',
                                    'orderby' => 'date',
                                );

                                $query = new WP_Query( $args );

                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                        get_template_part( 'loop-last');
                                    }
                                } else {
                                    echo 'No hay nada para mostrar';
                                }
                                wp_reset_postdata();
                            ?>
                        </ul>

                    </div>

                </div>
            
           <div id="content" class="site-content">