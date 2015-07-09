<div class="container main-container headerOffset">

  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li> <a href="<?=  site_url("")?>">Accueil</a> </li>
        <li class="active"> Mes vitrines</li>
      </ul>
    </div>
  </div>
  
  <div class="row">
  
    <div class="col-lg-12 col-md-9 col-sm-7">
        
        <br><br>
      <h1 class="section-title-inner"  style="text-align: center"><span>Sélectionner une vitrine</span></h1>
      
      <div class="row userInfo">
      
          
         
          
          
          
          
        <div class="col-xs-12 col-sm-12" style="text-align: center">
          
      
          <h3>pour ajouter un produit a votre vitrine</h3>
         
          <div style="width: 30%;margin: 0 auto">
              <select class="form-control" required="" aria-required="true" id="store">
                  
                  <option value="">Sélectionner</option>
                  <?php foreach($store AS $s):?>
                  <option value="<?=  encrypt($s->storeid."/addproduct")?>"><?=$s->name?></option>
                  <?php endforeach;?>
             </select>
          </div>
          <script>
              $("#store").on('change',function(){
                  <?php
                    
                  $token = $this->browser->setToken("O785444");
                  
                  
                  ?>
                  
                  $.ajax({
                      url:"ajax/getstoretoadd",
                      data:{"__SID":$(this).val(),"token":"<?=$token?>"},
                      dataType: 'json',
                      type: 'POST',
                      beforeSend: function (xhr) {
                      },
                      success: function (data, textStatus, jqXHR) {
                          if(data.success===1){
                              document.location.href = data.url;
                          }
                              
                        }
                    
                  });
                  
              });
          
          </script>
       
          
        </div>
        
          
          
      </div>
      <!--/row end--> 
      
    </div>
    
    <div class="col-lg-3 col-md-3 col-sm-5"> </div>
  </div> <!--/row-->
  
  <div style="clear:both"></div>
</div>
