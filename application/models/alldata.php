<?php

class Alldata extends CI_Model{
    
    
    
    public function getTypeToHTML(){
        
        $tissus = $this->getTypesTissus();
        
       
        $nbr_types_selected = intval($this->browser->getData("nbrtypestissus_selected"));
        
        
        
        
        
        $this->browser->setData("nbrtypestissus_selected",
                ($nbr_types_selected+1)
                );
        
        
//        if($nbr_types_selected>=8 AND intval($this->input->post("sup"))==0){
//            return "";
//        }
        
        $id = substr(md5(time()),0,10);
        $html = "<div id=\"id_".$id ."\"><select class=\" form-control type-select type-select_".$id."\" required aria-required=\"true\" id=\"tissus\" name=\"tissus\">
                        <option value=\"0\">Sélectionner</option>";
        foreach ($tissus AS $value){
             $html .= "
                        <option value=\"$value->id_Tissu\">$value->name</option>
                    ";
        }
        
        $btndelete = "";
        if($nbr_types_selected!=0){
            $btndelete = "<div class=\"type-select-delete delete_".$id."\">
                      <i class=\"fa fa-times\"></i>
                  </div>";
        }
        
        $html .= "</select>
                  <input type=\"hidden\" value=\"0\" class=\"type-select-value id_".$id ."\">
                      
                  $btndelete
                  <script>    
                    $(\".types-form > .type-select\").addClass(\"selected\");
                    $(\".type-select_".$id."\").removeClass(\"selected\");
                         
                    $(\".delete_".$id."\").on('click',function(){ 
                        $(\"#id_".$id ."\").remove();
                        return false;
                    });
                    $(\".type-select_".$id."\").on('change', function(evt){
                            var value = $(this).val();
                            $(\".id_".$id ."\").val(value);
                            if(!$(this).hasClass('selected')){
                                 $(this).addClass('selected');
                                 loadSelects(0);
                            }
                     });
                    </script>
                    </div>
            ";
        
        return $html;
        
        
    }
    
    public function getTypesTissus(){
        
  
        $this->db->order_by("name","ASC");
        $tissu = $this->db->get("tissu");
        
        
        return $tissu->result();
        
    }
    
    
    
    
}
