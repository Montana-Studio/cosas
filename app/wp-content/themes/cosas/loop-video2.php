<div id="post-<?php the_ID(); ?>" <?php post_class('swiper-slide video-post swiper-sliders'); ?> onclick="loadVideo('<?php the_excerpt( ); ?>', '<?php echo get_field('origen_video') ?>' )">
                        
    <?php if (get_field('origen_video')=='youtube'){
        $img = "http://img.youtube.com/vi/".get_the_excerpt( )."/0.jpg";
        $class = "embeVideoYoutubeSmall";

        }else{
            if (get_field('origen_video')=='vimeo'){
                $video_info = file_get_contents('http://vimeo.com/api/v2/video/7100569.json');
                $json = json_decode($video_info, true);
                $img = $json[0]['thumbnail_medium'];
                $class = "embeVideoVimeoSmall";

            }
        }

    ?>
    <div class="play-section"><img class="video_img" src="<?php echo $img ?>" alt=""></div>
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