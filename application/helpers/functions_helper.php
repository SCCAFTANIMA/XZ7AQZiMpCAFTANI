<?php





function getContent($type="public",$name='',$data=array()){
    
    if($name!=""){
        $ci =& get_instance();
        
        $ci->load->view("frontend/".$type."/".$name,$data);
        
    }
    
}



function getDefaultHTML(){
    
    $ci =& get_instance();
        
        $ci->load->view("index");
        
    
}

