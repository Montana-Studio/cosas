<!-- sidebar -->
<aside class="sidebar hide">
   
    <div style='width:300px;margin:0 auto 5px;'>

        <ins data-revive-zoneid="12" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
        <script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
   
    </div>
    
    <div class="branded-content">
		
		<div class="branded-box">
			
		<ins data-revive-zoneid="13" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
		<script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
			
		</div>
		
		<div class="branded-box">
		
		<ins data-revive-zoneid="14" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
		<script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
		
		</div>

	</div>
    
    <div style='width:250px;margin:0 auto 5px;'>

        <ins data-revive-zoneid="11" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
        <script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
   
    </div>
    
    <div style="width:300px;margin:0 auto 5px;">
       
        <ins data-revive-zoneid="10" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
        <script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
        
    </div>
    
    <div style="width:300px;margin:0 auto 5px;">
       
        <ins data-revive-zoneid="1" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
        <script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
        
    </div>
	
   	<?php if(is_single('87601')){ ?>
  	    
   	    <div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
		</div>
		
	<?php }else{ ?>
    
		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
		</div>
   
    <?php } ?>
    <?php /*
    <div class="columnas">
        
        <div class="headernegro">

            <div class="subheadcolumnas">
                <span>COLUMNAS</span>
            </div>

            <div class="subheadtodos">

                <i class="fa fa-plus"></i> ver todos
            </div>
        </div>

        <div class="bodycolumnas">
           <div class="swiper-columnas">
            <div class="swiper-wrapper">
                <?php
                // WP_Query arguments
                $args = array (
                    'category_name'          => 'espectaculos',
                    'posts_per_page'         => '9',
                    'order'                  => 'DESC',
                    'orderby'                => 'date',
                );

                // The Query
                $columnas = new WP_Query( $args );

                // The Loop
                if ( $columnas->have_posts() ) {
                    while ( $columnas->have_posts() ) {
                        $columnas->the_post(); 
                    ?>
                    <div class="swiper-slide">
                        <div id="post-<?php the_ID(); ?>" <?php post_class('columnauno'); ?>>
                            <div class="fotocolumnauno">
                               <?php 
                                    global $post, $posts;
                                    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
                                    $first_img = $matches [1] [0];
                                ?>
                                <div class="img-author" style="background-image:url('<?php global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;} ?> ');"></div>
                            </div>
                            <div class="data-columnas">
                                <div class="titulocolumnauno">
                                    <h3>
                                        <?php
                                            if (strlen($post->post_title) > 20) {

                                                echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . '...';

                                            } else {
                                                the_title();
                                            }
                                        ?>
                                    </h3>
                                    <small class="tituloeditor" >
                                        <?php the_author(); ?>
                                    </small>  
                                </div> 
                                <div class="textocolumnauno">
                                    <?php echo substr(get_the_excerpt(), 0,100); ?>
                                </div>
                            </div>
                        </div>
                   </div> 
                    <?php 
                    }
                } else {
                    // no posts found
                }

                // Restore original Post Data
                wp_reset_postdata();
                ?>
            </div>
            <div class="vermenos">
                VER MENOS <i class="fa fa-angle-up"></i>
            </div>
            <div class="vermas">
                VER MÁS EDITORES <i class="fa fa-angle-down"></i>
            </div>
            </div>

        </div>
        
    </div>
    */ ?>
</aside>
<!-- /sidebar -->