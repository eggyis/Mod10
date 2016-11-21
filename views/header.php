<!DOCTYPE html>
<html lang="en">
	<head>
		<title>About</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/booking/css/booking.css">
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/camera.css">
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
		<script src="<?php echo base_url();?>asset/js/jquery.js"></script>
		<script src="<?php echo base_url();?>asset/js/jquery-migrate-1.2.1.js"></script>
		<script src="<?php echo base_url();?>asset/js/script.js"></script>
		<script src="<?php echo base_url();?>asset/js/superfish.js"></script>
		<script src="<?php echo base_url();?>asset/js/jquery.ui.totop.js"></script>
		<script src="<?php echo base_url();?>asset/js/jquery.equalheights.js"></script>
		<script src="<?php echo base_url();?>asset/js/jquery.mobilemenu.js"></script>
		<script src="<?php echo base_url();?>asset/js/jquery.easing.1.3.js"></script>
		<script src="<?php echo base_url();?>asset/js/owl.carousel.js"></script>
		<script src="<?php echo base_url();?>asset/js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="<?php echo base_url();?>asset/js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="<?php echo base_url();?>asset/booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
				});
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li class="current"><a href="<?php echo base_url();?>index.php/home">ABOUT</a></li>
								<li><a href="<?php echo base_url();?>index.php/home/konten2">TOURS</a></li>
								<li><a href="<?php echo base_url();?>index.php/home/konten3">Test</a></li>
								<li><a href="<?php echo base_url();?>index.php/home/konten4">Test2</a></li>

							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="<?php echo base_url();?>asset/images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
		</header>
				<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="<?php echo base_url();?>asset/images/slide.jpg">
					<div class="caption fadeIn">
						<h2>LONDON</h2>
						<div class="price">
							FROM
							<span>$1000</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
				<div data-src="<?php echo base_url();?>asset/images/roma.jpg">
					<div class="caption fadeIn">
						<h2>Colosseum Roma</h2>
						<div class="price">
							FROM
							<span>$2000</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
				<div data-src="<?php echo base_url();?>asset/images/madrid.jpg">
					<div class="caption fadeIn">
						<h2>Spanyol</h2>
						<div class="price">
							FROM
							<span>$3000</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
			</div>
		</div>