<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php echo get_the_content(); ?>
	<footer class="entry-footer">
    	
		<h2 class="entry-title">
            <?php 

                if (strlen($post->post_title) > 35) {

                    echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...';

                } else {
                    the_title();
            }?>
		</h2>
        <div class="times-post">
            <i class="fa fa-clock-o"></i> <?php the_time('l, F g A');?>
        </div>
        
	</footer><!-- .entry-footer -->

</li><!-- #post-## -->
