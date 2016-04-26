<?php query_posts( 'category_name=video&posts_per_page=3' );
 					while ( have_posts() ) : the_post();
						?>
<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="content-video">

			<div class="video-all">
				<?php the_content(); // Build your custom callback length in functions.php ?>
			</div>

			<h2 class="title-post">
				<?php $thetitle = $post->post_title; $getlength = strlen($thetitle); $thelength = 40;
					echo substr($thetitle, 0, $thelength);
					if ($getlength > $thelength) echo "...";
					?>
			</h2>

		</div>
</li>
<?php
endwhile;
?>
