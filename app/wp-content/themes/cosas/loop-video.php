<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php //echo get_the_content(); ?>
    <?php //the_excerpt(); ?>
    
    <?php $mykey_values = get_post_custom_values( 'iframe_youtube' ); ?>
    <script sync>
        // Load the IFrame Player API code asynchronously.
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/player_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // Replace the 'ytplayer' element with an <iframe> and
        // YouTube player after the API code downloads.
        var player;
        
        function onYouTubePlayerAPIReady() {
            player = new YT.Player('ytplayer', {
                height: '390',
                width: '640',
                videoId: '<?php foreach ( $mykey_values as $key => $value ) {echo $value; } ?>',
                playerVars: {'controls': 0,'rel':0,'showinfo':0 },
                events:{
                    'onStateChange': onPlayerStateChange,
                }
            });
        }
        function onPlayerStateChange(event) {        
            if(event.data === 1){          
                jQuery(document).ready(function($){
                    $('footer.titYoutube').fadeOut('slow');
                });
            }else if(event.data === 2||event.data === 0 ){
                jQuery(document).ready(function($){
                    $('footer.titYoutube').fadeIn('slow');
                });
            }
        }
    </script>
    <div id="ytplayer"></div>
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
            <i class="fa fa-clock-o"></i> <?php the_time('l, j F Y'); ?>
        </div>
        
	</footer><!-- .entry-footer -->

</li><!-- #post-## -->
