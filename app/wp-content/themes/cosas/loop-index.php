<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php echo $src[0]; ?>');">

    <a href="<?php echo get_permalink(); ?>" class="more-link"><i class="fa fa-plus"></i></a>

	<footer class="entry-footer">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {

			$cats = get_the_category();
		?>
    
        
        <span><?php echo $cats[0]->cat_name;?></span>
		
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
				<i class="fa fa-clock-o"></i> <?php the_time('l, F g A');?>
			</div>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
