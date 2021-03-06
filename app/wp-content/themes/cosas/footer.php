            </div> <!--#content-->
			<!-- footer -->
			<footer id="colophon" class="site-footer">
                <?php if($GLOBALS['detectBlogs']['suscripciones']==$GLOBALS['detectBlogs']['blogId']){ ?>
                
                    <div class="suscrip-phone">
                        
                        <i class="fa fa-phone"></i> Suscripciones: 223645143 - 223645169 
                        
                    </div>
                    
                <?php } ?>
                <div class="newsletter">

                    <h3 class="titus">suscríbete a nuestro newsletter</h3>
                    <form class="newsletter_form">
                        <input type="text" placeholder="Nombre" class="nombre_newsletter" required>
                        <input type="email" placeholder="Email" class="correo_newsletter" required>
                        <input class="submit_news" type="submit" name="enviar" value="Suscríbete" placeholder="Suscríbete"/>
                    </form>
                    <h3 class="form-send" style="color:#000;display:none"></h3>

                </div>
                <div class="footer-top">
					<div class="access-content">
						
						<div class="logo-cosas">
							 <a href="<?php echo get_site_url($GLOBALS['detectBlogs']['cosas']); ?>">
								<svg viewBox="0 0 792 268">

									<use xlink:href="#logo-cosas"/>

								</svg>
							</a>
						</div>

						<ul class="redes">
							<li><a target="_blank" href="https://www.facebook.com/revistacosas"><i class="fa fa-facebook"></i></a></li>
							<li><a target="_blank" href="https://twitter.com/RevistaCosas"><i class="fa fa-twitter"></i></a></li>
							<li><a target="_blank" href="https://www.instagram.com/revistacosas"><i class="fa fa-instagram"></i></a></li>
							<li><a target="_blank" href="https://www.youtube.com/user/CosasChile"><i class="fa fa-youtube-play"></i></a></li>
						</ul> 
						
					</div>
					
			        <div class="contacto-footer">
			        	
			        	<div class="contac-mails">
			        		
			        		<span>contacto</span>
			        		<div class="tel">
			        			<i class="fa fa-phone"></i>
			        			<a href="tel:&#43;56223645100" target="_blank">+562 2364 51 00</a>
			        		</div>
			        		<div class="mails">
			        			<i class="fa fa-lightbulb-o"></i>
			        			<a href="mailto:oscarse&#64;cosas.com">Contacto editorial</a>
			        			
			        			<i class="fa fa-building-o"></i>
			        			<a href="mailto:publicidad&#64;cosas.com">Contacto comercial</a>
			        		</div>
			        		
			        	</div>
			        	<div class="ubicacion">
			        		
			        		<span>ubicación</span>
			        		<div class="direcct">
			        			<i class="fa fa-map-marker"></i>
			        			<a href="https://www.google.cl/maps/place/Almirante+Pastene+333,+Providencia,+Regi%C3%B3n+Metropolitana/@-33.4262397,-70.6237255,17z/data=!3m1!4b1!4m5!3m4!1s0x9662cf620aead381:0x3da58cba8f00ee25!8m2!3d-33.4262397!4d-70.6215368" target="_blank">Almirante Pastene #333, Piso 2.<br>Providencia, Santiago Chile.</a>
			        		</div>
			        		
			        	</div>
			        	
			        </div>
		        </div>
		        <ul class="network">
					<li>
						<a target="_blank" href="<?php echo get_site_url($GLOBALS['detectBlogs']['cosas']); ?>">
							<svg viewBox="0 0 792 268">
	                            <use xlink:href="#logo-cosas"/>
	                        </svg>
						</a>
					</li>
					<li>
						<a target="_blank" href="<?php echo get_site_url($GLOBALS['detectBlogs']['casas']); ?>">
							<svg viewBox="0 0 792 268">
	                            <use xlink:href="#logo-casas"/>
	                        </svg>
						</A>	
					</li>
					<li>
						<a target="_blank" href="<?php echo get_site_url($GLOBALS['detectBlogs']['couture']); ?>">
							<svg viewBox="0 0 792 268">
	                            <use xlink:href="#logo-couture"/>
	                        </svg>
						</a>
					</li>
					<li>
						<a target="_blank" href="<?php echo get_site_url($GLOBALS['detectBlogs']['lujo']); ?>">
							<svg viewBox="0 0 792 268">
	                            <use xlink:href="#logo-lujo"/>
	                        </svg>
						</a>
					</li>
					<li>
						<a target="_blank" href="<?php echo get_site_url($GLOBALS['detectBlogs']['repost']); ?>">
							<svg viewBox="0 0 792 268">
	                            <use xlink:href="#logo-repost"/>
	                        </svg>
						</a>
					</li>
				</ul>

            </footer><!-- #colophon -->

		</div>
		<!-- /#page -->
		
       <?php wp_footer(); ?>
        <script>
            
			jQuery(document).ready(function($){
				
				
				$('.submit_news').on('click', function(){
					
					var nombre = $(this).siblings('.nombre_newsletter').val();
					var correo = $(this).siblings('.correo_newsletter').val();
					$(this).parent().hide();
					var send = $(this).parent().siblings('.form-send');
					$.ajax({
						type: 'POST',  
						url: '<?php echo get_template_directory_uri(); ?>/js/procesar_correo.php',   
						data: 'nombre='+nombre+'&correo='+correo+'&send='+send,
						success: function(data){

							if (data==='exito'){
								send.show().text('Suscripción enviada con éxito.');

							} else if(data==='existe') {
								send.show().text('Lo sentimos, este correo ya está registrado.');

							}else{
								send.show().text('No hemos podido enviar tu suscripción. Inténtalo nuevamente.');
							}

						}
					});
					
					return false;
					
				});

			});
        </script>
		<?php 
		if(is_singular('branded')||is_singular('automovilismo')||in_category(1343)||is_singular('blogi')||is_singular('nyfw')){
		?>
			<script>
				var gallerySliders = new Swiper('.swiper-gallery', {
					nextButton: '.next-gallery',
					prevButton: '.prev-gallery',
					slidesPerView: 3,
					paginationClickable: true,
					pagination: '.swiper-pagination',
					loop:true,
					breakpoints:{
						768:{
							slidesPerView: 1,
						}
					}
				});
			</script>
		<?php		
			}elseif(is_single&&!in_category('vida-social')){
		?>	
			<script>
				var gallerySliders = new Swiper('.swiper-gallery', {
					nextButton: '.next-gallery',
					prevButton: '.prev-gallery',
					pagination: '.swiper-pagination',
					paginationType: 'progress',
					slidesPerView: 3,
					spaceBetween: 10,
				});
			</script>
		<?php		
			}elseif(in_category('vida-social')){
		?>
			<script>
				var galleryTop = new Swiper('.gallery-top', {
					nextButton: '.swiper-button-next',
					prevButton: '.swiper-button-prev',
					spaceBetween: 10,
				});
				var galleryThumbs = new Swiper('.gallery-thumbs', {
					spaceBetween: 10,
					centeredSlides: true,
					slidesPerView: 3,
					touchRatio: 0.2,
					slideToClickedSlide: true
				});

				galleryTop.params.control = galleryThumbs;
				galleryThumbs.params.control = galleryTop;

			</script>
		<?php } ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-51156134-9', 'cosas.com');
		ga('send', 'pageview');
		</script>
		
		
		<?php if(!is_page('especial-nyfw')){ ?>
			<!--ITT Desktop & Mobile-->
			<!--script type='text/javascript'>//<![CDATA[
			   document.MAX_ct0 = unescape('{clickurl_enc}');

			   var m3_u = (location.protocol=='https:'?'https://bloques.cosas.com/activos4.0/www/delivery/ajs.php':'http://bloques.cosas.com/activos4.0/www/innerdev/ajs.php');
			   var m3_r = Math.floor(Math.random()*99999999999);
			   if (!document.MAX_used) document.MAX_used = ',';
			   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
			   document.write ("?zoneid=20");
			   document.write ('&amp;cb=' + m3_r);
			   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
			   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
			   document.write ("&amp;loc=" + escape(window.location));
			   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
			   if (document.context) document.write ("&context=" + escape(document.context));
			   if ((typeof(document.MAX_ct0) != 'undefined') && (document.MAX_ct0.substring(0,4) == 'http')) {
				   document.write ("&amp;ct0=" + escape(document.MAX_ct0));
			   }
			   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
			   document.write ("'><\/scr"+"ipt>");
			//]]>
			</script--><!--noscript><a href='http://bloques.cosas.com/activos4.0/www/innerdev/ck.php?n=a9735427&amp;cb={random}' target='_blank'><img src='http://bloques.cosas.com/activos4.0/www/innerdev/avw.php?zoneid=20&amp;cb={random}&amp;n=a9735427&amp;ct0={clickurl_enc}' border='0' alt='' /></a></noscript-->
		<?php } ?>
		
		<div style="width:320px;margin:0 auto;position:fixed;left:0;right:0;z-index:99999;bottom:0;">
		
			<ins data-revive-zoneid="3" data-revive-ct0="{clickurl_enc}" data-revive-id="dffaf9f7b83c5aba13d22cf8e8e9ac51"></ins>
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

	</body>
</html>