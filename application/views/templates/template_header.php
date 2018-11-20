<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
      <title><?= $title ?></title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" Content="Farming or agriculture in Indian villages has been the principal occupation for the people since the ancient period, as they earn their livelihoods">
      <meta name="keywords" Content="Village Crops, Village Vegetables, Village Fruits, Village Dals">
      <!--Start Styles-->
        <link rel="stylesheet" href="<?php echo base_url() ?>media/assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>media/assets/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>media/assets/css/style.css"/>
      <!--End Styles-->
      <!--Banner-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>media/assets/css/skdslider.css"/>
        <script type="text/javascript" src="<?php echo base_url() ?>media/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>media/assets/js/responsivemultimenu.js"></script>
        <link rel="stylesheet" href="<?php echo base_url() ?>media/assets/css/responsivemultimenu.css" type="text/css"/>
        <script type="text/javascript" src="<?php echo base_url() ?>media/assets/js/skdslider.min.js"></script>
      <!--End Banner--> 
      <script type="text/javascript" src="<?php echo base_url() ?>media/assets/js/bootstrap.min.js"></script>
      <!-- animation-effect -->
             <link rel="stylesheet" href="<?php echo base_url() ?>medai/assets/css/animate.min.css" rel="stylesheet"> 
       <script type="text/javascript" src="<?php echo base_url() ?>media/assets/js/wow.min.js"></script>
       <script>
          new WOW().init();
        </script>
      <!-- //animation-effect -->
    </head>
    <body>
        <!--Header-->
<div class="header">
 <div class="headerT">
   <div class="container">
     <div class="row">
       <div class="socialM animated wow fadeInRight" data-wow-delay=".5s">
         <span>Follow Us @</span>
          <div class="social"><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></div>
          <div class="social"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
          <div class="social"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
          <div class="social"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
          <div class="cleras"></div>
       </div>
     </div>
   </div>
 </div>
 <div class="headerM">
  <div class="container">
   <div class="row">
     <div class="col-md-6">
       <div class="logo animated wow fadeInLeft" data-wow-delay=".5s"><a href="<?php echo base_url('home') ?>"><img src="<?php echo base_url() ?>media/assets/images/jsr-logo.png" alt="JSR Farming" class="img-responsive"/></a></div>
     </div>
     <div class="col-md-6 animated wow fadeInRight" data-wow-delay=".5s">
       <div class="logoR">
         <ul>
         <li><a href="<?php echo base_url('signup') ?>">Register</a></li>
         <li><a href="<?php echo base_url('signin') ?>">Login</a></li>
         <li><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="#">Shopping Cart(0)</a></li>
         <li><a href="#">Delivery Info</a>|</li>
         <li><a href="#">Cash On Delivery</a>|</li>
         </ul>
       </div>
       <div class="downloadApp">
        <!--<h4>Download App</h4>-->
        <div class="app"><a href="#"><img src="<?php echo base_url() ?>media/assets/images/apple-app-store.png" alt="Apple Store" class="img-responsive"/></a></div>
        <div class="app"><a href="#"><img src="<?php echo base_url() ?>media/assets/images/google-play-store.png" alt="Google Play Store"/></a></div>
        </div>
        <div class="cleras"></div>
     </div>
   </div>
  </div>
 </div>
 <!--Navigation-->
<div style="background:#990;">
		<div class="rmm style">
			<ul>
				<li>
					<a href="<?php echo base_url('home') ?>">Home</a>
					<!--<ul>
						<li>
							<a href="#">Audiobooks</a>
						</li>
						<li>
							<a href="#">Cookbooks</a>
						</li>
						<li>
							<a href="#">Catalogs</a>
						</li>
						<li>
							<a href="#">Other</a>
							  <ul>
								<li><a href="#">Other 1</a></li>
								<li><a href="#">Other 2</a></li>
							</ul>
						</li>
					</ul>-->
				</li>
				<li>
					<a href="<?php echo base_url('villagecrops') ?>">Village Crops</a>
				</li>
				<li>
					<a href="<?php echo base_url('vegetables') ?>">Vegetables</a>
					<!--<ul>
						<li><a href="#">Cassettes</a></li>
						<li><a href="#">CD</a></li>
						<li><a href="#">Records</a></li>
					</ul>-->
				</li>
				<li>
					<a href="<?php echo base_url('fruits') ?>">Fruits</a>
				</li>
                <li>
					<a href="<?php echo base_url('dals') ?>">Dals</a>
				</li>
                <li>
					<a href="<?php echo base_url('blog') ?>">Blog</a>
				</li>
                <li>
					<a href="<?php echo base_url('contactus') ?>">Contact Us</a>
				</li>
			</ul>
		</div>
	</div>
 <!--End Navigation-->
</div>
<!--End Header-->
