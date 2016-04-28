<?php get_header(); ?>

	<main>

		<div class="content-page">

			<section class="homeSlider">
				<ul class="rslides">
					<?php get_template_part('loop-slider'); ?>
				</ul>
			</section>
			
			<section class="art-3columns">
				<h3 class="title-section">Articulos recientes</h3>
				<ul>
					<?php get_template_part('loop-3c'); ?>
				</ul>
			</section>

			<section class="body-sidebar">
				
				<div class="section-loop-apaisado">
					<h3 class="title-section">Arquitectura</h3>
					<ul>
						<?php get_template_part('loop-apaisado'); ?>
					</ul>
				</div>

				<div class="section-loop-vertical">
					<h3 class="title-section">Diseño</h3>
					<ul>
						<?php get_template_part('loop-vertical-uno'); ?>
					</ul>
				</div>
				<div class="section-loop-vertical">
					<h3 class="title-section">Espacio Personal</h3>
					<ul>
						<?php get_template_part('loop-vertical-dos'); ?>
					</ul>
				</div>
				<div class="section-loop-vertical">
					<h3 class="title-section">Entrevistas</h3>
					<ul>
						<?php get_template_part('loop-vertical-tres'); ?>
					</ul>
				</div>
			</section>

			<?php get_sidebar(); ?>

			<section class="section-loop-3cat">
					<?php query_posts( 'posts_per_page=-1&cat=arte,cocina,arte buzz' ); $var = 0; ?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					    <?php if ( in_category('arte') && $var == 0 ) : ?>

					    	<div class="post-articulo">

								<div class="title-section"> <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></div> 

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
									<div class="read-more"><a href="<?php the_permalink(); ?>">leer más</a></div>
								</div>

						       	<h2 class="title-post">
									<?php $thetitle = $post->post_title; $getlength = strlen($thetitle); $thelength = 40;
										echo substr($thetitle, 0, $thelength);
										if ($getlength > $thelength) echo "...";
										?>
								</h2>

								<div class="bajada-post">
									<?php  //html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
								</div>

								<span class="date"><?php the_time('l, j F Y'); ?></span>
							</div>
					    <?php $var++; ?>

					    <?php elseif ( in_category('cocina') && $var == 1 ): ?>

							<div class="post-articulo">
								<div class="title-section"> <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></div> 

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
									<div class="read-more"><a href="<?php the_permalink(); ?>">leer más</a></div>
								</div>
						        <h2 class="title-post">
									<?php $thetitle = $post->post_title; $getlength = strlen($thetitle); $thelength = 40;
										echo substr($thetitle, 0, $thelength);
										if ($getlength > $thelength) echo "...";
										?>
								</h2>

								<div class="bajada-post">
									<?php  //html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
								</div>

								<span class="date"><?php the_time('l, j F Y'); ?></span>
							</div>
					    <?php $var++; ?>

					    <?php elseif ( in_category('arte buzz') && $var == 2 ): ?>
								
							<div class="post-articulo">

								<div class="title-section"> <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></div> 
						
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
									<div class="read-more"><a href="<?php the_permalink(); ?>">leer más</a></div>
								</div>
						        <h2 class="title-post">
									<?php $thetitle = $post->post_title; $getlength = strlen($thetitle); $thelength = 40;
										echo substr($thetitle, 0, $thelength);
										if ($getlength > $thelength) echo "...";
										?>
								</h2>

								<div class="bajada-post">
									<?php  //html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
								</div>

								<span class="date"><?php the_time('l, j F Y'); ?></span>
							</div>
					        <?php $var++; ?>

					    <?php endif; ?>

					<?php endwhile; endif; ?>
			</section>

		</div>

		<section class="senction-video">
			<h3 class="title-section">Video</h3>
			<ul class="rslides-video">
				<?php get_template_part('loop-video'); ?>
			</ul>
		</section>

		<div class="content-page">

			<section class="cosas-ult-art">
				<h3 class="title-section">Ultimos Articulos COSAS</h3>
			</section>

			<section class="newsletter-casas">
				<div class="content-newsletter">
					<h4>¡Subscribete a nuestro <span>newsletter</span>!</h4> 
					<div class="bajada-news">Recibe lo último de nuestra revista casas</div>
					<form action="">
						<input class="class-input" type="text" placeholder="Nombre" required>
						<input class="class-input" type="email" placeholder="Correo Electrónico" required>
						<input class="btn-subs" type="submit" value="subscribir">
					</form>
				</div>
			</section>

			<section class="subscribe-rev" > 
				<div class="subscribe-content" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/cover_magazine.jpg?>')">
					<h4>Subscribete a la revista</h4>
					<a class="btn-subs" href="#">Subscribir</a>
					<div class="line-gold"></div>
				</div>
			</section>
		</div>

	</main>	

<?php get_footer(); ?>
