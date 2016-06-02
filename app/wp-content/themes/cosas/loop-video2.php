<div id="post-<?php the_ID(); ?>" <?php post_class('swiper-slide'); ?>>
    <?php //echo get_the_content(); ?>
    <?php //the_excerpt(); ?>
       
    <div class="embeVideo" data-id="<?php the_excerpt(); ?>"></div>

	<footer class="entry-footer titYoutube">
    	
		<h2 class="entry-title">
            <?php 

                if (strlen($post->post_title) > 35) {

                    echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...';

                } else {
                    the_title();
            }?>
		</h2>
        <div class="times-post">
            <i class="fa fa-clock-o"></i> <?php the_time('l, j F'); ?>
        </div>
        
	</footer><!-- .entry-footer -->

</div><!-- #post-## -->
