<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cosas
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php
	wp_head();
	//Detectar Sección
	$blog_id = get_current_blog_id();
?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part('content-svg', get_post_format()); ?>

<div id="menu-content" class="menu-list">
   <a href="<?php echo site_url();?>">
    <?php if(1==$blog_id){ ?>
        <svg x="0px" y="0px" viewBox="0 0 196.32 64.49" class="menu-logo">
            <use xlink:href="#logo-cosas" class="logo-menu"/>
        </svg>
    <?php } ?>
    </a>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    
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
	      		<?php query_posts( 'category_name=belleza-y-salud&posts_per_page=17' );
 					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content-last', get_post_format() );
				 	endwhile;
				?>
		    </ul>
			
		</div>

	</div>

	<div id="content" class="site-content">
