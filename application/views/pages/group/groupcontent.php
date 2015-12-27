<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="col-md-2">
            <h4 class="text-muted"><b>Group Page</b></h4>
          </div>
            <div class="btn-group col-md-7">
              <button type="button" class="btn btn-default pull-right" data-toogle="tooltip" title="Group Settings"><i class="fa fa-gear"></i></button>
              <button type="button" class="btn btn-default pull-right" data-toogle="tooltip" title="change coverphoto"><i class="fa fa-camera"></i></button>              
              <button type="button" class="btn btn-default pull-right" data-toogle="tooltip" title="add project" data-toggle="modal" data-target="#addproject" title="Add group project"><i class="fa fa-plus"></i>&nbsp;&nbsp;Project</button>
            </div>
          <ol class="breadcrumb">
            <li><a href="../dashboard/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Group Page</li>
          </ol>
        </section>
        <hr/>
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-9">
              <div class="box box-widget widget-user">
                <?php foreach($groupDtl as $row): $groupid=$row['groupId'];?>

                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-blue" style="background: url('<?php echo base_url();?>/user/<?php echo $row['groupCoverPic']?>') center center;">
                  <h3 class="widget-user-username"><?php echo $row['groupname']; ?></h3>
                  <h5 class="widget-user-desc"><?php echo $row['groupdescription']; ?></h5>
                </div>

                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                        <h5 class="description-header"><?php echo count($memberinfo);?></h5>
                        <span class="description-text">MEMBERS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                        <h5 class="description-header"><?php echo count($allproject);?></h5>
                        <span class="description-text">PROJECTS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                        <h5 class="description-header">0</h5>
                        <span class="description-text">COMPLETED PROJECTS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3">
                      <div class="description-block">
                        <h5 class="description-header">0</h5>
                        <span class="description-text">FILES</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.footer-->

                <?php endforeach;?>
              </div><!-- /.widget-user -->

              <!-- Custom Tabs (Pulled to the right) -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#tab_1-1" data-toggle="tab">Group Chat</a></li>
                  <li><a href="#tab_2-2" data-toggle="tab">Important Files</a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      Projects (<?php echo count($allproject); ?>) <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <?php foreach($allproject as $row):?>
                      <li role="presentation"><a role="menuitem" tabindex="-1" name="projectname" href="<?php echo base_url(); ?>pages/group/<?php echo $groupid;?>/<?php echo $row['postId'];?>"><?php echo $row['postTitle'];?></a></li>
                      <?php endforeach;?>
                    </ul>
                  </li>
                  <li class="pull-left header"><i class="fa fa-calendar-check-o"></i> Group Activity</li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1-1">
                    <div>
                      <a class="btn btn-app" data-toogle="tooltip" title="Send Message">
                        <i class="fa fa-video-camera"></i>Call a conference
                      </a>
                    </div>
                    <!-- Chat box -->
                        <div class="box box-success">
                          <div class="box-header">
                            <i class="fa fa-comments-o"></i>
                            <?php foreach($projectdtl as $row):?>
                            <h3 class="box-title"><?php echo $row['postTitle'];?></h3>
                            <?php endforeach;?>
                            <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                              <div class="btn-group" data-toggle="btn-toggle" >
                                <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                              </div>
                            </div>
                          </div>
                          <div class="box-body chat" id="chat-box">
                            <!-- chat item -->
                            <div class="item">
                              <img src="../../images/team/index3.jpg" alt="user image" class="online">
                              <p class="message">
                                <a href="#" class="name">
                                  <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                                  Bob Uy
                                </a>
                                I would like to meet you to discuss the latest news about
                                the arrival of the new theme. They say it is going to be one the
                                best themes on the market
                              </p>
                              <div class="attachment">
                                <h4>Attachments:</h4>
                                <p class="filename">
                                  Theme-thumbnail-image.jpg
                                </p>
                                <div class="pull-right">
                                  <button class="btn btn-primary btn-sm btn-flat">Open</button>
                                </div>
                              </div><!-- /.attachment -->
                            </div><!-- /.item -->
                            <!-- chat item -->
                            <div class="item">
                              <img src="../../images/team/index1.jpg" alt="user image" class="offline">
                              <p class="message">
                                <a href="#" class="name">
                                  <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                                  Wang Kig
                                </a>
                                I would like to meet you to discuss the latest news about
                                the arrival of the new theme. They say it is going to be one the
                                best themes on the market
                              </p>
                            </div><!-- /.item -->
                            <!-- chat item -->
                            <div class="item">
                              <img src="../../images/team/index4.jpg" alt="user image" class="offline">
                              <p class="message">
                                <a href="#" class="name">
                                  <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                                  Teigo Wang
                                </a>
                                I would like to meet you to discuss the latest news about
                                the arrival of the new theme. They say it is going to be one the
                                best themes on the market
                              </p>
                            </div><!-- /.item -->
                          </div><!-- /.chat -->
                          <div class="box-footer">
                            <div class="input-group">
                              <input class="form-control" placeholder="Type message...">
                              <div class="input-group-btn">
                                <button class="btn btn-success"><i class="fa fa-plus"></i></button>
                              </div>
                            </div>
                          </div>
                        </div><!-- /.box (chat box) -->
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2-2">
                    <div class="box">
                      <div class="box-header with-border">
                        <p>Update Status</p>
                      </div><!-- /.box-header -->
                      <!-- form start -->
                      <?php foreach($allproject as $row):?>
                      <?php echo form_open_multipart('../pages/postGroup/'.$groupid.'/'.$row['postId'].'',"class=form-horizontal"); ?>
                      <?php endforeach;?>
                        <div class="box-body">
                          <div class="form-group">
                            <label for="inputDescription" class="col-sm-2 control-label">Information</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="inputDescription" name="inputDescription" placeholder="Post Information"></textarea>
                            </div>
                          </div>

                        </div><!-- /.box-body -->
                        <div class="box-footer">
                          <?php echo form_upload('file'); ?>
                            <input class="btn btn-info pull-right" type="submit" value="Post" name="submit">
                          </form>
                        </div><!-- /.box-footer -->
                      </form><!--/.form-->
                    </div><!-- /.box -->
                    <!-- Post -->
                    <div class="post">
                      <div class="box-body">
                      <?php foreach($projfile as $post):?>
                        <div class="box box-widget">
                          <div class='box-header with-border'>
                            <div class='user-block'>
                              <img class='img-circle' src='<?php echo base_url();?>user/<?php echo $post['avatar_name']?>' alt='user image'>
                              <span class='username'>
                              <a href="#">
                                  <?php
                                    $userId=$post['userId'];
                                    if($post['user_Type']=='Ideator'||$post['user_Type']=='Investor')
                                    {
                                      if($post['user_midInit']==null)
                                        echo $post['user_fName']."  ".$post['user_lName'];
                                      else
                                        echo $post['user_fName']." ".$post['user_midInit'].". ".$post['user_lName'];
                                    }else{
                                       echo $post['company_name'];
                                    }
                                  ?>
                              </a>
                              </span>
                              &nbsp;&nbsp;&nbsp;
                              <span class='description'><?php echo $post['postDate'];?></span>
                            </div><!-- /.user-block -->
                            <div class='box-tools'>
                              <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
                              <a href='#' class='pull-right btn-box-tool'><i class='fa fa-times'></i></a>
                            </div><!-- /.box-tools -->
                          </div><!-- /.box-header -->
                          <div class='box-body'>
                            <!-- post text -->
                            <p><?php echo $post['postContent'];?></p>

                            <!-- Attachment -->
                            <div class="attachment-block clearfix">
                              <!--<img class="attachment-img" src="../../dist/img/photo1.png" alt="attachment image">-->
                              <span class="pull-left"><button class="btn btn-app"><i class="fa fa-file"></i></button></span>
                              <div class="attachment-pushed">
                                <h4 class="attachment-heading"><a href="<?php echo base_url()."pages/post/".$post['postId'];?>"><?php echo $post['postTitle'];?></a></h4>
                                <div class="attachment-text">
                                  .docx file
                                </div><!-- /.attachment-text -->
                              </div><!-- /.attachment-pushed -->
                            </div><!-- /.attachment-block -->
                          </div><!-- /.box-body -->
                          <!--<div class='box-footer box-comments'>
                            <div class='box-comment'>-->
                              <!-- User image -->
                              <!--<img class='img-circle img-sm' src='../../images/team/index2.jpg' alt='user image'>
                              <div class='comment-text'>
                                <span class="username">
                                  Alfie Dimpas
                                  <span class='text-muted pull-right'>8:03 PM Today</span>
                                </span>--><!-- /.username -->
                                <!--It is a long established fact that a reader will be distracted
                                by the readable content of a page when looking at its layout.<br/>
                                <button class='btn btn-default btn-xs'><i class='fa fa-thumbs-o-up'></i> Upvote</button>
                                <button class='btn btn-default btn-xs'><i class='fa fa-reply'></i> Reply</button><br/>
                                <form action="#" method="post">
                                  <img class="img-responsive img-circle img-sm" src="../../images/team/index0.png" alt="alt text">-->
                                  <!-- .img-push is used to add margin to elements next to floating images -->
                                  <!--<div class="img-push">
                                    <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                                  </div>
                                </form>
                              </div>--><!-- /.comment-text -->
                            <!-- </div>/.box-comment -->
                          <!--</div> /.box-footer -->
                          <div class="box-footer">
                            <form action="#" method="post">
                          </div><!-- /.box-footer -->
                        </div><!-- /.box -->

                        <?php  endforeach;?>
                      </div><!--/.body-->
                    </div><!-- /.post -->
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
            </div><!-- /.col -->

            <div class="col-md-3">
                <div class="box box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">Team Members</h3>
                  </div><!-- /.box-header -->
                    <div class='box-header with-border'>
                      <?php foreach($memberinfo as $row):?>
                      <div class='user-block'>
                        <img class='img-circle' src='<?php echo base_url();?>/user/<?php echo $row['avatar_name']?>' alt='user image'>
                          <span class='username'><a href="#"><?php echo $row['user_fName']." ".$row['user_midInit'].". ".$row['user_lName']?></a></span>
                          <span class='description'>Reputation:<span class="pull-right"><i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;0</b></span></span>
                          <br/>
                      </div><!-- /.user-block -->
                      <?php  endforeach;?>
                    </div><!-- /.box-header -->
                    <div class="box-footer">
                      <form method="post" action="#">
                        <div class="input-group">
                        <input class="form-control" placeholder="Search people" name="txtsearch" required="required">
                          <div class="input-group-btn">
                            <button type="submit"class="btn btn-success pull-right" name="btnsearch"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div><!-- /.box -->
                <?php if(isset($_POST['txtsearch'])){
                    echo '<div class="box box-solid">
                              <div class="box-header with-border">
                                <h4>Search Results&nbsp;&nbsp;<span class="label bg-green pull-right">'.count($searchpeople).'</span></h4>
                              </div>';
                      foreach ($searchpeople as $row):
                        echo'<div class="box-body">';
                          echo '<form method="post" action="'.base_url().'pages/addmember">';
                          echo '<input type="text" hidden="true" name="groupid" value="'.$groupid.'">';
                          echo '<input type="text" hidden="true" name="userid" value="'.$row['userId'].'">';
                          if($this->post->existsMember($groupid,$row['userId'])==false){
                            echo '<span class="pull-left"><i class="fa fa-user" style="color:gray;"></i></span>
                                  <p class="text-muted">&nbsp;&nbsp;'.$row['user_fName']." ".$row['user_midInit'].". ".$row['user_lName'].'
                                  <span class="pull-right"><button name="btnaddmember" class="form-control btn-primary" type="submit"><i class="fa fa-user-plus"></i></button></span></p>';
                          }else{
                            echo '<span class="pull-left"><i class="fa fa-user" style="color:gray;"></i></span>
                                  <p class="text-muted">&nbsp;&nbsp;'.$row['user_fName']." ".$row['user_midInit'].". ".$row['user_lName'].'
                                  <span class="pull-right"><button name="btnaddmember" class="form-control btn disabled" disabled><i class="fa fa-user-plus"></i></button></span></p>';                      
                         }
                          echo '</form>';
                        echo'</div>';
                      endforeach;
                    echo '<div class="box-footer">
                              <form method="post" action="">
                                <button type="submit"class="btn btn-deafult pull-left" name="btndone">done</button>         
                              </form>
                            </div>
                          </div>
                    ';
                  }
                ?>


                <?php foreach($projectdtl as $row):?>
                  <div class="box-body">
                    <p><b>About <?php echo $row['postTitle']?></b></p>
                    <p><?php echo $row['postContent']?>.</p>
                    <p><b>Investor(s):</b></p>
                    <div class='box-header'>
                        <div class='user-block'>
                          <img class='img-circle' src='../../images/team/index0.png' alt='user image'>
                            <span class='username'><a href="#">Ms. Universe</a></span>
                            <span class='description'>Reputation:<span class="pull-right"><i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;1024</b></span></span>
                        </div><!-- /.user-block -->
                      </div><!-- /.box-header -->
                  </div>
                <?php endforeach;?>
              </div><!-- /.col -->
          </div><!--/.col-12-->
        </div><!--/.row-->

        <div id="addproject" class="modal fade" role="dialog">
          <div class="modal-dialog">
          <!-- Modal content-->
            <div class="modal-content">
              <?php echo '<form method="post" action="'.base_url().'pages/addproject">'; ?>
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Add group project</h4>
                </div>
                <div class="modal-body">
                  <input type="text" hidden="true" name="groupid" value="<?php echo $groupid; ?>">
                  <input type="text" class="form-control" name="inputProjectName" id="inputProjectName" placeholder="Project Title"  required="required" value=""/><br/>
                  <textarea class="form-control" name="inputDescription" id="inputDescription" placeholder="Short Project Description"  required="required" value=""></textarea>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary pull-right">Add Project</button>
                </div><!--/.modal footer-->
              </form>
            </div><!--/.modal content-->   
          </div><!--/.modal dialog-->
        </div><!--add project-->
      </div><!--/.content wrapper-->