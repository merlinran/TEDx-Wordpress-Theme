<!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<!--<meta property="og:image" content="http://tedxhongyadong.com/img/logo_alt.jpg"/>-->
	<meta property="fb:page_id" content="317882900197" />
	
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72-precomposed.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114-precomposed.png" />
	<link rel="shortcut icon" href="/favicon.ico" />
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="http://feeds.feedburner.com/tedxhongyadong">
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.0.6.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
	
	<!-- Waypoints JS -->
  	<script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
	
	<!-- FLEX Slider -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" />
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
	
	<?php wp_head(); ?>
  	<?php roots_head(); ?>
	
	<!-- Hook up the FlexSlider -->
	<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				directionNav: false,
				controlNav: false
			});
		});

	</script>
	
</head>

<body <?php body_class(roots_body_class()); ?>>

	<div id="wrap">
	
		<header role="banner" class="mainHeader">
			
			<a href="<?php echo home_url(); ?>" class="logo_lrg">TEDxHongyadong</a>
			
			<a href="#mainNav" class="mobileNav_btn">Menu</a>
			
			<hgroup>
			<h2>2013年4月3日</h2>
			<h3>地点待定</h3>
			</hgroup>
			
		</header>
		
	    <div id="main" role="main">
			
			<div id="content" class="clearfix">
