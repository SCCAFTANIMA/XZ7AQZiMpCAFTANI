<div class="container main-container headerOffset">
  
    <?php
    
        $store = $store[0];
        
    ?>
    
<!--    <pre>
        
<?php //print_r($store); ?>


    </pre>-->
    
<div class="row" id="form">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
          <li> <a href="<?=  site_url("")?>">Accueil</a> </li>
        <li> <a href="#">Ajout d'un produit</a> </li>
        <li class="active"> 1er étape </li>
      </ul>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-7">
      <h1 class="section-title-inner"><span><i class="fa fa-pencil-square-o fa-2"></i> ajouter produit a <?=$store->name?></span></h1>
    </div>
   
  </div>

  
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="row userInfo">
        <div class="col-xs-12 col-sm-12">
        
          
          
          <div class="w100 clearfix">
            <div class="row userInfo">
              
              
                <form style="min-height: 450px">
                <div class="col-xs-12 col-sm-6">
                    
                      <h2 class="block-title-2"> Saisissez le titre de produit, description et tout les champs obligatoire (*).  </h2>
              
                      
                     <div class="form-group required">
                    <label for="name">Photo de produit<sup>*</sup> </label>
                    
                    <label class="msg-error-form image"></label>
                    <a href="#" id="addimage"><i class="fa fa-camera fa-3"></i></a>
                    <div class="clear"></div>
                    
                    
                    <div id="progress">
                        <div class="percent" style="width: 5%"></div>
                    </div>
                    
                    
                    <div class="clear"></div>
                    <div class="iamge-uploaded">
                        
                        <a href="#" id="image-preview" >    
                            <img src="http://localhost/Projects/XZ7AQZiMpCAFTANI/template/images/product/31.jpg"/>
                        </a>
                        <div class="clear"></div>
                        <a href="#" id="delete"><i class="fa fa-trash"></i>&nbsp;&nbsp;Supprimer</a>
                        
                    </div>
                    
                    
                    
                    
                    <div class="iamge-uploaded">
                        
                        <a href="#" id="image-preview" >    
                            <img src="http://localhost/Projects/XZ7AQZiMpCAFTANI/template/images/product/31.jpg"/>
                        </a>
                        <div class="clear"></div>
                        <a href="#" id="delete"><i class="fa fa-trash"></i>&nbsp;&nbsp;Supprimer</a>
                        
                    </div>
                    
                    
                    <input  type="hidden" value="" >
                  </div> 
                      
                  <div class="form-group required">
                    <label for="name">Le titre<sup>*</sup> </label>
                    
                    <label class="msg-error-form title"></label>
                    <input required="" type="text" class="form-control" value="" name="title" id="title" placeholder="Le titre du produit">
                  </div>
                    
       
                  <div class="form-group required">
                    <label for="description">Description<sup>*</sup> </label>
                     <label class="msg-error-form description"></label>
                    <textarea rows="5" cols="26" name="description" class="form-control" value="" id="description"></textarea>
                  </div>
                 
                      <div class="form-group required">
                      <label for="email">Le prix<sup>*</sup> 
                          <span style="font-size: 12px">&nbsp;&nbsp;Dhs</span>
                      </label>
                      <label class="msg-error-form price"></label>
                      <input style="width: 30%" required="" type="text" class="form-control" value="" name="price" id="price" placeholder="123 Dhs"> 
                  </div>
                    
                    
                    
                  
                </div>
                <div class="col-xs-12 col-sm-6">
                    
                    <h2 class="block-title-2"> Sélectionner les couleurs </h2>
              
                    
                    
                    <div class="form-group required" style="max-height: 200px;overflow: scroll">
                 
                        <ul id="select-colors">
                            <?php   foreach (Vars::$colors AS $key => $color): ?>
                            <li class="color_<?=$key?>" id="color" value="<?=$key?>" style="background-color: <?=$color?>" ></li>
                            <?php  endforeach; ?>

                        </ul>
                           <input type="hidden" id="color-ids" value=""/>
                      </div>
                    
                    
                    <div class="clearfix clear"></div>
                    <h2 class="block-title-2"> Sélectionner les tissus.  </h2>
              
                    
                   <div class="form-group types-form required">
                 
                
                </div>
                    
                    <div class="loadin-type" style="margin-top: 10px"><i class="fa fa-spinner fa-spin"></i>&nbsp;&nbsp;Chargement en cours ...</div>
               
                  
                </div>
                    <div class="col-lg-12" style="margin-bottom: 10px;">
                        
                        
                        
                    <button class="btn btn-primary" id="add"><i class="no-loading fa fa-plus-circle"></i>
    <i class="loading hidden fa fa-spinner fa-spin"></i>&nbsp;&nbsp;Ajouter</button>
    
    
                    <a href="<?=$store->storeid?>" class="btn btn-primary" id="cancel">&nbsp;&nbsp;Ajouter</a>
       
                
                        
                    </div>
              </form>
                
                
                
                
                
                
            </div>
            <!--/row end--> 
            
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

<script>

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