<?php

class Stores extends CI_Model{
    
    
    
    public function createStore(){
        
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
                }
            }
            
            if($storeid!=""){
                $regex = "#^[a-zA-Z0-9 \-_.".REGEX_FR."]+$#i";
                if(preg_match($regex, $storeid)){
                    $data['storeid'] = clean($storeid);
                }else{
                    $errors['storeid'] = "Storeid";
                }
            }else{
                $errors['storeid'] = "Storeid";
            }
            
            
            
            if($description!=""){
               
                    $data['description'] = clean($description);
            
            }else{
                $errors['description'] = "description";
            }
            
            
            
            
        }else{
            $errors['token'] = "Erreur d'ajout cette l'article !";
        }
        
        return $data;
        
        
    }
    
    
}