<div class="container main-container headerOffset">
  
    
    
    <?php
    
        getContent("private","create-stores/header");
    
    ?>
    
  
  <div class="row" >
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
             
                
                
              <div class="col-xs-12 col-sm-12">
                
                  
                  <div class="w100 clearfix">
            <div class="row userInfo">
              <div class="col-lg-12">
                <h2 class="block-title-2"> Saisissez le nom de vitrine, description et l'adresse et tout les champs obligatoire (*).  </h2>
              </div>
              
                <form style="min-height: 300px;">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group required">
                    <label for="name">Le nom &nbsp;:&nbsp;&nbsp;</label>&nbsp;<?=$this->stores->getValue("data_step_1","name")?>
                    
                   </div>
                    
                 <div class="form-group required">
                     <label for="name">Vitrine ID &nbsp;:&nbsp;&nbsp;</label>&nbsp;<?=$this->stores->getValue("data_step_1","storeid")?><br>
                    <i class="fa fa-link"></i>&nbsp;&nbsp;
                    <span><?=  site_url("")?><span style="font-weight: bold;" id="SID"><?=$this->stores->getValue("data_step_1","storeid")?></span></span>
                 </div>
              
                  
                  <div class="form-group">
                    <label for="description">Description</label>
                     <label class="msg-error-form description"></label>
                    <?=  nl2br($this->stores->getValue("data_step_1","description"))?>
                  </div>
                 
                  
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group required">
                      <label for="email">Adresse Email Professionnel &nbsp;:&nbsp;&nbsp;</label>
                      <label class="msg-error-form emailpro"></label>
                      <?=  $this->stores->getValue("data_step_1","emailpro")?>
                  </div>
                 
                  
                  <div class="form-group required">
                    <label for="InputMobile">Téléphone professionnel &nbsp;:&nbsp;&nbsp;</label>
                    
                    <label class="msg-error-form telephonepro"></label>
                   
                    <?=  $this->stores->getValue("data_step_1","telephonepro")?>
                  </div>
                    
                    
                    
                    
                    <?php if($this->stores->getValue("data_step_1","fb")!=""): ?>
                    <div class="form-group">
                        
                  
                        
                        &nbsp;&nbsp;<label class="msg-error-form fb"></label><br>
                        <i class="fa fa-facebook-official"></i>&nbsp;&nbsp;facebook.com/
                     <?=  $this->stores->getValue("data_step_1","fb")?>
                    
                    </div>
                    <?php endif; ?>
                    
                    
                    <?php if($this->stores->getValue("data_step_1","twitter")!=""): ?>
                    <div class="form-group">
                       
                    
                        &nbsp;&nbsp;<label class="msg-error-form twitter"></label><br>
                         <i class="fa fa-twitter"></i>&nbsp;&nbsp;
                         twitter.com/<?=  $this->stores->getValue("data_step_1","gplus")?>
                  </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if($this->stores->getValue("data_step_1","gplus")!=""): ?>
                    <div class="form-group">
                        
                    
                        &nbsp;&nbsp;<label class="msg-error-form gplus"></label><br>
                        <i class="fa fa-google-plus"></i>&nbsp;&nbsp;
                         plus.google.com/<?=  $this->stores->getValue("data_step_1","gplus")?>
                    </div>
                <?php endif; ?>

                                      
                </div>
              </form>
            </div>
            <!--/row end--> 
            
          </div>
                
                <!--/row-->
                
                <div class="cartFooter w100">
                  <div class="box-footer">
                    <div class="pull-left"> 
                        <a class="btn btn-primary" href="creer-vitrine/steps?s=3#form"> <i class="fa fa-arrow-left"></i> 
                            &nbsp; Précédente </a> </div>
                    <div class="pull-right"> 
                        <a href="creer-vitrine/steps?s=5#form" id="confirm" class="btn btn-primary btn-small " > Confirmer &nbsp; 
                            <i class="fa fa-arrow-right  loading"></i> <i class="no-loading hidden fa fa-spinner fa-spin"></i> </a> </div>
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
                    
           $this->browser->cleanToken("C-94555");
           $token =  $this->browser->setToken("C-94555");
                    
      ?>
    $("#confirm").on('click',function(){
        
        $.ajax({
            url:"ajax/createstore",
            data:{"step":4,"token":"<?=$token?>"},
            type: 'POST',
            dataType: 'json',
            beforeSend: function (xhr) {

                     $("#confirm").removeClass("btn-primary");
                     $("#confirm").addClass("btn-default");
                     $("#confirm .no-loading").removeClass("hidden");
                     $("#confirm .loading").addClass("hidden");
                     
                 },
                 success: function (data, textStatus, jqXHR) {
                     
                     console.log(data);
                     $("#confirm").addClass("btn-primary");
                     $("#confirm").removeClass("btn-default");
                     $("#confirm .no-loading").addClass("hidden");
                     $("#confirm .loading").removeClass("hidden");
                     
                     document.location.href = data.url;
                 },
                error: function (jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR);
                 }
        });
        
        return false;
    });
    

</script>