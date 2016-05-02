<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php echo $src[0]; ?>');">
    
    <?php if(!wp_is_mobile()){ ?>
        <div class="hover-content">
           <div class="shares-post">
            <p>comparte en</p>
            <a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a>
            
            <a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)"><i class="fa fa-twitter"></i></a>
                
            <a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)"><i class="fa fa-pinterest"></i></a>
            
            <a target="_blank" href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php echo the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a>
            
           </div>
            <div class="btn_more">
                <a href="<?php echo get_permalink(); ?>">seguir leyendo</a>
            </div>
        </div>
    <?php } ?>
    
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
				<i class="fa fa-clock-o"></i> <?php the_time('l, F g A');?>
			</div>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->