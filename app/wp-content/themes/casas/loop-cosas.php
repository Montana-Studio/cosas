
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' ); ?>

<li id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php echo $src[0]; ?>');">


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
			<div class="inter-article">

				<h2 class="title-post">
					<a href="<?php the_permalink(); ?>">
					<?php $thetitle = $post->post_title; $getlength = strlen($thetitle); $thelength = 40;
						echo substr($thetitle, 0, $thelength);
						if ($getlength > $thelength) echo "...";
					?>
					</a>
				</h2>

				<div class="bajada-post">
					<?php  //html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
				</div>

				<span class="date"><?php the_time('l, j F Y'); ?></span>

			</div>
		</div>
		
</li>