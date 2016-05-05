<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) { ?>
            <div class="img-lasts" style="background-image:url('<?php the_post_thumbnail_url(array(100, 100)); ?>');"></div>
    <?php } ?>
        <span><i class="fa fa-time"></i> <?php the_date('l d, F ');?></span>
    <?php the_title('<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?>
</li>