<?php get_header(); ?>

	<main role="main" class="singleArticulo">
		<div class="content-single">

			<div class="body-sidebar">

				<section class="section-loop-apaisado">

					<h1 class="title-section"><?php echo sprintf( __( '<span class="number">%s</span>  <span class="normal-class">Resultados para </span>', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
					
					<ul>
						<?php get_template_part('loop-search'); ?>
					</ul>
					
					<div class="paginacion-sect">
						<?php get_template_part('pagination'); ?>
					</div>

				</section>

			</div>

			<?php get_sidebar(); ?>

		</div>

	</main>

<?php get_footer(); ?>
