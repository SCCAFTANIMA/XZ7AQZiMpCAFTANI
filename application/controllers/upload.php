<?php

class Upload extends CI_Controller{
    
    
    
    
    public function image(){
        
        
        
        
        
        
        $Upoader = new Uploader($_FILES['addimage']);
  
        $r = $Upoader->start();
 
      
        echo json_encode(array("errors"=>$Upoader->getErrors(),"results"=>$r));

        exit();
       
        
        
        
    }
    
    
    
    
    
}