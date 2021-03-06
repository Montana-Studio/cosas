<?php get_header(); ?>

	<main role="main">
		<div class="content-single">

			<div class="body-sidebar">

				<section class="section-loop-tags">

								<?php if (have_posts()): the_post(); ?>

									<h1 class="title-section" ><?php _e( 'Archivos del autor ', 'html5blank' ); echo get_the_author(); ?></h1>

								<?php if ( get_the_author_meta('description')) : ?>

								<?php echo get_avatar(get_the_author_meta('user_email')); ?>

									<h2><?php _e( 'Acerca ', 'html5blank' ); echo get_the_author() ; ?></h2>

									<?php echo wpautop( get_the_author_meta('description') ); ?>

								<?php endif; ?>

								<?php rewind_posts(); while (have_posts()) : the_post(); ?>

								<!-- article -->
								<div class="tags-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

										<div class="imagen-post" style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); $imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; ?>')">
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
										</div>		
										<div class="read-more"><a href="<?php the_permalink(); ?>">Leer más</a></div>

										<div class="inter-article">

											<div class="content-article">      
											
												<h2 class="title-post">
													<?php $thetitle = $post->post_title; $getlength = strlen($thetitle); $thelength = 40;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "...";
													?>
												</h2>

												<div class="bajada-post">
													<?php $the_excerpt = $post->post_title; $getlength = strlen($the_excerpt); $thelength = 200;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "...";
													?>
												</div>

												<span class="date"><?php the_time('l, j F Y'); ?></span> 

											</div>

										</div>
								</div>
								<!-- /article -->

								<?php endwhile; ?>

								<?php else: ?>

									<!-- article -->
									<article>

										<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

									</article>
									<!-- /article -->

								<?php endif; ?>

								<div class="paginacion-sect">
									<?php get_template_part('pagination'); ?>
								</div>

				</section>
			
			</div>
			<?php get_sidebar(); ?>
		</div>	
	</main>



<?php get_footer(); ?>
