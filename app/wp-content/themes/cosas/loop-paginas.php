<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image:url('<?php echo $src[0]; ?>');">
    <div class="cont-title-page">
        <h2><a href="<?php echo get_permalink(); ?>"><?php if (strlen($post->post_title) > 35) {
				
				echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...';

			} else {
				the_title();
			}  ?></a></h2>
        <div class="times-post">
            <i class="fa fa-clock-o"></i> <?php the_date('l d, F ');?>
        </div>
    </div>
</article>