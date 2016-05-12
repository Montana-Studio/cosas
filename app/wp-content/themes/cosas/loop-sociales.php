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
            $('#post-<?php the_ID(); ?>').click(function(){
                $('.loadimage').attr('style','background-image:url(<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>);');
                $('.dataimage').prepend('<h2><?php the_title(); ?></h2>');
                $('#loadOverlay').fadeIn();
            });
            $('.closeimage').click(function(){
                $('.loadimage').attr('style','');
                $('.dataimage h2').remove();
                $('#loadOverlay').fadeOut();
            });
        });
            
    </script>
</li><!-- #post-## -->