      <?php  ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Start&Boost
            <small>"Start with an idea and boost it here."</small>
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        <!-- Callouts -->
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>
              <h3 class="box-title">Callouts</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-info">
              <?php foreach($data as $row):?>
                <h4>Hello <?php echo $row['user_fName'];?>! You caught us before we're ready.</h4>
                <p>Development team $index[5] is working hard to put finishing touches onto Start&Boost. Things are going well and it should be heady to help you with lean startup soon.<br/><br/>Thanks! :-)</p>
              <?php endforeach;?>
              </div>
            </div>
          </div><!-- /.box -->

          <div class="row">

          <!-- ====================================================================== -->
            <div class="col-md-9">
            <!-- TABLE: TOP 5 IDEAS -->
                <div class="box box-info">
                  <div class="box-header with-border">
                    <i class="fa fa-star"></i>
                    <h3 class="box-title">Top 5 Ideas</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <div class="table-responsive">
                      <table class="table no-margin">
                        <thead>
                          <tr>
                            <th>Top</th>
                            <th>Title</th>
                            <th>Ideator</th>
                            <th>Reputation</th>
                            <th>Popularity</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 


                  
           
 
                        
                        $query = $this->db->query("SELECT *, COUNT(c.postId) as number_of_votes from upvote_dtl c left join userpost v on c.postId = v.postId left join user_md b on v.userid = b.userid where voteType = '1' group by c.postId order by number_of_votes desc limit 5");
                             $i = 0;
                                foreach($query->result() as $row):
                             $i++;
                        $this->db->select('*');
                        $this->db->from('badge_dtl');
                        $this->db->where('voteBadge','1');
                        $this->db->where('userId',$row->userId);
                        $query = $this->db->get();
                        $gold = $query->num_rows();

                        $this->db->select('*');
                        $this->db->from('badge_dtl');
                        $this->db->where('voteBadge','2');
                        $this->db->where('userId',$row->userId);
                        $query = $this->db->get();
                        $silver = $query->num_rows();

                        $this->db->select('*');
                        $this->db->from('badge_dtl');
                        $this->db->where('voteBadge','3');
                        $this->db->where('userId',$row->userId);
                        $query = $this->db->get();
                        $bronze = $query->num_rows();

                        $this->db->select('*');
                        $this->db->from('badge_dtl');
                        $this->db->where('voteBadge','4');
                        $this->db->where('userId',$row->userId);
                        $query = $this->db->get();
                        $black = $query->num_rows();

                        $rep = (($gold*20)+($silver*10)+($bronze*5))-($black*15);

                        $this->db->select('*');
                        $this->db->from('upvote_dtl');
                        $this->db->where('voteType','1');
                        $this->db->where('postId',$row->postId);
                        $query = $this->db->get();
                        $like = $query->num_rows();

                        $this->db->select('*');
                        $this->db->from('upvote_dtl');
                        $this->db->where('voteType','2');
                        $this->db->where('postId',$row->postId);
                        $query = $this->db->get();
                        $share = $query->num_rows();

                        $this->db->select('*');
                        $this->db->from('upvote_dtl');
                        $this->db->where('voteType','3');
                        $this->db->where('postId',$row->postId);
                        $query = $this->db->get();
                        $comment = $query->num_rows();

      
                
                        ?>

                      

                        <tr>
                            <td><?php echo $i;?></td>
                            <td><a href="#"><?php echo $row->postTitle;?></a></td>
                            <td><?php echo $row->user_Type;?></td>
                            <td><i class="fa fa-star" style="color:#ffd700;"></i>&nbsp;<span class="label label-default"><?php echo $rep;?></span></td>
                            <td>
                              <span class="label label-default"><i class="fa fa-thumbs-up">&nbsp;<?php echo $like;?></i></span>
                              <span class="label label-default"><i class="fa fa-share">&nbsp;<?php echo $share;?></i></span>
                              <span class="label label-default"><i class="fa fa-comments">&nbsp;<?php echo $comment;?></i></span>
                            </td>
                          </tr>
                          <?php  endforeach;?>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- /.table-responsive -->
                  </div><!-- /.box-body -->
                  <div class="box-footer clearfix">
                    <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View Top 50</a>
                  </div><!-- /.box-footer -->
                </div><!-- /.box -->

              <!-- ======================================================= -->
              <!-- Box Comment -->
                <!-- Box Comment -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <i class="fa fa-fire"></i>
                    <h3 class="box-title">On Fire Posts</h3><br/>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                  <div class="box box-widget">
                    <div class='box-header with-border'>
                      <div class='user-block'>
                        <img class='img-circle' src='../../images/team/index0.png' alt='user image'>
                        <span class='username'><a href="#">Lyneth C. Cutamora</a>&nbsp;&nbsp;<i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;1024</b></span>
                        <span class='description'>7:30 PM Nov. 29, 2015</span>
                      </div><!-- /.user-block -->
                      <div class='box-tools'>
                        <button class='btn btn-box-tool' data-toggle='tooltip' title='Mark as read'><i class='fa fa-circle-o'></i></button>
                        <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
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
                <div class="box-footer text-center">
                    <a href="javascript::;" class="uppercase">View More Posts</a>
                  </div><!-- /.box-footer -->
                </div><!--/.box-->
              </div><!--/.col-->


              <div class="col-md-3">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <i class="fa fa-paper-plane"></i>
                    <h3 class="box-title">Recently Added</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <div class="box">
                      <div class="box-header with-border">
                        <p>Startup Products</p>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                      </div><!-- /.box-header -->
                      <div class="box-body">
                        <ul class="products-list product-list-in-box">
                          <li class="item">
                            <div class="product-img">
                              <img src="../../images/blue.png" alt="Product Image">
                            </div>
                            <div class="product-info">
                              <a href="javascript::;" class="product-title">Start&Boost<span class="pull-right"><i class="fa fa-star" style="color:#ffd700;"></i></span></a>
                              <span class="product-description">
                                by: $index[5]
                              </span>
                            </div>
                          </li><!-- /.item -->
                          <li class="item">
                            <div class="product-img">
                              <img src="../../dist/img/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                              <a href="javascript::;" class="product-title">Bicycle <span class="label label-info pull-right">$700</span></a>
                              <span class="product-description">
                                26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                              </span>
                            </div>
                          </li><!-- /.item -->
                          <li class="item">
                            <div class="product-img">
                              <img src="../../dist/img/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                              <a href="javascript::;" class="product-title">Xbox One <span class="label label-danger pull-right">$350</span></a>
                              <span class="product-description">
                                Xbox One Console Bundle with Halo Master Chief Collection.
                              </span>
                            </div>
                          </li><!-- /.item -->
                        </ul>
                      </div><!-- /.box-body -->
                      <div class="box-footer text-center">
                        <a href="javascript::;" class="uppercase">View Products</a>
                      </div><!-- /.box-footer -->
                    </div><!-- /.box -->

                    <div class="box">
                      <div class="box-header with-border">
                      <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                        <p>Startup Ideas</p>
                        <?php 


                  
           
 
                        $this->db->select('*');
                        $this->db->from('userpost a');
 
                       $this->db->join('user_md b', 'b.userId=a.userId','left');
                        $this->db->join('user_dtl c', 'c.userId=b.userId','left');
                        $top = $this->db->get();
                                foreach($top->result() as $row):
                        ?>
                        
                      </div><!-- /.box-header -->
                      <div class="box-body">
                        <ul class="products-list product-list-in-box">
                          <li class="item">
                            <div class="product-img">
                              <img src="../../dist/img/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                              <a href="javascript::;" class="product-title"><?php echo $row->postTitle;?></a></br>
                                by: <?php echo $row->user_lName?>, <?php echo $row->user_fName?>
                              </span>
                            </div>
                          </li><!-- /.item -->
                          <?php  endforeach;?>
                        </ul>
                      </div><!-- /.box-body -->
                      <div class="box-footer text-center">
                        <a href="javascript::;" class="uppercase">View Ideas</a>
                      </div><!-- /.box-footer -->
                    </div><!-- /.box -->
                  </div><!--/.box body-->
                </div><!-- /.box -->

                  <div class="info-box bg-aqua">
                    <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Facebook Likes</span>
                      <span class="info-box-number">41,410</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                      </div>
                      <span class="progress-description">
                        70% Increase in 30 Days
                      </span>
                    </div><!-- /.info-box-content -->
                  </div><!-- /.info-box -->

                  <div>
                    <p>Visit our Facebook Page by clicking the clink below:<br/><a href="#">facebook/startandboost</a><br/><br/>Start and Boost by $index[5].<br/></p>
                  </div>
                
              </div><!-- /.col -->
            </div><!--/.row-->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
