<?php query_posts( 'category_name=arte&posts_per_page=3' );
 					while ( have_posts() ) : the_post();
						?>
<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="imagen-post" style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); $imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; ?>')"></div>
		
		<div class="read-more"><a href="<?php the_permalink(); ?>">Leer más</a></div>

		<div class="inter-article">

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
</li>
<?php
endwhile;
?>