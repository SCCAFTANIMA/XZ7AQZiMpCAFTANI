<?php

class Stores extends CI_Model{
    
    
    
    public function getSubCategories(){
        
        $id = intval($this->input->post("catid"));
        $token = $this->input->post("token");
        $token_from_session = $this->browser->getToken("SCAT64555");
        
        
        
        if($token!=$token_from_session){
            return array("success"=>0,"errors"=>"Token est invalide!");
        }
        
        
        $html = "";
        
        if($id>0){
            
        $this->db->order_by("name","ASC");
        $this->db->where("Category",$id);
        $c = $this->db->get("sub_category");
        $c = $c->result();
        
        if(count($c)>0){
        
                $html = "<select class=\"form-control\" required=\"\" aria-required=\"true\" id=\"scatid\" name=\"scatid\">
                                <option value=\"0\">Sélectionner</option>";
                foreach ($c AS $value){
                    $html .= "<option value=\"$value->id_Sub_category\">$value->name</option>";

                }
                $html .="</select> ";
                
                $html .='<script> $("#scatid").on(\'change\',function(){
                  
                               $(this).removeClass("input-error");
                               $(".scatid").text("");
                            });</script>';
            }
        }
        
       if($html!=""){
           return array("success"=>1,"html"=>$html);
       }else{
           return array("success"=>0);
       }
        
    }
    
    public function getCategories(){
        
        $html = "";
        
        $this->db->order_by("name","ASC");
        $c = $this->db->get("category");
        $c = $c->result();
        
        $html = " <div class=\"form-group required\">
                    <label for=\"name\">Categorie<sup>*</sup> </label>
                    <label class=\"msg-error-form catid\"></label>  
                    <select class=\"form-control\" required=\"\" aria-required=\"true\" id=\"catid\" name=\"catid\">
                        <option value=\"0\">Sélectionner</option>";
        foreach ($c AS $value){
            $html .= "<option value=\"$value->id_Category\">$value->name</option>";
            
        }
        $html .="</select> </div> ";
        
        return $html;
        
    }
    
    public function addproduct(){
        
        $errors = array();
        $data = array();
        
       
        
        $storeid = decrypt( $this->input->post("__SID") );
        $storeid2 =  $this->browser->getData("__SID") ;
 
        
        $title              = $this->input->post("title");
        $description        = $this->input->post("description");
        $price              = $this->input->post("price");
        $scatid              = $this->input->post("scatid");
        $catid              = $this->input->post("catid");
        $image_data         = $this->input->post("image-data");
        
        
        $types              = $this->input->post("types");
        $colors             = $this->input->post("colors");
        
        $tokon_from_session = $this->browser->getToken("SD77852");
        $token = $this->input->post("token");
        
        
        if($image_data!=''){
            
            $dirname = $this->browser->getData($image_data);
            $image = _openDir($dirname);
            if(empty($image)){
               $errors['image-data'] = "il faut transférer une image pour votre produit";
            }
            
        }else{
            $errors['image-data'] = "il faut transférer une image pour votre produit";
        }
        
        
        if($catid>0){
            
            $this->db->where("id_Category",intval($catid) );
            $c = $this->db->count_all_results("category");
            if($c==0){
                $errors['catid'] = "il faut sélectionner catégorie #p";
            }
                
        }else{
            $errors['catid'] = "il faut sélectionner catégorie";
        }
        
        
        if(!isset($errors['catid'])){
            
            if($scatid>0){
                $this->db->where("id_Sub_category",intval($scatid) );
                $c = $this->db->count_all_results("sub_category");
                if($c==0){
                    $errors['scatid'] = "il faut sélectionner le sous catégorie";
                }else{
                    $data['scatid'] = intval($scatid);
                }

            }else{
                $errors['scatid'] = "il faut sélectionner sous catégorie";
            }
        
        }
        
        
        if(!empty($types)){
            foreach ($types AS $key => $value){ $types[$key] = intval($value);}
            $data['types']= array_unique($types);
        }
        
        if(!empty($colors)){
             foreach ($colors AS $key => $value){ $colors[$key] = intval($value);}
             $data['colors']= array_unique($colors);
        }
        
        
        
         if($title!=""){
                $regex = "#^[a-zA-Z0-9 \-_".REGEX_FR."]+$#i";
                if(preg_match($regex, $title)){
                    $data['title'] = clean($title);
                }else{
                    $errors['title'] = "Le titre de produit est invalide";
                }
          }else{
              $errors['title'] = "Le titre est invalide";
          }
          
          
          if($description!=""){
                $regex = "#^[a-zA-Z0-9 \-_".REGEX_FR."]+$#i";
                if(preg_match($regex, $description)){
                    $data['description'] = clean($description);
                }else{
                    $errors['description'] = "Description de produit est invalide";
                }
          }else{
              $errors['description'] = "Description est invalide";
          }
          
          if($price!=""){
                $regex = "#^[0-9]+$#i";
                if(preg_match($regex, $price)){
                    $data['price'] = doubleval($price);
                }else{
                    $errors['price'] = "Prix de produit est invalide";
                }
          }else{
              $errors['price'] = "Prix est invalide";
          }
          
       if($token!=$tokon_from_session){
             $errors['error'] = "Vous pouvez pas d'ajouter ce produit #1";
        }
          
        if($storeid2!=$storeid){
             $errors['error'] = "Vous pouvez pas d'ajouter ce produit #2";
        }
        
        if(empty($errors)){
            
            
            
            $store_id = intval($this->uriToId($storeid));
            
            if($store_id>0){
                $this->db->insert("article",array(
                    "titre"             =>  $data['title'],
                    "description"       =>  $data['description'],
                    "price"             =>  $data['price'],
                    "views"             =>  0,
                    "status"            =>  0,
                    "date_create"       =>  date("Y-m-d H:i",time()),
                    "Store_id"          =>  $store_id,
                    "User_id"           => $this->browser->getUser("id_user"),
                    "Sub_category_id"   => intval($data['scatid'])
                ));
                
                $id = $this->db->insert_id();

                if(isset($data['types'])AND !empty($data['types'])){

                    
                    foreach ($data['types'] AS $type){
                        
                        
                        if($type>0){
                            $this->db->where("id_Tissu",$type);
                            $c = $this->db->count_all_results("tissu");
                            
                            if($c>0){
                                $this->db->insert("article_tissu",array(
                                    "Article_id"  => $id,
                                    "Tissu_id"      => $type
                                ));
                            }
                        }
                            
                    }

                }

                if(isset($data['colors'])AND !empty($data['colors'])){

                    foreach ($data['colors'] AS $color){
                        
                        
                        if($color>0){
                            $this->db->where("id_Color",$color);
                            $c = $this->db->count_all_results("color");
                            
                            if($c>0){
                                $this->db->insert("article_color",array(
                                    "Article_id"  => $id,
                                    "Color_id"      => $color
                                ));
                            }
                        }
                            
                    }
                    

                }
                
                return array("success"=>1,"url"=>"produit/$id/$title?t=".  md5(sha1($this->browser->getUser("id_user"))));
            }else{
               return array("success"=>-1,"url"=>"404"); 
            }
        }else{
            return array("success"=>0,"errors"=>$errors);
        }
        
        
    }


    public function IsStoreAdmin(){
        
        
        $storeid = $this->uri->segment(1);
        $userid = $this->browser->getUser("id_user");
        
        
          
        $regex = "#^[a-zA-Z0-9 \-_.".REGEX_FR."]+$#i";
        if($regex !="" AND preg_match($regex, $storeid) ){
            
            
               $this->db->where("storeid",  clean($storeid)); 
               $this->db->where("User_id",$userid);
               
  
               $store = $this->db->count_all_results("store");
               
               
               if($store>0){
                   return TRUE;
               }
               
        }
        
        return FALSE;
        
        
    }
    
    public function getStoreData(){
        
        $storeid = $this->uri->segment(1);
          
        $regex = "#^[a-zA-Z0-9 \-_.".REGEX_FR."]+$#i";
        if($regex !="" AND preg_match($regex, $storeid) ){
               $this->db->where("storeid",  clean($storeid));  
               $store = $this->db->get("store",1);
               return $store->result();           
        }
        
        return NULL;
    }
    
    
    
    public function createStoreConfirmation(){
        
        $errors = array();
        $data = array();
        $token = $this->input->post("token");
        $token_from_session = $this->browser->getToken("C-94555");
        
        $data = array("$token - $token_from_session");
        if($token==$token_from_session){
            
           $step_1_data = $this->browser->getData("data_step_1");
           $step_2_data = $this->browser->getData("data_step_2");
           $step_3_data = $this->browser->getData("data_step_3");
            
          if(empty($step_1_data)){
              $errors['step-1'] = "Les donne step-1 sont introuvable !";
          }
          $data = array(
              "store"   => $step_1_data,
              "store-colors-tissu"=>$step_2_data
          );
           
            
        }else{
            $errors['token'] = "Vous pouvez pas d'ajouter cette vitrine !";
        }
        
        
        
        if(empty($errors)){
            
            $pack_id = 1;
            //$image
            
            $object = array(
                "name"  => $image['name'],
                "type"  => "image/".$image['name']['23_23']['ext'],
            );
            
            $this->db->insert("object",$object);
            
            $object_id = $this->db->insert_id();
            
            $store = array(
                "name"  => $data['store']['name'],
                "storeid"  => $data['store']['storeid'],
                "description"   => @$data['store']['description'],
                "date"  => date('Y-m-d H:i',time()),
                "emailpro"=>$data['store']['emailpro'], 
                "telephonepro"=>$data['store']['telephonepro'], 
                "User_id"=> $this->browser->getUser("id_user"), 
                "Pack_id"=> $pack_id,  
                "Object_id" => $object_id
            );
            
            
            $this->db->insert("store",$store);
            
            $store_id = $this->db->insert_id();
            
            $pack_store = array(
                "nbr_product"   => 5,
                "update_action" =>0,
                "Store_id"      => $store_id
                
            );
            
            $this->db->insert("pack_store",$pack_store);
            
            
            
            $this->browser->setData("__storeid",$data['store']['storeid']);
            
            return array("success"=>1,"url"=>"creer-vitrine/steps?s=5&id=".$store_id);
        }else{
            return array("success"=>0,"url"=>"creer-vitrine/steps?s=0");
        }
        
        
        
        
       
    }
    
    public function createStoreStep3(){
        
        $this->browser->setData("step",3);
        $this->browser->setData("data_step_3",array("pack"=>1));
        return array("url"=>"creer-vitrine/steps?s=4#form");
        
    }
    public function createStoreStep2(){
        
        
        $data = array("colors"=>array(),"types"=>array());
        $errors = array();
        $types = $this->input->post("types");
        $colors = $this->input->post("colors");
        $token = $this->input->post("token");
        $token_from_session = $this->browser->getToken("A-95655");
        
        
        if($token!=$token_from_session){
            $errors['token'] = "Erreur #1";
        }
        
        if(!empty($types)){
            foreach ($types AS $key => $value){ $types[$key] = intval($value);}
            $data['types']= array_unique($types);
        }
        
        if(!empty($colors)){
             foreach ($colors AS $key => $value){ $colors[$key] = intval($value);}
             $data['colors']= array_unique($colors);
        }
        
        
        $this->browser->setData("step",2);
        if(empty($errors)){

            $this->browser->setData("data_step_2",$data);
            
            return array("success"=>1,"url"=>"creer-vitrine/steps?s=3#form");
        }else{
            return array("success"=>0,"errors"=>$errors,"url"=>"creer-vitrine/steps?s=3#form");
        }
        
        
        
    }
    
    
    public function createStoreStep1(){
        
        $errors = array();
        $data = array();
        
        $token = $this->browser->getToken("A-95555");
        
        $name           = $this->input->post("name");
        $storeid        = $this->input->post("storeid");
        $description    = $this->input->post("description");
        $emailpro       = $this->input->post("emailpro");
        $telephonepro   = $this->input->post("telephonepro");
        $fb             = $this->input->post("fb");
        $twitter        = $this->input->post("twitter");
        $gplus          = $this->input->post("gplus");
        
        
        
        if($token==$this->input->post("token")){
            
            if($name!=""){
                $regex = "#^[a-zA-Z0-9 \-_".REGEX_FR."]+$#i";
                if(preg_match($regex, $name)){
                    $data['name'] = clean($name);
                }else{
                    $errors['name'] = "Le nom de vitrine est invalide";
                }
            }else{
                $errors['name'] = "Le nom de vitrine est invalide";
            }
            
            if($storeid!=""){
                $regex = "#^[a-zA-Z0-9 \-_.".REGEX_FR."]+$#i";
                if(preg_match($regex, $storeid)){
                    
                    
                    $this->db->where("storeid",  clean($storeid));
                    $c = $this->db->count_all_results("store");
                    
                    if($c==0){
                        
                        $data['storeid'] = clean($storeid);
                        
                    }else{
                        
                         $errors['storeid'] = "Vitrine ID est deja exite choisissez un autre vitrine ID ";
                    }
                    
                    
                }else{
                    $errors['storeid'] = "Vitrine ID est invalide";
                }
            }else{
                $errors['storeid'] = "Vitrine ID est invalide";
            }
            
            
            if($description!=""){
               
                    $data['description'] = clean($description);
            
            }else{
                $data['description'] = "";
            }
            
            
            if($emailpro!=""){
             
                if(filter_var($emailpro,FILTER_VALIDATE_EMAIL)){
                    $data['emailpro'] = clean($emailpro);
                }else{
                    $errors['emailpro'] = "Email est invalide";
                }
                
            }else{
                $errors['emailpro'] = "Email est invalide";
            }
            
            
            if($telephonepro!=""){
                $regex = "#^[0-9 \-_+]+$#i";
                if(preg_match($regex, $telephonepro)){
                    $data['telephonepro'] = clean($telephonepro);
                }else{
                    $errors['telephonepro'] = "telephone est invalide";
                }
            }else{
                $errors['telephonepro'] = "telephone est invalide";
            }
            
            
            
            
            if($fb!=""){
           
                $regex = "#^[a-zA-Z0-9\-_.".REGEX_FR."]+$#i";
                if(preg_match($regex, $fb)){
                    $data['fb'] = clean($fb);
                }else{
                    $errors['fb'] = "votre compte facebook est invalide";
                }
            }
            
           
            
            
            if($twitter!=""){
           
                $regex = "#^[a-zA-Z0-9\-_.".REGEX_FR."]+$#i";
                if(preg_match($regex, $twitter)){
                    $data['twitter'] = clean($twitter);
                }else{
                    $errors['twitter'] = "votre compte twitter est invalide";
                }
            }
            
            
            
            
            
            if($gplus!=""){
           
                $regex = "#^[a-zA-Z0-9\-_.".REGEX_FR."]+$#i";
                if(preg_match($regex, $gplus)){
                    $data['gplus'] = clean($gplus);
                }else{
                    $errors['gplus'] = "votre compte google+ est invalide";
                }
            }
            
       
           
        }else{
            $errors['token'] = "Erreur d'ajout cette l'article !";
        }
        
 
        
        if(empty($errors)){
            
            
            $this->browser->setData("step",1);
            $this->browser->setData('data_step_1',$data);
            
            
            
            return array("success"=>1,"url"=>"creer-vitrine/steps?s=2");
        }else{
            return array("success"=>0,"errors"=>$errors);
        }
        
        
    }
    
    
    
    
    public function checkCurrentPosition($step){
        
       $step_from_session = intval($this->browser->getData("step"));
       
       
       if($step_from_session!=($step-1)){
          
           
           redirect( "creer-vitrine/steps?s=".($step_from_session+1) );
       }

    }
    
    
    public function initCreateStore(){
        
        
        $this->browser->setData('data_step_1',array());
        $this->browser->setData('data_step_2',array());
        $this->browser->setData('data_step_3',array());
        $this->browser->setData('data_step_4',array());
        $this->browser->setData('step',0);
     
    }
    
    
    public function getValue($index="",$name=""){
        
        $data = $this->browser->getData($index);
        if(!empty($data)){
            if(isset($data[$name])) {return $data[$name];}
        }
        return ;
    }
    
    
    
    public function uriToId($storeid=""){
        
        $regex = "#^[a-zA-Z0-9 \-_.".REGEX_FR."]+$#i";
        if(preg_match($regex, $storeid)){
            $this->db->select("id");
            $this->db->where("storeid",$storeid);
            $s = $this->db->get("store");
            $s = $s->result();
            if(count($s)>0){
                return $s[0]->id;
            }
          
        }
        
        return 0;
    }
    
    
}