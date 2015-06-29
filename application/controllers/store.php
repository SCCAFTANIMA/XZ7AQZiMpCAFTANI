<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Store extends CI_Controller {


    public function index(){
	
//        getContent("includes","header");
//        getContent("public","store");
//        getContent("includes","footer");
        
        
        $this->errors->notfound();
      
    }
    
    
    
    
    
    public function product(){
        
        
        getContent("includes","header");
        getContent("public","product");
        getContent("includes","footer");
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}
