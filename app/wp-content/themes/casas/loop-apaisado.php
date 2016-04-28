<?php query_posts( 'category_name=arquitectura&posts_per_page=3' );
 					while ( have_posts() ) : the_post();
						?>
		<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="imagen-post" style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); $imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; ?>')">
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
				

				<div class="inter-article">

					<div class="content-article">      
					
						<h2 class="title-post">
							<?php $thetitle = $post->post_title; $getlength = strlen($thetitle); $thelength = 40;
								echo substr($thetitle, 0, $thelength);
								if ($getlength > $thelength) echo "...";
								?>
						</h2>

						<div class="bajada-post">
							<?php the_excerpt(); ?>
						</div>

						<span class="date"><?php foreach((the_time('l, j F Y')) as $time) { echo $time->time_name . ' '; } ?></span>

						<div class="read-more"><a href="<?php the_permalink(); ?>">Leer más</a></div>

					</div>

				</div>
		</li>
<?php
endwhile;
?>