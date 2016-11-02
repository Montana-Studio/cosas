<!-- sidebar -->
<aside class="sidebar hide">
   
    <div style='width:300px;margin:0 auto 5px;'>

		<ins data-revive-zoneid="12" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
		<script>
		(function () {
		  var d = document, s = d.createElement('script'), p = d.location.protocol,
			  i = d.getElementsByTagName('ins'), j = i[i.length-1];
		  try {
			s.src = p === 'http:' ? 'http://bloques.cosas.com/activos4.0/www/innerdev/asyncjs.php' :
			  'https://bloques.cosas.com/activos4.0/www/delivery/asyncjs.php';
			s.async = true; j.appendChild(s);
		  } catch (e) {}
		})();
		</script>
   
    </div>
    
    <div class="branded-content">
		
		<div class="branded-box">

			<ins data-revive-zoneid="13" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
			<script>
			(function () {
			  var d = document, s = d.createElement('script'), p = d.location.protocol,
				  i = d.getElementsByTagName('ins'), j = i[i.length-1];
			  try {
				s.src = p === 'http:' ? 'http://bloques.cosas.com/activos4.0/www/innerdev/asyncjs.php' :
				  'https://bloques.cosas.com/activos4.0/www/delivery/asyncjs.php';
				s.async = true; j.appendChild(s);
			  } catch (e) {}
			})();
			</script>
			
		</div>
		
		<div class="branded-box">
		
			<ins data-revive-zoneid="14" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
			<script>
			(function () {
			  var d = document, s = d.createElement('script'), p = d.location.protocol,
				  i = d.getElementsByTagName('ins'), j = i[i.length-1];
			  try {
				s.src = p === 'http:' ? 'http://bloques.cosas.com/activos4.0/www/innerdev/asyncjs.php' :
				  'https://bloques.cosas.com/activos4.0/www/delivery/asyncjs.php';
				s.async = true; j.appendChild(s);
			  } catch (e) {}
			})();
			</script>
		
		</div>

	</div>
    
    <div style='width:250px;margin:0 auto 5px;'>

		<ins data-revive-zoneid="11" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
		<script>
		(function () {
		  var d = document, s = d.createElement('script'), p = d.location.protocol,
			  i = d.getElementsByTagName('ins'), j = i[i.length-1];
		  try {
			s.src = p === 'http:' ? 'http://bloques.cosas.com/activos4.0/www/innerdev/asyncjs.php' :
			  'https://bloques.cosas.com/activos4.0/www/delivery/asyncjs.php';
			s.async = true; j.appendChild(s);
		  } catch (e) {}
		})();
		</script>
   
    </div>
    
    <div style="width:300px;margin:0 auto 5px;">

		<ins data-revive-zoneid="1" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
		<script>
		(function () {
		  var d = document, s = d.createElement('script'), p = d.location.protocol,
			  i = d.getElementsByTagName('ins'), j = i[i.length-1];
		  try {
			s.src = p === 'http:' ? 'http://bloques.cosas.com/activos4.0/www/innerdev/asyncjs.php' :
			  'https://bloques.cosas.com/activos4.0/www/delivery/asyncjs.php';
			s.async = true; j.appendChild(s);
		  } catch (e) {}
		})();
		</script>

    </div>
    
    <div style="width:300px;margin:0 auto 5px;">

		<ins data-revive-zoneid="10" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
		<script>
		(function () {
		  var d = document, s = d.createElement('script'), p = d.location.protocol,
			  i = d.getElementsByTagName('ins'), j = i[i.length-1];
		  try {
			s.src = p === 'http:' ? 'http://bloques.cosas.com/activos4.0/www/innerdev/asyncjs.php' :
			  'https://bloques.cosas.com/activos4.0/www/delivery/asyncjs.php';
			s.async = true; j.appendChild(s);
		  } catch (e) {}
		})();
		</script>
        
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
    
    <div class="columnas">
        
        <div class="headernegro">

            <div class="subheadcolumnas">
                <span>COLUMNAS</span>
            </div>

            <div class="subheadtodos">
				<?php
					$category_id = get_cat_ID( 'columnas' );
					$category_link = get_category_link( $category_id );
				?>
				<a href="<?php echo esc_url( $category_link ); ?>">
					<i class="fa fa-plus"></i> Ver todas
				</a>
            </div>
        </div>

        <div class="bodycolumnas">
           <div class="swiper-columnas">
            <div class="swiper-wrapper">
                <?php
                // WP_Query arguments
                $args = array (
                    'category_name'          => 'columnas',
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
                        <a id="post-<?php the_ID(); ?>" <?php post_class('columnauno'); ?> href="<?php echo the_permalink(); ?>">
                            <div class="fotocolumnauno">
                               <div class="img-author" style="background-image:url('<?php echo the_field('img-columnista'); ?>');"></div>
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
                                        <?php echo the_field('nombre_columnista'); ?>
                                    </small>  
                                </div> 
                                <div class="textocolumnauno">
                                    Seguir leyendo <i class="fa fa-angle-right"></i>
                                </div>
                            </div>
                        </a>
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
</aside>
<!-- /sidebar -->