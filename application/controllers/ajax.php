<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

    
        
    
    public function createstore(){
        
        
       
         echo json_encode($this->stores->createStore());
         exit();
            
      
        
    }
    
    
    
    
    
    
    
}