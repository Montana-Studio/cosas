<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <?php 
        global $post, $posts;
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        $first_img = $matches [1] [0];
    ?>
    <div class="img-lasts" style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>');"></div>
    
    <span><i class="fa fa-time"></i> <?php the_time('l, j F Y'); ?></span>
    <?php the_title('<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?>
</li>