<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--Footer-->
<div class="footerB">
 <div class="container">
  <div class="row">
   <div class="col-md-3 animated wow fadeInLeft" data-wow-delay=".5s">
     <h4>JSR Farming</h4>
       <ul>
         <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('aboutus') ?>">About Us</a></li>
         <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('contactus') ?>">Contact Us</a></li>
         <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('sitemap') ?>">Sitemap</a></li>
         <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('ourvision') ?>">Our Vision</a></li>
         <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('quality_standards') ?>">Quality Standards</a></li>
       </ul>
   </div>
   <div class="col-md-3 animated wow fadeInLeft"  data-wow-delay=".5s">
     <h4>News and Media</h4>
        <ul>
           <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('photogallery') ?>">Photo Gallry</a></li>
           <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('videogallery') ?>">Video Gallery</a></li>
           <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('pressreleases') ?>">Press Releases</a></li>
           <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('events') ?>">Events</a></li>
           <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('faqs') ?>">Faq's</a></li>
        </ul>
   </div>
   <div class="col-md-3 animated wow fadeInRight" data-wow-delay=".5s">
     <h4>Legal</h4>
        <ul>
          <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('termsandconditions') ?>">Terms & Conditions</a></li>
          <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('privacypolicy') ?>">Privacy Policy</a></li>
          <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('paymentpolicy') ?>">Payment Policy</a></li>
        </ul>
   </div>
   <div class="col-md-3 animated wow fadeInRight" data-wow-delay=".5s">
     <h4>Shop by Category</h4>
         <ul>
           <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('villagecrops') ?>">Village Crops</a></li>
           <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('vegetables') ?>">Vegetables</a></li>
           <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('fruits') ?>">Fruits</a></li>
           <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="<?php echo base_url('dals') ?>">Dals</a></li>
         </ul>
   </div>
  </div>
  <div class="row paymentT">
   <div class="col-md-4 animated wow fadeInLeft" data-wow-delay=".5s">
     <h2>Payment Options</h2>
     <div class="paymentM"><a href="<?php echo base_url('paymentmethod') ?>"><i class="fa fa-cc-visa" aria-hidden="true"></a></i><a href="<?php echo base_url('paymentmethod') ?>"><i class="fa fa-cc-mastercard" aria-hidden="true"></a></i><a href="<?php echo base_url('paymentmethod') ?>"><i class="fa fa-cc-amex" aria-hidden="true"></a></i><a href="<?php echo base_url('paymentmethod') ?>"><i class="fa fa-cc-paypal" aria-hidden="true"></a></i><a href="<?php echo base_url('paymentmethod') ?>"><i class="fa fa-credit-card-alt" aria-hidden="true"></a></i></div>
   </div>
   <div class="col-md-4 animated wow fadeInLeft" data-wow-delay=".5s">
     <h2>Newsletter Subscription</h2>
     <p>Sign Up for special offers and promotions at JSR Farming</p>
     <div class="input-group">
      <input type="text" class="form-control" placeholder="Enter Email Id...">
      <span class="input-group-btn">
        <button class="btn btn-success" type="button">Go!</button>
      </span>
    </div>
   </div>
   <div class="col-md-4 animated wow fadeInRight" data-wow-delay=".5s">
     <h2>Discount & Coupons Subscription</h2>
     <p>Subscribe for Discount Coupons & Vouchers</p>
     <div class="input-group">
      <input type="text" class="form-control" placeholder="Enter Email Id...">
      <span class="input-group-btn">
        <button class="btn btn-success" type="button">Go!</button>
      </span>
    </div>
   </div>
  </div>
 </div>
</div>
<div class="copyB">
  <div class="container">
    <p>© 2016 JSR Farming. All Rights Reserved.</p>
  </div>
</div>
<a href="#" class="scrollToTop"></a>
<!--End Footer-->

<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
			jQuery('#demo2').skdslider({delay:5000, animationSpeed: 1000,showNextPrev:true,showPlayButton:false,autoSlide:true,animationType:'sliding'});
			jQuery('#demo3').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
			
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			  $(window).trigger('resize');
			});
			
		});
</script>
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

</body>
</html>