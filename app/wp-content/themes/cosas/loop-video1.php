

<div id="post-<?php the_ID(); ?>" <?php post_class('swiper-sliders video-principal'); ?>>
    <div class="video-play">

    <?php if (get_field('origen_video')=='youtube'){ ?></p>
        <div id="embed2" class="embeVideoVimeo"></div>
        <div id="embed1" class="embeVideo embeVideoYoutube" data-id="<?php the_excerpt(); ?>" data-origen="<?php echo get_field('origen_video') ?>" style="display: block"></div>
        <!--div class="embeVideo" data-id="<?php the_excerpt(); ?>"></div-->
        <div class="title-video-principal">
            <div class="titulo-principal">
                 <?php 

                    if (strlen($post->post_title) > 35) {

                        echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...';

                    } else {
                        the_title();
                }?>
            </div>
            <div class="info-principal">
                <div class="info-principal"><i class="fa fa-clock-o"></i><?php the_time('l, j F Y'); ?></div>
            </div>
        </div>
    <?php } else{ ?>
        <div id="embed1" class="embeVideoYoutube"></div>
        <div id="embed2" class="embeVideo embeVideoVimeo" data-id="<?php the_excerpt(); ?>" data-origen="<?php echo get_field('origen_video') ?>" style="display: block"></div>
        <div class="title-video-principal">
            <div class="titulo-principal">
                 <?php 

                    if (strlen($post->post_title) > 35) {

                        echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...';

                    } else {
                        the_title();
                }?>
            </div>
            <div class="info-principal">
                <div class="info-principal"><i class="fa fa-clock-o"></i><?php the_time('l, j F Y'); ?></div>
            </div>
        </div>
    <?php  } ?>
    </div>
</div>