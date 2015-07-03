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
                <h2 class="block-title-2"> Saisissez le nom de vitrine, description et l'adresse et tout les champs obligatoire (*).  </h2>
              </div>
              
              <form>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group required">
                    <label for="name">Le nom<sup>*</sup> </label>
                    
                    <label class="msg-error-form name"></label>
                    <input required type="text" class="form-control" value="<?=$this->stores->getValue("data_step_1","name")?>" name="name" id="name" placeholder="Le nom de votre vitrine">
                  </div>
                    
                 <div class="form-group required">
                     <label for="name">Vitrine ID<sup>*</sup> </label>
                     <label class="msg-error-form storeid"></label>
                    <input style="" required type="text" class="form-control" value="<?=$this->stores->getValue("data_step_1","storeid")?>" name="storeid" id="storeid" placeholder="Exemple: vitrine.caftan.marocaine">
                    <i class="fa fa-link"></i>&nbsp;&nbsp;
                    <span><?=  site_url("")?><span  style="font-weight: bold;" id="SID">vitrine.caftan.marocaine</span></span>
                 </div>
              
                  
                  <div class="form-group">
                    <label for="description">Description</label>
                     <label class="msg-error-form description"></label>
                    <textarea rows="5" cols="26" name="description" class="form-control" value="" id="description"><?=$this->stores->getValue("data_step_1","description")?></textarea>
                  </div>
                 
                  
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group required">
                      <label for="email">Adresse Email Professionnel<sup>*</sup> 
                          <span style="font-weight: normal;font-size: 12px;">Pour recevoir des notifications et des courriers de votre vitrine</span>
                      </label>
                      <label class="msg-error-form emailpro"></label>
                      <input required type="text" class="form-control" value="<?=$this->stores->getValue("data_step_1","emailpro")?>" name="emailpro" id="emailpro" placeholder="Adresse Email Professionnel">
                  </div>
                 
                  
                  <div class="form-group required">
                    <label for="InputMobile">Téléphone professionnel<sup>*</sup></label>
                    
                    <label class="msg-error-form telephonepro"></label>
                    <input  required type="text"  name="telephonepro" id="telephonepro" class="form-control" value="<?=$this->stores->getValue("data_step_1","telephonepro")?>" placeholder="+212 522 668 698 ou 0522 668 698">
                  </div>
                    
                    
                    
                    
                    
                    <div class="form-group">
                        
                  
                        
                        &nbsp;&nbsp;<label class="msg-error-form fb"></label><br>
                        <i class="fa fa-facebook-official"></i>&nbsp;&nbsp;
                    <input style="width: 50%;display: inline-block" type="text"  name="fb" value="<?=$this->stores->getValue("data_step_1","fb")?>" id="fb" class="form-control" id="fb">
                  </div>
                    
                    
                    <div class="form-group">
                       
                    
                        &nbsp;&nbsp;<label class="msg-error-form twitter"></label><br>
                         <i class="fa fa-twitter"></i>&nbsp;&nbsp;
                    <input style="width: 50%;display: inline-block" type="text"  name="twitter" id="twitter" class="form-control" value="<?=$this->stores->getValue("data_step_1","twitter")?>" id="fb">
                  </div>
                    
                    <div class="form-group">
                        
                    
                        &nbsp;&nbsp;<label class="msg-error-form gplus"></label><br>
                        <i class="fa fa-google-plus"></i>&nbsp;&nbsp;
                    <input style="width: 50%;display: inline-block" type="text"  name="gplus" id="gplus" class="form-control" value="<?=$this->stores->getValue("data_step_1","gplus")?>" id="fb">
                  </div>
                    
                    <?php
                    
                    
                    $this->browser->cleanToken("A-95555");
                    $token =  $this->browser->setToken("A-95555");
                    
                    
                    
                   
                    
                    ?>
                  
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
                  <a class="btn btn-primary btn-small " id="set-step-1"  href="creer-vitrine/steps?s=2#form"> Continuer &nbsp; 
                      <i class="fa fa-arrow-right loading"></i> <i class="no-loading hidden fa fa-spinner fa-spin"></i> </a> </div>
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

<!-- Placed at the end of the document so the pages load faster --> 

<script type="text/javascript">
    
    
        $("#storeid").keyup(function(){
            
            $("#SID").text($("#storeid").val());
            
        });

        $("#name").keyup(function(){
            
         
            var str = $(this).val().replace(/ /g,'.');
            $("#storeid").val(str);
            $("#SID").text(str);
            
            
        });
        
        $("#set-step-1").on('click',function(){
            
            
            var name =          $("#name").val();
            var storeid =       $("#storeid").val();
            var description =   $("#description").val();
            var emailpro =      $("#emailpro").val();
            var telephonepro =  $("#telephonepro").val();
            var fb =            $("#fb").val();
            var twitter =       $("#twitter").val();
            var gplus =         $("#gplus").val();
            
            
            $.ajax({
                url:"ajax/createstore",
                data:{  
                        "name":name,
                        "storeid":storeid,
                        "description":description,
                        "emailpro":emailpro,
                        "telephonepro":telephonepro,
                        "fb":fb,
                        "twitter":twitter,
                        "gplus":gplus,
                        "token":"<?=$token?>",
                        "step":1
                    },
                type: 'POST',
                dataType: 'json',
                beforeSend: function (xhr) {

                     $("#set-step-1").removeClass("btn-primary");
                     $("#set-step-1").addClass("btn-default");
                     $("#set-step-1 .no-loading").removeClass("hidden");
                     $("#set-step-1 .loading").addClass("hidden");
                     
                 },
                 success: function (data, textStatus, jqXHR) {
                     
                     console.log(data);
                     $("#set-step-1").addClass("btn-primary");
                     $("#set-step-1").removeClass("btn-default");
                     $("#set-step-1 .no-loading").addClass("hidden");
                     $("#set-step-1 .loading").removeClass("hidden");
                     
                     if(data.success===1){
                         
                         document.location.href = data.url;
                         
                     }else{
                         for(var i in data.errors){
                             $("#"+i).addClass("input-error");
                             $("."+i).text(data.errors[i]);
                         }
                     }
                 },error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                 }
            });
            
            return false;
        });
        
        var inputs_name = ["name","storeid","description","emailpro","telephonepro","fb","twitter","gplus"];
        for(var i in inputs_name){skipError(inputs_name[i]);}
        function skipError(arg){$($("#"+arg)).keyup(function(){$(this).removeClass("input-error");$("."+arg).text("");});}


</script>
<!-- /.main-container-->
<div class="gap"> </div>
