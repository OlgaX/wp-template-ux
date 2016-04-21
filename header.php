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

	</head>

	<body <?php body_class(); ?>>

		<!--HEADER-->
		<header class="site_header" id="header">
			<div class="site_header-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-xs-8">
							<div class="site_logo">
								<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>"/><?php bloginfo('name'); ?></a>
							</div>
						</div>

						<div class="col-sm-push-4 col-sm-2 col-xs-4 text-right">
							<div class="site_sign-in-btn">
								<a href="/track" class="btn site_big-btn">Sign In</a>
							</div>
						</div>

						<div class="col-sm-pull-2 col-sm-4 col-xs-12 text-right">
							<div class="site_h-phone">
								<img src="<?php bloginfo('template_url'); ?>/img/phone-header.png" alt="">
							</div>
						</div>

					</div>
				</div>
			</div>

			<?php if (!is_page('order') && !is_page('preview') && has_nav_menu('nav')) : ?>
				<div class="site_header-bottom">
					<div class="container">
						<nav class="site_nav" id="nav">
							<?php
								$nav_args = array(
									'theme_location'	=> 'nav',
									'container'			=> '',
									'depth'				=> 1
								);
								wp_nav_menu( $nav_args );
							?>
						</nav>
						<div class="mobile-nav" id="mobile_nav"></div>
					</div>
				</div>
			<?php endif; ?>
		</header>

		<!--MAIN-->
		<div class="site_main">
