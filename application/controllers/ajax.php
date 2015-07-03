<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

    
        
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
    
    
    
    
    
    
    
}