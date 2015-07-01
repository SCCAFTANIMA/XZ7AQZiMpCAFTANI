<?php

class Browser extends CI_Model{
    
    
    
    
    
    public function setData($data=array()){
  
         $_SESSION['data'] = $data;
  
    }
    
    
    public function getData(){
        
        if(isset($_SESSION['data']) AND !empty($_SESSION['data'])){
            return $_SESSION['data'];
        }else{
            return array();
        }
        
    }
    
    public function cleanToken($value){
        
        if($value!="" AND isset($_SESSION['token'][$value])){
            $_SESSION['token'][$value] = "";
            unset($_SESSION['token'][$value]);
        }   
        
    }


    public function setToken($value="0"){
        if($value!=""){
            $createToken = md5(rand(0, 9999).encrypt($value));
              $_SESSION['token'][$value] = $createToken;
              return $createToken;
        } 
        
        return ;
    }
    
    
    
    public function getToken($value="0"){
        if($value!="" AND isset($_SESSION['token'][$value])){
            return $_SESSION['token'][$value];
        }   
        return "0";
    }
    
    
    
    
    
}

