
                   
                        <?php echo validation_errors(); ?>

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
                            <input type="radio" name="r3" class="flat-red" value="F" <?php echo  set_radio('r3', 'F', TRUE); ?>>
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
                        <label for="inputBusiness" class="col-sm-2 control-label">Name of Business</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="inputBusiness" id="inputBusiness" placeholder="Name of your Business" value="<?php echo set_value('inputBusiness'); ?>"></input>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputBType" class="col-sm-2 control-label">Business Type</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="inputBusinessType" id="inputBusinessType" placeholder="Type of your Business" value="<?php echo set_value('inputBusinessType'); ?>"></input>
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
                              <input type="checkbox" name="checkbox1"> I agree to the <a href="#">terms and conditions</a>*
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary" name="btnSave" value="Investor">Register</button>
                        </div>
                      </div>
                    </form>     
                        </div><!-- /.form-box -->
    </div><!-- /.register-box -->
