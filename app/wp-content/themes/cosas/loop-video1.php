<div id="post-<?php the_ID(); ?>" <?php post_class('swiper-sliders video-principal'); ?>>
    <div class="video-play">

    <?php if (get_field('origen_video')=='youtube'){ ?></p>
        <div class="embeVideo embeVideoYoutube" data-id="<?php the_excerpt(); ?>" data-origen="<?php echo $label; ?>"></div>
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
    <script>
        // This is the URL of the video you want to load
        var videoUrl = 'http://www.vimeo.com/7100569';
        // This is the oEmbed endpoint for Vimeo (we're using JSON)
        // (Vimeo also supports oEmbed discovery. See the PHP example.)
        var endpoint = 'http://www.vimeo.com/api/oembed.json';
        // Tell Vimeo what function to call
        var callback = 'embedVideo';
        // Put together the URL
        var url = endpoint + '?url=' + encodeURIComponent(videoUrl) + '&callback=' + callback + '&width=640';
        // This function puts the video on the page
        function embedVideo(video) {
            document.getElementById('embed').innerHTML = unescape(video.html);
        }
        // This function loads the data from Vimeo
        function init() {
            var js = document.createElement('script');
            js.setAttribute('type', 'text/javascript');
            js.setAttribute('src', url);
            document.getElementsByTagName('head').item(0).appendChild(js);
        }
        // Call our init function when the page loads
        window.onload = init;
    </script>
        <div id="embed" class="embeVideoVimeo"></div>
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