 <?php if (get_field('origen_video')=='youtube'){
    $img = "http://img.youtube.com/vi/".get_the_excerpt( )."/0.jpg";
    $class = "embeVideoYoutubeSmall";

    }else{
        if (get_field('origen_video')=='vimeo'){
            $video_info = file_get_contents('http://vimeo.com/api/v2/video/'.get_the_excerpt( ).'.json');
            $json = json_decode($video_info, true);
            $img = $json[0]['thumbnail_medium'];
            $class = "embeVideoVimeoSmall";
        }
    }

?>
<div id="post-<?php the_ID(); ?>" <?php post_class('swiper-slide video-post swiper-sliders'); ?> >
                        
    <div class="play-section"><img class="video_img <?php echo $class ?>" data-id="<?php the_excerpt(); ?>" data-origen="<?php echo get_field('origen_video') ?>" src="<?php echo $img ?>" alt=""></div>
    <div class="info-section <?php echo $class ?>">
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

