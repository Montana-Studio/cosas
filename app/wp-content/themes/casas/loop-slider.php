<?php query_posts( 'category_name=arte&posts_per_page=4' );
 					while ( have_posts() ) : the_post();
						?>
<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<!--a class="img-slider" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"-->
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			<!--/a-->
		<?php endif; ?>
		<!-- /post thumbnail -->

		<div class="content-SliderHome">
			<div class="inter-Slider">

				<div class="category-title"> <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></div> 

				<h2>
					<!--a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"--><?php the_title(); ?><!--/a-->
				</h2>

				<div class="bajada-post">
					<?php  //html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
				</div>

				<span class="date"><?php the_time('l, j F Y'); ?></span>

			</div>
		</div>
</li>
<?php
endwhile;
?>
