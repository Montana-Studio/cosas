<div id="post-<?php the_ID(); ?>" <?php post_class('swiper-slide video-post'); ?>>
    <div class="play-section embeVideo" data-id="<?php //the_excerpt(); ?>"></div>
    <div class="info-section">
        <ul>
            <li><i class="fa fa-clock-o"></i><?php the_time('l, j F Y'); ?></li> 
            <li class="title-video">
                <?php 

                    if (strlen($post->post_title) > 35) {

                        echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...';

                    } else {
                        the_title();
                }?>
            </li>
        </ul>
    </div>
</div>