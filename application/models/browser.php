<?php

class Browser extends CI_Model{
    
    
    public function initSession(){
        
        if(!$this->isLogged()){
            
            $id_user = $this->getUserIdFromCookie();
            $getUserData = $this->getAllUserData();
            
            if(empty($getUserData)){
                $user = $this->users->checkUsersData($id_user);
                $this->setAllUserData($user);
            }
            
        }
 
    }
    
    
    public function LogOut(){
        
        
        $this->setAllUserData(array());
        $this->setUserIdToCookie(0);
        
    }
    
    public function isLogged(){
        
     
         
        if( !empty($this->getAllUserData()) AND intval($this->getUserIdFromCookie())>0 ){
            return TRUE;
        }
        
        return FALSE;
    }
    
    
    public function setUserIdToCookie($id=0){
        
        if($id>0){
            
            $this->session->set_userdata(array("__ID"=>  encrypt(  intval($id)  )));
        }else{
            $this->session->set_userdata(array("__ID"=>  0));
        }
        
    }
    
    
    public function getUserIdFromCookie(){
        
     
       $id = $this->session->userdata("__ID");
       if($id!=""){
           return decrypt($id);
       }
       return ;
    }
    
    
    
    public function getAllUserData($data=array()){
        
        
        if(isset($_SESSION['user'])){
            return $_SESSION['user'];
        }
        
    }
    
    public function setAllUserData($data=array()){
        
        
        if(!empty($data)){
            $_SESSION['user'] = $data;
        }
        
        
    }
    
    public function setUser($index='',$value=""){
        
        if($index!="" AND $value!=""){
            $_SESSION['user'][$index] = $value;
        }
        return TRUE;
    }
    
    
    public function getUser($index=''){
        
        
        if($index!="" AND $_SESSION['user'][$index] AND $_SESSION['user'][$index]!=""){
            return $_SESSION['user'][$index];
        }
        
        return ;
    }
    
    
    public function setData($index="",$data=array()){
  
        if($index!="" ){
            $_SESSION["data"][$index] = $data;
            return TRUE;
        }
      
        return FALSE;
    }
    
    
    public function getData($index=""){
        
        if(isset($_SESSION['data'][$index]) AND !empty($_SESSION['data'][$index])){
            return $_SESSION['data'][$index];
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

