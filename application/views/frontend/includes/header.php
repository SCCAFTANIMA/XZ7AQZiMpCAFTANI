<!DOCTYPE html>
<html lang="en">
<head>
    
    
<base href="<?=  base_url()?>" >
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="template/assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="template/assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="template/assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="template/ico/apple-touch-icon-57-precomposed.html">
<link rel="shortcut icon" href="assets/ico/favicon.png">
<title>Caftani - Responsive Shopping Theme</title>
<!-- Bootstrap core CSS -->
<link href="template/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- styles needed by minimalect -->
<link href="template/assets/css/jquery.minimalect.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="template/assets/css/style.css" rel="stylesheet">
<link href="template/assets/css/style-2.css" rel="stylesheet">
<!-- css3 animation effect for this template -->
<link href="template/assets/css/animate.min.css" rel="stylesheet">

<!-- styles needed by carousel slider -->
<link href="template/assets/css/owl.carousel.css" rel="stylesheet">
<link href="template/assets/css/owl.theme.css" rel="stylesheet">

<!-- styles needed by checkRadio -->
<link href="template/assets/css/ion.checkRadio.css" rel="stylesheet">
<link href="template/assets/css/ion.checkRadio.cloudy.css" rel="stylesheet">

<!-- styles needed by mCustomScrollbar -->
<link href="template/assets/css/jquery.mCustomScrollbar.css" rel="stylesheet">

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- Just for debugging purposes. -->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!-- include pace script for automatic web page progress bar  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<script>
    paceOptions = {
      elements: true
    };
</script>

</head>

<body>

<!-- Modal Login start -->
<div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog" >
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
        <h3 class="modal-title-site text-center" > Se connecter </h3>
      </div>
      <div class="modal-body">
        <div class="form-group login-username">
          <div >
            <input name="log" id="login-user" class="form-control input"  size="20" placeholder="Votre pseudo ou adresse email" type="text">
          </div>
        </div>
        <div class="form-group login-password">
          <div >
            <input name="Password" id="login-password" class="form-control input"  size="20" placeholder="Mot de passe" type="password">
          </div>
        </div>
        <div class="form-group">
          <div >
            <div class="checkbox login-remember">
              <label>
                <input name="rememberme"  value="forever" checked="checked" type="checkbox">
                Remember Me </label>
            </div>
          </div>
        </div>
        <div >
          <div >
            <input name="submit" class="btn  btn-block btn-lg btn-primary" value="Se connecter" type="submit">
          </div>
        </div>
        <!--userForm--> 
        
      </div>
      <div class="modal-footer">
        <p class="text-center">  <a data-toggle="modal"  data-dismiss="modal" href="#ModalSignup">Créer nouveau compte. </a> <br>
          <a href="#" > Mot de passe oublié? </a> </p>
      </div>
    </div>
    <!-- /.modal-content --> 
    
  </div>
  <!-- /.modal-dialog --> 
  
</div>
<!-- /.Modal Login --> 

<!-- Modal Signup start -->
<div class="modal signUpContent fade" id="ModalSignup" tabindex="-1" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
        <h3 class="modal-title-site text-center" > REGISTER </h3>
      </div>
      <div class="modal-body">
        <div class="control-group"> <a class="fb_button btn  btn-block btn-lg " href="#"> SIGNUP WITH FACEBOOK </a> </div>
        <h5 style="padding:10px 0 10px 0;" class="text-center"> OR </h5>
        <div class="form-group reg-username">
          <div >
            <input name="login"  class="form-control input"  size="20" placeholder="Enter Username" type="text">
          </div>
        </div>
        <div class="form-group reg-email">
          <div >
            <input name="reg"  class="form-control input"  size="20" placeholder="Enter Email" type="text">
          </div>
        </div>
        <div class="form-group reg-password">
          <div >
            <input name="password"  class="form-control input"  size="20" placeholder="Password" type="password">
          </div>
        </div>
        <div class="form-group">
          <div >
            <div class="checkbox login-remember">
              <label>
                <input name="rememberme" id="rememberme" value="forever" checked="checked" type="checkbox">
                Remember Me </label>
            </div>
          </div>
        </div>
        <div >
          <div >
            <input name="submit" class="btn  btn-block btn-lg btn-primary" value="REGISTER" type="submit">
          </div>
        </div>
        <!--userForm--> 
        
      </div>
      <div class="modal-footer">
        <p class="text-center"> Already member? <a data-toggle="modal"  data-dismiss="modal" href="#ModalLogin"> Sign in </a> </p>
      </div>
    </div>
    <!-- /.modal-content --> 
    
  </div>
  <!-- /.modal-dialog --> 
  
</div>
<!-- /.ModalSignup End --> 

<!-- Fixed navbar start -->
<div class="navbar navbar-yanky navbar-fixed-top megamenu" role="navigation">
  <div class="navbar-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
          <div class="pull-left ">
            <ul class="userMenu ">
                <li> <a href="page/apropos"> <span class="hidden-xs">À PROPOS</span><i class="glyphicon glyphicon-info-sign hide visible-xs "></i> </a> </li>
              <li> <a href="page/contact"> <span class="hidden-xs">CONTACT</span><i class="glyphicon glyphicon-info-sign hide visible-xs "></i> </a> </li>
              <li class="phone-number"> <a  href="callto:+990123456789"> <span> <i class="glyphicon glyphicon-phone-alt "></i></span> <span class="hidden-xs" style="margin-left:5px"> +212 522 444 000 </span> </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
          <div class="pull-right">
            <ul class="userMenu">
                <li> <a href="creer-vitrine/steps?s=1"><span class="hidden-xs"> créer vitrine</span> <i class="glyphicon glyphicon-user hide visible-xs "></i></a> </li>
              <li> <a href="page/compte"><span class="hidden-xs"> MON COMPTE</span> <i class="glyphicon glyphicon-user hide visible-xs "></i></a> </li>
              <li> <a href="#"  data-toggle="modal" data-target="#ModalLogin"> <span class="hidden-xs">SE CONNECTER</span> <i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a> </li>
              <li class="hidden-xs"> <a href="#"  data-toggle="modal" data-target="#ModalSignup"> S'INSCRIRE </a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.navbar-top-->
  
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> </button>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart"> <i class="fa fa-shopping-cart colorWhite"> </i> <span class="cartRespons colorWhite"> Panier (210.00 MAD) </span> </button>
      <a class="navbar-brand " href=""> <img src="template/images/logo.png" alt="YANKY"> </a> 
      
      <!-- this part for mobile -->
      <div class="search-box pull-right hidden-lg hidden-md hidden-sm">
        <div class="input-group">
          <button class="btn btn-nobg getFullSearch" type="button"> <i class="fa fa-search"> </i> </button>
        </div>
        <!-- /input-group --> 
        
      </div>
    </div>
    
    <!-- this part is duplicate from cartMenu  keep it for mobile -->
    <div class="navbar-cart  collapse">
      <div class="cartMenu  col-lg-4 col-xs-12 col-md-4 ">
        <div class="w100 miniCartTable scroll-pane">
          <table  >
            <tbody>
              <tr class="miniCartProduct">
                <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="template/images/product/3.jpg" alt="img"> </a> </div></td>
                <td style="width:40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> YANKY T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td  style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="width:5%" class="delete"><a > x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="template/images/product/2.jpg" alt="img"> </a> </div></td>
                <td  style="width:40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> YANKY T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td   style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="width:5%" class="delete"><a > x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="template/images/product/5.jpg" alt="img"> </a> </div></td>
                <td  style="width:40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> YANKY T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td   style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="width:5%" class="delete"><a > x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="template/images/product/3.jpg" alt="img"> </a> </div></td>
                <td  stylewidth:40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> YANKY T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td   style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="width:5%" class="delete"><a > x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="template/images/product/3.jpg" alt="img"> </a> </div></td>
                <td  style="width:40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> YANKY T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td   style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="width:5%" class="delete"><a > x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="template/images/product/4.jpg" alt="img"> </a> </div></td>
                <td  style="width:40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> YANKY T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td   style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="width:5%" class="delete"><a > x </a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--/.miniCartTable-->
        
        <div class="miniCartFooter  miniCartFooterInMobile text-right">
          <h3 class="text-right subtotal"> Subtotal: $210 </h3>
          <a class="btn btn-sm btn-danger"> <i class="fa fa-shopping-cart"> </i> VIEW CART </a> <a class="btn btn-sm btn-primary"> CHECKOUT </a> </div>
        <!--/.miniCartFooter--> 
        
      </div>
      <!--/.cartMenu--> 
    </div>
    <!--/.navbar-cart-->
    
    <div class="navbar-collapse collapse">
	<nav>
      <ul class="nav navbar-nav">






<li class="active"> <a href="#"> Acceuil </a> </li>

        <li class="dropdown megamenu-fullwidth"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> Caftani  <b class="caret"> </b> </a>
          <ul class="dropdown-menu">
            <li class="megamenu-content ">
              <ul class="col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl">
                <li class="no-border">
                  <p class="promo-1"> <strong> Nouvelle COLLECTION </strong> </p>
                </li>
                <li> <a href="category.html"> Tous les Caftans </a> </li>
                <li> <a href="category.html"> Caftan Marocain </a> </li>
                <li> <a href="category.html"> Caftani Modèrne </a> </li>
                <li> <a href="category.html"> Caftani traditionnel </a> </li>
                <li> <a href="category.html"> Nouveaux Caftani </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3  col-xs-4">
                <li> <a class="newProductMenuBlock" href="product-details.html"> <img class="img-responsive" src="template/images/site/promo1.jpg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> TKACHETI </span> </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                <li> <a class="newProductMenuBlock" href="product-details.html"> <img class="img-responsive" src="template/images/site/promo2.jpg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> BELDI </span> </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                <li> <a class="newProductMenuBlock" href="product-details.html"> <img class="img-responsive" src="template/images/site/promo3.jpg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> ROMI </span> </a> </li>
              </ul>
            </li>
          </ul>
        </li>


        <li> <a href="#"> TAKCHITA </a> </li>
      <li> <a href="#"> DJELLABA </a> </li>
      <li> <a href="#"> JABADOR </a> </li>
       <li> <a href="#"> GANDOURA </a> </li>
        
        <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
        <li class="dropdown megamenu-80width "> 
            <a data-toggle="dropdown" class="dropdown-toggle" href="#"> TISSUS <b class="caret"> </b> </a>
          <ul class="dropdown-menu">
            <li class="megamenu-content"> 
              
              <!-- megamenu-content -->
              
              <ul class="col-lg-2  col-sm-2 col-md-2  unstyled noMarginLeft">
                <li>
                  <p> <strong> Evenement  </strong> </p>
                </li>
                <li> <a href="#"> Mariage </a> </li>
                <li> <a href="#"> Fiançaille </a> </li>
                <li> <a href="#"> Anniversaires </a> </li>
                <li> <a href="#"> Cérémonies </a> </li>
                <li> <a href="#"> Dokhla </a> </li>
                <li> <a href="#"> Circoncision </a> </li>
                <li> <a href="#"> Fêtes traditionnelle </a> </li>
                <li> <a href="#"> Ramadanesque </a> </li>
              </ul>
             
             
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                <li class="no-margin productPopItem "> <a href="product-details.html"> 
                        <img class="img-responsive" src="template/images/site/g4.jpg" alt="img"> 
                    </a> 
                    <a class="text-center productInfo alpha90" href="product-details.html"> 
                        Eodem modo typi <br>
                    <span> $60 </span> 
                    </a> 
                </li>
              </ul>
               <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                <li class="no-margin productPopItem "> <a href="product-details.html"> 
                        <img class="img-responsive" src="template/images/site/g4.jpg" alt="img"> 
                    </a> 
                    <a class="text-center productInfo alpha90" href="product-details.html"> 
                        Eodem modo typi <br>
                    <span> $60 </span> 
                    </a> 
                </li>
              </ul>
               <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                <li class="no-margin productPopItem "> <a href="product-details.html"> 
                        <img class="img-responsive" src="template/images/site/g4.jpg" alt="img"> 
                    </a> 
                    <a class="text-center productInfo alpha90" href="product-details.html"> 
                        Eodem modo typi <br>
                    <span> $60 </span> 
                    </a> 
                </li>
              </ul>
             
            </li>
          </ul>
        </li>




























        
      </ul>
	  </nav>
      
      <!--- this part will be hidden for mobile version -->
      <div class="nav navbar-nav navbar-right hidden-xs">
        <div class="dropdown  cartMenu "> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-shopping-cart"> </i> <span class="cartRespons"> &nbsp;( 210 DH ) </span> <b class="caret"> </b> </a>
          <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
            <div class="w100 miniCartTable scroll-pane">
              <table>
                <tbody>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="template/images/product/3.jpg" alt="img"> </a> </div></td>
                    <td style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="product-details.html"> YANKY Tshirt DO9 </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> $22 </span> </div>
                      </div></td>
                    <td  style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                    <td  style="width:15%" class="miniCartSubtotal"><span> 33 MAD </span></td>
                    <td  style="width:5%" class="delete"><a > x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="template/images/product/2.jpg" alt="img"> </a> </div></td>
                    <td  style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="product-details.html"> TShirt YANKY 09 </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> $15 </span> </div>
                      </div></td>
                    <td   style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                    <td  style="width:15%" class="miniCartSubtotal"><span> 120 MAD </span></td>
                    <td  style="width:5%" class="delete"><a > x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="template/images/product/5.jpg" alt="img"> </a> </div></td>
                    <td  style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="product-details.html"> Tshir 2014 </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> $30 </span> </div>
                      </div></td>
                    <td   style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                    <td  style="width:15%" class="miniCartSubtotal"><span> 80 MAD </span></td>
                    <td  style="width:5%" class="delete"><a > x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="template/images/product/3.jpg" alt="img"> </a> </div></td>
                    <td  style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="product-details.html"> YANKY T shirt DO20 </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> $15 </span> </div>
                      </div></td>
                    <td   style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                    <td  style="width:15%" class="miniCartSubtotal"><span> 55 MAD </span></td>
                    <td  style="width:5%" class="delete"><a > x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="template/images/product/4.jpg" alt="img"> </a> </div></td>
                    <td  style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="product-details.html"> T shirt Black </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> $44 </span> </div>
                      </div></td>
                    <td   style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                    <td  style="width:15%" class="miniCartSubtotal"><span> 40 MAD </span></td>
                    <td  style="width:5%" class="delete"><a > x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="template/images/site/winter.jpg" alt="img"> </a> </div></td>
                    <td  style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="product-details.html"> G Star T shirt </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> $80 </span> </div>
                      </div></td>
                    <td   style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                    <td  style="width:15%" class="miniCartSubtotal"><span> 8.80 MAD </span></td>
                    <td  style="width:5%" class="delete"><a > x </a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!--/.miniCartTable-->
            
            <div class="miniCartFooter text-right">
              <h3 class="text-right subtotal"> Subtotal: $210 </h3>
              <a class="btn btn-sm btn-danger"> <i class="fa fa-shopping-cart"> </i> VIEW CART </a> <a class="btn btn-sm btn-primary"> CHECKOUT </a> </div>
            <!--/.miniCartFooter--> 
            
          </div>
          <!--/.dropdown-menu--> 
        </div>
        <!--/.cartMenu-->
        
<!--        <div class="search-box">
          <div class="input-group">
            <button class="btn btn-nobg getFullSearch" type="button"> <i class="fa fa-search"> </i> </button>
          </div>
           /input-group  
          
        </div>-->





            <div class="search-box static-search pull-right">
        
        <form id="search-form1" method="GET" action="#" role="search" class="navbar-form">
        <div class="input-group">
            <input type="text" style="padding:6px 6px;" name="q" placeholder="Search..." class="form-control">
            <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
        
          
          <!-- /input-group --> 
          
        </div>




        <!--/.search-box --> 
      </div>
      <!--/.navbar-nav hidden-xs--> 
    </div>
    <!--/.nav-collapse --> 
    
  </div>
  <!--/.container -->
  
  <div class="search-full text-right"> <a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i> </a>
    <div class="searchInputBox pull-right">
      <input type="search"  data-searchurl="search?=" name="q" placeholder="start typing and hit enter to search" class="search-input">
      <button class="btn-nobg search-btn" type="submit"> <i class="fa fa-search"> </i> </button>
    </div>
  </div>
  <!--/.search-full--> 
  
</div>
<!-- /.Fixed navbar  -->