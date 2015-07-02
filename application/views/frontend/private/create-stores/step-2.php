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
                  <label for="InputState">Type des tissus <sup>*</sup> </label>
                  
                  
                  
                  
                  
                  
                  
                
                </div>
                    <div class="loadin-type" style="margin-top: -20px"><i class="fa fa-spinner fa-spin"></i>&nbsp;&nbsp;Chargement en cours ...</div>
<!--                   <div class="addlist">
                      <span><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;<b>Ajouter un autre type</b></span>
                  </div>-->
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="form-group required">
                     <label for="InputState">Couleurs <sup>*</sup> </label>
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
                  <a class="btn btn-primary btn-small "  href="creer-vitrine/steps?s=3#form"> Continuer &nbsp; 
                      <i class="fa fa-arrow-right hidden loading"></i> <i class="no-loading fa fa-spinner fa-spin"></i> </a> </div>
            
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
    
    $("#select-colors #color").on('click',function(){
        
        if($(this).hasClass("checked")){
            $(this).removeClass("checked");
        }else{
            $(this).addClass("checked");
        }
    });
    
    $("#select-colors #color.checked").each(function(){
            $(this).attr("value");
    });
    
    
    
    $.ajax({
        url:"ajax/getTypesTissus",
        data:{"type":""},
        success: function (data, textStatus, jqXHR) {           
             $(".types-form").append(data);                    
         },beforeSend: function (xhr) {
                        
         }
    });
    

    
    

</script>


<!-- /main-container-->

<div class="gap"> </div>