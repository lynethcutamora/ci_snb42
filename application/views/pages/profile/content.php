<!-- Content Wrapper. Contains page content -->
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

              <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black" style="background: url('../../dist/img/photo1.png') center center;">
                  <h3 class="widget-user-username">Lyneth C. Cutamora</h3>
                  <h5 class="widget-user-desc">Web Designer</h5>
                </div>
                <div class="widget-user-image">
                  <img class="img-circle" src="../../images/team/index0.png" alt="User Avatar">
                </div>

                <div class="box-footer">
                <p>Reputation:<span class="pull-right"><i class="fa fa-star" style="color:#ffd700;"></i><b> &nbsp;&nbsp;1024</b></span></p>
                  <div class="row">
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                        <h5 class="description-header">24</h6>
                        <span class="description-text">GOLD</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                        <h5 class="description-header">11</h5>
                        <span class="description-text">SILVER</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                        <h5 class="description-header">2</h5>
                        <span class="description-text">BRONZE</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3">
                      <div class="description-block">
                        <h5 class="description-header">0</h5>
                        <span class="description-text">BLACK</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.widget-user -->
              <!-- App Buttons -->
              <div>
                <a class="btn btn-app" data-toogle="tooltip" title="Send Message" style="background-color:#3C8DBC;color:white;">
                  <i class="fa fa-envelope"></i>Message
                </a>
                <a class="btn btn-app" data-toogle="tooltip" title="Rate this User"style="background-color:#3C8DBC;color:white;">
                  <i class="fa fa-star"></i>Badge
                </a>
                <a class="btn btn-app" data-toogle="tooltip" title="Send a Group Request"style="background-color:#3C8DBC;color:white;">
                  <i class="fa fa-group"></i>Group
                </a>
              </div>

              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">About Me</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-book margin-r-5"></i>  Education</strong>
                  <p class="text-muted">
                    B.S. in Information Technology in University of Cebu
                  </p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                  <p class="text-muted">Mandaue City, Cebu, Philippines</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-7">
              <!-- Horizontal Form -->
                <div class="box">
                  <div class="box-header with-border">
                    <p>Post New Idea</p>
                  </div><!-- /.box-header -->
                  <!-- form start -->
                  <form class="form-horizontal">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="ideatitle" placeholder="Title"/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputDescription" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputDescription" placeholder="Description"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputLinks" class="col-sm-2 control-label">Links</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="relatedlinks" placeholder="Related Links (Separated by comma)"/>
                        </div>
                      </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                      <form action="" method="post" enctype="multipart/form-data">
                          <input class="pull-left" type="file" name="fileToUpload" id="fileToUpload">
                          <input class="btn btn-info pull-right" type="submit" value="Post Idea" name="submit">
                      </form>
                    </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                  <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="box-body">
                        <div class="box box-widget">
                          <div class='box-header with-border'>
                            <div class='user-block'>
                              <img class='img-circle' src='../../images/team/index0.png' alt='user image'>
                              <span class='username'><a href="#">Lyneth C. Cutamora</a>&nbsp;&nbsp;<i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;1024</b></span>
                              <span class='description'>7:30 PM Nov. 29, 2015</span>
                            </div><!-- /.user-block -->
                            <div class='box-tools'>
                              <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
                              <a href='#' class='pull-right btn-box-tool'><i class='fa fa-times'></i></a>
                            </div><!-- /.box-tools -->
                          </div><!-- /.box-header -->
                          <div class='box-body'>
                            <!-- post text -->
                            <p>Far far away, behind the word mountains, far from the
                              countries Vokalia and Consonantia, there live the blind
                              texts. Separated they live in Bookmarksgrove right at</p>
                            <p>the coast of the Semantics, a large language ocean.
                              A small river named Duden flows by their place and supplies
                              it with the necessary regelialia. It is a paradisematic
                              country, in which roasted parts of sentences fly into
                              your mouth.</p>

                            <!-- Attachment -->
                            <div class="attachment-block clearfix">
                              <img class="attachment-img" src="../../dist/img/photo1.png" alt="attachment image">
                              <div class="attachment-pushed">
                                <h4 class="attachment-heading"><a href="#">Start&Boost</a></h4>
                                <div class="attachment-text">
                                  Related Links: <br/><a href="#">startandboost/video</a>, &nbsp;&nbsp;<a href="#">startandboost/article</a>
                                </div><!-- /.attachment-text -->
                              </div><!-- /.attachment-pushed -->
                            </div><!-- /.attachment-block -->

                            <!-- Social sharing buttons -->
                            <button class='btn btn-default btn-xs'><i class='fa fa-thumbs-o-up'></i> Upvote</button>
                            <button class='btn btn-default btn-xs'><i class='fa fa-share'></i> Share</button>
                            <span class='pull-right text-muted'>45 likes - 2 comments</span>
                          </div><!-- /.box-body -->
                          <div class='box-footer box-comments'>
                            <div class='box-comment'>
                              <!-- User image -->
                              <img class='img-circle img-sm' src='../../images/team/index2.jpg' alt='user image'>
                              <div class='comment-text'>
                                <span class="username">
                                  Alfie Dimpas
                                  <span class='text-muted pull-right'>8:03 PM Today</span>
                                </span><!-- /.username -->
                                It is a long established fact that a reader will be distracted
                                by the readable content of a page when looking at its layout.<br/>
                                <button class='btn btn-default btn-xs'><i class='fa fa-thumbs-o-up'></i> Upvote</button>
                                <button class='btn btn-default btn-xs'><i class='fa fa-reply'></i> Reply</button><br/>
                                <form action="#" method="post">
                                  <img class="img-responsive img-circle img-sm" src="../../images/team/index0.png" alt="alt text">
                                  <!-- .img-push is used to add margin to elements next to floating images -->
                                  <div class="img-push">
                                    <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                                  </div>
                                </form>
                              </div><!-- /.comment-text -->
                            </div><!-- /.box-comment -->
                            <div class='box-comment'>
                              <!-- User image -->
                              <img class='img-circle img-sm' src='../../images/team/index3.jpg' alt='user image'>
                              <div class='comment-text'>
                                <span class="username">
                                  Edelito Albaracin Jr.
                                  <span class='text-muted pull-right'>8:03 PM Today</span>
                                </span><!-- /.username -->
                                The point of using Lorem Ipsum is that it has a more-or-less
                                normal distribution of letters, as opposed to using
                                'Content here, content here', making it look like readable English.<br/>
                                <button class='btn btn-default btn-xs'><i class='fa fa-thumbs-o-up'></i> Upvote</button>
                                <button class='btn btn-default btn-xs'><i class='fa fa-reply'></i> Reply</button><br/>
                                <form action="#" method="post">
                                  <img class="img-responsive img-circle img-sm" src="../../images/team/index0.png" alt="alt text">
                                  <!-- .img-push is used to add margin to elements next to floating images -->
                                  <div class="img-push">
                                    <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                                  </div>
                                </form>
                              </div><!-- /.comment-text -->
                            </div><!-- /.box-comment -->
                          </div><!-- /.box-footer -->
                          <div class="box-footer">
                            <form action="#" method="post">
                              <img class="img-responsive img-circle img-sm" src="../../images/team/index0.png" alt="alt text">
                              <!-- .img-push is used to add margin to elements next to floating images -->
                              <div class="img-push">
                                <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                              </div>
                            </form>
                          </div><!-- /.box-footer -->
                        </div><!-- /.box -->
                      </div><!--/.body-->
                    </div><!-- /.post -->
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
                      </div><hr>
                      <?php include ('../register/ideator.php');?>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->

            <!-- ============================================= -->
            <!--GROUP NAV-->
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
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->