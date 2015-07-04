<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller {

 
    public function __construct() {
        parent::__construct();
        
        $this->browser->initSession();
        
    }
    
    public function index(){
        
           
    }
    
    
    public function notfound404(){
        
        $this->errors->notfound();
        
    }
    
    
    
}