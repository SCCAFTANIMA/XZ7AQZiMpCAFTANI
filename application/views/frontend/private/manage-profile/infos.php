<div class="row userInfo">
        <div class="col-lg-12">
          <h2 class="block-title-2"> modifier vos information personnel. </h2>
         
        </div>
        <form>
          <div class="col-xs-12 col-sm-6">
            <div class="form-group required">
              <label for="InputName">Prénom <sup>*</sup> </label>
              <label class="msg-error-form first_name"></label>
              <input  name="first_name" type="text" value="<?=$this->browser->getUser("first_name")?>" class="form-control" id="first_name" placeholder="Prénom">
            </div>
            <div class="form-group required">
              <label for="InputLastName">Le nom <sup>*</sup> </label>
              <label class="msg-error-form last_name"></label>
              <input  name="last_name" type="text" value="<?=$this->browser->getUser("last_name")?>"  class="form-control" id="last_name" placeholder="Le nom">
            </div>
            <div class="form-group">
              <label for="InputEmail"> Adresse Email <sup>*</sup></label>
              <label class="msg-error-form adresse_email"></label>
              <input type="email" name="adresse_email" class="form-control" id="adresse_email"  value="<?=$this->browser->getUser("adresse_email")?>"  placeholder="email@email.com">
            </div>
              
            <div class="form-group required">
              <label for="InputName">Téléphone <sup>*</sup> </label>
              <label class="msg-error-form telephone"></label>
              <input name="telephone" type="text" value="<?=$this->browser->getUser("telephone")?>" class="form-control" id="telephone" placeholder="0522 000 000">
            </div>
           
              
              <div class="form-group required">
              
              
              <?php echo $this->users->getCountryCityForm($this->browser->getUser("city_id")); ?>
              
                   
              
            </div> 
              <div class="form-group required">
              <label for="InputName">Adresse  </label>
              <label class="msg-error-form adresse"></label>
              <input name="adresse" id="adresse" type="text" value="<?=$this->browser->getUser("adresse")?>" class="form-control" id="InputName" placeholder="Adresse">
            </div>
              
           
            
          </div>
            
          <div class="col-xs-12 col-sm-6">
            <div class="form-group required">
              <label for="InputPasswordCurrent"> Mot de passe <sup> * </sup> </label>
              <label class="msg-error-form current_password"></label>
              <input type="password" value=""  name="current_password" class="form-control" id="current_password">
            </div>
            <div class="form-group required">
              <label for="InputPasswordnew"> Nouveau mot de passe  </label>
              <label class="msg-error-form new_password"></label>
              <input type="password" name="new_password" class="form-control" id="new_password">
            </div>
            <div class="form-group required">
              <label for="InputPasswordnewConfirm"> Confirmer le mot de passe </label>
              <label class="msg-error-form confirm"></label>
              <input type="password" name="confirm" class="form-control" id="confirm">
            </div>
          </div>
          <div class="col-lg-12">
        
          </div>
          <div class="col-lg-12">
              <button type="submit" class="btn   btn-primary" id="savechanges"> 
                <i class="loading hidden  fa fa-spinner fa-spin"></i>
                <i class="fa no-loading fa-save"></i> &nbsp; Enregistrer </button>
          </div>
        </form>
        <div class="col-lg-12 clearfix">
         
        </div>
      </div>


<script type="text/javascript">
    
    
    <?php
                    
           $this->browser->cleanToken("SHHB55");
           $token =  $this->browser->setToken("SHHB55");
                    
      ?>

    
    $("#savechanges").on('click',function(){
        
        var first_name          = $("#first_name").val();
        var last_name           = $("#last_name").val();
        var adresse_email       = $("#adresse_email").val();
        var telephone           = $("#telephone").val();
        var adresse             = $("#adresse").val();
        var country             = $("#country").val();
        var city                = $("#city").val();
        var current_password    = $("#current_password").val();
        var new_password        = $("#new_password").val();
        var confirm             = $("#confirm").val();
        
        
     
        
        $.ajax({
            url:"ajax/updateuserinfos",
            data:{"first_name":first_name,"last_name":last_name,"adresse_email":adresse_email,"telephone":telephone,
                "adresse":adresse,"country":country,"city":city,"current_password":current_password,
                "new_password":new_password,"confirm":confirm,"token":"<?=$token?>"},
            type: 'POST',
            dataType: 'json',
            beforeSend: function (xhr) {
                  $("#savechanges").attr("disabled",true);
                  $("#savechanges .no-loading").addClass("hidden");
                  $("#savechanges .loading").removeClass("hidden");
            },
            success: function (data, textStatus, jqXHR) {
                
                $("#savechanges").attr("disabled",false);
                       $("#savechanges .no-loading").removeClass("hidden");
                       $("#savechanges .loading").addClass("hidden");
                   if(data.success===1){
                       
                       
                       setTimeout(function(){document.location.reload();},1000);
                       
                   }else if(data.success===0){
                       for(var i in data.errors){
                             $(".userInfo #"+i).addClass("input-error");
                             $(".userInfo ."+i).text(data.errors[i]);
                      }
                   }else{
                       setTimeout(function(){document.location.reload();},1000);
                   }
                   
                   console.log(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR);
            }
            
        });
        
        return false;
    });
    
    
    
    var inputs_name = ["first_name","last_name",
                    "adresse_email","telephone","adresse",
                    "country","city","current_password","new_password","confirm"];
                    
     for(var i in inputs_name){skipError(inputs_name[i]);}
     function skipError(arg){$(".userInfo  #"+arg).keyup(function(){$(this).removeClass("input-error");$("."+arg).text("");});}



</script>