<?php 
    global $post, $posts;
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
?>
        
<li id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>');">
    <span class="hoverzoom hide">
        
        <i class="fa fa-search-plus"></i>
        
    </span>
    <script type="text/javascript" async>
        
        jQuery(document).ready(function($){
            $('.post-<?php the_ID(); ?>').click(function(){
                $('.loadimage').attr('style','background-image:url(<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>);');
                $('.loadimage').append('<div class="share-sociales"></div>');
                $('.loadimage .share-sociales')
                    .prepend('<a id="sh-soc-face" target="_blank"><i class="fa fa-facebook"></i></a>')
                    .prepend('<a id="sh-soc-tw" target="_blank"><i class="fa fa-twitter"></i></a>')
                    .prepend('<a id="sh-soc-pi" target="_blank"><i class="fa fa-pinterest"></i></a>')
                    .prepend('<a id="sh-soc-go" target="_blank"><i class="fa fa-google-plus"></i></a>');
                
                $('#sh-soc-face').attr("href","javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)");
                $('#sh-soc-tw').attr("href","javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', 520, 350)");
                $('#sh-soc-pi').attr("href","javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)");
                $('#sh-soc-go').attr("href","https://plus.google.com/share?url=<?php echo the_permalink(); ?>").attr('onclick','window.open("https://plus.google.com/share?url=<?php echo the_permalink(); ?>","gplusshare","width=600,height=400,left="'+(screen.availWidth/2-225)+'",top="'+(screen.availHeight/2-150)+'");return false;');
                
                $('.dataimage').prepend('<h2><?php the_title(); ?></h2>');
                $('#loadOverlay').fadeIn();
            });
            $('.closeimage').click(function(){
                $('.loadimage').attr('style','');
                $('.loadimage .share-sociales').remove();
                $('.dataimage h2').remove();
                $('#loadOverlay').fadeOut();
            });
        });
            
    </script>
</li><!-- #post-## -->