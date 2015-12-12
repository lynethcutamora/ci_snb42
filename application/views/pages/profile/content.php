<script type="text/javascript">

function saveScrollPositions(theForm) {

if(theForm) {

var scrolly = typeof window.pageYOffset != 'undefined' ? window.pageYOffset : document.documentElement.scrollTop;

var scrollx = typeof window.pageXOffset != 'undefined' ? window.pageXOffset : document.documentElement.scrollLeft;

theForm.scrollx.value = scrollx;

theForm.scrolly.value = scrolly;

}

}

</script>


      <?php
      //$badge = $totalRep;
                  

      $this->db->select('*');
      $this->db->from('badge_dtl');
      $this->db->where('voteBadge','1');
      $this->db->where('userId',$this->session->userdata('userId'));
      $query = $this->db->get();
      $gold = $query->num_rows();

      $this->db->select('*');
      $this->db->from('badge_dtl');
      $this->db->where('voteBadge','2');
      $this->db->where('userId',$this->session->userdata('userId'));
      $query = $this->db->get();
      $silver = $query->num_rows();

      $this->db->select('*');
      $this->db->from('badge_dtl');
      $this->db->where('voteBadge','3');
      $this->db->where('userId',$this->session->userdata('userId'));
      $query = $this->db->get();
      $bronze = $query->num_rows();

      $this->db->select('*');
      $this->db->from('badge_dtl');
      $this->db->where('voteBadge','4');
      $this->db->where('userId',$this->session->userdata('userId'));
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
              <?php foreach($data as $row):
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

              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">About Me</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-book margin-r-5"></i>  Self Description</strong>
                  <p class="text-muted">
                    <?php foreach($data as $row):
                
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
                  <?php foreach($data as $row):
                
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
              <!-- Horizontal Form -->
                <div class="box">
                  <div class="box-header with-border">
                    <p>Post New Idea</p>
                  </div><!-- /.box-header -->
                  <!-- form start -->
                 <?php echo form_open_multipart('../pages/postIdea',"class=form-horizontal"); ?>
                    <div class="box-body">
                      <div class="form-group">
                        <label for="ideatitle" class="col-sm-2 control-label">Title*</label>
                        <div class="col-sm-10">
                        <?php echo form_error('ideatitle'); ?>
                          <input type="text" class="form-control" name="ideatitle" id="ideatitle" placeholder="Title" value="<?php echo set_value('ideatitle'); ?>"/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputDescription" class="col-sm-2 control-label">Description*</label>
                        <div class="col-sm-10">
                         <?php echo form_error('inputDescription'); ?>
                          <textarea class="form-control"name="inputDescription" id="inputDescription" placeholder="Description" value="<?php echo set_value('inputDescription'); ?>"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputLinks" class="col-sm-2 control-label">Links</label>
                        <div class="col-sm-10">
                        <?php echo form_error('relatedlinks'); ?>
                          <input type="text" class="form-control"name="relatedlinks" id="relatedlinks" placeholder="Related Links (Separated by comma)" value="<?php echo set_value('relatedlinks'); ?>"/>
                        </div>
                      </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                     
                         <?php echo form_upload('pic'); ?>
                          <input class="btn btn-info pull-right" type="submit" value="Post Idea" id="submit" name="button">
                  </form>
                    
                    </div><!-- /.box-footer -->
                 
                    </div>
               
              </div>
              </div>
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                  <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                      <?php  foreach($data as $userdtl):?>
            <?php foreach($alldata as $postdtl):?>

          <div class="row">
          
            <div class="col-md-12">
            <!-- Box Comment -->
              <div class="box box-widget">
                <div class='box-header with-border'>
                  <div class='user-block'>
                    <img class='img-circle' src='<?php echo base_url();?>/user/<?php echo $postdtl['avatar_name']?>' alt='user image'>
                    <span class='username'>
                    <a href="#">
                        <?php 
                                  if($postdtl['user_Type']=='Ideator'||$postdtl['user_Type']=='Investor')
                                  {
                                      if($postdtl['user_midInit']==null)
                                         echo $postdtl['user_fName']."  ".$postdtl['user_lName'];
                                       else
                                         echo $postdtl['user_fName']." ".$postdtl['user_midInit'].". ".$postdtl['user_lName'];
                                  }
                                  else
                                  {
                                    echo $postdtl['company_name'];
                                  }
                          ?>
                      </a>
                      </span>
                    &nbsp;&nbsp;&nbsp;
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
                    <span class='description'>    <?php echo $postdtl['postDate'];?></span>
                  </div><!-- /.user-block -->
                  <div class='box-tools'>

                  
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class='box-body'>
                  <h5><b><a href="<?php echo base_url()."pages/post/".$postdtl['postId'];?>" ><?php echo $postdtl['postTitle'];?></a></b></h3>
                  <p>
                    <?php 
                      $query=$this->post->showImage($postdtl['postId']);
                      foreach ($query->result_array() as $row) {
                        echo "<img src='".base_url().$row['extContent']."' height='200px' width='200px'>"; 
                      }
                    ?>
                  </p>

                  <p><h4><?php echo $postdtl['postContent'];?></h4></p>
                  <p>
                    <?php 
                      $query=$this->post->showLinks($postdtl['postId']);

                      foreach ($query->result_array() as $row) {
                        echo "<p>Related Links:</p>";
                        $myArray = explode(',', $row['extContent']);
                           foreach ($myArray as $row) {
                            
                            echo "<a href='http://".$row."' target='_blank'>".$row."</a><br>"; 
                            }
                      }
                    ?>
                  </p>
                  <table><tr><td>
                  <button class='btn btn-default btn-xs'><i class='fa fa-share'></i> Share</button></td>
                  <form method="POST" action="<?php echo base_url()."pages/upvote";?>" name="form"  onsubmit="return saveScrollPositions(this);"> 
                  <input type="hidden" name="scrollx" id="scrollx" value="0" />

                     <input type="hidden" name="scrolly" id="scrolly" value="0" />
                    <input type="text" hidden="true" name="postId" value="<?php echo $postdtl['postId'];?>">
                      <?php if($this->post->validUpvote($postdtl['postId'])=='false'){
                echo "<td><button id='add' class='btn btn-default btn-xs'><i class='fa fa-arrow-circle-up'></i> Upvote</button> </td></form>";
               }
                else{
                  echo "<td><button class='btn btn-default btn-xs disabled' disabled><i class='fa fa-arrow-circle-up'></i> Upvoted</button></td></form>";
                }?></table>
                </form>
                  <span class='pull-right text-muted'><?php $this->post->upvotecount($postdtl['postId']);?> - 3 comments</span>
                </div><!-- /.box-body -->
               

                          
              </div><!-- /.box -->
              
                  </div>
                  </div>

<?php  endforeach;?>

<?php  endforeach;?>
                  </div><!-- /.tab-pane -->
                 
                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3"><img src="../user/1.png" style="size:contain;" /></div>
                        <div class="col-sm-7">
                          <br/><br/>Change your avatar: <br/><br/>
                          <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                      </div>
                    </div>
                  </div><!-- /.tab-pane -->
                </div>
                </div><!-- /.tab-content -->
                <div class="col-md-2">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
                <div class="info-box-content">
                  <span>IDEAS SHARED</span>
                  <span class="info-box-number">57</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->

              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-tasks"></i></span>
                <div class="info-box-content">
                  <span>CURRENT PROJECTS</span>
                  <span class="info-box-number">5</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->

              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>
                <div class="info-box-content">
                  <span>COMPLETED PROJECTS</span>
                  <span class="info-box-number">7</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->

              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-group"></i></span>
                <div class="info-box-content">
                  <span>GROUPS</span>
                  <span class="info-box-number">3</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->

            </div><!-- /.col -->
            </div><!-- /.col -->


            <!-- ============================================= -->
            <!--GROUP NAV-->
            
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      <div id="badge" class="modal fade" role="dialog">
        <div class="modal-dialog">

    <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Rate this user</h4>
            </div>
            <div class="modal-body">
              <div class="col-md-12">

              <?php foreach($data as $row):
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
                
                <?php echo form_open('../pages/badge'); ?>
                 
                  <div class="row">
                    <div class="col-sm-3 border-right">
                      <div class="description-block"> 
                        <span class="description-text"><button type="submit" class='btn btn-default btn-lg' name="btnRate" id="gold" value="gold"><i class='fa fa-star' style="color:Gold;"></i> </button></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 border-right">
                      <div class="description-block"> 
                        <span class="description-text"><button type="submit" class='btn btn-default btn-lg' name="btnRate" id="silver" value="silver"><i class='fa fa-star' style="color:Silver;"></i> </button></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                        <span class="description-text"><button type="submit" class='btn btn-default btn-lg' name="btnRate" id="bronze" value="bronze"><i class='fa fa-star' style="color:SandyBrown;"></i> </button></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3">
                      <div class="description-block">
                        <span class="description-text"><button type="submit" class='btn btn-default btn-lg' name="btnRate" id="black" value="black"><i class='fa fa-star' style="color:Black;"></i> </button></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                  </form>
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

              <?php foreach($data as $row):
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
                
                
                 
                  </div> 
              </div>
            </div>
            <div class="modal-footer">
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

                        <?php endforeach ?>
                      </select>
                </div>&nbsp;&nbsp;
                <button class="btn btn-default pull-right" value="addmember"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;&nbsp;Add member</button>
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
              <?php
              
              ?>
              <?php echo form_open('../pages/messageProfile');?>
                        <div class="col-sm-12">
                         <?php echo form_error('inputDescription');  ?>
                          <textarea class="form-control"name="inputDescription" id="inputDescription" placeholder="Your Message Here" value="<?php echo set_value('inputDescription'); ?>"></textarea>
                        </div>
                        </br>
                        </br>
                        </br>
                        <button type="submit" class="btn btn-default pull-right" name="submit" id="submit">Send</button>
                              
              </form>
              </div>
            </div>
            </center>
           
            <div class="modal-footer">
            </div>
            </div>
            </div>
        </div>

      </div>
<?php

$scrollx = 0;

$scrolly = 0;

if(!empty($_REQUEST['scrollx'])) {

$scrollx = $_REQUEST['scrollx'];

}

if(!empty($_REQUEST['scrolly'])) {

$scrolly = $_REQUEST['scrolly'];

}

?>

<script type="text/javascript">

  window.scrollTo(<?php echo "$scrollx" ?>, <?php echo "$scrolly" ?>);

</script>
