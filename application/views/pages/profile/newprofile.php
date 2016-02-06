   <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
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
              <div class="col-md-4">
                     <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>/user/<?php echo $this->post->getAvatar($postId);?>" alt="User profile picture">
                  <h3 class="profile-username text-center"><?php echo $this->post->userProfile($postId);?></h3>
                  <p class="text-muted text-center"><?php echo $this->post->getUserType($postId); ?></p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Gold</b> <a class="pull-right"><?php echo  $this->post->gold($postId)?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Silver</b> <a class="pull-right"><?php echo  $this->post->silver($postId)?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Bronze</b> <a class="pull-right"><?php echo  $this->post->bronze($postId)?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Black</b> <a class="pull-right"><?php echo  $this->post->black($postId)?></a>
                    </li>
                  </ul>

                  <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#badge"><b>Badge</b></a>
                    <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#report"><b>Report User</b></a>
                </div><!-- /.box-body -->
              </div><!-- /.box -->


              </div>
              <div class="col-md-5">
                   <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">About <?php echo $this->post->userProfile($postId);?></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                 

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                  <p class="text-muted">
                      <?php foreach($this->post->profile($postId)->result_array() as $row):
                
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

                  <hr>

                 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
                <div class="col-md-3">
      <div class="box box-default">
        <div class="box-header with-border">
          Advertisement(s)
        </div>
        <div class="box-body">
          <img src="<?php echo base_url().'images/ind.png' ?>" width="100%"><br/><hr/>
        </div>
        <div class="box-footer text-center">
          <a><small>See more</small></a>
        </div>
      </div>
    </div>
          </div><!-- /.widget-user -->
              <!-- App Buttons -->
        </section>
          
              </div><!-- /.box -->
  <div id="badge" class="modal fade" role="dialog">
        <div class="modal-dialog">

    <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
         
                <?php if($this->post->validBadge($postId)=='false'){?>
              <h4 class="modal-title">Rate this user</h4>
              <?php }
              else {?>
                <h4 class="modal-title">Already Rated This User</h4>
                <?php }?>
         
            </div>
            <div class="modal-body">
              <div class="col-md-12">

             
             <div class="box box-widget widget-user">
           
                <div class="widget-user-header bg-black" style="background: url(\''.base_url().'/user/defaultcover_user.png\') center center; background-size:contain;">
                  
                </div>
                <div class="widget-user-image">';
               <img class="img-circle" src="<?php echo base_url();?>/user/<?php echo $this->post->getAvatar($postId);?>" alt="User Avatar">
                </div>
                <div class="box-footer">
                <h3><?php echo $this->post->userProfile($postId);?></h3>
                      
                <p>Reputation:<span>
               
                </i><b> &nbsp;&nbsp;<?php echo $this->post->reputation($postId);?></b></span></p>
                
             
              
                
            
                <?php if($this->post->validBadge($postId)=='false'){?>;
                
                <?php echo form_open('../pages/badge'); 
                echo '<input type="text" hidden="true" name="userId" value="'.$postId.'">';
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
              
                  </div>    
              </div>
            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
        </div>
        </div>


        <div id="report" class="modal fade" role="dialog">
        <div class="modal-dialog">

    <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              Report This User.
              
            </div>
            <div class="modal-body">
                    <form method="post" action="" id="reportform" enctype="multipart/form-data" class="form-horizontal">
                <label>Reasons:</label>
                <input type="text" hidden="true" value="<?php echo $postId;?>" name="userId">
                    <textarea class="form-control" rows="3" placeholder="Reasons why will you report this user" name="comments" id="comments"></textarea><br> 
                <button type="submit" class="btn btn-primary btn-block" name='btnSendReport' id='btnSendReport'>send Report</button>
              </form>
             </div>
            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
        </div>
        </div>

       <script>
    $('button[name="btnSendReport"]').click(function(e){
          var form = new FormData(document.getElementById('reportform'));
         
            e.preventDefault();
            
            $.ajax({
              type: 'post',
              url:"<?php echo base_url().'pages/reportUser'?>",
              data:form,
              mimeType:"multipart/form-data",
               cache: false,
                contentType: false, //must, tell jQuery not to process the data
                processData: false, //must, tell jQuery not to set contentType
              success: function (data) {
          
                  $("#comments").val('') ;
                  alert(data);

              }
            });


          });



</script>