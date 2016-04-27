<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/favicon_casas.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<div class="menuCasas menuMobile">

						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo">
							</a>
						</div>
						<!-- /logo -->

						<div class="mobile-icon-menu">
							<i class="fa fa-bars"></i>
						</div>

						<div class="rrss-desktop">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>

						<!-- nav -->
						<div class="navegacion-home">
							<nav class="nav" role="navigation">
								<div class="desktop-nav">
									<?php html5blank_nav(); ?>
								</div>
							</nav> 
							<div class="buscar-home">
								<i class="fa fa-search"></i>
							</div>
							<div class="buscador-open">
								<div class="buscador-desk">
									<div class="close-search">cerrar buscador <i class="fa fa-close"></i> </div>
									<div class="search-formulario">
										<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
											<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Buscar', 'html5blank' ); ?>">
											<button class="search-submit" type="" role="button"><?php _e( '', 'html5blank' ); ?><i class="fa fa-search"></i></button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- /nav -->

					</div>

					<!--div class="MenuMobile-Open">
						<div class="header-MenuMobile">
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/casas_logotype.png" alt="Logo">
								</a>
							</div>
							<div class="mobile-icon-menu">
								<i class="fa fa-bars"></i>
							</div>
						</div>
						<div class="search-menu-mob">
							
								<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
									<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Buscar', 'html5blank' ); ?>">
									<button class="search-submit" type="" role="button"><?php _e( '', 'html5blank' ); ?><i class="fa fa-search"></i></button>
								</form>
						</div>
						<div class="menu-mob">
							<nav class="nav" role="navigation">
								<?php html5blank_nav(); ?>
							</nav>
						</div>
						<div class="follow-us">
							<ul>
								<li class="title-li"><p>Siguenos en</p></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
						<div class="logotypes">
							<ul>
								<li><a target="_blank" href="http://www.cosas.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/cosas_logotype.png" alt="Logo Cosas"></li>
								<li><a target="_blank" href="http://www.cosas.com/casas/"><img src="<?php echo get_template_directory_uri(); ?>/img/casas_logotype.png" alt="Logo Casas"></li>
								<li><a target="_blank" href="http://www.cosas.com/couture/"><img src="<?php echo get_template_directory_uri(); ?>/img/cosasc_logotype.png" alt="Logo Cosas Culture"></li>
								<li><a target="_blank" href="http://www.cosas.com/?post_type=lujo"><img src="<?php echo get_template_directory_uri(); ?>/img/cosaslujo_logotype.png" alt="Logo"></li>
								<li><a target="_blank" href="http://www.cosas.com/repost/"><img src="<?php echo get_template_directory_uri(); ?>/img/cosasrepost_logotype.png" alt="Logo"></li>
							</ul>
						</div>
					</div-->

			</header>
			<!-- /header -->
