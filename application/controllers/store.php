<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Store extends CI_Controller {


    public function __construct() {
        parent::__construct();
        
        $this->browser->initSession();
        
    }
    
    public function index(){

        
        $this->errors->notfound();
      
    }
    
    
    
    
    
    public function product(){
        
        
        getContent("includes","header");
        getContent("public","single-product");
        getContent("includes","footer");
        
        
    }
    
    
    public function create(){
        
        
        
        
       if($this->browser->isLogged()){
            
        
        $step = intval($this->input->get("s"));
        
        if($step==0){   
            
            $this->stores->initCreateStore();
            redirect("creer-vitrine/steps?s=1"); 
            
        }else if($step==1){

            
            $this->browser->setData('step',0);
            getContent("includes","header");
            getContent("private","create-stores/step-1");
            getContent("includes","footer");
                
            
            
        }else if($step==2){
            
           
            $this->checkMyPosition();
            getContent("includes","header");
            getContent("private","create-stores/step-2");
            getContent("includes","footer");
            
        }else if($step==3){
            
        
            $this->checkMyPosition();
            getContent("includes","header");
            getContent("private","create-stores/step-3");
            getContent("includes","footer");
            
        }else if($step==4){
            
            
            $this->checkMyPosition();
            getContent("includes","header");
            getContent("private","create-stores/step-4");
            getContent("includes","footer");
            
        }else if($step==5){
            
            $this->checkMyPosition();
            $this->stores->initCreateStore();
            getContent("includes","header");
            getContent("private","create-stores/finish");
            getContent("includes","footer");
            
        }
        
        
        
        }else{
            
            
            $this->browser->setData("last_url_signin","creer-vitrine/steps?s=0");
            redirect("page/connexion");
        }
        
        
    }
    
    
    
    public function checkMyPosition(){
        
        $data = $this->browser->getData("data_step_1");
        
        if(empty($data)){
            redirect("creer-vitrine/steps?s=1");
        }
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
