<?php query_posts( 'category_name=arte&posts_per_page=4' );
 					while ( have_posts() ) : the_post();
						?>
<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
							<div class="social-list"><a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', '', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-twitter"></i></a></div>
							<div class="social-list"><a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)"><i class="fa fa-pinterest"></i></a></div>
							<div class="social-list"><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a></div>
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
					<?php  //html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
				</div>

				<span class="date"><?php the_time('l, j F Y'); ?></span>

			</div>

		</div>
</li>
<?php
endwhile;
?>
