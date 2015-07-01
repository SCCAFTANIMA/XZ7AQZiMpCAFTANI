<?php


define("REGEX_FR", "ÀÂÆÇÉÈÊËÎÏÔŒÙÛÜŸÿüûùœôïîëêèéçæâà");
define("ENCODING", "UTF-8");


function clean($str=""){
    
    
    return htmlentities(strip_tags($str),ENT_QUOTES,ENCODING);
    
}

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


function getPath($t=array()){
        
        if(!empty($t)){
            $newpath = FCPATH;
            foreach ($t AS $v){
                
                if(preg_match("#\.#", $v) ){
                    $newpath.= $v;
                    return $newpath;
                }else{
                    
                    $newpath.=$v._PATH;
                }
                
            }
            
            return $newpath;
        }
        
        return FCPATH;
    }
    
    function addPath($oldpath,$t=array()){
        
        
        if(!empty($t)){
            
            $lastc = substr($oldpath, -1);
            
            if($lastc!=_PATH){
                $oldpath.= _PATH;
            }
            
            $newpath = $oldpath;
            foreach ($t AS $v){
                
                if(preg_match("#\.#", $v) ){
                    $newpath.= $v;
                    return $newpath;
                }else{

                    $newpath.=$v._PATH;   
                }
                
            }
            
            return $newpath;
        }
        
        return $oldpath;
        
        
    }

function encrypt($data='') {
         
         if($data!=''){
             $data = $data."";
            $key = "secret";  // Clé de 8 caractères max
            $data = serialize($data);
            $td = mcrypt_module_open(MCRYPT_DES,"",MCRYPT_MODE_ECB,"");
            $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
            mcrypt_generic_init($td,$key,$iv);
            $data = base64_encode(mcrypt_generic($td, '!'.$data));
            mcrypt_generic_deinit($td);
            /*$data = urlencode($data);*/


            $data = preg_replace("#\/#", "XiTf0_eD", $data);
            $data = preg_replace("#=#", "BiTKlF_cv9", $data);
            $data = preg_replace("#\+#", "ZiUj_Blc", $data);



            return $data;
         }
        return '';
    }
 
    function decrypt($data='') {

        if($data!=''){
            $data = preg_replace("#XiTf0_eD#", "/", $data);
            $data = preg_replace("#BiTKlF_cv9#", "=", $data);
            $data = preg_replace("#ZiUj_Blc#", "+", $data);
                /*$data = urldecode($data);*/
            $key = "secret";
            $td = mcrypt_module_open(MCRYPT_DES,"",MCRYPT_MODE_ECB,"");
            $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
            mcrypt_generic_init($td,$key,$iv);
            $data = mdecrypt_generic($td, base64_decode($data));
            mcrypt_generic_deinit($td);

            if (substr($data,0,1) != '!')
                return false;

            $data = substr($data,1,strlen($data)-1);
            return unserialize($data);
        }
        
        return '';
        
    }

