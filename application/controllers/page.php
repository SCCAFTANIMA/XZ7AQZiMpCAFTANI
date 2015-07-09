<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

 
    
    
    public function __construct() {
        parent::__construct();
        
        $this->browser->initSession();
        
    }
    
    public function contact(){
        
        getContent("includes","header");
        getContent("public","contact");
        getContent("includes","footer");
        
    }
    
    
    public function compte(){
        
        if($this->browser->isLogged()){
            
            getContent("includes","header");
            getContent("private","manage-profile/manage-profile");
            getContent("includes","footer");
            
        }else{
            redirect("page/connexion");
        }
             
    }
    
    
    public function connexion(){
        
        if(!$this->browser->isLogged()){
            
            getContent("includes","header");
            getContent("public","login");
            getContent("includes","footer");
            
        }else{
            redirect("page/compte");
        }
        
    }
    
    
    
     public function inscription(){
        
        if(!$this->browser->isLogged()){
            
            getContent("includes","header");
            getContent("public","signup");
            getContent("includes","footer");
            
            
        }else{
            redirect("page/compte");
        }
         
     }
    
    
    public function apropos(){
        
        getContent("includes","header");
        getContent("public","about");
        getContent("includes","footer");
        
    }
    
    
    public function smvitrine(){
        
        
        $data['store'] = $this->users->getMyStores();
        
        if(!empty($data['store']) AND count($data['store'])>1){
            getContent("includes","header",$data);
            getContent("private","select-mystores-to-add");
            getContent("includes","footer");
        }else if(!empty($data['store']) AND count($data['store'])==1){
            redirect($data['store'][0]->storeid."/addproduct");
        }
        
        
        
        
    }
    
    
    
    public function deconnecter(){
        
        if($this->browser->isLogged()){
            
            $this->browser->LogOut();
            redirect("");
            
        }
        
    }
    
    
    
    
    
    
    
    
    
    
}