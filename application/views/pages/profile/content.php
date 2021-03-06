    <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <?php
      //$badge = $totalRep;
                  

      $this->db->select('*');
      $this->db->from('badge_dtl');
      $this->db->where('voteBadge','1');
      $this->db->where('userId',$userId);
      $query = $this->db->get();
      $gold = $query->num_rows();

      $this->db->select('*');
      $this->db->from('badge_dtl');
      $this->db->where('voteBadge','2');
      $this->db->where('userId',$userId);
      $query = $this->db->get();
      $silver = $query->num_rows();

      $this->db->select('*');
      $this->db->from('badge_dtl');
      $this->db->where('voteBadge','3');
      $this->db->where('userId',$userId);
      $query = $this->db->get();
      $bronze = $query->num_rows();

      $this->db->select('*');
      $this->db->from('badge_dtl');
      $this->db->where('voteBadge','4');
      $this->db->where('userId',$userId);
      $query = $this->db->get();
      $black = $query->num_rows();

      $rep = (($gold*20)+($silver*10)+($bronze*5))-($black*15);   
      ?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User Profile
          </h1>
          <ol class="breadcrumb">
            <li><a href="../dashboard/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User profile</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-3">
              <?php foreach($profileDtl as $row):
                echo '<div class="box box-widget widget-user">';
                # Add the bg color to the header using any of the bg-* classes -->
                echo '<div class="widget-user-header bg-yellow" style="background: url(\''.base_url().'/user/defaultcover_user.png\') center center; background-size:contain;">';
                  
                echo '</div>
                <div class="widget-user-image">';
                  echo'<img class="img-circle" src="'.base_url().'/user/'.$row['avatar_name'].'" width="250px" height="200px">
                </div>
                <div class="box-footer">
                <h3>';
                  if($row['user_Type']=='Ideator'||$row['user_Type']=='Investor')
                  {
                    if($row['user_midInit']==null)
                      echo $row['user_fName']."  ".$row['user_lName']; 
                    else
                      echo $row['user_fName']." ".$row['user_midInit'].". ".$row['user_lName'];
                  }
                    else
                  {
                    echo $row['company_name'];
                  }                  
                  ?>
                </h3>
              <?php  endforeach;?>
                      
                <p>Reputation:<b> &nbsp;&nbsp;<?php echo $rep;?></b><span class="pull-right">
                <?php
                 if($gold==0 && $silver==0 && $bronze==0)
                 {
                     ?><i class='fa fa-star' style="color:SandyBrown"></i><?php
                 }
                 elseif ($gold>=$silver && $gold>=$bronze) 
                 {
                     ?><i class='fa fa-star' style="color:Gold"></i><?php   
                 } 
                 elseif ($silver>$gold && $silver>=$bronze)
                 {
                     ?><i class='fa fa-star' style="color:Silver"></i><?php
                 }
                 elseif ($bronze>$gold && $bronze>$silver)
                 {
                     ?><i class='fa fa-star' style="color:SandyBrown"></i><?php
                 }
                   
                ?>
                </p>
                  <div class="row">
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                      <span><?php echo $gold;?></span>
                      </br>
                        <span class="description-text text-muted">GOLD</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                      <span><?php echo $silver;?></span>
                      </br> 
                        <span class="description-text text-muted">SILVER</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                      <span><?php echo $bronze;?></span>
                      </br> 
                        <span class="description-text text-muted">BRONZE</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                      <span><?php echo $black;?></span>
                      </br>
                        <span class="description-text text-muted">BLACK</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.widget-user -->
              <!-- App Buttons -->
            <?php  if($userId!=$this->session->userdata('userId')){?>
              <div>

                <button type="button" class="btn btn-app" data-toggle="modal" data-target="#message" title="Send Message" style="background-color:#3C8DBC;color:white;">
                <i class="fa fa-envelope"></i>Message
                </button>

                <button type="button" class="btn btn-app" data-toggle="modal" data-target="#badge" title="Rate this User" style="background-color:#3C8DBC;color:white;">
                <i class="fa fa-star"></i>Badge
                </button>
                
                <button type="button" class="btn btn-app" data-toggle="modal" data-target="#group" title="Send Group Request" style="background-color:#3C8DBC;color:white;">
                <i class="fa fa-group"></i>Group
                </button>

              </div>
              <?php }?>

              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">About Me</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-book margin-r-5"></i>  Self Description</strong>
                  <p class="text-muted">
                
                    
                    <?php foreach($profileDtl as $row):
                  if($row['user_Type']=='Ideator'||$row['user_Type']=='Investor')
                  {
                      echo $row['user_shortSelfDescription'];
                  }
                    else
                  {
                    echo $row['company_about'];
                  }                  
                  ?>
                  <?php endforeach;?>
                  
                  </p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                  <p class="text-muted">
                  <?php foreach($profileDtl as $row):
                
                  if($row['user_Type']=='Ideator'||$row['user_Type']=='Investor')
                  {
                      echo $row['location_address1'].", ".$row['location_country'];
                  }
                    else
                  {
                    echo "Not Stated!";
                  }                  
                  ?>
                  <?php  endforeach;?>
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-7">
              <!-- Horizontal Form -->
                <div class="row">
          

            <div class="col-md-12">
            
               
            
             
                </div>
              </div>

              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#profilePic" data-toggle="tab">Change Avatar</a></li>
                  <li><a href="#account" data-toggle="tab">Change Account Information</a></li>
                  <li><a href="#password" data-toggle="tab">Change Password</a></li>
                  
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class='post1' name='post1' id="post1"></div>
                     <script>
    
              
               </script>
                  </div><!-- /.tab-pane -->
                 
                  <div class="tab-pane active" id="profilePic">              
                      <div class="form-group">
                      <?php echo form_open_multipart('../pages/updateProfile');?>
                      <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">
                          
                        <img class='img-circle' src='<?php echo base_url();?>user/<?php echo $this->post->getAvatar($this->session->userdata('userId'))?>' alt='user image' width="100px" height="200px"></div>
                        
                        <div class="col-sm-7">
                          <br/><br/>Change your avatar: <br/><br/>
                          <?php echo form_upload('pic'); ?>                     
                        <br/>
                        <br/>
                        <input class="pull-right" type="submit" value="Upload" id="btnUpload" name="btnUpload">                   
                         </div>

                      </div>
                      </form>
                      </br>
                      </br>
                      
                      </div>
                    </div>

                    <div class="tab-pane" id="account">
                      <div class="form-group">
                      <div class="row">
                      <div class="col-sm-12">
                      <?php foreach($profileDtl as $row):?>
                        <?php foreach($data as $userdtl):?> 
                              <?php echo form_open('../pages/updateAccount','class=form-horizontal');?>
                              <?php
                                  if($row['user_Type']=='Ideator')
                                  {
                              ?>
                                      <div class="form-group">
                                        <label for="inputLName" class="col-sm-2 control-label">Last Name</label>
                                          <div class="col-sm-9"> 
                                          <input type="text" class="form-control" name="inputLName" id="inputLName" required="required" placeholder="New Last Name" value="<?php echo $userdtl['user_lName']; ?>">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputFName" class="col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="inputFName" id="inputFName" required="required" placeholder="New First Name" value="<?php echo $userdtl['user_fName']; ?>">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="inputFName" class="col-sm-2 control-label">Middle Initial</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="inputMI" maxlength="2" id="inputMI" required="required" placeholder="Middle Initial" value="<?php echo $userdtl['user_midInit']; ?>">
                                        </div>
                                      </div>
                    
                                      <div class="form-group">
                                        <label for="inputAge" class="col-sm-2 control-label">Age</label>
                                        <div class="col-sm-2">
                                          <input type="text" class="form-control" name="inputAge" id="inputAge" required="required" placeholder="Age" value="<?php echo $userdtl['user_age']; ?>">
                                        </div>
                                      </div>
        
                                      <div class="form-group">
                                        <label for="inputAddress1" class="col-sm-2 control-label">Address Line 1</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="inputAddress1" id="inputAddress1" required="required" placeholder="Street address, Barangay, District / Company Name"  value="<?php echo $userdtl['location_address1']; ?>">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputCity" class="col-sm-2 control-label">City</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="inputCity" id="inputCity" required="required" placeholder="City"  value="<?php echo $userdtl['location_city']; ?>">
                                        </div>
                                      </div>
                    
                                      <div class="form-group">
                                        <label for="inputCounty" class="col-sm-2 control-label">Country</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="inputCountry" id="inputCountry" required="required" placeholder="Country"  value="<?php echo $userdtl['location_country']; ?>">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputDescription" class="col-sm-2 control-label">About Me</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="inputDescription" id="inputDescription" required="required" placeholder="Short Self-Description"  value="<?php echo $userdtl['user_shortSelfDescription']; ?>">
                                        </div>
                                      </div>
                    
                                      <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" class="btn btn-primary" name="btnSave" value="Ideator">Save</button>
                                        </div>
                                      </div>
                               
                        <?php
                                  }
                                  elseif ($row['user_Type']=='Investor') {?>
                                      <div class="form-group">
                                        <label for="inputLName" class="col-sm-2 control-label">Last Name</label>
                                          <div class="col-sm-9"> 
                                          <input type="text" class="form-control" name="inputLName" id="inputLName" required="required" placeholder="New Last Name" value="<?php echo $userdtl['user_lName']; ?>">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputFName" class="col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="inputFName" id="inputFName" required="required" placeholder="New First Name" value="<?php echo $userdtl['user_fName']; ?>">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="inputFName" class="col-sm-2 control-label">Middle Initial</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="inputMI" maxlength="2" id="inputMI" required="required" required="required" placeholder="Middle Initial" value="<?php echo $userdtl['user_midInit']; ?>">
                                        </div>
                                      </div>
                    
                                      <div class="form-group">
                                        <label for="inputAge" class="col-sm-2 control-label">Age</label>
                                        <div class="col-sm-2">
                                          <input type="text" class="form-control" name="inputAge" id="inputAge" required="required" placeholder="Age" value="<?php echo $userdtl['user_age']; ?>">
                                        </div>
                                      </div>
        
                                      <div class="form-group">
                                        <label for="inputAddress1" class="col-sm-2 control-label">Address Line 1</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="inputAdress1" id="inputAdress1" required="required" placeholder="Street address, Barangay, District / Company Name"  value="<?php echo $userdtl['location_address1']; ?>">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputCity" class="col-sm-2 control-label">City</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="inputCity" id="inputCity" required="required" placeholder="City"  value="<?php echo $userdtl['location_city']; ?>">
                                        </div>
                                      </div>
                    
                                      <div class="form-group">
                                        <label for="inputCounty" class="col-sm-2 control-label">Country</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="inputCounty" id="inputCounty" required="required" placeholder="Country"  value="<?php echo $userdtl['location_country']; ?>">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputDescription" class="col-sm-2 control-label">About Me</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="inputDescription" id="inputDescription" required="required" placeholder="Short Self-Description"  value="<?php echo $userdtl['user_shortSelfDescription']; ?>">
                                        </div>
                                      </div>
                    
                                      <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" class="btn btn-primary" name="btnSave" value="Investor">Save</button>
                                        </div>
                                      </div>
                                  <?php }
                                  elseif ($row['user_Type'] == 'Company'){?>

                                      <div class="form-group">
                                        <label for="inputLName" class="col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-9"> 
                                          <input type="text" class="form-control" name="inputLName" id="inputLName" required="required" placeholder="Business Owner's Last Name" value="<?php echo $userdtl['company_lName']; ?>">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="inputFName" class="col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="inputFName" id="inputFName" required="required" placeholder="Business Owner's First Name" value="<?php echo $userdtl['company_fName']; ?>">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="inputMI" class="col-sm-2 control-label">Middle Initial</label>
                                        <div class="col-md-2">                          
                                           <input type="text" class="form-control" name="inputMI" id="inputMI" required="required" size="2" placeholder="Middle Initial" value="<?php echo $userdtl['company_midInit']; ?>">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="inputCName" class="col-sm-2 control-label">Company Name</label>
                                        <div class="col-sm-9"> 
                                          <input type="text" class="form-control" name="inputCName" id="inputCName" required="required" placeholder="Company Name" value="<?php echo $userdtl['company_name']; ?>">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="inputBType" class="col-sm-2 control-label">Business Type</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="inputBusinessType" id="inputBusinessType" required="required" placeholder="Type of your Business" value="<?php echo $userdtl['company_businessType']; ?>">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="inputYear" class="col-sm-2 control-label">Year Founded</label>
                                        <div class="col-sm-2">
                                          <input type="text" class="form-control" name="inputYear" id="inputYear" required="required" placeholder="Year Founded" value="<?php echo $userdtl['company_yearFounded']; ?>">
                                        </div>
                                      </div>

                                       <div class="form-group">
                                        <label for="inputDescription" class="col-sm-2 control-label">About</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" name="inputDescription" id="inputDescription" required="required" placeholder="Short Business Description" value="<?php echo $userdtl['company_about']; ?>">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" class="btn btn-primary" name="btnSave" value="Company">Save</button>
                                        </div>
                                      </div>
                                  <?php }
                              ?>
                             
                          <?php endforeach;?>
                        <?php endforeach;?>
                        </div>
                      </div>
                    </div>
                    </form>  
                    </div>

                    <div class="tab-pane" id="password">
                        <div class="form-group">
                        <div class="row">
                        <div class="col-sm-12">
                        
                              <form method="post" action="changePassword" > 
                              <div class='form-group'>
                                      <label for='inputOldPassword' class='col-sm-2 control-label'>Old Password</label>
                                      <div class='col-sm-9'>
                                        <input type='password' class='form-control' name='inputOldPassword' id='inputOldPassword' required='required' placeholder='Old Password' value='<?php echo set_value('inputOldPassword'); ?>'>
                                      </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class='form-group'>
                                      <label for='inputNewPassword' class='col-sm-2 control-label'>New Password</label>
                                      <div class='col-sm-9'>
                                        <input type='password' class='form-control' name='inputNewPassword' id='inputNewPassword' required='required' placeholder='New Password' value='<?php echo set_value('inputNewPassword'); ?>'>
                                      </div>
                                    </div>
                                          <br>
                                          <br>
                                    <div class='form-group'>
                                      <label for='inputNewRepassword' class='col-sm-2 control-label'>New Password Confirmation</label>
                                      <div class='col-sm-9'>
                                        <input type='password' class='form-control' name='inputNewRepassword' id='inputNewRepassword' required='required' placeholder='New Password Confirmation' value='<?php echo set_value('inputNewRepassword'); ?>'>
                                      </div>
                                    </div>
                                            <br>
                                            <br>
                                      <div class='form-group'>
                                        <div class='col-sm-offset-2 col-sm-10'>
                                          <button type='submit' class='btn btn-primary' name='btnSave' value='Ideator'>Save</button>
                                        </div>
                                    </div>

                                    <script>
                                       $('button[name="btnSave"]').click(function(e){
                                          var inputOldPassword = $("#inputOldPassword").val();
                                          var inputNewPassword = $("#inputNewPassword").val();
                                          var inputNewRepassword = $("#inputNewRepassword").val();
                                          
                                            e.preventDefault();
                                              var dataString = 'inputOldPassword='+ inputOldPassword  + '&inputNewPassword=' + inputNewPassword+ '&inputNewRepassword=' + inputNewRepassword   ;
                                            $.ajax({
                                              type: 'post',
                                              url:"<?php echo base_url().'pages/changePassword/'?>",
                                              data:dataString,
                                              success: function (data) {
                                          
                                                 alert(data);
                                                  $("#inputOldPassword").val('') ;
                                                  $("#inputNewPassword").val('') ;
                                                  $("#inputNewRepassword").val('') ;

                                              }
                                            });

                                          });
                                    </script>
                     
                        </div>
                        </div>
                        </div>
                    </div>

                  </div><!-- /.tab-pane -->
                </div>         

                </div><!-- /.tab-content -->
               

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      <div id="badge" class="modal fade" role="dialog">
        <div class="modal-dialog">

    <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            <?php foreach($data as $userdtl):?>
                <?php if($this->post->validBadge($userId)=='false'){?>
              <h4 class="modal-title">Rate this user</h4>
              <?php }
              else {?>
                <h4 class="modal-title">Already Rated This User</h4>
                <?php }?>
            <?php endforeach;?>
            </div>
            <div class="modal-body">
              <div class="col-md-12">

              <?php foreach($profileDtl as $row):
                echo '<div class="box box-widget widget-user">';
                # Add the bg color to the header using any of the bg-* classes -->
                echo '<div class="widget-user-header bg-black" style="background: url(\''.base_url().'/user/defaultcover_user.png\') center center; background-size:contain;">';
                  
                echo '</div>
                <div class="widget-user-image">';
                  echo'<img class="img-circle" src="'.base_url().'/user/'.$row['avatar_name'].'" alt="User Avatar">
                </div>
                <div class="box-footer">
                <h3>';
                              if($row['user_Type']=='Ideator'||$row['user_Type']=='Investor')
                              {
                                  if($row['user_midInit']==null)
                                     echo $row['user_fName']."  ".$row['user_lName']; 
                                   else
                                     echo $row['user_fName']." ".$row['user_midInit'].". ".$row['user_lName'];
                              }
                              else
                              {
                                echo $row['company_name'];
                              }                  
                      ?></h3>
                      <?php  endforeach;?>
                      
                <p>Reputation:<span>
                <?php
                 if($gold==0 && $silver==0 && $bronze==0)
                 {
                     ?><i class='fa fa-star' style="color:SandyBrown"></i><?php
                 }
                 elseif ($gold>=$silver && $gold>=$bronze) 
                 {
                     ?><i class='fa fa-star' style="color:Gold"></i><?php   
                 } 
                 elseif ($silver>$gold && $silver>=$bronze)
                 {
                     ?><i class='fa fa-star' style="color:Silver"></i><?php
                 }
                 elseif ($bronze>$gold && $bronze>$silver)
                 {
                     ?><i class='fa fa-star' style="color:SandyBrown"></i><?php
                 }
                   
                ?>
                </i><b> &nbsp;&nbsp;<?php echo $rep;?></b></span></p>
                
             
              
                
                <?php foreach($data as $userdtl):?>
                <?php if($this->post->validBadge($userId)=='false'){?>;
                
                <?php echo form_open('../pages/badge'); 
                echo '<input type="text" hidden="true" name="userId" value="'.$userId.'">';
                  echo '<div class="row">
                    <div class="col-sm-3 border-right">
                      <div class="description-block"> 
                        <span class="description-text"><button type="submit" class="btn btn-default btn-lg" name="btnRate" id="gold" value="gold"><i class="fa fa-star" style="color:Gold;"></i> </button></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 border-right">
                      <div class="description-block"> 
                        <span class="description-text"><button type="submit" class="btn btn-default btn-lg" name="btnRate" id="silver" value="silver"><i class="fa fa-star" style="color:Silver;"></i> </button></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                        <span class="description-text"><button type="submit" class="btn btn-default btn-lg" name="btnRate" id="bronze" value="bronze"><i class="fa fa-star" style="color:SandyBrown;"></i> </button></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3">
                      <div class="description-block">
                        <span class="description-text"><button type="submit" class="btn btn-default btn-lg" name="btnRate" id="black" value="black"><i class="fa fa-star" style="color:Black;"></i> </button></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->';
                  echo "</form>";
                  }
                  else
                    {
                      echo '<div class="row">
                    <div class="col-sm-3 border-right">
                      <div class="description-block"> 
                        <span class="description-text"><button type="submit" class="btn btn-default btn-lg disabled" disabled name="btnRate" id="gold" value="gold"><i class="fa fa-star" style="color:Gold;"></i></button></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 border-right">
                      <div class="description-block"> 
                        <span class="description-text"><button type="submit" class="btn btn-default btn-lg disabled" disabled name="btnRate" id="silver" value="silver"><i class="fa fa-star" style="color:Silver;"></i> </button></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                        <span class="description-text"><button type="submit" class="btn btn-default btn-lg disabled" disabled name="btnRate" id="bronze" value="bronze"><i class="fa fa-star" style="color:SandyBrown;"></i> </button></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3">
                      <div class="description-block">
                        <span class="description-text"><button type="submit" class="btn btn-default btn-lg disabled" disabled name="btnRate" id="black" value="black"><i class="fa fa-star" style="color:Black;"></i> </button></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->';
                    }?>                            
                  <?php endforeach;?>
                  </div>    
              </div>
            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
        </div>
        </div>

        <div id="group" class="modal fade" role="dialog">
        <div class="modal-dialog">

    <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add user to the group</h4>
            </div>
            <div class="modal-body">
              <div class="col-md-12">

              <?php foreach($profileDtl as $row):
                echo '<div class="box box-widget widget-user">';
                # Add the bg color to the header using any of the bg-* classes -->
                echo '<div class="widget-user-header bg-black" style="background: url(\''.base_url().'/user/defaultcover_user.png\') center center; background-size:contain;">';
                  
                echo '</div>
                <div class="widget-user-image">';
                  echo'<img class="img-circle" src="'.base_url().'user/'.$row['avatar_name'].'" alt="User Avatar">
                </div>
                <div class="box-footer">
                <h3>';
                              if($row['user_Type']=='Ideator'||$row['user_Type']=='Investor')
                              {
                                  if($row['user_midInit']==null)
                                     echo $row['user_fName']."  ".$row['user_lName']; 
                                   else
                                     echo $row['user_fName']." ".$row['user_midInit'].". ".$row['user_lName'];
                              }
                              else
                              {
                                echo $row['company_name'];
                              }                  
                      ?></h3>
                      <?php  endforeach;?>
                      
                <p>Reputation:<span>
                <?php
                 if($gold==0 && $silver==0 && $bronze==0)
                 {
                     ?><i class='fa fa-star' style="color:SandyBrown"></i><?php
                 }
                 elseif ($gold>=$silver && $gold>=$bronze) 
                 {
                     ?><i class='fa fa-star' style="color:Gold"></i><?php   
                 } 
                 elseif ($silver>$gold && $silver>=$bronze)
                 {
                     ?><i class='fa fa-star' style="color:Silver"></i><?php
                 }
                 elseif ($bronze>$gold && $bronze>$silver)
                 {
                     ?><i class='fa fa-star' style="color:SandyBrown"></i><?php
                 }
                   
                ?>
                </i><b> &nbsp;&nbsp;<?php echo $rep;?></b></span></p>
                
                
                 
                  </div> 
              </div>
            </div>
            <div class="modal-footer">
            <form method="post" action="<?php echo base_url()."pages/addmember";?>">
            Group: 
                <div class="btn-group">
                      <select name="group" class="form-control">     
                      <?php
                        $this->db->select('*');
                        $this->db->from('group_md');
                        $this->db->where('userId', $this->session->userdata('userId'));

                        $query = $this->db->get();
                        ?>                
                        <?php foreach($query->result_array() as $row): 
                       
                        echo "<option>".$row['groupname']."</option>";
                        
                        ?>

                     
                      </select>
                      
                      <input type="text"  hidden="true" value="<?php echo $userId;?>" name="userid">
                      <input type="text"  hidden="true" value="<?php echo $row['groupId'];?>" name="groupid">
                </div>&nbsp;&nbsp;
                <?php endforeach; ?>
                <button class="btn btn-default pull-right" value="addmember"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Add member</button>
              
                </form>
            </div>
            </div>
        </div>
        </div>
        </div>
        <div id="message" class="modal fade" role="dialog">
        <div class="modal-dialog">

    <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Message</h4>
            </div>
            <center>
            <div class="modal-body">
              <div class="form-group">
              
              <?php echo form_open('../pages/messageProfile');?>
              <input type="text" hidden="true" name="userId" value="<?php echo $userId;?>">
                        <div class="col-sm-12">
                         <?php echo form_error('inputDescription');  ?>
                          <textarea class="form-control" name="inputDescription" id="inputDescription" placeholder="Your Message Here" value="<?php echo set_value('inputDescription'); ?>"></textarea>
                        </div>
                        </br>
                        </br>
                        </br>
              </div>
            </div>
            </center>
           
            <div class="modal-footer">
              <button type="submit" class="btn btn-default pull-right" name="submit" id="submit">Send</button>
            </div>
            </div>
            </div>
        </div>

      </div>
