<?php

class Statistic extends CI_Model{
    
    
    
    
    
    public function getNbrMyStores(){
        
        $user_id = $this->browser->getUser("id_user");
        
        $this->db->where("User_id",$user_id);
        $nbr = $this->db->count_all_results("store");
        
        return $nbr;
    }
    
    
    
    
    
    
}
