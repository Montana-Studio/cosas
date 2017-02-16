<?php get_header(); ?>

   	
    	<?php if(is_singular('branded')||is_singular('automovilismo')||in_category(1343)||is_singular('blogi')){ ?>
			<div class="single-brandedcontent">
    			
    			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						
						<div class="videoContent">	
							<?php
								remove_filter ('acf_the_content', 'wpautop');
								the_field('video_principal');
							?>
						</div>
						
						<div class="sharecontent">
							<div class="shares-post">

							<a class='facebook_share' title='<?php echo the_permalink(); ?>' name='<?php the_title(); ?>' href="#">
                                <i class="fa fa-facebook-square"></i>
                            </a>

							<a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', '', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-twitter-square"></i></a>

							<?php if(wp_is_mobile()){ ?>
								<a href="whatsapp://send?text=<?php the_title(); ?> – <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a>
							<?php } ?>

							<a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)"><i class="fa fa-pinterest-square"></i></a>

							<a target="_blank" href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php echo the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus-square"></i></a>

						   </div>
						</div>
						
						
						<h1><?php the_title(); ?></h1>
						<h2><?php the_field('subtitulo'); ?></h2>
						<small><?php the_time('l, j F Y'); ?></small>
						<p><?php the_excerpt(); ?></p>
						<?php				 
							the_field('galleria_01'); 
							the_content();
						?>
						<?php /*
						<h3><?php the_field('titulo_galeria'); ?></h3>
						
						<div class="swiper-gallery">
							<div class="swiper-wrapper">
						<?php 
						
						$post_objects = get_field('galleria_02');

						if( $post_objects ): 
							foreach( $post_objects as $post): 
								setup_postdata($post); 
						?>
								
								<div class="swiper-slide">
									<?php the_title(); ?>
									<?php get_the_post_thumbnail(); ?>
									<?php the_field('link-branded'); ?>
								</div>	
						<?php
							endforeach; 
							wp_reset_postdata(); 
						endif;
						
						?>

							</div>
							<div class="swiper-pagination"></div>
							<div class="next-gallery"><i class="fa fa-angle-right"></i></div>
							<div class="prev-gallery"><i class="fa fa-angle-left"></i></div>
						</div>
						*/?>
						<div class="finalcontent">
							
							<div class="videoContent">
							<?php 
								the_field('video_final');
							?>
							</div>
							<div class="content-final">
								<h4><?php the_field('titulo_final'); ?></h4>
								<hr>
								<p>
								<?php
									the_field('parrafo_final');
								?>
								</p>
							</div>
							
						</div>
						<div class="facecomm-cont">
							
							<div class="fb-comments" data-href="<?php echo the_permalink(); ?>" data-numposts="3" data-width="100%" data-order-by="reverse_time"></div>
							
						</div>

				</article>
				<!-- /article -->
				
				<div class="btn-back">
					<div class="btn-block" onclick="historyBtn()">
						<i class="fa fa-angle-left"></i>
						<span>Volver</span>
					</div>
				</div>
				
				<script>
					
					function historyBtn(){
						window.history.back();
						console.log('back');
					}
					
				</script>
				
			<?php endwhile; ?>

			<?php else: ?>

			<?php endif; ?>
    			
    		</div>
		<?php }elseif(in_category('vida-social')){ 
			$top_slider = '';
			$down_slider='';
			?>
			<!--section class="vSocial-content"-->
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.css" />
				 <style>
				    html, body {
				        position: relative;
				        height: 100%;
				    }
				    body {
				        background: #000;
				        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
				        font-size: 14px;
				        color:#000;
				        margin: 0;
				        padding: 0;
				    }
				    .swiper-container {
				        width: 100%;
				        height: 500px !important;
				        margin-left: auto;
				        margin-right: auto;
				    }
				    .swiper-slide {
				        background-size: cover;
				        background-position: center;
				    }
				    .gallery-top {
				        height: 80%;
				        width: 100%;
				    }
				    .gallery-thumbs {
				        height: 20%;
				        box-sizing: border-box;
				        padding: 10px 0;
				    }
				    .gallery-thumbs .swiper-slide {
				        width: 25%;
				        height: 100%;
				        opacity: 0.4;
				    }
				    .gallery-thumbs .swiper-slide-active {
				        opacity: 1;
				    }
				    .swiper-slide-img{
				    	max-height: 450px;
				    	width: 100%;
				    }
				    h2{
				    	background-color: white;
				    }
				    .footer_slide, .title_slide{
				    	color: white;
				    }
				    .content_sociales{
				    	background-color: white;
				    }
				    
				</style>

				<?php 
				$content_without_images = get_the_content();
				$content_without_images = preg_replace("/<img[^>]+\>/i", " ", $content_without_images);          
				$content_without_images = apply_filters('the_content', $content_without_images);
				$content_without_images = str_replace(']]>', ']]>', $content_without_images);
				?>
				
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					
					<!--div class="galleryvSocial">
						<?php //the_field('galleryvSocial'); ?>
					</div-->
					
					<?php $attachments = get_children(array('post_parent' => $post->ID,
					                        'post_status' => 'inherit',
					                        'post_type' => 'attachment',
					                        'post_mime_type' => 'image',
					                        'order' => 'ASC',
					                        'orderby' => 'menu_order ID'));
					foreach($attachments as $att_id => $attachment) {
					    $full_img_url = wp_get_attachment_url($attachment->ID);
					    $full_img_url = str_replace('localhost', 'com', $full_img_url);
					    $pinterest_url_img = str_replace('%2F', '/', $full_img_url);
					    $pinterest_url_img = str_replace('%3A', ':', $pinterest_url_img);
					    $title = str_replace('"', '', $post->post_title);
					    $top_slider .='<div class="swiper-slide"><img class="swiper-slide-img" src="'.$full_img_url.'"><div class="title_slide">'.$post->post_title.'</div><div class="footer_slide">'.$attachment->post_title.'</div><a href="http://www.facebook.com/sharer.php?u='.$full_img_url.'" target="_blank">Facebook</a><a href="https://pinterest.com/pin/create/button/?url=&media='.$pinterest_url_img.'&description='.$attachment->post_title.'">Pinterest</a><a href="https://plus.google.com/share?url='.$full_img_url.'">Google+</a><a href="https://twitter.com/home?status='.$title.' - '.get_the_permalink().' @revistacosas">Twitter</a></div>';
						$down_slider .='<div class="swiper-slide" style="background-image:url('.$full_img_url.')"></div>';
					}?>
										
					<!--div class="fb-comments" data-href="<?php// echo the_permalink(); ?>" data-numposts="3" data-width="100%" data-order-by="reverse_time"></div-->
				
				<?php endwhile; ?>
				<div class="swiper-container gallery-top">
					<div class="swiper-wrapper">
					<?php echo $top_slider;?>
					</div>
			        <!-- Add Arrows -->
			        <div class="swiper-button-next swiper-button-white"></div>
			        <div class="swiper-button-prev swiper-button-white"></div>
			    </div>
			    <div class="swiper-container gallery-thumbs">
        			<div class="swiper-wrapper">
        			<?php echo $down_slider;?>
        			</div>
        		</div>
        		<div class="content_sociales">
        		<?php $link = get_the_permalink();
        				$link = str_replace('localhost', 'com', $link);
        				$pinterest_url = str_replace('%2F', '/', $link);
					    $pinterest_url = str_replace('%3A', ':', $link);
					    $title = str_replace('"', '', $post->post_title);
        				?>
        			<a href="http://www.facebook.com/sharer.php?u=<?php echo $link ?>" target="_blank">Facebook</a>
        			<a href="<?php echo 'https://pinterest.com/pin/create/button/?url='.$pinterest_url ?>">Pinterest</a>
        			<a href="https://plus.google.com/share?url=<?php echo $link ?>">Google+</a>
        			<a href="https://twitter.com/home?status=<?php echo $title ?>  - <?php echo get_the_permalink();?> @revistacosas">Twitter</a>
        			<?php echo $content_without_images; ?>
        		</div>
			    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
			    <script>
				    var galleryTop = new Swiper('.gallery-top', {
				        nextButton: '.swiper-button-next',
				        prevButton: '.swiper-button-prev',
				        spaceBetween: 10,
				    });
				    var galleryThumbs = new Swiper('.gallery-thumbs', {
				        spaceBetween: 10,
				        centeredSlides: true,
				        slidesPerView: 'auto',
				        touchRatio: 0.2,
				        slideToClickedSlide: true
				    });
				    galleryTop.params.control = galleryThumbs;
				    galleryThumbs.params.control = galleryTop;
				    
				</script>

				<?php else: ?>

				<?php endif; ?>
			<!--/section-->	
			<script>
				var gallerySliders = new Swiper('.swiper-gallery', {
					nextButton: '.next-gallery',
					prevButton: '.prev-gallery',
					slidesPerView: 1,
					paginationClickable: true,
					pagination: '.swiper-pagination',
					breakpoints:{
						768:{
							slidesPerView: 1,
						}
					}
				});
			</script>
		<?php }else{ ?>
		
			<!-- section -->
			<section class="single-content">
			
				<div class="breadcrumbs">

					<?php if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					} ?>

				</div>
				<div style="margin:0 auto;clear:both;display:block;max-width:300px;">
					<ins data-revive-zoneid="32" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
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
				<div style="margin:0 auto;clear:both;display:block;max-width:970px;">

					<ins data-revive-zoneid="24" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
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
				
				<div style="max-width:320px;margin:0 auto;">

					<ins data-revive-zoneid="8" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
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

				<!-- BRANDED BANNERS -->
        
				<?php if(wp_is_mobile()){ ?>
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
				<?php } ?>
				
				<div style="max-width:728px;margin:0 auto;">

					<ins data-revive-zoneid="5" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
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
				
				<div style="max-width:970px;margin:0 auto;">

					<ins data-revive-zoneid="17" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
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

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				   <?php 
						global $post, $posts;
						$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
						$first_img = $matches [1] [0];
					?>

					<div class="img-post-single" style="background-image:url('<?php if(is_singular("horoscopo")){ echo get_field("img_interior"); }else{ global $post; $thumbID = get_post_thumbnail_id( $post->ID ); if($thumbID){$imgDestacada = wp_get_attachment_url( $thumbID ); echo $imgDestacada; }else{ echo $first_img;}} ?>');"></div>
					
					<div class="post-single">
						<div class="data-post-single">
							<div class="times-post">
								<i class="fa fa-clock-o"></i> <?php the_time('l, j F Y'); ?>
							</div>
							<span class="author">
								<i class="fa fa-user"></i> <?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?>
							</span>

							<h1><?php the_title(); ?></h1>

						</div>
						<div class="sharecontent">
							<div class="shares-post">

								<a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @revistacosas', '', '<?php echo the_permalink(); ?>', 520, 350)">
									<i class="fa fa-twitter"></i>
								</a>

								<?php if(wp_is_mobile()){ ?>
									<a href="whatsapp://send?text=<?php the_title(); ?> – <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share">
										<i class="fa fa-whatsapp"></i>
									</a>
								<?php } ?>

								<a href="javascript:piShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_post_thumbnail_url(); ?>', '', 520, 350)">
									<i class="fa fa-pinterest"></i>
								</a>

								<a target="_blank" href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php echo the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;">
									<i class="fa fa-google-plus"></i>
								</a>

								<a href="mailto:?subject=<?php the_title(); ?>&amp;body=<?php the_title(); ?> <?php $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) ); ?> - <?php echo the_permalink(); ?>" >
									<i class="fa fa-envelope"></i>
								</a>

						   </div>
						</div>
						
						<?php if(in_category('columnas')){ ?>
							<div class="columnasData">
								<div class="contentColumnista">
									<div class="imgColumnista" style="background-image:url('<?php the_field('img-columnista'); ?>');"></div>
									<div class="nameColumnista">
										<h4><?php echo the_field('nombre_columnista'); ?></h4>
									</div>
								</div>
							</div>
						<?php } ?>

						<?php the_content(); ?>
						
						<div class="fb-comments" data-href="<?php echo the_permalink(); ?>" data-numposts="3" data-width="100%" data-order-by="reverse_time"></div>
						
						<div class="degradeload">
						
							<div class="btn-readcontiniuos" id="readMorebtn" onClick="ga('send', 'event', 'Botón', 'click');">Leer articulo completo</div>

						</div>
						
						
					</div>
					
					<?php 
						if(!wp_is_mobile()){
							get_sidebar(); 
						}
					?>
					
				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Lo sentimos nada para mostrar.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</section>
	<?php } ?>
	<!-- /section -->
	
<?php 
	get_footer(); 
?>
	