<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php if(isset($title)) echo $title ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="<?php echo base_url()?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="<?php echo base_url()?>themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="<?php echo base_url()?>themes/css/flexslider.css" rel="stylesheet"/>
		<link href="<?php echo base_url()?>themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="<?php echo base_url()?>themes/js/jquery-1.7.2.min.js"></script>
		<script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>				
		<script src="<?php echo base_url()?>themes/js/superfish.js"></script>	
		<script src="<?php echo base_url()?>themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>
							<li><a href="checkout.html">Checkout</a></li>					
							<li><a href="register.html">Login</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="/../webshopci" class="logo pull-left"><img src="<?php echo base_url()?>themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="#">Management</a>					
								<ul>
									<li><a href="<?php echo base_url()?>index.php/product-management">Product</a></li>	
									<li><a href="<?php echo base_url()?>category-management">Category</a></li>	
									<li><a href="<?php echo base_url()?>subcategory-management">Sub Category</a></li>									
								</ul>
							</li>															
							<li><a href="./products.html">Man</a></li>			
							<li><a href="./products.html">Sport</a>
								<ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul>
							</li>							
							<li><a href="./products.html">Hangbag</a></li>
							<li><a href="./products.html">Best Seller</a></li>
							<li><a href="./products.html">Top Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/banner-1.jpg" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/banner-2.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			<section class="header_text">
				Welkom op Webshopci 
				<br/>...
			</section>
			

			<?php 
			if(isset($content))
			{ 
				echo $content; 
			} 
			?>
			
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigatie</h4>
						<ul class="nav">
							<li><a href="<?php echo base_url()?>">Homepagina</a></li>  
							<li><a href="#">over ons</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Jou winkelwagen</a></li>
							<li><a href="#">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>Mijn Account</h4>
						<ul class="nav">
							<li><a href="#">Mijn Account</a></li>
							<li><a href="#">Order Geschiedenis</a></li>
							<li><a href="#">Wens Lijst</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="<?php echo base_url()?>themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Gemaakt door Dylan van Masbergen.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright Dylan van Masbergen.</span>
			</section>
		</div>
		<script src="<?php echo base_url()?>themes/js/common.js"></script>
		<script src="<?php echo base_url()?>themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>