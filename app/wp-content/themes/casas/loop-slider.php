<?php query_posts( 'category_name=destacado&posts_per_page=4' ); 
 					while ( have_posts() ) : the_post();
						?>
	<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php 
				global $post, $posts;
				$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
				$first_img = $matches [1] [0];
				$first_img=str_replace('local.mediatrends/_Montana-Stusio/sitios/_COSAS/htdocs/app', 'www.cosas.com', $first_img);
			?>
			<div class="imagen-post" style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>')">

			<div class="share-mobile"><div class="content-share"><i class="fa fa-plus"></i></div></div>
			<div class="share-post">
					<div class="inter-share">
						<div class="title-share">Comparte</div>
						<div class="social-ul">
							<div class="social-list"><a href="#"><i class="fa fa-facebook"></i></a></div>
							<div class="social-list"><a href="#"><i class="fa fa-twitter"></i></a></div>
							<div class="social-list"><a href="#"><i class="fa fa-google-plus"></i></a></div>
							<div class="social-list"><a href="#"><i class="fa fa-whatsapp"></i></a></div>
						</div>	
						<div class="btn-share-art"><a href="<?php the_permalink(); ?>">leer más</a></div>
					</div>
					<div class="bg-share"></div>
			</div>
		</div>

		<div class="content-SliderHome">
			<div class="inter-Slider">

				<div class="category-title"> <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' / '; } ?></div> 

				<h2 class="title-post">
					<?php $thetitle = $post->post_title; $getlength = strlen($thetitle); $thelength = 70;
						echo substr($thetitle, 0, $thelength);
						if ($getlength > $thelength) echo "...";
					?>
				</h2>

				<div class="bajada-post">
					<?php the_excerpt(); ?>
					<?php //html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
				</div>

				<span class="date"><?php foreach((the_time('l, j F Y')) as $time) { echo $time->time_name . ' '; } ?></span>

				<div class="bnt-leermas"><a href="<?php the_permalink(); ?>">leer más</a></div>

			</div>
		</div>
	</li> 
<?php
endwhile;
?>
