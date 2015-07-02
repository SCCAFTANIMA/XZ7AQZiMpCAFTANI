
<footer>
  <div class="footer" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
          <h3> Support </h3>
          <ul>
            <li class="supportLi">
              <p> Lorem ipsum dolor sit amet, consectetur </p>
              <h4> <a class="inline" href="callto:+99123456789"> <strong> <i class="fa fa-phone"> </i>99 012345 6789</strong> </a> </h4>
              <h4> <a class="inline" href="mailto:help@yanky.com"> <i class="fa fa-envelope-o"> </i> help@yanky.com </a> </h4>
            </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> Shop </h3>
          <ul>
            <li> <a href="index.html"> Home </a> </li>
            <li> <a href="category.html"> Category </a> </li>
            <li> <a href="sub-category.html"> Sub Category </a> </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> Information </h3>
          <ul>
            <li> <a href="product-details.html"> Product Details </a> </li>
            <li> <a href="product-details-style2.html"> Product Details Version 2 </a> </li>
            <li> <a href="cart.html"> Cart </a> </li>
            <li> <a href="about-us.html"> About us </a> </li>
            <li> <a href="about-us-2.html"> About us 2 </a> </li>
            <li> <a href="contact-us.html"> Contact us </a> </li>
            <li> <a href="contact-us-2.html"> Contact us 2 </a> </li>
            <li> <a href="user-information.html"> User Information </a> </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> My Account </h3>
          <ul>
            <li> <a href="account-1.html"> Account Login </a> </li>
            <li> <a href="account.html"> My Account </a> </li>
            <li> <a href="my-address.html"> My Address </a> </li>
            <li> <a href="wishlist.html"> Wisth list </a> </li>
            <li> <a href="order-list.html"> Order list </a> </li>
          </ul>
        </div>
        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
          <h3> Stay in touch </h3>
          <ul>
            <li>
              <div class="input-append newsLatterBox text-center">
                <input type="text" class="full text-center"  placeholder="Email ">
                <button class="btn  bg-gray" type="button"> Subscribe <i class="fa fa-long-arrow-right"> </i> </button>
              </div>
            </li>
          </ul>
          <ul class="social">
            <li> <a href="http://facebook.com/"> <i class=" fa fa-facebook"> &nbsp; </i> </a> </li>
            <li> <a href="http://twitter.com/"> <i class="fa fa-twitter"> &nbsp; </i> </a> </li>
            <li> <a href="https://plus.google.com/"> <i class="fa fa-google-plus"> &nbsp; </i> </a> </li>
            <li> <a href="http://youtube.com/"> <i class="fa fa-pinterest"> &nbsp; </i> </a> </li>
            <li> <a href="http://youtube.com/"> <i class="fa fa-youtube"> &nbsp; </i> </a> </li>
          </ul>
        </div>
      </div>
      <!--/.row--> 
    </div>
    <!--/.container--> 
  </div>
  <!--/.footer-->
  
  <div class="footer-bottom">
    <div class="container">
      <p class="pull-left"> &copy; YANKY 2014. All right reserved. </p>
      <div class="pull-right paymentMethodImg"> 
          <img height="30" class="pull-right" src="template/images/site/payment/master_card.png" alt="img" > 
          <img height="30" class="pull-right" src="template/images/site/payment/paypal.png" alt="img" > 
          <img height="30" class="pull-right" src="template/images/site/payment/american_express_card.png" alt="img" > 
          <img  height="30" class="pull-right" src="template/images/site/payment/discover_network_card.png" alt="img" >
          <img  height="30" class="pull-right" src="template/images/site/payment/google_wallet.png" alt="img" > </div>
    </div>
  </div>
  <!--/.footer-bottom--> 
</footer>

<!-- Le javascript
================================================== --> 
<script src="template/assets/js/pace.min.js"></script>

<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="template/assets/js/jquery/1.11.1/jquery-1.11.1.min.js"></script>

<script src="template/assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="template/assets/js/idangerous.swiper-2.1.min.js"></script> 
<script>
  var mySwiper = new Swiper('.swiper-container',{
	pagination: '.box-pagination',
 keyboardControl: true,
    paginationClickable: true,
    slidesPerView: 'auto',
	autoResize:true,
	resizeReInit:true,
  })
  
  	 $('.prevControl').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.nextControl').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })
  </script> 

<!-- include jqueryCycle plugin --> 
<script src="template/assets/js/jquery.cycle2.min.js"></script> 

<!-- include easing plugin --> 
<script src="template/assets/js/jquery.easing.1.3.js"></script> 

<!-- include  parallax plugin --> 
<script type="text/javascript"  src="template/assets/js/jquery.parallax-1.1.js"></script> 

<!-- optionally include helper plugins --> 
<script type="text/javascript"  src="template/assets/js/helper-plugins/jquery.mousewheel.min.js"></script> 

<!-- include mCustomScrollbar plugin //Custom Scrollbar  --> 

<script type="text/javascript" src="template/assets/js/jquery.mCustomScrollbar.js"></script> 

<!-- include checkRadio plugin //Custom check & Radio  --> 
<script type="text/javascript" src="template/assets/js/ion-checkRadio/ion.checkRadio.min.js"></script> 

<!-- include grid.js // for equal Div height  --> 
<script src="template/assets/js/grids.js"></script> 

<!-- include carousel slider plugin  --> 
<script src="template/assets/js/owl.carousel.min.js"></script> 

<!-- jQuery minimalect // custom select   --> 
<!--<script src="template/assets/js/jquery.minimalect.min.js"></script> -->

<!-- include touchspin.js // touch friendly input spinner component   --> 
<script src="template/assets/js/bootstrap.touchspin.js"></script> 

<!-- include custom script for site  -->

<script src="template/assets/js/script.js"></script>
</body>
</html>
