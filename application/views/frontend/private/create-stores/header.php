
<?php


$step = intval($this->input->get("s"));


if($step==1){
    
    echo '<div class="row" id="form">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li> <a href="'.site_url().'">Accueil</a> </li>
        <li> <a href="#">Creation d\'une vitrine</a> </li>
        <li class="active"> 1er étape </li>
      </ul>
    </div>
  </div>
  
  <div class="row"  >
    <div class="col-lg-9 col-md-9 col-sm-7">
      <h1 class="section-title-inner"><span><i class="fa fa-pencil-square-o fa-2"></i> Création d\'une vitrine</span></h1>
    </div>
   
  </div>';
    
}else if($step==2){
    
    echo '<div class="row" id="form">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li> <a href="'.site_url().'">Accueil</a> </li>
        <li> <a href="#">Creation d\'une vitrine</a> </li>
        <li class="active"> 3eme étape </li>
      </ul>
    </div>
  </div>
  
  <div class="row"  >
    <div class="col-lg-9 col-md-9 col-sm-7">
      <h1 class="section-title-inner"><span><i class="fa fa-pencil-square-o fa-2"></i> Création d\'une vitrine</span></h1>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
      <h4 class="caps"><a href="/creer-vitrine/steps?s=1"><i class="fa fa-chevron-left"></i> Retour à la dernière étape </a></h4>
    </div>
  </div>';
    
}else if($step==3){
    
    echo '<div class="row" id="form">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li> <a href="'.site_url().'">Accueil</a> </li>
        <li> <a href="#">Creation d\'une vitrine</a> </li>
        <li class="active"> 3eme étape </li>
      </ul>
    </div>
  </div>
  
  <div class="row"  >
    <div class="col-lg-9 col-md-9 col-sm-7">
      <h1 class="section-title-inner"><span><i class="fa fa-pencil-square-o fa-2"></i> Création d\'une vitrine</span></h1>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
      <h4 class="caps"><a href="/creer-vitrine/steps?s=2"><i class="fa fa-chevron-left"></i> Retour à la dernière étape </a></h4>
    </div>
  </div>';
    
}else if($step==4){
    
    echo '<div class="row" id="form">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li> <a href="'.site_url().'">Accueil</a> </li>
        <li> <a href="#">Creation d\'une vitrine</a> </li>
        <li class="active"> 4eme étape </li>
      </ul>
    </div>
  </div>
  
  <div class="row"  >
    <div class="col-lg-9 col-md-9 col-sm-7">
      <h1 class="section-title-inner"><span><i class="fa fa-pencil-square-o fa-2"></i> Création d\'une vitrine</span></h1>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
      <h4 class="caps"><a href="/creer-vitrine/steps?s=3"><i class="fa fa-chevron-left"></i> Retour à la dernière étape </a></h4>
    </div>
  </div>';
    
}else if($step==5){
    
    echo '<div class="row" id="form">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li> <a href="'.site_url().'">Accueil</a> </li>
        <li> <a href="#">Creation d\'une vitrine</a> </li>
        <li class="active"> Fin </li>
      </ul>
    </div>
  </div>
  
  <div class="row"  >
    <div class="col-lg-9 col-md-9 col-sm-7">
      <h1 class="section-title-inner"><span><i class="fa fa-pencil-square-o fa-2"></i> Création d\'une vitrine</span></h1>
    </div>
   
  </div>';
    
}





?>


