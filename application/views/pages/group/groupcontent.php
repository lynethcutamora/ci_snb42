<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Group Page 
            <div class="btn-group">
              <button type="button" class="btn btn-default">Action</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Change Cover Photo</a></li>
                <li><a href="#">Add Group Member</a></li>
                <li><a href="#">Add Project</a></li>
                <li><a href="#">Edit Group Description</a></li>
              </ul>
            </div>
          </h1>
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
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black" style="background: url('../../images/bg.png') center center;">
                  <h3 class="widget-user-username">$index[5]</h3>
                  <h5 class="widget-user-desc">"We can make imaginations to reality"</h5>
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                        <h5 class="description-header">5</h5>
                        <span class="description-text">MEMBERS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                        <h5 class="description-header">2</h5>
                        <span class="description-text">PROJECTS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                        <h5 class="description-header">1</h5>
                        <span class="description-text">COMPLETED PROJECTS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3">
                      <div class="description-block">
                        <h5 class="description-header">11</h5>
                        <span class="description-text">FILES</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.footer-->
              </div><!-- /.widget-user -->

              <!-- Custom Tabs (Pulled to the right) -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#tab_1-1" data-toggle="tab">Group Chat</a></li>
                  <li><a href="#tab_2-2" data-toggle="tab">Important Files</a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      Project(s) <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Start&Boost</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Start&Boost</a></li>
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
                            <h3 class="box-title">Start&Boost Project</h3>
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
                      <form class="form-horizontal">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="inputDescription" class="col-sm-2 control-label">Information</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="inputDescription" placeholder="Post Information"></textarea>
                            </div>
                          </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                          <form action="" method="post" enctype="multipart/form-data">
                            <input class="pull-left" type="file" name="fileToUpload" id="fileToUpload">
                            <input class="btn btn-info pull-right" type="submit" value="Post" name="submit">
                          </form>
                        </div><!-- /.box-footer -->
                      </form><!--/.form-->
                    </div><!-- /.box -->
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
                                <h4 class="attachment-heading"><a href="#">Chapter I & II</a></h4>
                                <div class="attachment-text">
                                  .docx file
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
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
            </div><!-- /.col -->

            <div class="col-md-3">
                <div class="box box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">Team Members</h3>
                  </div><!-- /.box-header -->
                    <div class='box-header with-border'>
                      <div class='user-block'>
                        <img class='img-circle' src='../../images/team/index0.png' alt='user image'>
                          <span class='username'><a href="#">Lyneth C. Cutamora</a></span>
                          <span class='description'>Reputation:<span class="pull-right"><i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;1024</b></span></span>
                      </div><!-- /.user-block -->
                    </div><!-- /.box-header -->
                    <div class='box-header with-border'>
                      <div class='user-block'>
                        <img class='img-circle' src='../../images/team/index1.jpg' alt='user image'>
                          <span class='username'><a href="#">Jason D. Pitogo</a></span>
                          <span class='description'>Reputation:<span class="pull-right"><i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;1024</b></span></span>
                      </div><!-- /.user-block -->
                    </div><!-- /.box-header -->
                    <div class='box-header with-border'>
                      <div class='user-block'>
                        <img class='img-circle' src='../../images/team/index2.jpg' alt='user image'>
                          <span class='username'><a href="#">Alfie Dimpas</a></span>
                          <span class='description'>Reputation:<span class="pull-right"><i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;1024</b></span></span>
                      </div><!-- /.user-block -->
                    </div><!-- /.box-header -->
                    <div class='box-header with-border'>
                      <div class='user-block'>
                        <img class='img-circle' src='../../images/team/index3.jpg' alt='user image'>
                          <span class='username'><a href="#">Edelito D. Albaracin Jr.</a></span>
                          <span class='description'>Reputation:<span class="pull-right"><i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;1024</b></span></span>
                      </div><!-- /.user-block -->
                    </div><!-- /.box-header -->
                    <div class='box-header with-border'>
                      <div class='user-block'>
                        <img class='img-circle' src='../../images/team/index4.jpg' alt='user image'>
                          <span class='username'><a href="#">Isidro Estoce Jr.</a></span>
                          <span class='description'>Reputation:<span class="pull-right"><i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;1024</b></span></span>
                      </div><!-- /.user-block -->
                    </div><!-- /.box-header -->
                </div><!-- /.box -->

                <div class="box-body">
                  <p><b>About Start&Boost Project:</b></p>
                  <p>Start&Boost is a Web and mobile based startup ideas repository and exploration.</p>
                  <p><b>Investor(s):</b></p>
                  <div class='box-header'>
                      <div class='user-block'>
                        <img class='img-circle' src='../../images/team/index0.png' alt='user image'>
                          <span class='username'><a href="#">Ms. Universe</a></span>
                          <span class='description'>Reputation:<span class="pull-right"><i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;1024</b></span></span>
                      </div><!-- /.user-block -->
                    </div><!-- /.box-header -->
                </div>
              </div><!-- /.col -->


          </div>
        </div>
      </div><!--/.content wrapper-->