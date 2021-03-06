<?php get_header(); ?>

	<main role="main" class="singleArticulo">
	<div class="content-single">

		<div class="body-sidebar">
			<section class="singlePost-content">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="category-title"><?php the_category(' / '); // Separated by commas ?></div>

						<h1 class="title-post">
							<?php the_title(); ?>
						</h1>

						<span class="date"><?php the_time('l, j F Y'); ?></span>

						<div class="imagen-post" style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); $imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; ?>')">
							<div class="share-mobile"><div class="content-share"><i class="fa fa-plus"></i></div></div>
							<div class="share-post">
									<div class="inter-share">
										<div class="title-share">Comparte</div>
										<div class="social-ul">
											<!--div class="social-list"><a href="javascript:fbShare('<?php //echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php //echo the_post_thumbnail_url(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a></div-->
											<div class="social-list"><a class='facebook_share' id='<?php echo the_permalink(); ?>' name='<?php the_title(); ?>' href="#"><i class="fa fa-facebook"></i></a></div>
											<div class="social-list"><a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)"><i class="fa fa-twitter"></i></a></div>
											<div class="social-list"><a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', 520, 350)"><i class="fa fa-pinterest"></i></a></div>
											<div class="social-list"><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a></div>
											<div class="social-list whatsapp-list"><a href="whatsapp://send?text=<?php the_title(); ?> – <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a></div> 
										</div>		 
									</div>
									<div class="bg-share"></div>
							</div>
						</div>

						<div class="tag-section">
							<div class="contentTags">
								<div class="titleTags"><i class="fa fa-tag"></i>TAG</div><div class="tagsCat"><?php the_category(' / '); ?></div>
							</div>

							<div class="share-social">
								<ul> 
									<li>
										<!--div class="social-list"><a href="javascript:fbShare('<?php //echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php //echo the_post_thumbnail_url(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a></div-->
										<a class='facebook_share' id='<?php echo the_permalink(); ?>' name='<?php the_title(); ?>' href="#">
											<div class="content-icon facebook-share"><div class="icon-share"><i class="fa fa-facebook"></i></div> <div class= "social-share">Facebook</div></div>
										</a>
										
									</li>
									<li>
										<a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)">
											<div class="content-icon twitter-share"> <div class="icon-share"><i class="fa fa-twitter"></i></div> <div class="social-share">Twitter</div> </div>
										</a>
									</li>
									<li>
										<a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)">
											<div class="content-icon pinterest-share"> <div class="icon-share"><i class="fa fa-pinterest"></i></div> <div class="social-share">Pinterest</div> </div>
										</a>
									</li>
									<li>
										<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;">
											<div class="content-icon google-share"> <div class="icon-share"><i class="fa fa-google-plus"></i></div> <div class="social-share">Google Plus</div> </div>
										</a>
									</li>
									<li class="whatsapp-share-btn">
										<a href="whatsapp://send?text=<?php the_title(); ?> – <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share">
											<div class="content-icon whatsapp-share"> <div class="icon-share"><i class="fa fa-whatsapp"></i></div> <div class="social-share">Whatsapp</div> </div>
										</a>
									</li>
									<li>
										<a href="mailto:?subject=<?php the_title(); ?>&amp;body=<?php the_title(); ?> <?php $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) ); ?> - <?php the_permalink(); ?>" >
											<div class="content-icon correo-share"> <div class="icon-share"><i class="fa fa-envelope-o"></i></div> <div class="social-share">E-mail</div> </div>
										</a>
									</li>
								</ul> 
							</div>

						</div>

						<div class="content-postSingle">
							<?php the_content(); ?>
							
							<div class="fb-comments" data-href="<?php echo the_permalink(); ?>" data-numposts="3" data-width="100%" data-order-by="reverse_time"></div>
						</div>

						<div class="author-cosas"><?php _e( 'Escrito por', 'html5blank' ); ?> <?php the_author_posts_link(); ?></div>

						<div class="nav-post">

							<div class="nav-SinglePost prev-post">
								<div class="arrow-nav"><a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>"><i class="fa fa-angle-left"></i></a></div>
								<div class="contentPost">
									<div class="title">Post anterior</div>
									<div class="titlePost"><?php previous_post_link(); ?> </div>
								</div>
							</div>

							<div class="nav-SinglePost next-post">
								<div class="arrow-nav right-nav"><a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>"><i class="fa fa-angle-right"></i></a></div>
								<div class="contentPost">
									<div class="title">Post posterior</div>
									<div class="titlePost"><?php next_post_link(); ?> </div>
								</div>

							</div>	

						</div>

						<div class="post-related">
							
							<?php $orig_post = $post;
								global $post;
								$categories = get_the_category($post->ID);
								if ($categories) {
								$category_ids = array();
								foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

								$args=array(
								'category__in' => $category_ids,
								'post__not_in' => array($post->ID),
								'posts_per_page'=> 3, // Number of related posts that will be displayed.
								'caller_get_posts'=>1,
								'orderby'=>'rand' // Randomize the posts
								);

								$my_query = new wp_query( $args );

								if( $my_query->have_posts() ) {
								echo '<div id="perfect-related_by-category" class="clear"><h3 class="title-section">Articulos relacionados</h3><ul>';
								while( $my_query->have_posts() ) {
								$my_query->the_post(); ?> 
								<li>
									<div class="imagen-post" style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); $imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; ?>')">
										<div class="share-mobile"><div class="content-share"><i class="fa fa-plus"></i></div></div>
										<div class="share-post">
												<div class="inter-share">
													<div class="title-share">Comparte</div>
													<div class="social-ul">
														<!--div class="social-list"><a href="javascript:fbShare('<?php //echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php //echo the_post_thumbnail_url(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a></div-->
														<div class="social-list"><a class='facebook_share' id='<?php echo the_permalink(); ?>' name='<?php the_title(); ?>' href="#"><i class="fa fa-facebook"></i></a></div>
														<div class="social-list"><a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)"><i class="fa fa-twitter"></i></a></div>
														<div class="social-list"><a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)"><i class="fa fa-pinterest"></i></a></div>
														<div class="social-list"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a></div>
														<div class="social-list whatsapp-list"><a href="whatsapp://send?text=<?php the_title(); ?> – <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a></div> 
													</div>
													<div class="btn-share-art"><a href="<?php the_permalink(); ?>">leer más</a></div>
												</div>
												<div class="bg-share"></div>
										</div>
									</div>
									<a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"></a>
									<div class="title-post">
										<a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
									</div>
									<span class="date"><?php the_time('l, j F Y'); ?></span> 
								</li>
								<? }

								echo '</ul></div>';
								} }

								$post = $orig_post;
							wp_reset_query(); ?> 
						</div>

						<section class="cosas-ult-art">
							<h3 class="title-section">Ultimos Articulos COSAS</h3>

							<ul>
								<?php
				                    global $switched;
				                    switch_to_blog(1); //switched to blog id 2

				                    // Get latest Post
				                    $latest_posts = get_posts('cat=0&posts_per_page=4&orderby=date&order=DESC');
				                    $cnt =0;
				                ?> 

				                <?php foreach($latest_posts as $post) : setup_postdata($post);
				                   	get_template_part('loop-cosas');                              
				                 endforeach ; ?>

				                <?php restore_current_blog(); //switched back to main site ?>  
							</ul>
						</section>


					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>

			</section>
		</div>
		<?php get_sidebar(); ?>
	</div>
	</main>



<?php get_footer(); ?>