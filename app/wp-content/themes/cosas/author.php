<?php get_header(); ?>
<section class="page-content">
           
    <div class="breadcrumbs">

        <?php the_breadcrumb(); ?>

    </div>

    <h1 class="titus"><?php _e( 'Author Archives for ', 'html5blank' ); ?> <?php echo get_the_author(); ?></h1>
    <p><?php if ( get_the_author_meta('description')) : ?></p>
    
    <?php echo get_avatar(get_the_author_meta('user_email')); ?>

        <h2><?php _e( 'About ', 'html5blank' ); echo get_the_author() ; ?></h2>

        <p><?php echo wpautop( get_the_author_meta('description') ); ?></p>

    <?php endif; ?>
    <div class="post-list">
        <?php 
            global $post, $posts;
            $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
            $first_img = $matches [1] [0];
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('post-pag'); ?> style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}?>');">
            <div class="cont-title-page">
                <h2><a href="<?php echo get_permalink(); ?>"><?php if (strlen($post->post_title) > 35) {

                        echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . '...';

                    } else {
                        the_title();
                    }  ?></a></h2>
                <div class="times-post">
                    <i class="fa fa-clock-o"></i> <?php the_time('l, j F Y'); ?>
                </div>
            </div>
        </article>
    </div>
    
    <div class="pagination">
        <?php get_template_part('pagination-main'); ?>
    </div>
</section>

<?php get_footer(); ?>
