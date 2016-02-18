                    <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
          <?php 
            if(validation_errors()!=""){
          ?>
                 <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                   <?php echo validation_errors(); ?>
                 </div>
          <?php }?>
                      <h1><center>Investor</center></h1>
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
                                        <select id="inputCounty" name="inputCounty" class="form-control select2" style="width: 100%;">
                          <option name="inputCounty" disabled selected hidden>Country</option>
                          <option name="inputCounty" value="Afghanistan">Afghanistan</option>
              <option name="inputCounty" value="Albania">Albania</option>
              <option name="inputCounty" value="Algeria">Algeria</option>
              <option name="inputCounty" value="Andorra">Andorra</option>
              <option name="inputCounty" value="Angola">Angola</option>
              <option name="inputCounty" value="Antigua and Barbuda">Antigua and Barbuda</option>
              <option name="inputCounty" value="Argentina">Argentina</option>
              <option name="inputCounty" value="Armenia">Armenia</option>
              <option name="inputCounty" value="Australia">Australia</option>
              <option name="inputCounty" value="Austria">Austria</option>
              <option name="inputCounty" value="Azerbaijan">Azerbaijan</option>
              <option name="inputCounty" value="Bahamas">Bahamas</option>
              <option name="inputCounty" value="Bahrain">Bahrain</option>
              <option name="inputCounty" value="Bangladesh">Bangladesh</option>
              <option name="inputCounty" value="Barbados">Barbados</option>
              <option name="inputCounty" value="Belarus">Belarus</option>
              <option name="inputCounty" value="Belgium">Belgium</option>
              <option name="inputCounty" value="Benin">Benin</option>
              <option name="inputCounty" value="Bhutan">Bhutan</option>
              <option name="inputCounty" value="Bolivia">Bolivia</option>
              <option name="inputCounty" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
              <option name="inputCounty" value="Botswana">Botswana</option>
              <option name="inputCounty" value="Brazil">Brazil</option>
              <option name="inputCounty" value="Brunei">Brunei</option>
              <option name="inputCounty" value="Bulgaria">Bulgaria</option>
              <option name="inputCounty" value="Burkina Faso">Burkina Faso</option>
              <option name="inputCounty" value="Burundi">Burundi</option>
              <option name="inputCounty" value="Cabo Verde">Cabo Verde</option>
              <option name="inputCounty" value="Cambodia">Cabo Verde</option>
              <option name="inputCounty" value="Cameroon">Cameroon</option>
              <option name="inputCounty" value="Canada">Canada</option>
              <option name="inputCounty" value="Central African Republic">Central African Republic</option>
              <option name="inputCounty" value="Chad">Chad</option>
              <option name="inputCounty" value="Chile">Chile</option>
              <option name="inputCounty" value="China">China</option>
              <option name="inputCounty" value="Colombia">Colombia</option>
              <option name="inputCounty" value="Comoros">Comoros</option>
              <option name="inputCounty" value="Congo, Republic of the">Congo, Republic of the</option>
              <option name="inputCounty" value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
              <option name="inputCounty" value="Costa Rica">Costa Rica</option>
              <option name="inputCounty" value="Cote d'Ivoire">Cote d'Ivoire</option>
              <option name="inputCounty" value="Croatia">Croatia</option>
              <option name="inputCounty" value="Cuba">Cuba</option>
              <option name="inputCounty" value="Cyprus">Cyprus</option>
              <option name="inputCounty" value="Czech Republic">Czech Republic</option>
              <option name="inputCounty" value="Denmark">Denmark</option>
              <option name="inputCounty" value="Djibouti">Djibouti</option>
              <option name="inputCounty" value="Dominica">Dominica</option>
              <option name="inputCounty" value="Ecuador">Ecuador</option>
              <option name="inputCounty" value="Egypt">Egypt</option>
              <option name="inputCounty" value="El Salvador">El Salvador</option>
              <option name="inputCounty" value="Equatorial Guinea">Equatorial Guinea</option>
              <option name="inputCounty" value="Eritrea">Eritrea</option>
              <option name="inputCounty" value="Estonia">Estonia</option>
              <option name="inputCounty" value="Ethiopia">Ethiopia</option>
              <option name="inputCounty" value="Fiji">Fiji</option>
              <option name="inputCounty" value="Finland">Finland</option>
              <option name="inputCounty" value="France">France</option>
              <option name="inputCounty" value="Gabon">Gabon</option>
              <option name="inputCounty" value="Gambia">Gambia</option>
              <option name="inputCounty" value="Georgia">Georgia</option>
              <option name="inputCounty" value="Germany">Germany</option>
              <option name="inputCounty" value="Ghana">Ghana</option>
              <option name="inputCounty" value="Greece">Greece</option>
              <option name="inputCounty" value="Grenada">Grenada</option>
              <option name="inputCounty" value="Guatemala">Guatemala</option>
              <option name="inputCounty" value="Guinea">Guinea</option>
              <option name="inputCounty" value="Guinea-Bissau">Guinea-Bissau</option>
              <option name="inputCounty" value="Guyana">Guyana</option>
              <option name="inputCounty" value="Haiti">Haiti</option>
              <option name="inputCounty" value="Honduras">Honduras</option>
              <option name="inputCounty" value="Hungary">Hungary</option>
              <option name="inputCounty" value="Iceland">Iceland</option>
              <option name="inputCounty" value="India">India</option>
              <option name="inputCounty" value="Indonesia">Indonesia</option>
              <option name="inputCounty" value="Iran">Iran</option>
              <option name="inputCounty" value="Iraq">Iraq</option>
              <option name="inputCounty" value="Ireland">Ireland</option>
              <option name="inputCounty" value="Israel">Israel</option>
              <option name="inputCounty" value="Italy">Italy</option>
              <option name="inputCounty" value="Jamaica">Jamaica</option>
              <option name="inputCounty" value="Japan">Japan</option>
              <option name="inputCounty" value="Jordan">Jordan</option>
              <option name="inputCounty" value="Kazakhstan">Kazakhstan</option>
              <option name="inputCounty" value="Kenya">Kenya</option>
              <option name="inputCounty" value="Kiribati">Kiribati</option>
              <option name="inputCounty" value="Kosovo">Kosovo</option>
              <option name="inputCounty" value="Kuwait">Kuwait</option>
              <option name="inputCounty" value="Kyrgyzstan">Kyrgyzstan</option>
              <option name="inputCounty" value="Laos">Laos</option>
              <option name="inputCounty" value="Latvia">Latvia</option>
              <option name="inputCounty" value="Lebanon">Lebanon</option>
              <option name="inputCounty" value="Lesotho">Lesotho</option>
              <option name="inputCounty" value="Liberia">Liberia</option>
              <option name="inputCounty" value="Libya">Libya</option>
              <option name="inputCounty" value="Liechtenstein">Liechtenstein</option>
              <option name="inputCounty" value="Lithuania">Lithuania</option>
              <option name="inputCounty" value="Luxembourg">Luxembourg</option>
              <option name="inputCounty" value="Macedonia">Macedonia</option>
              <option name="inputCounty" value="Madagascar">Madagascar</option>
              <option name="inputCounty" value="Malawi">Malawi</option>
              <option name="inputCounty" value="Malaysia">Malaysia</option>
              <option name="inputCounty" value="Maldives">Maldives</option>
              <option name="inputCounty" value="Mali">Mali</option>
              <option name="inputCounty" value="Malta">Malta</option>
              <option name="inputCounty" value="Marshall Islands">Marshall Islands</option>
              <option name="inputCounty" value="Mauritania">Mauritania</option>
              <option name="inputCounty" value="Mauritius">Mauritius</option>
              <option name="inputCounty" value="Mexico">Mexico</option>
              <option name="inputCounty" value="Micronesia">Micronesia</option>
              <option name="inputCounty" value="Moldova">Moldova</option>
              <option name="inputCounty" value="Monaco">Monaco</option>
              <option name="inputCounty" value="Mongolia">Mongolia</option>
              <option name="inputCounty" value="Montenegro">Montenegro</option>
              <option name="inputCounty" value="Morocco">Morocco</option>
              <option name="inputCounty" value="Mozambique">Mozambique</option>
              <option name="inputCounty" value="Myanmar (Burma)">Myanmar (Burma)</option>
              <option name="inputCounty" value="Namibia">Namibia</option>
              <option name="inputCounty" value="Nauru">Nauru</option>
              <option name="inputCounty" value="Nepal">Nepal</option>
              <option name="inputCounty" value="Netherlands">Netherlands</option>
              <option name="inputCounty" value="New Zealand">New Zealand</option>
              <option name="inputCounty" value="Nicaragua">Nicaragua</option>
              <option name="inputCounty" value="Niger">Niger</option>
              <option name="inputCounty" value="Nigeria">Nigeria</option>
              <option name="inputCounty" value="North Korea">North Korea</option>
              <option name="inputCounty" value="Norway">Norway</option>
              <option name="inputCounty" value="Oman">Oman</option>
              <option name="inputCounty" value="Pakistan">Pakistan</option>
              <option name="inputCounty" value="Palau">Palau</option>
              <option name="inputCounty" value="Palestine">Palestine</option>
              <option name="inputCounty" value="Panama">Panama</option>
              <option name="inputCounty" value="Papua New Guinea">Papua New Guinea</option>
              <option name="inputCounty" value="Paraguay">Paraguay</option>
              <option name="inputCounty" value="Peru">Peru</option>
              <option name="inputCounty" value="Philippines">Philippines</option>
              <option name="inputCounty" value="Poland">Poland</option>
              <option name="inputCounty" value="Portugal">Portugal</option>
              <option name="inputCounty" value="Qatar">Qatar</option>
              <option name="inputCounty" value="Romania">Romania</option>
              <option name="inputCounty" value="Russia">Russia</option>
              <option name="inputCounty" value="Rwanda">Rwanda</option>
              <option name="inputCounty" value="St. Kitts and Nevis">St. Kitts and Nevis</option>
              <option name="inputCounty" value="St. Lucia">St. Lucia</option>
              <option name="inputCounty" value="St. Vincent and The Grenadines">St. Vincent and The Grenadines</option>
              <option name="inputCounty" value="Samoa">Samoa</option>
              <option name="inputCounty" value="San Marino">San Marino</option>
              <option name="inputCounty" value="Sao Tome and Principe">Sao Tome and Principe</option>
              <option name="inputCounty" value="Saudi Arabia">Saudi Arabia</option>
              <option name="inputCounty" value="Senegal">Senegal</option>
              <option name="inputCounty" value="Serbia">Serbia</option>
              <option name="inputCounty" value="Seychelles">Seychelles</option>
              <option name="inputCounty" value="Sierra Leone">Sierra Leone</option>
              <option name="inputCounty" value="Singapore">Singapore</option>
              <option name="inputCounty" value="Slovakia">Slovakia</option>
              <option name="inputCounty" value="Slovenia">Slovenia</option>
              <option name="inputCounty" value="Solomon Islands">Solomon Islands</option>
              <option name="inputCounty" value="Somalia">Somalia</option>
              <option name="inputCounty" value="South Africa">South Africa</option>
              <option name="inputCounty" value="South Korea">South Korea</option>
              <option name="inputCounty" value="South Sudan">South Sudan</option>
              <option name="inputCounty" value="Spain">Spain</option>
              <option name="inputCounty" value="Sri Lanka">Sri Lanka</option>
              <option name="inputCounty" value="Sudan">Sudan</option>
              <option name="inputCounty" value="Suriname">Suriname</option>
              <option name="inputCounty" value="Swaziland">Swaziland</option>
              <option name="inputCounty" value="Sweden">Sweden</option>
              <option name="inputCounty" value="Switzerland">Switzerland</option>
              <option name="inputCounty" value="Syria">Syria</option>
              <option name="inputCounty" value="Taiwan">Taiwan</option>
              <option name="inputCounty" value="Tajikistan">Tajikistan</option>
              <option name="inputCounty" value="Tanzania">Tanzania</option>
              <option name="inputCounty" value="Thailand">Thailand</option>
              <option name="inputCounty" value="Timor-Leste">Timor-Leste</option>
              <option name="inputCounty" value="Togo">Togo</option>
              <option name="inputCounty" value="Tonga">Tonga</option>
              <option name="inputCounty" value="Trinidad and Tobago">Trinidad and Tobago</option>
              <option name="inputCounty" value="Tunisia">Tunisia</option>
              <option name="inputCounty" value="Turkey">Turkey</option>
              <option name="inputCounty" value="Turkmenistan">Turkmenistan</option>
              <option name="inputCounty" value="Tuvalu">Tuvalu</option>
              <option name="inputCounty" value="Uganda">Uganda</option>
              <option name="inputCounty" value="Ukraine">Ukraine</option>
              <option name="inputCounty" value="United Arab Emirates">United Arab Emirates</option>
              <option name="inputCounty" value="UK (United Kingdom)">UK (United Kingdom)</option>
              <option name="inputCounty" value="USA (United States of America)">USA (United States of America)</option>
              <option name="inputCounty" value="Uruguay">Uruguay</option>
              <option name="inputCounty" value="Uzbekistan">Uzbekistan</option>
              <option name="inputCounty" value="Vanuatu">Vanuatu</option>
              <option name="inputCounty" value="Vatican City (Holy See)">Vatican City (Holy See)</option>
              <option name="inputCounty" value="Venezuela">Venezuela</option>
              <option name="inputCounty" value="Vietnam">Vietnam</option>
              <option name="inputCounty" value="Yemen">Yemen</option>
              <option name="inputCounty" value="Zambia">Zambia</option>
              <option name="inputCounty" value="Zimbabwe">Zimbabwe</option>
                      </select></div>
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
                              <input type="checkbox" name="checkbox1" id="checkbox1"> I agree to the <a data-toggle="modal" data-target="#investor">terms and conditions</a>
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
     <div id="investor" class="modal fade" role="dialog">
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
                  The website and it's owner will not abide if the users will involve money when teaming
                  up with other users. 
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
   
   <script>
          $('button[name="btnAccept"]').click(function(e){
          
            e.preventDefault();
              
            document.getElementById("checkbox1").checked = true;

          });



</script>