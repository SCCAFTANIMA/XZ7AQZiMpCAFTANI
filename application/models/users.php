<?php
 
class Users extends CI_Model{
    
    
    
    
    
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
                $data['password'] = cryptPassword();
            }else{
                $errors['password'] = "Mot de passe est invalide ! #09";
         }
        
        
         
         
         
         
         if(empty($errors) AND !empty($data)){
             
             $user = $this->db->get("user",$data,1);
             
             $user = $user->result_array();
             
             if(count($user)==1){

                 $this->browser->setAllUserData($user);   
                 
             }else{
                 
                 $errors['email-username'] = "Adresse email ou le nom d'utlisation est incorrect !";
                 $errors['password'] = "Mot de passe est incorrect !";
             }
             
         }
         
         if($token_from_session!=$token){
           
            
             //return array("success"=>-1,"url"=>"page/connexion $token_from_session = $token");
          
         }
         
        
        if(empty($errors)){
            
                $last_url = $this->browser->getData("last_url_signin");
                
                if($last_url!=""){
                    $last_url = "page/compte/#signin";
                }
            
             return array("success"=>1,"url"=>$last_url);
            
        }else{
            return array("success"=>0,"errors"=>$errors);
           
        }
        
        
        

        
    }
    
    
    
    
    
}

