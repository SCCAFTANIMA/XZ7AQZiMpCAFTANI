<?php

class Stores extends CI_Model{
    
    
    
    public function checkCurrentPosition($step){
        
       $step_from_session = intval($this->browser->getData("step"));
       
       if($step_from_session!=($step-1)){
           
      
           redirect( "creer-vitrine/steps?s=".($step_from_session+1) );
       }

    }
    
    public function createStoreStep3(){
        
        $this->browser->setData("step",3);
        $this->browser->setData("data_step_3",array("pack"=>1));
        return array("url"=>"creer-vitrine/steps?s=4#form");
        
    }
    public function createStoreStep2(){
        
        
        $data = array("colors"=>array(),"types"=>array());
        $errors = array();
        $types = $this->input->post("types");
        $colors = $this->input->post("colors");
        $token = $this->input->post("token");
        $token_from_session = $this->browser->setToken("A-95655");
        
        
        if($token!=$token_from_session){
            $errors['token'] = "Erreur #1";
        }
        
        if(!empty($types)){
            foreach ($types AS $key => $value){ $types[$key] = intval($value);}
            $data['types']= array_unique($types);
        }
        
        if(!empty($colors)){
             foreach ($colors AS $key => $value){ $colors[$key] = intval($value);}
             $data['colors']= array_unique($colors);
        }
        
        
        $this->browser->setData("step",2);
        if(empty($errors)){

            $this->browser->setData("data_step_2",$data);
            
            return array("success"=>1,"url"=>"creer-vitrine/steps?s=3#form");
        }else{
            return array("success"=>0,"errors"=>$errors,"url"=>"creer-vitrine/steps?s=3#form");
        }
        
        
        
    }
    
    
    public function createStoreStep1(){
        
        $errors = array();
        $data = array();
        
        $token = $this->browser->getToken("A-95555");
        
        $name           = $this->input->post("name");
        $storeid        = $this->input->post("storeid");
        $description    = $this->input->post("description");
        $emailpro       = $this->input->post("emailpro");
        $telephonepro   = $this->input->post("telephonepro");
        $fb             = $this->input->post("fb");
        $twitter        = $this->input->post("twitter");
        $gplus          = $this->input->post("gplus");
        
        
        
        if($token==$this->input->post("token")){
            
            if($name!=""){
                $regex = "#^[a-zA-Z0-9 \-_".REGEX_FR."]+$#i";
                if(preg_match($regex, $name)){
                    $data['name'] = clean($name);
                }else{
                    $errors['name'] = "Le nom de vitrine est invalide";
                }
            }else{
                $errors['name'] = "Le nom de vitrine est invalide";
            }
            
            if($storeid!=""){
                $regex = "#^[a-zA-Z0-9 \-_.".REGEX_FR."]+$#i";
                if(preg_match($regex, $storeid)){
                    $data['storeid'] = clean($storeid);
                }else{
                    $errors['storeid'] = "Vitrine ID est invalide";
                }
            }else{
                $errors['storeid'] = "Vitrine ID est invalide";
            }
            
            
            if($description!=""){
               
                    $data['description'] = clean($description);
            
            }
            
            
            if($emailpro!=""){
             
                if(filter_var($emailpro,FILTER_VALIDATE_EMAIL)){
                    $data['emailpro'] = clean($emailpro);
                }else{
                    $errors['emailpro'] = "Email est invalide";
                }
                
            }else{
                $errors['emailpro'] = "Email est invalide";
            }
            
            
            if($telephonepro!=""){
                $regex = "#^[0-9 \-_+]+$#i";
                if(preg_match($regex, $telephonepro)){
                    $data['telephonepro'] = clean($telephonepro);
                }else{
                    $errors['telephonepro'] = "telephone est invalide";
                }
            }else{
                $errors['telephonepro'] = "telephone est invalide";
            }
            
            
            
            
            if($fb!=""){
           
                $regex = "#^[a-zA-Z0-9\-_.".REGEX_FR."]+$#i";
                if(preg_match($regex, $fb)){
                    $data['fb'] = clean($fb);
                }else{
                    $errors['fb'] = "votre compte facebook est invalide";
                }
            }
            
           
            
            
            if($twitter!=""){
           
                $regex = "#^[a-zA-Z0-9\-_.".REGEX_FR."]+$#i";
                if(preg_match($regex, $twitter)){
                    $data['twitter'] = clean($twitter);
                }else{
                    $errors['twitter'] = "votre compte twitter est invalide";
                }
            }
            
            
            
            
            
            if($gplus!=""){
           
                $regex = "#^[a-zA-Z0-9\-_.".REGEX_FR."]+$#i";
                if(preg_match($regex, $gplus)){
                    $data['gplus'] = clean($gplus);
                }else{
                    $errors['gplus'] = "votre compte google+ est invalide";
                }
            }
            
       
           
        }else{
            $errors['token'] = "Erreur d'ajout cette l'article !";
        }
        
 
        
        if(empty($errors)){
            
            
            $this->browser->setData("step",1);
            $this->browser->setData('data_step_1',$data);
            
            
            
            return array("success"=>1,"url"=>"creer-vitrine/steps?s=2");
        }else{
            return array("success"=>0,"errors"=>$errors);
        }
        
        
    }
    
    
    public function initCreateStore(){
        
        
        $this->browser->setData('data_step_1',array());
        $this->browser->setData('data_step_2',array());
        $this->browser->setData('data_step_3',array());
        $this->browser->setData('data_step_4',array());
        $this->browser->setData('step',0);
     
    }
    
    
    public function getValue($index="",$name=""){
        
        $data = $this->browser->getData($index);
        if(!empty($data)){
            if(isset($data[$name])) {return $data[$name];}
        }
        return ;
    }
    
    
}