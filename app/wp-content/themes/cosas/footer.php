            </div> <!--#content-->
			<!-- footer -->
			<footer id="colophon" class="site-footer">
        
                <div class="newsletter">

                    <h3 class="titus">suscríbete a nuestro newsletter</h3>
                    <form class="newsletter_form">
                        <input type="text" placeholder="Nombre" id="nombre_newsletter" required>
                        <input type="email" placeholder="Email" id="correo_newsletter" required>
                        <input type="submit" name="enviar" value="Suscríbete" placeholder="Suscríbete"/>
                    </form>
                    <h3 class="form-send" style="color:#000;"></h3>

                </div>
                <div class="footer-top">
					
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
		
		<div style="width:320px;margin:0 auto;position:fixed;left:0;right:0;z-index:99999;bottom:0;">
		    <ins data-revive-zoneid="3" data-revive-target="_blank" data-revive-ct0="{clickurl_enc}" data-revive-id="57a6b4ea911480853c3dc7a69f930632"></ins>
            <script async src="//bloques.cosas.com/activos/www/delivery/asyncjs.php"></script>
		</div>
		
       <?php wp_footer(); ?>
        <script>
            
            var normSlider = new Swiper ('.swiper-container', {
                pagination: '.swiper-pagination',
                slidesPerView: 4,
                paginationClickable: true,
                spaceBetween: 30
            });
            var gallerySliders = new Swiper('.swiper-gallery', {
                nextButton: '.next-gallery',
                prevButton: '.prev-gallery',
                pagination: '.swiper-pagination',
                paginationType: 'progress',
                slidesPerView: 3,
                spaceBetween: 10,
            });

        </script>
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-51156134-9', 'cosas.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
