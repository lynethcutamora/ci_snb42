
                   
                        <?php echo validation_errors(); ?>

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
                              <input type="checkbox" name="checkbox1"> I agree to the <a href="#">terms and conditions</a>
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
   