<?php

    
    function _openDir($dir=""){

        $path  = getPath(array("uploads","images",$dir));
        
        $data = array();
        

        if(!is_dir($path))
            return array();
        
        
        if ($handle = opendir($path) AND $path!="" AND is_dir($path)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {

                    $path_2 = addPath($path,array($entry));
 
                    if(is_dir($path_2)){
                        
                        
                        
                        if ($handle2 = opendir($path_2) AND $path_2!="" AND is_dir($path_2)) {
                            while (false !== ($entry2 = readdir($handle2))) {
                                if ($entry2 != "." && $entry2 != "..") {
                                   
                                    
                                    
                                    
                                    $data[$entry] = array(
                                        "name"  =>   $entry2,
                                        "path"  => addPath($path_2,array($entry2)),
                                        "url"   => base_url("uploads/images/".$dir."/$entry/$entry2"),
                                        "ext"   =>   end(explode(".", $entry2))
                                    ) ;
                                    
                                  
                                }
                        }
                        closedir($handle2);
                    }
                        
                    }
                    
                }
            }
            closedir($handle);
        }
        
        if(!empty($data)){
            $data["name"] = $dir;
        }
        
        return $data;
        
    }
    
    
    function _getAllSizes($id=""){
        
        if($id!=""){
            $userDir = _openDir($id); 
            return $userDir; 
            
        }
        
    }

   function _removeDir($dir=''){
       $path  = getPath(array("uploads","images",$dir));
        
        $data = _openDir($dir);
		
		
		
		
        if ($handle = opendir($path) AND $path!="" AND is_dir($path)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {

                    $path_2 = addPath($path,array($entry));
 
                    if(is_dir($path_2)){
                        
                        
                        
                        if ($handle2 = opendir($path_2) AND $path_2!="" AND is_dir($path_2)) {
                            while (false !== ($entry2 = readdir($handle2))) {
                                if ($entry2 != "." && $entry2 != "..") {
                                   
                                    @unlink(addPath($path_2,array($entry2)));
                                    
                                    
                                  
                                }
                        }
                        closedir($handle2);
                        rmdir($path_2);
                    }
                        
                    }
                    
                }
            }
            closedir($handle);
            rmdir($path);
        }
        
		
        return $data;
      
   }
   
   
   
   
   
class Uploader{
        
        private $files;
        private $ext;
        private $size;
        private $errors;
        private $namedir;
        private $download;


        public function __construct($data=array(),$type='') {
            $this->files = $data;
            $this->ext = array("image/jpg","image/jpeg","image/png");
            $this->size = (1048576*10);
            $this->errors = array();
            $this->namedir = time().rand(000, 99999);
            $this->download = FALSE;
            
            
           
            $this->createDir();
        }
     

        public function start(){
            
            
            
           
        
        
        
            if(isset($this->files['type']) AND !in_array( strtolower( $this->files['type']) ,  $this->ext)){
                $this->errors['type'] = "Errorin type";
             }
             
             if(isset($this->files['size']) AND $this->files['size']>$this->size){
                 $this->errors['size'] = "Errorin size";
             }
             
             $ext = end(explode(".", $this->files['name']));
             $name = rand(0000,9999).time().".".$ext;
             $dis  = getPath(array("uploads","images",$this->namedir,"temp",$name)); 
                 

             if(empty($this->errors)){
                
                      
                 
                 
                 if(   move_uploaded_file($this->files['tmp_name'],  $dis)  ){
                     
                              
                     
                     if(file_exists($dis)){
                       
                      
                         $image = new SimpleImage();
                         $image->load($dis);
                         
                         
                
                         $image->resizeToWidth(1000);
                         $newpath  = getPath(array("uploads","images",$this->namedir,"1000_1000",$name)); 
                         $image->save($newpath);
                         
                         
                         $image->resizeToWidth(560);
                         $newpath  = getPath(array("uploads","images",$this->namedir,"560_560",$name)); 
                         $image->save($newpath);
                         
                         
                         
                         $image->resizeToWidth(200);
                         $newpath  = getPath(array("uploads","images",$this->namedir,"200_200",$name)); 
                         $image->save($newpath);
                         
                         
                         $image->resizeToWidth(100);
                         $newpath  = getPath(array("uploads","images",$this->namedir,"100_100",$name)); 
                         $image->save($newpath);
                         
                         
                         $image->resizeToWidth(70);
                         $newpath  = getPath(array("uploads","images",$this->namedir,"70_70",$name)); 
                         $image->save($newpath);
                         
                         
                         $image->resizeToWidth(60);
                         $newpath  = getPath(array("uploads","images",$this->namedir,"60_60",$name)); 
                         $image->save($newpath);
                         
                         
                         $image->resizeToWidth(48);
                         $newpath  = getPath(array("uploads","images",$this->namedir,"48_48",$name)); 
                         $image->save($newpath);
                         
                         
                          $image->resizeToWidth(35);
                         $newpath  = getPath(array("uploads","images",$this->namedir,"35_35",$name)); 
                         $image->save($newpath);
                         
                         $image->resizeToWidth(23);
                         $newpath  = getPath(array("uploads","images",$this->namedir,"23_23",$name)); 
                         $image->save($newpath);
                         
                         
                         
                         
                         
                         $imageData = _getAllSizes($this->namedir);
                         
                         if(!empty($imageData)){
                             $temppath  = getPath(array("uploads","images",$this->namedir,"temp",$name));
                             unlink($temppath);
                             
                            $imageData['html'] = "<img src='".$imageData['200_200']['url']."' alt=''/>";
                            $imageData['image_data'] = md5($this->namedir);
                            $_SESSION['data'][md5($this->namedir)] = $this->namedir;
                         }
						
                         return $imageData;
                     }
  
                 }
                 
                 
             }
            
            return array();
        }
        
        
        public function getErrors() {
                return $this->errors;
        }
        
        private function createDir(){
            
            $name_23_23 = getPath(array("uploads","images",$this->namedir,"23_23")); 
            $name_35_35 = getPath(array("uploads","images",$this->namedir,"35_35")); 
            $name_48_48 = getPath(array("uploads","images",$this->namedir,"48_48")); 
            $name_60_60 = getPath(array("uploads","images",$this->namedir,"60_60")); 
            $name_70_70 = getPath(array("uploads","images",$this->namedir,"70_70")); 
            $name_100_100 = getPath(array("uploads","images",$this->namedir,"100_100")); 
            $name_200_200 = getPath(array("uploads","images",$this->namedir,"200_200"));
            $name_560_560 = getPath(array("uploads","images",$this->namedir,"560_560")); 
            $name_1000_1000 = getPath(array("uploads","images",$this->namedir,"1000_1000")); 
            $temp = getPath(array("uploads","images",$this->namedir,"temp")); 
            
           
            @mkdir( getPath(array("uploads","images",$this->namedir)) );
            @mkdir( $name_23_23);
            @mkdir( $name_35_35 );
            @mkdir( $name_48_48 );
            @mkdir( $name_60_60 );
            @mkdir( $name_70_70 );
            @mkdir( $name_100_100 );
            @mkdir( $name_200_200 );
            @mkdir( $name_560_560 );
            @mkdir( $name_1000_1000 );
            @mkdir( $temp );
            
            return;
        }
        
        
    }