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

		<h3 class="titus">espectáculos</h3>
		
		<main id="main-2" class="site-main-2">
		<?php query_posts( 'category_name=espectaculos&posts_per_page=6&orderby=date&order=DESC' );
				while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content-index', get_post_format() );
		 	endwhile;
		?>
		</main>

		<h3 class="titus">entrevista</h3>
		
		<main id="main-3" class="site-main-3">
			
			<?php query_posts( 'category_name=entrevista&posts_per_page=3&orderby=date&order=DESC' );
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content-index', get_post_format() );
			 	endwhile;
			?>

		</main>

		<h3 class="titus">nacional</h3>
		
		<main id="main-4" class="site-main-4">
			
			<?php 

				$post = $posts[0]; $c=0;
				
				query_posts( 'category_name=personaje-nacional,politica-nacional,espectaculos-nacional&posts_per_page=4&orderby=date&order=DESC' );
				while ( have_posts() ) : the_post();
					//get_template_part( 'template-parts/content-index', get_post_format() );
					$c++;
					if( $c == 1) :?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php echo $src[0]; ?>');">

						<a href="<?php echo get_permalink(); ?>" class="more-link"><i class="fa fa-plus-circle"></i></a>

					<?php else: ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="img-post" style="background-image: url('<?php echo $src[0]; ?>');">
							<a href="<?php echo get_permalink(); ?>" class="more-link"><i class="fa fa-plus-circle"></i></a>
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
	</div><!-- #primary -->

<?php
get_footer();
