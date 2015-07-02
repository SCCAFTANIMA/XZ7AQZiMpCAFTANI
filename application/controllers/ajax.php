<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

    
        
    public function getTypesTissus(){
        
        $types = $this->input->post("type");
        
        echo "<select class=\"form-control type-select\" required aria-required=\"true\" id=\"tissus\" name=\"tissus\">
                        <option value=\"0\">Choose</option>
                        <option value=\"1\">Tissu 1</option>
                        <option value=\"2\">Tissu 2</option>
                  </select>
                  <div class=\"type-select-delete\">
                      <i class=\"fa fa-times\"></i>
                  </div>";
        
    }
    
    public function createstore(){
        
        
       
         echo json_encode($this->stores->createStore());
         exit();
            
      
        
    }
    
    
    
    
    
    
    
}