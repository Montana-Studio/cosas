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
        
        <?php get_template_part('content-svg'); ?>
        
        <div id="menu-content" class="menu-list">
           <a href="<?php echo site_url();?>">
                <?php if(1==$blog_id){ ?>
                    <svg x="0px" y="0px" viewBox="0 0 196.32 64.49" class="menu-logo">
                        <use xlink:href="#logo-cosas" class="logo-menu"/>
                    </svg>
                <?php } ?>
            </a>
            <?php html5blank_nav(); ?>

            <div class="redes">
                <ul>
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>

            <div class="network">
                <ul>
                    <li>
                        <svg x="0px" y="0px" viewBox="0 0 196.32 64.49">
                            <use xlink:href="#logo-cosas" class="net-menu"/>
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
                        <svg x="0px" y="0px" viewBox="0 0 196.32 64.49">
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

            </header><!-- #masthead -->
            
            <div class="last-content">
		
                <div class="main-last">

                    <span>17</span>
                    <p>nuevos articulos</p>

                </div>

                <div class="post-last">

                    <ul class="rslides" id="slider3">
                        <?php query_posts( 'cat=0&posts_per_page=17' );
                            while ( have_posts() ) : the_post();
                                get_template_part( 'loop-last');
                            endwhile;
                        ?>
                    </ul>

                </div>

            </div>
            
           <div id="content" class="site-content">