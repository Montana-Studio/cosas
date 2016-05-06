<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
    if(!wp_is_mobile()){
    ?>
    <div class="img-last" style="background-image:url('<?php the_post_thumbnail_url(); ?>');"></div>
    <?php    
    }   
    ?>
    <span>
        <?php 
            $cats = get_the_category();
            echo $cats[0]->cat_name
        ?>
    </span>
	<?php the_title('<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?>
</li><!-- #post-## -->