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
                <h2 class="block-title-2"> Choisissez les types du tissu et les couleurs . </h2>
              </div>
         
                <div class="col-xs-12 col-sm-6" style="min-height: 350px;">
               
                <div class="form-group types-form required">
                  <label for="InputState">Type des tissus  </label>
                  
  
                  
                
                </div>
                    <div class="loadin-type hidden" style="margin-top: -20px"><i class="fa fa-spinner fa-spin"></i>&nbsp;&nbsp;Chargement en cours ...</div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="form-group required">
                     <label for="InputState">Couleurs  </label>
                  <ul id="select-colors">
                      <?php   foreach (Vars::$colors AS $key => $color): ?>
                      <li class="color_<?=$key?>" id="color" value="<?=$key?>" style="background-color: <?=$color?>" ></li>
                      <?php  endforeach; ?>
                     
                  </ul>
                     <input type="hidden" id="color-ids" value="">
                </div>
              </div>
            </div>
            <!--/row end--> 
            
          </div>
          <div class="cartFooter w100">
            <div class="box-footer">
            
              <div class="pull-left"> 
                        <a class="btn btn-primary" href="creer-vitrine/steps?s=1#form"> 
                            <i class="fa fa-arrow-left"></i> &nbsp; Précédente </a> </div>
                    <div class="pull-right"> 
                        <button class="btn btn-primary btn-small "  id="set-step-2" href="creer-vitrine/steps?s=3#form"> Continuer &nbsp; 
                      <i class="fa fa-arrow-right loading"></i> <i class="no-loading hidden fa fa-spinner fa-spin"></i> </button> </div>
            
            </div>
          </div>
          <!--/ cartFooter --> 
          
        </div>
      </div>
      <!--/row end--> 
      
    </div>
   
    <!--/rightSidebar--> 
    
  </div>
  <!--/row-->
  
  <div style="clear:both"></div>
</div>
<script type="text/javascript">
    
    <?php
    
        $this->browser->cleanToken("A-95655");
        $token =  $this->browser->setToken("A-95655");
                    
    
    ?>
    
     $("#set-step-2").on('click',function(){
         
         var colors = [];
          $("#select-colors #color.checked").each(function(){
                colors.push($(this).attr("value"));
          });
          var types = [];
          $(".types-form .type-select-value").each(function(){
                types.push($(this).attr("value"));
                
               
          });
          
         $.ajax({
             url:"ajax/createstore",
             data:{"token":"<?=$token?>","step":"2","colors":colors,"types":types},
             type: 'POST',
             dataType: 'json',
             beforeSend: function (xhr) {
                     $("#set-step-2").removeClass("btn-primary");
                     $("#set-step-2").addClass("btn-default");
                     $("#set-step-2 .no-loading").removeClass("hidden");
                     $("#set-step-2 .loading").addClass("hidden");
                     $("#set-step-2").attr("disabled",true);
             },
             success: function (data, textStatus, jqXHR) {
                        
                   $("#set-step-2").addClass("btn-primary");
                   $("#set-step-2").removeClass("btn-default");
                   $("#set-step-2 .no-loading").addClass("hidden");
                   $("#set-step-2 .loading").removeClass("hidden");
                   $("#set-step-2").attr("disabled",false);
                   
                   document.location.href = data.url;
                   console.log(data);

             },error: function (jqXHR, textStatus, errorThrown) {
                     console.log(jqXHR);
             }
         });
         return false;
     });
    
    
    
    $("#select-colors #color").on('click',function(){
        
        if($(this).hasClass("checked")){
            $(this).removeClass("checked");
        }else{
            $(this).addClass("checked");
        }
    });
    
    
    
    
    loadSelects(0);
    
    function loadSelects(arg){
        
   
            $.ajax({
                url:"ajax/getTypesTissus",
                data:{"type":"","sup":arg},
                success: function (data, textStatus, jqXHR) { 
                        
                     $(".loadin-type").addClass("hidden");
                     $(".types-form").append(data);      
                     
                 },beforeSend: function (xhr) {  
                     $(".loadin-type").removeClass("hidden");
                 },error: function (jqXHR, textStatus, errorThrown) {
                      console.log(jqXHR);
                 }
            });
     
    }
    
    

</script>








<!-- /main-container-->

<div class="gap"> </div>