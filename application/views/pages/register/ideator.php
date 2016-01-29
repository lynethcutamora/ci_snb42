          <?php 
            if(validation_errors()!=""){
          ?>
                 <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                   <?php echo validation_errors(); ?>
                 </div>
          <?php }?>
                      <h1><center>Ideator</center></h1>
                      <?php echo form_open('../pages/register',"class=form-horizontal"); ?>
                      <div class="form-group">
                        <label for="inputLName" class="col-sm-2 control-label">Last Name*</label>
                        <div class="col-sm-9"> 
                          <input type="text" class="form-control" name="inputLName" id="inputLName" placeholder="Last Name" value="<?php echo set_value('inputLName'); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputFName" class="col-sm-2 control-label">First Name*</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="inputFName" id="inputFName" placeholder="First Name" value="<?php echo set_value('inputFName'); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputMI" class="col-sm-2 control-label">Middle Initial</label>
                        <div class="col-md-2">                          
                             <input type="text" class="form-control" name="inputMI" id="inputMI" size="2" placeholder="Middle Initial" value="<?php echo set_value('inputMI'); ?>">
                        
                        </div><!-- /.form-group -->
                          <label class="col-sm-2 control-label">
                            <input type="radio" name="r3" class="flat-red" value="F" <?php echo  set_radio('r3', 'F'); ?>>
                            &nbsp;Female
                          </label>
                          <label class="col-sm-2 control-label">
                            <input type="radio" name="r3" class="flat-red" value="M" <?php echo  set_radio('r3', 'M'); ?>>
                            &nbsp;Male
                          </label>
                          <!--<label>
                            <input type="radio" name="r3" class="flat-red" disabled>
                            Flat green skin radio
                          </label>-->
                      </div>
                      <div class="form-group">
                        <label for="inputAge" class="col-sm-2 control-label">Age*</label>
                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="inputAge" id="inputAge" placeholder="Age" value="<?php echo set_value('inputAge'); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email*</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" value="<?php echo set_value('inputEmail'); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Password*</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password" value="<?php echo set_value('inputPassword'); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputRepassword" class="col-sm-2 control-label">Password Confirmation*</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="inputRepassword" id="inputRepassword" placeholder="Password Confirmation" value="<?php echo set_value('inputRepassword'); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAddress1" class="col-sm-2 control-label">Address Line 1</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="inputAdress1" id="inputAdress1" placeholder="Street address, Barangay, District / Company Name"  value="<?php echo set_value('inputAdress1'); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAddress2" class="col-sm-2 control-label">Adress Line 2</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="inputAdress2" id="inputAdress2" placeholder="House No., Unit, Building, Floor, etc"  value="<?php echo set_value('inputAdress2'); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputCity" class="col-sm-2 control-label">City</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="inputCity" id="inputCity" placeholder="City"  value="<?php echo set_value('inputCity'); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputRegion" class="col-sm-2 control-label">State/Region</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="inputRegion" id="inputRegion" placeholder="State/Region"  value="<?php echo set_value('inputRegion'); ?>">
                        </div>
                        <label for="inputZIP" class="col-sm-3 control-label">ZIP/Postal Code</label>
                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="inputZIP" id="inputZIP" placeholder="ZIP code"  value="<?php echo set_value('inputZIP'); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputCounty" class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="inputCounty" id="inputCounty" placeholder="Country"  value="<?php echo set_value('inputCounty'); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputDescription" class="col-sm-2 control-label">About Me</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" name="inputDescription" id="inputDescription" placeholder="Short Self-Description"  value="<?php echo set_value('inputDescription'); ?>"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="checkbox1"> I agree to the <a data-toggle="modal" data-target="#ideator">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary" name="btnSave" value="Ideator">Register</button>
                        </div>
                      </div>
                    </form>     
                        </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    <div id="ideator" class="modal fade" role="dialog">
        <div class="modal-dialog">

    <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <center><h4 class="modal-title">Terms and Conditions</h4></center>
            </div>
            <div class="modal-body">
              <div class="form-group" align="justify">
                  <p>Welcome to our website. If you continue to browse and use this website, 
                you are agreeing to comply with and be bound by the following terms 
                and conditions of use, which together with our privacy policy govern 
                <b>Start&Boost's</b> relationship with you in relation to this website. 
                If you disagree with any part of these terms and conditions, please 
                do not use our website.</p>

                The use of this website is subject to the following terms of use:

                <ul>
                  <li>
                    The content of the pages of this website is for your general information and use only.
                    It is subject to change without notice.
                  </li>
                  <li>  
                  Neither we nor any third parties provide any warranty or guarantee as to the accuracy,
                  timeliness, performance, completeness or suitability of the information and materials 
                  found or offered on this website for any particular purpose. 
                  You acknowledge that such information and materials may contain inaccuracies or errors 
                  and we expressly exclude liability for any such inaccuracies or errors to the fullest 
                  extent permitted by law.
                  </li>
                  <li>
                  Your use of any information or materials on this website is entirely at your own risk, 
                  for which we shall not be liable. It shall be your own responsibility to ensure that 
                  any products, services or information available through this website meet your specific 
                  requirements.
                  </li>
                  <li>
                  This website contains material which is owned by us. This material includes, 
                  but is not limited to, the design, layout, look, appearance and graphics. 
                  Reproduction is prohibited other than in accordance with the copyright notice, 
                  which forms part of these terms and conditions.
                  </li>
                  <li>
                  All trade marks reproduced in this website which are not the property of, 
                  or licensed to, the operator are acknowledged on the website.
                  </li>
                  <li>
                  Unauthorised use of this website may give rise to a claim for damages 
                  and/or be a criminal offence.
                  </li>
                  <li>
                  From time to time this website may also include links to other websites. 
                  These links are provided for your convenience to provide further information. 
                  They do not signify that we endorse the website(s). 
                  </li>
                  <li>
                  The website and it's owner will not abide if the users will involve money when investing
                  with other users. 
                  </li>
                  <li>
                  The website will not be able to accomodate your idea to be patented.
                  </li>
                  <li>
                  Your use of this website and any dispute arising out of such use of the website 
                  is subject to the laws of Philippines.
                  </li>
                </ul>
                </div>
                </div>
              <div class="modal-footer">
                  <span><button type="submit" class="btn btn-primary" data-dismiss="modal" name="btnAccept">Accept</button></span>
              </div>
            </div>
            </div>
        </div>
