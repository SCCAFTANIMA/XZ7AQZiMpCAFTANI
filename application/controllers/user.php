<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {


    
   
    
    public function signin(){
        
        
        echo json_encode($this->users->signin());
        exit;
        
        
    }
    
    
    
   
    
    
    
}
