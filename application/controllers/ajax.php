<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

    
    
    
    public function __construct() {
        parent::__construct();
        
        $this->browser->initSession();
        
    }
    
    
    public function getstoretoadd(){
        
        $token = $this->input->post("token");
        $token_from_session = $this->browser->getToken("O785444");
        
        if($token_from_session==$token){
            $__SID = decrypt($this->input->post("__SID"));
            
            echo json_encode(array("success"=>1,"url"=>$__SID));
        }else{
            echo json_encode(array("success"=>0));
        }
        
    }
        
     public function addproduct(){
        
        echo json_encode($this->stores->addproduct());
        exit;
        
    }
    
    public function updateuserinfos(){
        
        echo json_encode($this->users->updateUserInfos());
        exit;
        
    }
    
    
    public function getTypesTissus(){
        
        echo $this->alldata->getTypeToHTML();
        
    }
    
    public function createstore(){
        
        $step = intval($this->input->post("step"));
        if($step==1){
            echo json_encode($this->stores->createStoreStep1());
             exit();
        }else if($step==2){
            
            echo json_encode($this->stores->createStoreStep2());
             exit();
            
        }else if($step==3){
            
            echo json_encode($this->stores->createStoreStep3());
             exit();
            
        }else if($step==4){
            
            echo json_encode($this->stores->createStoreConfirmation());
             exit();
            
        }
         
            
      
        
    }
    
    
    public function getscats(){
        
        echo json_encode($this->stores->getSubCategories());
        exit;
    }
    
    
    
    
    
    
    
}