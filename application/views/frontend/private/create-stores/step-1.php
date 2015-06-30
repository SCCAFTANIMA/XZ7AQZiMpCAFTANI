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
            <!--/.orderStep end--> 
          </div>
          
          
          <div class="w100 clearfix">
            <div class="row userInfo">
              <div class="col-lg-12">
                <h2 class="block-title-2"> Saississez le nom de vitrine, description et l'adresse et tout les champs oubligatoire (*).  </h2>
              </div>
              
              <form>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group required">
                    <label for="name">Le nom<sup>*</sup> </label>
                    <input required type="text" class="form-control" name="name" id="name" placeholder="Le nom de votre vitrine">
                  </div>
                    
                 <div class="form-group required">
                     <label for="name">Vitrine ID<sup>*</sup> </label><br>
                     
                    <input style="" required type="text" class="form-control" name="name" id="name" placeholder="Exemple: vitrine.caftan.marocaine">
                    <i class="fa fa-link"></i>&nbsp;&nbsp;
                    <span><?=  site_url("")?><span  style="font-weight: bold;" id="signID">vitrine.caftan.marocaine</span></span>
                 </div>
                    
                  
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea rows="5" cols="26" name="description" class="form-control" id="description"></textarea>
                  </div>
                 
                  
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group required">
                      <label for="email">Adresse Email Professionnel<sup>*</sup> 
                          <span style="font-weight: normal;font-size: 12px;">Pour recevoir des notifications et des courriers de votre vitrine</span>
                      </label>
                      <input required type="text" class="form-control" name="emailpro" id="emailpro" placeholder="Adresse Email Professionnel">
                  </div>
                 
                  
                  <div class="form-group required">
                    <label for="InputMobile">Téléphone professionnel<sup>*</sup></label>
                    <input  required type="text"  name="telephonepro" id="telephonepro" class="form-control">
                  </div>
                    
                    
                    
                    
                    
                    <div class="form-group">
                        <i class="fa fa-facebook-official"></i>&nbsp;&nbsp;
                  
                    <input style="width: 50%;display: inline-block" type="text"  name="fb" id="fb" class="form-control" id="fb">
                  </div>
                    
                    
                    <div class="form-group">
                        <i class="fa fa-twitter"></i>&nbsp;&nbsp;
                    
                    <input style="width: 50%;display: inline-block" type="text"  name="twitter" id="twitter" class="form-control" id="fb">
                  </div>
                    
                    <div class="form-group">
                        <i class="fa fa-google-plus"></i>&nbsp;&nbsp;
                    
                    <input style="width: 50%;display: inline-block" type="text"  name="gplus" id="gplus" class="form-control" id="fb">
                  </div>
                    
                    
                  
                </div>
              </form>
            </div>
            <!--/row end--> 
            
          </div>
          <div class="cartFooter w100">
            <div class="box-footer">
              <div class="pull-left"> 
                  <a class="btn btn-default" href="<?=  site_url("")?>"> 
                      <i class="fa fa-times"></i> &nbsp; Annuler
                  </a> 
              </div>
              <div class="pull-right"> 
                  <a class="btn btn-primary btn-small "  href="creer-vitrine/steps?s=2#form"> Continuer &nbsp; 
                      <i class="fa fa-arrow-right hidden loading"></i> <i class="no-loading fa fa-spinner fa-spin"></i> </a> </div>
            </div>
          </div>
          <!--/ cartFooter --> 
          
        </div>
      </div>
      <!--/row end--> 
      
    </div>
    
    <!--/rightSidebar--> 
    
  </div> <!--/row-->
  
  <div style="clear:both"></div>
</div>
<!-- /.main-container-->
<div class="gap"> </div>