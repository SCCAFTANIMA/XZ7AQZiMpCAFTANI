<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {


    
    public function __construct() {
        parent::__construct();
        
        $this->browser->initSession();
        
    }
   
    
    public function signin(){
        
        
        echo json_encode($this->users->signin());
        exit;
        
        
    }
    
  
    
    
    
   
    
    
    
}
