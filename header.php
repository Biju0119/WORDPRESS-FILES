<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="">

  <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/favicon.ico" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/favicon.ico" />

		<title><?php wp_title( '|', true, 'right' );?><?php bloginfo('name'); ?></title>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/main.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/egm.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/animate.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/animations.css">
		
		<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
		<?php wp_head(); ?>
		<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-931744-5', 'auto');
ga('send', 'pageview');
ga('newTracker.send', 'pageview');
</script>
		
	</head>
	<body>
		<!--[if lt IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- Add your site or application content here -->
		
		<main>
		<!-- Header -->



		
		<header class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="<?php bloginfo('wpurl'); ?>" class="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.png" alt="" title="EGM Insurance"></a>
						<div class="top-box">
							<div class="search">


<!-- 

  <form class="search" method="post" action="">
                                        <label for="search-box">Search:</label>
                                        <input id="search-box" type="text" placeholder="Search">
                                    </form> -->

								<?php get_search_form(); ?>
						   <!-- <form action="#">
                                <input type="text" placeholder="Search...">
                                <input class="go" type="submit" value="Go">
                            </form> -->

							<!-- 	<button>
								<svg class="icon">
									<use xlink:href="img/svg-sprite.svg#search" />
								</svg>
								</button> -->
						
							</div>
							<h5>
							<svg class="icon">
								<use xlink:href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/svg-sprite.svg#envelope" />
							</svg>
							<a href="mailto:info@egminsurance.com">info@egminsurance.com</a></h5>
							<h4><i></i><a href="tel:888-300-4046">888-300-4046</a></h4>
						</div>
					</div>
				</div>
			</div>
			<!-- menu -->
			<div class="main-menu">
			<div class="mob-btn">
	<span></span>
	<span></span>
	<span></span>
</div>
<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
						<nav class="main-nav">

						<?php wp_nav_menu(array('menu' => 'Main Menu','menu_class' => 'mnav', '' => false)); 
                                wp_reset_query();?>
							<!-- <ul>
								<li><a href="">Home</a></li>
								<li><a href="">About Us</a>
								<ul>
									<li><a href="">Our Team</a></li>
								<li><a href=""> Insurance Products </a></li>
								<li><a href="">  Financial</a></li>
								<li><a href="">Community </a></li>
								</ul>
								</li>
								<li><a href="">Our Team</a></li>
								<li><a href=""> Insurance Products </a></li>
								<li><a href="">  Financial</a></li>
								<li><a href="">Community </a></li>
								<li><a href="">Careers </a></li>
								<li><a href="">Links </a></li>
								<li><a href="">Blog </a></li>
								<li><a href="">Group Home and Auto  </a></li>
								<li><a href=""> EGM News </a></li>
							</ul> -->
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- menu -->
		</header>
		<!-- Header -->