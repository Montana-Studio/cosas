<?php 
    global $post, $posts;
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>');">

		<a href="<?php echo get_permalink(); ?>" class="more-link"><i class="fa fa-plus"></i></a>

	<footer class="entry-footer">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {

			$cats = get_the_category();
		?>
		
		<h2 class="entry-title"><a href="<?php echo esc_url( get_permalink() );?>" rel="bookmark">
		<?php 

			if (strlen($post->post_title) > 35) {
				
				echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...';

			} else {
				the_title();
			} 
		}?>
		</a></h2>
			<div class="times-post">
				<i class="fa fa-clock-o"></i> <?php the_time('l, j F Y'); ?>
			</div>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->