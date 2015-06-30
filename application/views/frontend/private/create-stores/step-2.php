<div class="container main-container headerOffset">
  
    <?php
    
        getContent("private","create-stores/header");
    
    ?>
  
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="row userInfo">
        <div class="col-xs-12 col-sm-12">
          <div class="w100 clearfix">
            <ul class="orderStep ">
              <?php  getContent("private","create-stores/steps-nav"); ?>
            </ul>
            <!--/.orderStep end--> 
          </div>
          
          
          <div class="w100 clearfix">
            <div class="row userInfo">
              <div class="col-lg-12">
                <h2 class="block-title-2"> To add a billing address, please fill out the form below. </h2>
              </div>
              <div class="col-xs-12 col-sm-12">
                <label class="checkbox-inline" for="checkboxes-0">
                  <input name="checkboxes" id="checkboxes-0" value="1" type="checkbox">
                  My delivery and billing addresses are the same. </label>
                <hr>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="form-group required">
                  <label for="InputName">First Name <sup>*</sup> </label>
                  <input required type="text" class="form-control" id="InputName" placeholder="First Name">
                </div>
                <div class="form-group required">
                  <label for="InputLastName">Last Name <sup>*</sup> </label>
                  <input required type="text" class="form-control" id="InputLastName" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <label for="InputEmail">Email </label>
                  <input type="text" class="form-control" id="InputEmail" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="InputCompany">Company </label>
                  <input type="text" class="form-control" id="InputCompany" placeholder="Company">
                </div>
                <div class="form-group required">
                  <label for="InputAddress">Address <sup>*</sup> </label>
                  <input required type="text" class="form-control" id="InputAddress" placeholder="Address">
                </div>
                <div class="form-group">
                  <label for="InputAddress2">Address (Line 2) </label>
                  <input type="text" class="form-control" id="InputAddress2" placeholder="Address">
                </div>
                <div class="form-group required">
                  <label for="InputCity">City <sup>*</sup> </label>
                  <input required type="text" class="form-control" id="InputCity" placeholder="City">
                </div>
                <div class="form-group required">
                  <label for="InputState">State <sup>*</sup> </label>
                  <select class="form-control" required aria-required="true" id="InputState" name="InputState">
                      <option value="">Choose</option>
                    <option value="1">Alabama</option>
                    <option value="2">Alaska</option>
                    <option value="3">Arizona</option>
                    <option value="4">Arkansas</option>
                    <option value="5">California</option>
                    <option value="6">Colorado</option>
                    <option value="7">Connecticut</option>
                    <option value="8">Delaware</option>
                    <option value="53">District of Columbia</option>
                    <option value="9">Florida</option>
                    <option value="10">Georgia</option>
                    <option value="11">Hawaii</option>
                    <option value="12">Idaho</option>
                    <option value="13">Illinois</option>
                    <option value="14">Indiana</option>
                    <option value="15">Iowa</option>
                    <option value="16">Kansas</option>
                    <option value="17">Kentucky</option>
                    <option value="18">Louisiana</option>
                    <option value="19">Maine</option>
                    <option value="20">Maryland</option>
                    <option value="21">Massachusetts</option>
                    <option value="22">Michigan</option>
                    <option value="23">Minnesota</option>
                    <option value="24">Mississippi</option>
                    <option value="25">Missouri</option>
                    <option value="26">Montana</option>
                    <option value="27">Nebraska</option>
                    <option value="28">Nevada</option>
                    <option value="29">New Hampshire</option>
                    <option value="30">New Jersey</option>
                    <option value="31">New Mexico</option>
                    <option value="32">New York</option>
                    <option value="33">North Carolina</option>
                    <option value="34">North Dakota</option>
                    <option value="35">Ohio</option>
                    <option value="36">Oklahoma</option>
                    <option value="37">Oregon</option>
                    <option value="38">Pennsylvania</option>
                    <option value="51">Puerto Rico</option>
                    <option value="39">Rhode Island</option>
                    <option value="40">South Carolina</option>
                    <option value="41">South Dakota</option>
                    <option value="42">Tennessee</option>
                    <option value="43">Texas</option>
                    <option value="52">US Virgin Islands</option>
                    <option value="44">Utah</option>
                    <option value="45">Vermont</option>
                    <option value="46">Virginia</option>
                    <option value="47">Washington</option>
                    <option value="48">West Virginia</option>
                    <option value="49">Wisconsin</option>
                    <option value="50">Wyoming</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="form-group required">
                  <label for="InputZip">Zip / Postal Code <sup>*</sup> </label>
                  <input required type="text" class="form-control" id="InputZip" placeholder="Zip / Postal Code">
                </div>
                <div class="form-group required">
                  <label for="InputCountry">Country <sup>*</sup> </label>
                    <select class="form-control" required aria-required="true" id="InputCountry" name="InputCountry">
                      <option value="">Choose</option>
                    <option value="38">Algeria</option>
                    <option value="39">American Samoa</option>
                    <option value="40">Andorra</option>
                    <option value="41">Angola</option>
                    <option value="42">Anguilla</option>
                    <option value="43">Antigua and Barbuda</option>
                    <option value="44">Argentina</option>
                    <option value="45">Armenia</option>
                    <option value="46">Aruba</option>
                    <option value="24">Australia</option>
                    <option value="2">Austria</option>
                    <option value="47">Azerbaijan</option>
                    <option value="48">Bahamas</option>
                    <option value="49">Bahrain</option>
                    <option value="50">Bangladesh</option>
                    <option value="3">Belgium</option>
                    <option value="34">Bolivia</option>
                    <option value="4">Canada</option>
                    <option value="5">China</option>
                    <option value="16">Czech Republic</option>
                    <option value="20">Denmark</option>
                    <option value="7">Finland</option>
                    <option value="8">France</option>
                    <option value="1">Germany</option>
                    <option value="9">Greece</option>
                    <option value="22">HongKong</option>
                    <option value="26">Ireland</option>
                    <option value="29">Israel</option>
                    <option value="10">Italy</option>
                    <option value="32">Ivory Coast</option>
                    <option value="11">Japan</option>
                    <option value="12">Luxemburg</option>
                    <option value="35">Mauritius</option>
                    <option value="13">Netherlands</option>
                    <option value="27">New Zealand</option>
                    <option value="31">Nigeria</option>
                    <option value="23">Norway</option>
                    <option value="14">Poland</option>
                    <option value="15">Portugal</option>
                    <option value="36">Romania</option>
                    <option value="25">Singapore</option>
                    <option value="37">Slovakia</option>
                    <option value="30">South Africa</option>
                    <option value="28">South Korea</option>
                    <option value="6">Spain</option>
                    <option value="18">Sweden</option>
                    <option value="19">Switzerland</option>
                    <option value="33">Togo</option>
                    <option value="17">United Kingdom</option>
                    <option selected="selected" value="21">United States</option>
                  </select>
                </div>
                <div class="form-group">
                  <label >Additional information</label>
                  <textarea rows="3" cols="26" name="InputAdditionalInformation" class="form-control" id="other"></textarea>
                </div>
                <div class="form-group required">
                  <label for="InputMobile">Mobile phone <sup>*</sup></label>
                  <input  required type="tel"  name="InputMobile" class="form-control" id="InputMobile">
                </div>
                <div class="form-group required">
                  <label for="addressAlias">Please assign an address title for future reference. <sup>*</sup></label>
                  <input required type="text" value="My address" name="addressAlias" class="form-control" id="addressAlias">
                </div>
              </div>
            </div>
            <!--/row end--> 
            
          </div>
          <div class="cartFooter w100">
            <div class="box-footer">
            
              <div class="pull-left"> 
                        <a class="btn btn-primary" href="creer-vitrine/steps?s=1#form"> 
                            <i class="fa fa-arrow-left"></i> &nbsp; Précédente </a> </div>
                    <div class="pull-right"> 
                  <a class="btn btn-primary btn-small "  href="creer-vitrine/steps?s=3#form"> Continuer &nbsp; 
                      <i class="fa fa-arrow-right hidden loading"></i> <i class="no-loading fa fa-spinner fa-spin"></i> </a> </div>
            
            </div>
          </div>
          <!--/ cartFooter --> 
          
        </div>
      </div>
      <!--/row end--> 
      
    </div>
   
    <!--/rightSidebar--> 
    
  </div>
  <!--/row-->
  
  <div style="clear:both"></div>
</div>
<!-- /main-container-->

<div class="gap"> </div>