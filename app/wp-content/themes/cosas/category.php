<?php
get_header();
?>
<section class="page-content">
	<?php if(!is_category('vida-social')){ ?>
		<div class="breadcrumbs">

			<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
			} ?>

		</div>

		<h1 class="titus"><?php single_cat_title(); ?></h1>

		<div class="post-list">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php get_template_part('loop-paginas'); ?>
			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->

			<?php endif; ?>
		</div>
		<div class="pagination">
			<?php get_template_part('pagination'); ?>
		</div>
	<?php }else{ ?>
	<div class="breadcrumbs">

		<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>

	</div>
	
	<div class="eventosContainer">
	
		<?php $contador = 0; ?>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php 
			global $post, $posts;
			$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
			$first_img = $matches [1] [0];
			$contador++;
		?>
		<?php if($contador == 1){ ?>
			<?php if($contador == 1 ) $posicion = 'tag-pequeno-izquierda';
				  else  $posicion = 'tag-pequeno-derecha';
			?>
			<article id="post-<?php the_ID(); ?>" class="post type-post status-publish <?php echo $posicion ?> estilo-<?php echo $contador; ?>">
				<a href="<?php echo get_permalink(); ?>">
				
					<div class="cont-title-page" style="background-image:url(<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>);"></div>
					
					<h2><?php the_title(); ?></h2>
				</a>
				<div class="moreContent">
					<div class="shares-post">

						<a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)"><i class="fa fa-twitter"></i></a>

						<a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)"><i class="fa fa-pinterest"></i></a>

						<a target="_blank" href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php echo the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a>

				   </div>
					<div class="btn_more">
						<a href="<?php echo get_permalink(); ?>">seguir leyendo</a>
					</div>
				</div>
			</article>
		<?php } elseif($contador == 2 ){ ?>
			<article id="post-<?php the_ID(); ?>" class="post type-post status-publish tag-mediana estilo-<?php echo $contador; ?>">
				<a href="<?php echo get_permalink(); ?>">
				
					<div class="cont-title-page" style="background-image:url(<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>);"></div>
					
					<h2><?php the_title(); ?></h2>
				</a>
				<div class="moreContent">
					<div class="shares-post">
						<a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a>

						<a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)"><i class="fa fa-twitter"></i></a>

						<a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)"><i class="fa fa-pinterest"></i></a>

						<a target="_blank" href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php echo the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a>

				   </div>
					<div class="btn_more">
						<a href="<?php echo get_permalink(); ?>">seguir leyendo</a>
					</div>
				</div>
			</article>
		<?php }else{ ?>
			<article id="post-<?php the_ID(); ?>" class="post type-post status-publish tag-cuadrado estilo-<?php echo $contador; ?>">
				<a href="<?php echo get_permalink(); ?>">
				
					<div class="cont-title-page" style="background-image:url(<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>);"></div>
					
					<h2><?php the_title(); ?></h2>
				</a>
				<div class="moreContent">
					<div class="shares-post">
						<a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a>

						<a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)"><i class="fa fa-twitter"></i></a>

						<a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)"><i class="fa fa-pinterest"></i></a>

						<a target="_blank" href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php echo the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a>

				   </div>
					<div class="btn_more">
						<a href="<?php echo get_permalink(); ?>">seguir leyendo</a>
					</div>
				</div>
			</article>
		<?php } ?>
		<?php if($contador == 4) $contador = 0; ?>
		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			</article>
			<!-- /article -->

		<?php endif; ?>
	</div>
	<?php }?>
</section>
<?php
get_footer();
?>
