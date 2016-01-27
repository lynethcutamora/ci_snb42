          <?php 
            if(validation_errors()!=""){
          ?>
                 <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                   <?php echo validation_errors(); ?>
                 </div>
          <?php }?>
                   
                       

                      <?php echo form_open('../pages/register',"class=form-horizontal"); ?>
                      <div class="form-group">
                        <label for="inputCName" class="col-sm-2 control-label">Company Name*</label>
                        <div class="col-sm-9"> 
                          <input type="text" class="form-control" name="inputCName" id="inputCName" placeholder="Company Name" value="<?php echo set_value('inputCName'); ?>">
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
                        <label for="inputBType" class="col-sm-2 control-label">Business Type</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="inputBusinessType" id="inputBusinessType" placeholder="Type of your Business" value="<?php echo set_value('inputBusinessType'); ?>"></input>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputYear" class="col-sm-2 control-label">Year Founded</label>
                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="inputYear" id="inputYear" placeholder="Year Founded" value="<?php echo set_value('inputYear'); ?>"></input>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputDescription" class="col-sm-2 control-label">About</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" name="inputDescription" id="inputDescription" placeholder="Short Business Description" value="<?php echo set_value('inputDescription'); ?>"></textarea>
                        </div>
                      </div>
                      <hr><p><center>Business Owner</center></p>
                      <div class="form-group">
                        <label for="inputLName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-9"> 
                          <input type="text" class="form-control" name="inputLName" id="inputLName" placeholder="Business Owner's Last Name" value="<?php echo set_value('inputLName'); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputFName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="inputFName" id="inputFName" placeholder="Business Owner's First Name" value="<?php echo set_value('inputFName'); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputMI" class="col-sm-2 control-label">Middle Initial</label>
                        <div class="col-md-2">                          
                           <input type="text" class="form-control" name="inputMI" id="inputMI" size="2" placeholder="Middle Initial" value="<?php echo set_value('inputMI'); ?>">
                        </div><!-- /.form-group -->
                          
                          <!--<label>
                            <input type="radio" name="r3" class="flat-red" disabled>
                            Flat green skin radio
                          </label>-->
                      </div><hr>
                     
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="checkbox1"> I agree to the <a data-toggle="modal" data-target="#company">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-primary" name="btnSave" value="Company">Register</button>
                        </div>
                      </div>
                    </form>
        <div id="company" class="modal fade" role="dialog">
        <div class="modal-dialog">

    <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <center><h4 class="modal-title">Terms and Conditions</h4></center>
            </div>
        
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
                  The website and it's owner will not abide if the users will involve money when teaming
                  up with other users. 
                  </li>
                  <li>
                  Your use of this website and any dispute arising out of such use of the website 
                  is subject to the laws of Philippines.
                  </li>
                </ul>
          
            </div>
            </div>
        </div>
   