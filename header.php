<!DOCTYPE html>
<!--[if IE 7]><html class="ie7"><![endif]-->
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[!(IE)]><!-->
<html><!--<![endif]-->
	<head>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title><?php bloginfo('name') . ' | ' . wp_title(); ?></title>

		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
		<link rel="icon" href="/favicon.ico" type="image/x-icon"/>

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<![endif]-->

		<?php wp_head(); ?>

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!--Google Analytics code-->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-72469806-1', 'auto');
			ga('send', 'pageview');
		</script>
		<!--end Google Analytics code-->

	</head>

	<body <?php body_class(); ?>>

		<!--HEADER-->
		<header class="header" id="header">
			<div class="container">
				<div class="row valign">
					<div class="col-lg-2 col-md-5 col-sm-5 col-xs-8">
						<div class="header__logo">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php bloginfo('template_url'); ?>/img/logo-header.png" alt="<?php bloginfo('name'); ?>"/>
								<?php //bloginfo('name'); ?>
							</a>
						</div>
					</div>

					<div class="col-lg-3 col-md-5 col-sm-5 hidden-xs">
						<div class="header__phone">
							<img src="<?php bloginfo('template_url'); ?>/img/phone-header.png" alt="">
						</div>
					</div>

					<div class="col-lg-6 hidden-md hidden-sm hidden-xs">
						<nav class="nav" id="nav">
							<?php
								$nav_args = array(
									'theme_location'	=> 'nav',
									'container'			=> '',
									'depth'				=> 1
								);
								wp_nav_menu( $nav_args );
							?>
						</nav>
					</div>

					<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">


						<div class="login-btn-wrap">
							<?php if (0) : // hidden button ?><a href="/customers/login" class="btn login-btn">Sign In</a><?php endif; ?>
							<div data-crm-widget="loginTooltip"></div>
						</div>
					</div>

					<div class="mobile-nav" id="mobile_nav"></div>

				</div>
			</div>
		</header>


		<!--MAIN-->
		<div id="main" class="main">
