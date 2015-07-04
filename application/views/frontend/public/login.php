<div class="container main-container headerOffset">

  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li> <a href="index.html">Accueil</a> </li>
        <li class="active"> Se connecter </li>
      </ul>
    </div>
  </div>
  
  <div class="row">
  
    <div class="col-lg-12 col-md-9 col-sm-7">
      <h1 class="section-title-inner"><span><i class="fa fa-lock"></i> Se connecter</span></h1>
      
      <div class="row userInfo">
      
          
          
        <div class="col-xs-12 col-sm-6">
          <h2 class="block-title-2"><span>Saisissez votre adresse email et mot de passe sont obligatoire (*)</span></h2>
          <form role="form" class="logForm">
            <div class="form-group">
              <label>Adresse email&nbsp;&nbsp;</label>
                <label class="msg-error-form email-username"></label>
                <input type="email" class="form-control" id="email-username" placeholder="Votre adresse email ou username">
            </div>
            <div class="form-group">
              <label>Mot de passe&nbsp;&nbsp;</label>
                <label class="msg-error-form password"></label>
                <input type="password" class="form-control" id="password" placeholder="Votre mot de passe">
            </div>
<!--            <div class="checkbox">
              <label style="display: none;">
                <input type="checkbox" name="checkbox" style="display: none;">
                Remember me </label>
              
            </div>-->
<button class="btn btn-primary" id="signin"><i class="no-loading fa fa-sign-in"></i>
    <i class="loading hidden fa fa-spinner fa-spin"></i>&nbsp;&nbsp;Connecter</button>
             
          </form>
        </div>
          
          
          
          
        <div class="col-xs-12 col-sm-6">
          <h2 class="block-title-2"> Aide </h2>
          
          <div class="form-group">
              <p><a title="page/mot_passe_oublie" href="#">Mot de passe oublié ? </a></p>
           </div>
        </div>
        
          
          
      </div>
      <!--/row end--> 
      
    </div>
    
    <div class="col-lg-3 col-md-3 col-sm-5"> </div>
  </div> <!--/row-->
  
  <div style="clear:both"></div>
</div>

<script>
    
    <?php
                    
           $this->browser->cleanToken("S-95555");
           $token =  $this->browser->setToken("S-95555");
                    
      ?>

     $(".userInfo #signin").on('click',function(){
         
         var email_username = $(".userInfo #email-username").val();
         var password = $(".userInfo #password").val();
         $.ajax({
             url:"user/signin",
             data:{"email-username":email_username,"password":password,"token":"<?=$token?>"},
             dataType: 'json',
             type: 'POST',
             beforeSend: function (xhr) {
                 $(".userInfo #signin").attr("disabled",true);
                 $(".userInfo .loading").removeClass("hidden");
                 $(".userInfo .no-loading").addClass("hidden");
             },
             success: function (data, textStatus, jqXHR) {
                    
                  $(".userInfo #signin").attr("disabled",false);
                  $(".userInfo .loading").addClass("hidden");
                  $(".userInfo .no-loading").removeClass("hidden");
                  
                  if(data.success===1 || data.success===-1){
                      document.location.href = data.url;
                  }else{
                      for(var i in data.errors){
                          
                             $(".userInfo #"+i).addClass("input-error");
                             $(".userInfo ."+i).text(data.errors[i]);
                      }
                  }
                  
                  console.log(data);
                    
             },
             error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);    
              }
         });
         
         return false;
     });

     var inputs_name = ["email-username","password"];
     for(var i in inputs_name){skipError(inputs_name[i]);}
     function skipError(arg){$(".userInfo  #"+arg).keyup(function(){$(this).removeClass("input-error");$("."+arg).text("");});}


</script>