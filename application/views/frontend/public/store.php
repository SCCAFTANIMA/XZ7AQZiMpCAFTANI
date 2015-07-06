<?php

    $store = $store[0];


?>

<div class="container main-container headerOffset"> 
  
  <!-- Main component call to action -->
  
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
          <li><a href="<?=  site_url("")?>">Accueil</a> </li>
        <li class="active">WOMEN COLLECTION  </li>
      </ul>
    </div>
  </div>  <!-- /.row  --> 
  
  <div class="row">
  
   <!--left column-->
  
    <div class="col-lg-3 col-md-3 col-sm-12">
        
       
       <?php if($this->stores->IsStoreAdmin()): ?>
        
        <div class="panel-group" id="accordionNo">
       <!--Category--> 
        <div class="panel panel-default">
        
            
            
            <div id="collapseCategory" class="panel-collapse collapse in">
            <div class="panel-body">
                
                <a href="<?=$store->storeid."/addproduct"?>"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Ajouter des produits</a> 
                <div class="clearfix clear"></div>
                <a href="page/compte/vitrines?id=1&infos=1"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Modifier la vitrine</a>
                <div class="clearfix clear"></div>
                <a href="page/compte/vitrines?id=1&infos=1"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Les commandes (23)</a>
                
            </div>
          </div>
        </div>
      </div>
        <?php endif; ?>
        
        
        
        
        
        
        
      <div class="panel-group" id="accordionNo">
       <!--Category--> 
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> 
            <a data-toggle="collapse" href="#collapseCategory" class="collapseWill"> 
            <span class="pull-left"> <i class="fa fa-caret-right"></i></span> Les meilleurs produits 
            </a> 
            </h4>
          </div>
            
            
            
            <div id="collapseCategory" class="panel-collapse collapse in">
            <div class="panel-body">
              
                 <?php for($i=0;$i<5;$i++): ?>
                <div class="product">
		   
                              <div class="image"> <a href="product-details.html"><img src="template/images/product/36.jpg" alt="img" class="img-responsive"></a> </div>
                              <div class="description">
                                <h4><a href="product-details.html">Black Dress</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                             </div>
            
                 
                    </div>
                <?php endfor; ?>
                
                
            </div>
          </div>
        </div>
      </div>
    
    </div>
    
    
    <!--right column-->
    <div class="col-lg-9 col-md-9 col-sm-12">
    
      <div class="w100 clearfix category-top">
          <h2> Store name &nbsp;&nbsp;</h2>
        <p>Description Description Description Description Description Description Description Description </p>
        
          <p>
              <a href="#"><i class="fa fa-facebook-official"></i>&nbsp;amine.maagoul</a>&nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="#"><i class="fa fa-twitter"></i>&nbsp;amine.maagoul</a>&nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="#"><i class="fa fa-google-plus-square"></i>&nbsp;amine.maagoul</a>
              
          </p>
          
        
      </div><!--/.category-top-->
      
     
      
      <div class="w100 productFilter clearfix">
        <p class="pull-left"> Affichage <strong>9</strong>  produits </p>
        <div class="pull-right ">
          <div class="change-order pull-right">
            <select class="form-control" name="orderby" style="display: none;">
              <option selected="selected">Default sorting</option>
              <option value="popularity">Sort by popularity</option>
              <option value="rating">Sort by average rating</option>
              <option value="date">Sort by newness</option>
              <option value="price">Sort by price: low to high</option>
              <option value="price-desc">Sort by price: high to low</option>
            </select><div class="minict_wrapper"><input type="text" value="Default sorting" placeholder="Default sorting"><ul style="display: none;"><li data-value="Default sorting" class="selected minict_first">Default sorting</li><li data-value="popularity" class="">Sort by popularity</li><li data-value="rating" class="">Sort by average rating</li><li data-value="date" class="">Sort by newness</li><li data-value="price" class="">Sort by price: low to high</li><li data-value="price-desc" class="minict_last">Sort by price: high to low</li><li class="minict_empty" style="display: none;">No results match your keyword.</li></ul></div>
          </div>
          <div class="change-view pull-right"> 
          <a href="#" title="Grid" class="grid-view"> <i class="fa fa-th-large"></i> </a> 
          <a href="#" title="List" class="list-view "><i class="fa fa-th-list"></i></a> </div>
        </div>
      </div> <!--/.productFilter-->
      <div class="row  categoryProduct xsResponse clearfix">
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
              <div class="product">
			   <a data-placement="left" data-original-title="Add to Wishlist" data-toggle="tooltip" class="add-fav tooltipHere">
          <i class="glyphicon glyphicon-heart"></i>
          </a>
                <div class="image"> <a href="product-details.html"><img src="template/images/product/30.jpg" alt="img" class="img-responsive"></a>
                  <div class="promotion"> <span class="new-product"> NEW</span> <span class="discount">15% OFF</span> </div>
                </div>
                <div class="description">
                  <h4><a href="product-details.html">Yellow Net Dress</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                  <span class="size">XL / XXL / S </span> </div>
                <div class="price"> 
                  	<span>$25</span>
                  	
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
              </div>
            </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
              <div class="product">
			   <a data-placement="left" data-original-title="Add to Wishlist" data-toggle="tooltip" class="add-fav tooltipHere">
          <i class="glyphicon glyphicon-heart"></i>
          </a>
                <div class="image"> <a href="product-details.html"><img src="images/product/31.jpg" alt="img" class="img-responsive"></a>
                  <div class="promotion"> <span class="discount">15% OFF</span> </div>
                </div>
                <div class="description">
                  <h4><a href="product-details.html">White TShirt </a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                  <span class="size">XL / XXL / S </span> </div>
                <div class="price"> 
                  	<span>$25</span>
                  	
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
              </div>
            </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
		   <a data-placement="left" data-original-title="Add to Wishlist" data-toggle="tooltip" class="add-fav tooltipHere">
          <i class="glyphicon glyphicon-heart"></i>
          </a>
            <div class="image"> <a href="product-details.html"><img src="images/product/34.jpg" alt="img" class="img-responsive"></a>
              <div class="promotion"> <span class="new-product"> NEW</span> </div>
            </div>
            <div class="description">
              <h4><a href="product-details.html">Ladies Orange Top</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$35</span>
                  	<span class="old-price">$75</span>
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
		   <a data-placement="left" data-original-title="Add to Wishlist" data-toggle="tooltip" class="add-fav tooltipHere">
          <i class="glyphicon glyphicon-heart"></i>
          </a>
            <div class="image"> <a href="product-details.html"><img src="images/product/35.jpg" alt="img" class="img-responsive"></a> </div>
            <div class="description">
              <h4><a href="product-details.html">Blue Party Dress</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$45</span>
                  	
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
		   <a data-placement="left" data-original-title="Add to Wishlist" data-toggle="tooltip" class="add-fav tooltipHere">
          <i class="glyphicon glyphicon-heart"></i>
          </a>
            <div class="image"> <a href="product-details.html"><img src="images/product/33.jpg" alt="img" class="img-responsive"></a> </div>
            <div class="description">
              <h4><a href="product-details.html">Brown Long Shirt</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$55</span>
                  	
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
		   <a data-placement="left" data-original-title="Add to Wishlist" data-toggle="tooltip" class="add-fav tooltipHere">
          <i class="glyphicon glyphicon-heart"></i>
          </a>
            <div class="image"> <a href="product-details.html"><img src="images/product/10.jpg" alt="img" class="img-responsive"></a> </div>
            <div class="description">
              <h4><a href="product-details.html">Shoulderless Sweater </a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$65</span>
                  	
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
		   <a data-placement="left" data-original-title="Add to Wishlist" data-toggle="tooltip" class="add-fav tooltipHere">
          <i class="glyphicon glyphicon-heart"></i>
          </a>
            <div class="image"> <a href="product-details.html"><img src="images/product/37.jpg" alt="img" class="img-responsive"></a> </div>
            <div class="description">
              <h4><a href="product-details.html">Green Blouse</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$75</span>
                  	<span class="old-price">$95</span>
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
		   <a data-placement="left" data-original-title="Add to Wishlist" data-toggle="tooltip" class="add-fav tooltipHere">
          <i class="glyphicon glyphicon-heart"></i>
          </a>
            <div class="image"> <a href="product-details.html"><img src="images/product/36.jpg" alt="img" class="img-responsive"></a> </div>
            <div class="description">
              <h4><a href="product-details.html">Black Dress</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$85</span>
                  	<span class="old-price">$95</span>
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
		   <a data-placement="left" data-original-title="Add to Wishlist" data-toggle="tooltip" class="add-fav tooltipHere">
          <i class="glyphicon glyphicon-heart"></i>
          </a>
            <div class="image"> <a href="product-details.html"><img src="images/product/30.jpg" alt="img" class="img-responsive"></a> </div>
            <div class="description">
              <h4><a href="product-details.html">Ladies Orange Top </a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$95</span>
                  	
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
        <!--/.item-->
        <!--/.item-->
        <!--/.item-->
    </div> <!--/.categoryProduct || product content end-->
      
      <div class="w100 categoryFooter">
        <div class="pagination pull-left no-margin-top">
          <ul class="pagination no-margin-top">
            <li><a href="#">«</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">»</a></li>
          </ul>
        </div>
        <div class="pull-right pull-right col-sm-4 col-xs-12 no-padding text-right text-left-xs">
          <p>Showing 1–450 of 9 results</p>
        </div>
      </div> <!--/.categoryFooter-->
    </div><!--/right column end-->
  </div><!-- /.row  --> 
</div>