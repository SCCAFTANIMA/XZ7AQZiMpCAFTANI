<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller {

 
    
    public function index(){
        
           
    }
    
    
    public function notfound404(){
        
        $this->errors->notfound();
        
    }
    
    
    
}