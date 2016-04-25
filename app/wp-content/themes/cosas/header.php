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

<div id="page" class="site">
	<div class="search-content">
		
		<?php echo get_search_form(); ?>

	</div>
	<header id="masthead" class="site-header">

		<div class="logo-medio">
			<a href="<?php echo site_url();?>">
			<?php if(1==$blog_id){ ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-cosas.gif" alt="">
			<?php } ?>
			</a>
		</div>
	
		<nav id="site-navigation" class="main-navigation">
			<i class="fa fa-bars"></i>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
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
