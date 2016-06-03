<div id="post-<?php the_ID(); ?>" <?php post_class('swiper-slide video-post swiper-sliders'); ?> onclick="loadVideo('<?php the_excerpt( ); ?>')">
    <div class="play-section"><img class="video_img" src="http://img.youtube.com/vi/<?php the_excerpt( ); ?>/0.jpg" alt=""></div>
    <div class="info-section">
        <ul>
            <li class="date-video" name="<?php the_time('l, j F Y'); ?>"><i class="fa fa-clock-o"></i><?php the_time('l, j F Y'); ?></li> 
            <li class="title-video" name="<?php if (strlen($post->post_title) > 35) { echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...'; } else {the_title(); }?>" >        
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