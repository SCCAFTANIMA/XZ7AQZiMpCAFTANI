<?php


class SimpleImage {   
    public $image;
    public $image_type;
    public $copyright="";
    
    function load($filename) {   
        
       
            $image_info = getimagesize($filename);
            $this->copyright = "";
            $this->image_type = $image_info[2];
        
        
        
        if( $this->image_type == IMAGETYPE_JPEG ){   
            $this->image = imagecreatefromjpeg($filename);
        }elseif( $this->image_type == IMAGETYPE_GIF ) {
            $this->image = imagecreatefromgif($filename);
        }elseif( $this->image_type == IMAGETYPE_PNG ){   
            $this->image = imagecreatefrompng($filename); 
            
        } 
    
    }
    
    
    
    
    
    function save($filename, $image_type=IMAGETYPE_JPEG, $compression=75, $permissions=null){ 
        
        
        if($this->copyright!=""){
            
            $stamp = imagecreatefrompng($this->copyright);
            $marge_right = 15;
            $marge_bottom = 0;
            $sx = imagesx($stamp);
            $sy = imagesy($stamp);
            imagecopy(
                    $this->image, $stamp,
                    imagesx($this->image) - $sx - $marge_right,
                    imagesy($this->image) - $sy - $marge_bottom,
                    0, 0, imagesx($stamp),
                    imagesy($stamp)
                   );
            
            $this->copyright = "";
        }
        
        
        if( $image_type == IMAGETYPE_JPEG ){
            
            imagejpeg($this->image,$filename,$compression); 
            
        } elseif( $image_type == IMAGETYPE_GIF ) {
            imagegif($this->image,$filename); 
            
        } elseif( $image_type == IMAGETYPE_PNG ) {
            imagepng($this->image,$filename); 
            
        } if( $permissions != null) {
            chmod($filename,$permissions);
        } 
    
    }
    function copyright($copyright){
        
         $this->copyright = $copyright;
       
    }
    
    function output($image_type=IMAGETYPE_JPEG) {   
        if( $image_type == IMAGETYPE_JPEG ) { 
            
            imagejpeg($this->image); 
            
        } elseif( $image_type == IMAGETYPE_GIF ) { 
            imagegif($this->image); 
            
        } elseif( $image_type == IMAGETYPE_PNG ) {
            imagepng($this->image); 
            
        } 
    
    }
    
    
    function getWidth() {   
        return imagesx($this->image);
     } 
     
     function getHeight() {
         return imagesy($this->image); 
    
    } 
    
    
    function resizeToHeight($height) {   
        $ratio = $height / $this->getHeight();
        $width = $this->getWidth() * $ratio; 
        $this->resize($width,$height); 
    
    }
    
    
    function resizeToWidth($width) { 
        $ratio = $width / $this->getWidth(); 
        $height = $this->getheight() * $ratio; 
        $this->resize($width,$height); 
    
    }
    
    function scale($scale) { 
        $width = $this->getWidth() * $scale/100; 
        $height = $this->getheight() * $scale/100; 
        $this->resize($width,$height); 
        
    }
    
    
    function resize($width,$height) { 
        $new_image = imagecreatetruecolor($width, $height); 
        imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight()); 
        $this->image = $new_image; 
    
    }
    
    
    
}