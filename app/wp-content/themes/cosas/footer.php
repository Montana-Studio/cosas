            </div> <!--#content-->
			<!-- footer -->
			<footer id="colophon" class="site-footer">
        
                <div class="newsletter">

                    <h3 class="titus">suscribete a nuestro newsletter</h3>
                    <form class="newsletter_form">
                        <input type="text" placeholder="Nombre" id="nombre_newsletter">
                        <input type="email" placeholder="email" id="correo_newsletter">
                        <input type="submit" name="enviar" value="Suscríbete" placeholder="Suscríbete"/>
                    </form>
                    <h3 class="form-send" style="color:#000;"></h3>

                </div>
                <ul class="redes">

                    <li class="logo-cosas">

                        <svg viewBox="0 0 759 232">
                            <use xlink:href="#logo-cosas" class="footer-red"/>
                        </svg>

                    </li>
                    <li><a href="https://www.facebook.com/revistacosas"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/RevistaCosas"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/revistacosas"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/user/CosasChile"><i class="fa fa-youtube-play"></i></a></li>

                </ul>
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
