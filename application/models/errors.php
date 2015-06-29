<?php
 
class Errors extends CI_Model{
    
    
    
    public function notfound($data=array()){
        
        
         getContent("includes","header",$data);
         getContent("public","404");
         getContent("includes","footer");
        
    }
    
    
    
    
    
}