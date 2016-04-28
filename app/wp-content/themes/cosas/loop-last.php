<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<span>
        <?php 
            $cats = get_the_category();
            echo $cats[0]->cat_name
        ?>
    </span>
	<?php
		the_title('<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
	?>
</li><!-- #post-## -->