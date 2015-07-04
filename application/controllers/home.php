<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    
  
    public function __construct() {
        parent::__construct();
        
        $this->browser->initSession();
        
    }
    
    
    public function index(){
        
        
       
        
        getContent("includes","header");
        getContent("public","home");
        getContent("includes","footer");
          
    }
    
    
    
    public function categorie(){
        
        getContent("includes","header");
        getContent("public","category");
        getContent("includes","footer");
          
    }
    
    
    
    
    
    
    
    
}