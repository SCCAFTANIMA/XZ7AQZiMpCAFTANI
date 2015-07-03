<div class="container main-container headerOffset">
  
    
    
    <?php
    
        getContent("private","create-stores/header");
    
    ?>
    
  
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="row userInfo">
        <div class="col-xs-12 col-sm-12">
          <div class="w100 clearfix">
            <ul class="orderStep ">
              <?php  getContent("private","create-stores/steps-nav"); ?>
            </ul>
            <!--/orderStep--> 
          </div>
          <div class="w100 clearfix">
            <div class="row userInfo">
              <div class="col-lg-12">
<!--                <h2 class="block-title-2"> Choose your delivery method </h2>-->
              </div>
              <div class="col-xs-12 col-sm-12">
                <div class="w100 row">
                  
                
                  <div class="form-group col-lg-12 col-sm-12 col-md-12 -col-xs-12">
                    <table style="width:100%"  class="table-bordered table">
                      <tbody>
                        
                        <tr>
                          <td valign="center">
                              <label class="radio">
                              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                              Pack start </label>
                          </td>
                          <td  valign="center"> By Road </td>
                      
                          <td  valign="center">Gratuit!</td>
                        </tr>
                        
                        <tr>
                          <td valign="center"><label class="radio">
                                  <label>
                              Pack start </label>
                          </td>
                          <td  valign="center"> By Road </td>
                      
                          <td  valign="center">Gratuit!</td>
                        </tr>
                        
                        <tr>
                          <td valign="center">
                              <label class="radio"><label> start </label>
                          </td>
                          <td  valign="center"> By Road </td>
                      
                          <td  valign="center">Gratuit!</td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
                
                <!--/row-->
                
                <div class="cartFooter w100">
                  <div class="box-footer">
                    <div class="pull-left"> 
                        <a class="btn btn-primary" href="creer-vitrine/steps?s=2#form"> 
                            <i class="fa fa-arrow-left"></i> &nbsp; Précédente </a> </div>
                    <div class="pull-right"> 
                        <button class="btn btn-primary btn-small " id="set-step-3"  href="creer-vitrine/steps?s=4#form"> Continuer &nbsp; 
                      <i class="fa fa-arrow-right loading"></i> <i class="no-loading hidden fa fa-spinner fa-spin"></i></button> </div>
                  </div>
                </div>
                <!--/ cartFooter --> 
                
              </div>
            </div>
          </div>
          <!--/row end--> 
          
        </div>
      </div>
    </div>
    <!--/row end-->
    
<!--    <div class="col-lg-3 col-md-3 col-sm-12 rightSidebar">
      <div class="w100 cartMiniTable">
        <table id="cart-summary" class="std table">
          <tbody>
            <tr >
              <td>Total products</td>
              <td class="price" >$216.51</td>
            </tr>
            <tr  style="">
              <td>Shipping</td>
              <td class="price" ><span class="success">Free shipping!</span></td>
            </tr>
            <tr class="cart-total-price ">
              <td>Total (tax excl.)</td>
              <td class="price" >$216.51</td>
            </tr>
            <tr >
              <td>Total tax</td>
              <td class="price" id="total-tax">$0.00</td>
            </tr>
            <tr >
              <td > Total </td>
              <td class=" site-color" id="total-price">$216.51</td>
            </tr>
          </tbody>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>-->
    <!--/rightSidebar--> 
    
  </div>
  <!--/row-->
  
  <div style="clear:both"></div>
  
</div>
<!-- /main-container -->


<div class="gap"> </div>



<script>
    
    
    <?php
    
        $this->browser->cleanToken("A-95655");
        $token =  $this->browser->setToken("A-95655");
                    
    
    ?>
        
    $("#set-step-3").on('click',function(){
        
        $.ajax({
            url:"ajax/createstore",
           data:{"token":"<?=$token?>","step":"3"},
            type: 'POST',
            dataType: 'json',
            beforeSend: function (xhr) {
                     $("#set-step-3").removeClass("btn-primary");
                     $("#set-step-3").addClass("btn-default");
                     $("#set-step-3 .no-loading").removeClass("hidden");
                     $("#set-step-3 .loading").addClass("hidden");
                     $("#set-step-3").attr("disabled",true);
            },
            success: function (data, textStatus, jqXHR) {
                
                   $("#set-step-3").addClass("btn-primary");
                   $("#set-step-3").removeClass("btn-default");
                   $("#set-step-3 .no-loading").addClass("hidden");
                   $("#set-step-3 .loading").removeClass("hidden");
                   $("#set-step-3").attr("disabled",false);
                   
                   document.location.href = data.url;
            }
        });
    });



</script>