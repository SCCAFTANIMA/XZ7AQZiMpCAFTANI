<?php
 
class Users extends CI_Model{
    
    
    public function getColors(){
        
        
        
        $c = $this->db->get("color");
        return $c->result();
        
    }
    
    public function getMyStores(){
        
        $user_id = $this->browser->getUser("id_user");
        
        $this->db->where("User_id",$user_id);
        
        $this->db->where("status",0);
        $this->db->or_where("status",1);
   
        $s = $this->db->get("store");
        
        return $s->result();
        
    }
    
    
    public function checkUsersData($id=0){
  
        if($id>0){
            
            $this->db->where("id_user", intval($id));
            $user = $this->db->get("user",1);
            $user = $user->result_array();

            return $user; 
            
        } 
        
        return NULL;
    }
    
    
    public function signin(){
        
        $errors = array();
        $data = array();
        
        $token = $this->input->post("token");
        $token_from_session = $this->browser->getToken("S-95555");
     
        $email_username = $this->input->post("email-username");
        $password = $this->input->post("password");
        
        
        
        
        
        
        
        if($email_username!=""){
            
            if(filter_var($email_username,FILTER_VALIDATE_EMAIL)){
                
                $data['adresse_email'] = $email_username;
                
            }else if(preg_match("#^[a-zA-Z0-9\-_.".REGEX_FR."]+$#i", $email_username)){
       
                $data['username'] = $email_username;
                
            }else{
                $errors['email-username'] = "Email est invalide ! #03";
            }

   
        }else{
            $errors['email-username'] = "Email ou le nom d'utlisation est invalide ! #01";
        }
        
        if($password!=""){
                $data['password'] = cryptPassword($password);
            }else{
                $errors['password'] = "Mot de passe est invalide ! #09";
         }
        
        
         
         
         
         
         if(empty($errors) AND !empty($data)){
             
             $this->db->where($data);
             $this->db->from('user');
            $this->db->join('profile', 'profile.user_id = user.id_user');

             $user = $this->db->get();
             
             $user = $user->result_array();
             
             if(count($user)==1){

                 $this->browser->setUserIdToCookie($user[0]['id_user']);
                 $this->browser->setAllUserData($user[0]);   
                 
             }else{
                 
                 $errors['email-username'] = "Adresse email ou le nom d'utlisation est incorrect !";
                 $errors['password'] = "Mot de passe est incorrect !";
             }
             
         }
         
         if($token_from_session!=$token){
             $token_2 = $this->input->get("token");
             
             if($token_2!="" AND md5(encrypt($token_2))!=$token){
                 
                 return array("success"=>-1,"url"=>"page/connexion#error-1");
             }
             
             
         }
         
        
        if(empty($errors)){
            
                $last_url = $this->browser->getData("last_url_signin");
                $this->browser->setData("last_url_signin","");
                
                if($last_url==""){
                    $last_url = "page/compte/#signin";
                }
            
             return array("success"=>1,"url"=>$last_url);
            
        }else{
            return array("success"=>0,"errors"=>$errors);
           
        }
        
        
        

        
    }
    
    
    
    
    public function getCountryCityForm($id_city=0){
        
        
        $html = "";
        
        if($id_city>0){
           
            $html = '<div class="row">
                <div class="col-xs-6">
                     <label for="InputState">Pays  </label>
                     <label class="msg-error-form country"></label>
                <select class="form-control" name="country" id="country" required="" aria-required="true">
                    ';
        
             
             $this->db->order_by("name","ASC");
             $countries = $this->db->get("country");
             $countries = $countries->result();
             
             foreach ($countries AS $country){
                 
                 $html .='
                        <option value="'.$country->id_Country.'">'.$country->name.'</option>
                      ';
                 
                 $this->db->where("Country_id",$country->id_Country);
                 $this->db->order_by("name","ASC");
                 $cities = $this->db->get("city");
                 $cities = $cities->result();
                 $html .=' 
                    </select>
                    </div>
                    <label for="InputState">&nbsp;&nbsp;&nbsp;&nbsp;Ville  </label>
                    <label class="msg-error-form city"></label>
                <div class="col-xs-6">
                    <select class="form-control" name="city" id="city" required="" aria-required="true">';
                  $html .= '<option value="0">Sélectionner</option>';
                  
                 foreach ($cities AS $city){
                     
                     if($city->id_city==$id_city)
                        $html .= '<option value="'.$city->id_city.'" selected>'.$city->name.'</option>';
                     else
                         $html .= '<option value="'.$city->id_city.'">'.$city->name.'</option>';
                 }
                 
             }
             
             $html .='</select>
                </div>
              </div>';
             
         
            
        }
        
        return $html;
    }
    
    
    
    
    
    
    
    
    
    public function updateUserInfos(){
        
        
        $errors = array();
        $data = array(
            "user"      => array(),
            "profile"   =>array()
        );
        
        $token = $this->input->post("token");
        $token_from_session = $this->browser->getToken("SHHB55");
        
        $user_id = $this->browser->getUser("id_user");
        
        
        $first_name          = $this->input->post("first_name");
        $last_name           = $this->input->post("last_name");
        $adresse_email       = $this->input->post("adresse_email");
        $telephone           = $this->input->post("telephone");
        $adresse             = $this->input->post("adresse");
        $country             = $this->input->post("country");
        $city                = $this->input->post("city");
        $current_password    =  $this->input->post("current_password");
        $new_password        = $this->input->post("new_password");
        $confirm             = $this->input->post("confirm");
        
        
        //#^[a-zA-Z0-9\-_.".REGEX_FR."]+$#i
        
        if($first_name!=""){
            
            if(preg_match("#^[a-zA-Z0-9 \-_.".REGEX_FR."]+$#i", $first_name)){
                $data['profile']['first_name'] = clean($first_name);
            }else{
                $errors['first_name'] = "le Prénom est invalide!";
            }
            
        }else{
            $errors['first_name'] = "le champ Prénom est vide!";
        }
        
        
        
        if($last_name!=""){
            
            if(preg_match("#^[a-zA-Z0-9 \-_.".REGEX_FR."]+$#i", $last_name)){
                $data['profile']['last_name'] = clean($last_name);
            }else{
                $errors['first_name'] = "le nom est invalide!";
            }
            
        }else{
            $errors['last_name'] = "le champ nom est vide!";
        }
        
        
        
        
        if($adresse_email!=""){
            
            if(filter_var($adresse_email,FILTER_VALIDATE_EMAIL)){
                $data['user']['adresse_email'] = clean($adresse_email);
            }else{
                $errors['adresse_email'] = "l'adresse email est invalide!";
            }
            
        }else{
            $errors['adresse_email'] = "le champ d'adresse email est vide!";
        }
        
        
        
        
        if($telephone!=""){
            
            if(preg_match("#^[a-zA-Z0-9 \-_.\(\)\+]+$#i", $telephone)){
                $data['profile']['telephone'] = clean($telephone);
            }else{
                $errors['telephone'] = "telephone est invalide!";
            }
            
        }else{
            $errors['telephone'] = "le champ de telephone est vide!";
        }
        
        
        
        
        if($city>0){
            
            $this->db->where("id_city",  intval($city));
            $c = $this->db->count_all_results("city");
            
            if($c>0){
                $data['profile']['city_id'] = intval($city);
            }
            
        }
        
        
        
        if($new_password!=""){
            
            if($confirm!=""){
                
        
                if($new_password == $confirm){
                    
                    if(strlen($new_password)<6){
                        
                        $errors['new_password'] = "le nouveau mot de passe doit être au minimum 6 caractères!";
                        $errors['confirm'] = "la confirmation doit être au minimum 6 caractères!";
                        
                    }else{
                        
                        if($current_password!=""){
                            
                            
                            if($this->browser->getUser("password")== cryptPassword($current_password) ){
                                
                                $data['user']['password'] = cryptPassword($new_password);
                            }else{
                                 $errors['current_password'] = "Votre mot de passe est incorrect !";
                            }
                            
                            
                        }else{
                            $errors['current_password'] = "Le champ de mot de passe est vide !";
                        }
                        
                        
                        
                    }
     
                    
                }else{
                    
                    $errors['new_password'] = "Les deux mots de passe correspondant pas !";
                   $errors['confirm'] = "";
                    
                }
                
                
            }else{
                $errors['confirm'] = "le champ de confirmation est vide!";
            }
        }
        
        
        
        if($adresse!=""){
            
          
                $data['profile']['adresse'] = clean( $adresse );
          
            
        }else{
           // $errors['last_name'] = "le champ nom est vide!";
        }
        
        
        
        
        
        if($token==$token_from_session ){
            
            
            if(empty($errors)){
                
                
                $this->db->where("id_user",$user_id);
                $this->db->update("user",$data['user']);
                
                
                
                $this->db->where("user_id",$user_id);
                $this->db->update("profile",$data['profile']);
                
                $this->db->where("user_id",$user_id);
                $this->db->from('user');
                $this->db->join('profile', 'profile.user_id = user.id_user');

                $user = $this->db->get();
                $user = $user->result_array();
                
                $this->browser->setAllUserData($user[0]);
                
                
                return array("success"=>1);
                
            }else{
                return array("success"=>0,"errors"=>$errors);
            }
            
            
            
        }else{
            return array("success"=>-1);
        }
        
        
        
        
        
    }
    
    
    
    
    
}

