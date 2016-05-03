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

				<div class="section-loop-3cat">
					<?php query_posts( 'posts_per_page=-1&cat=arte,gastronomia,arte-buzz' ); $var = 0; ?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					    <?php if ( in_category('arte') && $var == 0 ) : ?>

					    	<div class="post-articulo">

								<div class="title-section"> 
								<?php $category = get_the_category(); 
									if($category[0]->cat_name == "featured") {

									     $name = $category[1]->cat_name;
									     $cat_id = get_cat_ID( $name );
									     $link = get_category_link( $cat_id );
									     echo '<a href="'. esc_url( $link ) .'"">'. $name .'</a>';
									} else {

									     $name = $category[0]->cat_name;
									     $cat_id = get_cat_ID( $name );
									     $link = get_category_link( $cat_id );
									     echo '<a href="'. esc_url( $link ) .'"">'. $name .'</a>';
									}
								?>
								</div> 

								<?php 
									global $post, $posts;
									$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
									$first_img = $matches [1] [0];
								?>
									<div class="imagen-post" style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>')">

									<div class="share-mobile"><div class="content-share"><i class="fa fa-plus"></i></div></div>
									<div class="share-post">
											<div class="inter-share">
												<div class="title-share">Comparte</div>
												<div class="social-ul">
													<div class="social-list"><a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a></div>
													<div class="social-list"><a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)"><i class="fa fa-twitter"></i></a></div>
													<div class="social-list"><a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)"><i class="fa fa-pinterest"></i></a></div>
													<div class="social-list"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a></div>
													<div class="social-list whatsapp-list"><a href="whatsapp://send?text=<?php the_title(); ?> – <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a></div> 
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

					    <?php elseif ( in_category('gastronomia') && $var == 1 ): ?>

							<div class="post-articulo">
								<div class="title-section"> 
								<?php $category = get_the_category(); 
									if($category[0]->cat_name == "featured") {

									     $name = $category[1]->cat_name;
									     $cat_id = get_cat_ID( $name );
									     $link = get_category_link( $cat_id );
									     echo '<a href="'. esc_url( $link ) .'"">'. $name .'</a>';
									} else {

									     $name = $category[0]->cat_name;
									     $cat_id = get_cat_ID( $name );
									     $link = get_category_link( $cat_id );
									     echo '<a href="'. esc_url( $link ) .'"">'. $name .'</a>';
									}
								?>
								</div> 

								<?php 
									global $post, $posts;
									$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
									$first_img = $matches [1] [0];
								?>
									<div class="imagen-post" style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>')">

									<div class="share-mobile"><div class="content-share"><i class="fa fa-plus"></i></div></div>
									<div class="share-post">
											<div class="inter-share">
												<div class="title-share">Comparte</div>
												<div class="social-ul">
													<div class="social-list"><a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a></div>
													<div class="social-list"><a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)"><i class="fa fa-twitter"></i></a></div>
													<div class="social-list"><a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)"><i class="fa fa-pinterest"></i></a></div>
													<div class="social-list"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a></div>
													<div class="social-list whatsapp-list"><a href="whatsapp://send?text=<?php the_title(); ?> – <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a></div> 
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

					    <?php elseif ( in_category('arte-buzz') && $var == 2 ): ?>
								
							<div class="post-articulo">

								<div class="title-section"> 
								<?php $category = get_the_category(); 
									if($category[0]->cat_name == "featured") {

									     $name = $category[1]->cat_name;
									     $cat_id = get_cat_ID( $name );
									     $link = get_category_link( $cat_id );
									     echo '<a href="'. esc_url( $link ) .'"">'. $name .'</a>';
									} else {

									     $name = $category[0]->cat_name;
									     $cat_id = get_cat_ID( $name );
									     $link = get_category_link( $cat_id );
									     echo '<a href="'. esc_url( $link ) .'"">'. $name .'</a>';
									}
								?>
								</div> 

								<?php 
									global $post, $posts;
									$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
									$first_img = $matches [1] [0];
								?>
									<div class="imagen-post" style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>')">
						
									<div class="share-mobile"><div class="content-share"><i class="fa fa-plus"></i></div></div>
									<div class="share-post">
											<div class="inter-share">
												<div class="title-share">Comparte</div>
													<div class="social-ul">
														<div class="social-list"><a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a></div>
														<div class="social-list"><a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)"><i class="fa fa-twitter"></i></a></div>
														<div class="social-list"><a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)"><i class="fa fa-pinterest"></i></a></div>
														<div class="social-list"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a></div>
														<div class="social-list whatsapp-list"><a href="whatsapp://send?text=<?php the_title(); ?> – <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a></div> 
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
				</div>
			</section>
			
			<?php get_sidebar(); ?>

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

				<ul>
					<?php
	                    global $switched;
	                    switch_to_blog(1); //switched to blog id 2

	                    $latest_posts = get_posts('cat=0&posts_per_page=4&orderby=date&order=DESC');
	                    $cnt =0;
	                ?> 

	                <?php foreach($latest_posts as $post) : setup_postdata($post);
	                   	get_template_part('loop-cosas');                              
	                 endforeach ; ?>

	                <?php restore_current_blog(); ?>  
				</ul>
			</section>

			<section class="newsletter-casas">
				<div class="content-newsletter">
					<div class="contenido-suscripcion"> <!-- display-form -->
						<h4>¡Subscribete a nuestro <span>newsletter</span>!</h4> 
						<div class="bajada-news">Recibe lo último de nuestra revista casas</div>
						
						<form class="newsletter_form">
                            <input class="class-input" type="text" placeholder="Nombre" id="nombre_newsletter">
                            <input class="class-input" type="email" placeholder="Correo Electrónico" id="correo_newsletter">
                            <input class="btn-subs" type="submit" name="enviar" value="Suscríbete" placeholder="Suscríbete"/>
                        </form>
					</div>
					<div class="form-send message-user display-message">  <!-- display-message -->
						Tus datos se han enviado con éxito.
					</div>
				</div>
			</section>

			<section class="subscribe-rev" > 
				<div class="subscribe-content" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/cover_magazine.jpg?>')">
					<h4>Suscríbete a la revista</h4>
					<a class="btn-subs" href="#">Suscribir</a>
					<div class="line-gold"></div>
				</div>
			</section>
		</div>

	</main>	

<?php get_footer(); ?>
