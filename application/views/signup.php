<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Bootstrap-->
<link rel="stylesheet" href="<?php echo base_url() ?>media/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>media/assets/css/bootstrap-theme.css">
<link rel="stylesheet" href="<?php echo base_url() ?>media/assets/css/normalize.min.css">
<!--Font Awesome-->
<link rel="stylesheet" href="<?php echo base_url() ?>media/assets/css/font-awesome.min.css">
<!--Custome CSS-->
<link rel="stylesheet" href="<?php echo base_url() ?>media/assets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url() ?>media/assets/css/formstyle.css">
<!--IE8,IE7>
<link rel="stylesheet" href="css/ie8.css"/>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<script src="<?php echo base_url() ?>media/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>media/assets/js/bootstrap.min.js"></script>
<!--Angular JS-->
<script src="<?php echo base_url() ?>media/assets/js/angular.min.js"></script>
<!--End Angular JS-->

<title>Jsr Farm</title>
</head>


<body>
<!--Header Starthere-->
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
         <div><a href="<?php echo base_url('signin') ?>"><button class="btn signupbutton pull-right" type="submit">Sign In</button></a></div>
         <!--<ul>
         <li><a href="<?php echo base_url('signup') ?>">Register</a></li>
         <li><a href="<?php echo base_url('signin') ?>">Login</a></li>
         <li><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="#">Shopping Cart(0)</a></li>
         <li><a href="#">Delivery Info</a>|</li>
         <li><a href="#">Cash On Delivery</a>|</li>
         </ul>-->
       </div>
       <!--<div class="downloadApp">
        <h4>Download App</h4>
        <div class="app"><a href="#"><img src="<?php echo base_url() ?>media/assets/images/apple-app-store.png" alt="Apple Store" class="img-responsive"/></a></div>
        <div class="app"><a href="#"><img src="<?php echo base_url() ?>media/assets/images/google-play-store.png" alt="Google Play Store"/></a></div>
        </div>-->
        <div class="cleras"></div>
     </div>
   </div>
  </div>
 </div>
</div>
<!--End Header-->

<!--Body Content-->
<div class="signincontentmainbg">
 <div class="container">
  <div class="row">
  <div class="signinformmain">
   <div class="signinheadmain"><h1>JSR FARMING SIGN UP</h1></div>
    <form class="form-horizontal" name="loginForm" novalidate ng-app="formValidationApp" ng-controller="ValidationCtrl">
    <div ng-class="{'has-error': loginForm.firstname.$invalid && loginForm.firstname.$dirty, 'has-success': loginForm.firstname.$valid }">
    <label class="control-label">First Name</label>
    <input type="firstname" class="form-control" name="firstname" placeholder="First Name" ng-model="user.firstname" required/>
	<p class="help-block" ng-if="loginForm.firstname.$invalid && loginForm.firstname.$dirty">Please Enter a valid First Name</p>

  </div>
  <div ng-class="{'has-error': loginForm.lastname.$invalid && loginForm.lastname.$dirty, 'has-success': loginForm.lastname.$valid }">
    <label class="control-label">Last Name</label>
    <input type="lastname" class="form-control" name="lastname" placeholder="Last Name" ng-model="user.lastname" required/>
	<p class="help-block" ng-if="loginForm.lastname.$invalid && loginForm.lastname.$dirty">Please Enter a valid Last Name</p>
  </div>
       <div ng-class="{'has-error': loginForm.email.$invalid && loginForm.email.$dirty, 'has-success': loginForm.email.$valid }">
    <label class="control-label">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Email" ng-model="user.email" required/>
	<p class="help-block" ng-if="loginForm.email.$invalid && loginForm.email.$dirty">Please Enter a valid email address</p>
	
  </div>
  <div ng-class="{'has-error': loginForm.password.$invalid && loginForm.password.$dirty, 'has-success': loginForm.password.$valid}">
    <label class="control-label">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="password" ng-model="user.password" ng-minLength="8" ng-maxLength="20" required/>
	<p class="help-block" ng-if="loginForm.password.$invalid && loginForm.password.$dirty">Please Enter at least 8 characters</p>
  </div>
   <div><button type="submit" class="signinbutton">Create Account</button></div>
    </form>  
    <p>Have an Account?<span><a href="<?php echo base_url('signin') ?>">Sign In</a></span></p> 
    <p>By Clicking Create Account you to the<span> <a href="">Terms</a></span></p>     
  </div>
</div>
</div>
</div>
<!--End Content-->
<!--Footer-->

<div class="copyB">
  <div class="container">
    <div class="col-md-6">
    <h5>© 2016 JSR Farming. All Rights Reserved.</h5>
    </div>
    <div class="col-md-6 footnav">
        <ul class="pull-right">
          <li><a href="<?php echo base_url('home') ?>">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms & Conditions</a></li>
        </ul>
    </div>
  </div>
</div>
<a href="#" class="scrollToTop"></a>
<!--End Footer-->

<script>
 $(document).ready(function(){
    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});
</script>
<script src='<?php echo base_url() ?>media/assets/js/angular.min.js'></script>
<script src="<?php echo base_url() ?>media/assets/js/app.js"></script>
</body>
</html>

