
<div class="container main-container headerOffset">
  <div class="row">
      <div id="form" class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
          <li> <a href="<?=  site_url()?>">Home</a> </li>
     
        <li class="active"> My account </li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h1 class="section-title-inner"><span><i class="fa fa-unlock-alt"></i> Mon compte </span></h1>
      
      
      <div class="row userInfo">
        <div class="col-xs-12 col-sm-12">
<!--          <p> <i class="fa fa-check-circle fa-1"></i>&nbsp;&nbsp;Votre compte a été crée. </p>-->
<!--          <h2 class="block-title-2"><span>BIENVENUE À VOTRE COMPTE. Ici vous pouvez gérer l'ensemble de vos informations et commandes personnelles.</span></h2>
          -->
          <?php getContent("private", "manage-profile/menu"); ?>
          
         
        </div>
      </div>
      <!--/row end--> 
      
    </div>
      <div class="col-lg-12 col-md-9 col-sm-12">
          <?php
            
                $page_uri = $this->uri->segment(3);

                switch ($page_uri){
                    case "vitrines":
                        getContent("private", "manage-profile/mystores"); 
                        break;
                     case "commandes":
                        getContent("private", "manage-profile/orders"); 
                        break;
                     case "favoris":
                        getContent("private", "manage-profile/favoris"); 
                        break;
                     case "notification":
                        getContent("private", "manage-profile/notifications"); 
                        break;
                    case "infos":
                        getContent("private", "manage-profile/infos"); 
                        break;
                    
                }
          
                
                
          
          
          
          ?>
         
      </div>
  </div>
  <!--/row-->
  
  <div style="clear:both"></div>
</div>
<!-- /wrapper -->
<div class="gap"> </div>
