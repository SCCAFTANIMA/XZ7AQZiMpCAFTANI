<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

 
    
    public function contact(){
        
        getContent("includes","header");
        getContent("public","contact");
        getContent("includes","footer");
        
    }
    
    
    public function compte(){
        
        getContent("includes","header");
        getContent("private","manage-profile");
        getContent("includes","footer");
        
    }
    
    
    public function apropos(){
        
        getContent("includes","header");
        getContent("public","about");
        getContent("includes","footer");
        
    }
    
    
    
    
    
    
    
    
    
}