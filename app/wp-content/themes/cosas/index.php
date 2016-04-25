<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cosas
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php query_posts( 'cat=-0&posts_per_page=3&orderby=date&order=DESC' );
				while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content-index', get_post_format() );
		 	endwhile;
		?>

		</main><!-- #main -->

		<h3>espectáculos</h3>
		
		<main id="main-2" class="site-main-2">
		<?php query_posts( 'category_name=espectaculos&posts_per_page=6&orderby=date&order=DESC' );
				while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content-index', get_post_format() );
		 	endwhile;
		?>
		</main>

		<h3>entrevista</h3>
		
		<main id="main-3" class="site-main-3">
			
			<?php query_posts( 'category_name=entrevista&posts_per_page=3&orderby=date&order=DESC' );
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content-index', get_post_format() );
			 	endwhile;
			?>

		</main>

		<h3>nacional</h3>
		
		<main id="main-4" class="site-main-4">
			
			<?php query_posts( 'category_name=personaje-nacional,politica-nacional,espectaculos-nacional&posts_per_page=4&orderby=date&order=DESC' );
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content-index', get_post_format() );
			 	endwhile;
			?>

		</main>
	</div><!-- #primary -->

<?php
get_footer();
