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
        <div class="col-md-9">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>
              <h3 class="box-title">Callouts</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-info">
              <?php foreach($data as $row):?>
                <h4>Hello <?php echo $row['user_fName'];?>! You caught us before we're ready.</h4>
                <!-- <p>Development team $index[5] is working hard to put finishing touches onto Start&Boost. Things are going well and it should be heady to help you with lean startup soon.<br/><br/>Thanks! :-)</p> -->
                <p>There will be a Philippine Startup Challenge hosted by SMART on February 29, 2016. It's your time to shine! For more information, you can contact this number: 0932-429-765. <br/>If you wish to register, you can visit this link: <a href="#">googledocs.com/startupchallenge2k16/fillup?</a><br/><br/>Thanks! :-)</p>
              <?php endforeach;?>
              </div>
            </div>
          </div><!-- /.box -->
        </div>
        <div class="col-md-3">
              <div>
            <p>Having a hard time thinking of a start-up idea?</br></br> Visit our special feature by clicking the link below:</a><br/><br/><a href="<?php echo base_url()."pages/startidea"?>">Special feature</a> :) by $index[5].<br/></p>
          </div>
        </div>

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
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                        Note: These ideas were already owned by ideators with their investors. Illegal copying is strictly not allowed.  
                      </div>
                    <div class="table-responsive">
                      <table class="table no-margin">
                        <thead>
                          <tr>
                            <th>Top</th>
                            <th>Title</th>
                             <th>Owner(s)</th>
                            <th>Investor</th>
                            <th>Upvotes</th>
                            <!-- <th>Popularity</th> -->
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        
                        $query = $this->db->query("SELECT *, COUNT(c.postId) as number_of_votes from upvote_dtl c left join userpost v on c.postId = v.postId left join user_md b on v.userId = b.userId left join user_dtl d on b.userId = d.userId where voteType = '1' AND postType = '2' group by c.postId order by number_of_votes desc limit 5");
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
                        $this->db->from('comment_dtl');
                        $this->db->where('commentType','1');
                        $this->db->where('postId',$row->postId);
                        $query = $this->db->get();
                        $comment = $query->num_rows();

      
                
                        ?>

                      

                        <tr>
                            <td><?php echo $i;?></td>
                            <td><a href="<?php echo base_url()."pages/post/".$row->postId;?>"><?php echo $row->postTitle;?></a></td>
                            <td><a href="<?php echo base_url()."pages/profile/".$row->userId;?>"><?php echo $row->user_fName;?>&nbsp;<?php echo $row->user_midInit;?>.&nbsp;<?php echo $row->user_lName;?></a></td>
                            <td>Steve Jobs</td>
                            <td>
                              <span class="label label-default"><i class="fa fa-thumbs-up">&nbsp;<?php echo $like;?></i></span>
                            </td>
                            <!-- <td><i class="fa fa-star" style="color:#ffd700;"></i>&nbsp;<span class="label label-default"><?php echo $rep;?></span></td> -->
                            <!-- <td>
                              <span class="label label-default"><i class="fa fa-thumbs-up">&nbsp;<?php echo $like;?></i></span>
                              <span class="label label-default"><i class="fa fa-share">&nbsp;<?php echo $share;?></i></span>
                              <span class="label label-default"><i class="fa fa-comments">&nbsp;<?php echo $comment;?></i></span>
                            </td> -->
                          </tr>
                          <?php  endforeach;?>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- /.table-responsive -->
                  </div><!-- /.box-body -->
                  <div class="box-footer clearfix">
                    <!-- <a href="<?php echo base_url()."pages/toprated/"?>" class="btn btn-sm btn-default btn-flat pull-right">View More</a> -->
                  </div><!-- /.box-footer -->
                </div><!-- /.box -->

              <!-- ======================================================= -->
              <!-- Box Comment -->
                <!-- Box Comment -->
                
                           
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <i class="fa fa-fire"></i>
                    <h3 class="box-title">Most Discuss Post</h3><br/>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                  <div class="box box-widget">
                  <?php 
                   $query = $this->db->query("SELECT *, COUNT(c.postId) as number_of_comments from comment_dtl c left join userpost v on c.postId = v.postId left join user_md b on v.userId = b.userId left join user_dtl d on b.userId = d.userId left join avatar_dtl e on d.userId = e.userId where postType = '2' group by c.postId order by number_of_comments desc limit 1");   
                      foreach($query->result() as $row):
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
                        $this->db->from('comment_dtl');
                        $this->db->where('commentType','1');
                        $this->db->where('postId',$row->postId);
                        $query = $this->db->get();
                        $comment = $query->num_rows();

                        


                  ?>
                    <div class='box-header with-border'>
                      <div class='user-block'>
                        <img class='img-circle' src='<?php echo base_url();?>/user/<?php echo $row->avatar_name;?>' alt='user image'>
                        <span class='username'><a href="<?php echo base_url()."pages/profile/".$row->userId;?>"><?php echo $row->user_fName;?>&nbsp;<?php echo $row->user_midInit;?>.&nbsp;<?php echo $row->user_lName;?>&nbsp;</a>&nbsp;&nbsp;<i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;<?php echo $rep;?></b></span>
                         <span class='description'><?php echo $row->postDate;?></span>
                      </div><!-- /.user-block -->
                      <div class='box-tools'>
                        <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
                      </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class='box-body'>
                      <!-- post text -->
<!--                       <p><b><a href="<?php echo base_url()."pages/post/".$row->postId;?>"><?php echo $row->postTitle;?></a></b></p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->postContent;?></p>
 -->
                    <br/>
                      <!-- Attachment -->
                    <div class="col-md-7">
                      <div class="attachment-block clearfix">
                        
                        <p><?php echo $row->postContent;?></p>
                        <?php
                        foreach($this->post->alluserData($row->userId)->result_array() as $postdtl):
                        $query=$this->post->showLinks($row['postId']);

                        foreach ($query->result_array() as $row) {
                          echo "<h5>Related Links:</h5>";
                          $myArray = explode(',', $row['extContent']);
                             foreach ($myArray as $row) {
                              
                              echo "<a href='http://".$row."' target='_blank'>".$row."</a><br>"; 
                              }
                        }
                        ?>
                        <?php  endforeach;?>
                      </div><!-- /.attachment-block -->
                    </div>
                    <div class="col-md-5">

                    <div class="info-box">
                     <?php 
                      $query= $this->post->showImage($row->postId);

                      foreach ($query->result_array() as $row) :
                        echo "<img src='".base_url().'/post_image/'.$row['extContent']."' height='200px' width='200px'>"; 
                     
                      ?>
                      <?php  endforeach;?>
                      <div class="info-box-content">
                        <span class="info-box-text"><a href="<?php echo base_url()."pages/post/".$row->postId;?>"><?php echo $row->postTitle;?></a></span>
                        <span class="info-box-number"><i class="fa fa-star"></i>&nbsp;&nbsp;<?php echo $rep?></span>
                      </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                    </div>
                      <!-- Social sharing buttons -->
                      
                      <span class='pull-right text-muted'><?php echo $like;?> upvotes - <?php echo $comment;?> comments</span>
                    </div><!-- /.box-body -->
                      <?php  endforeach;?>
                  </div><!-- /.box -->
                </div><!--/.body-->
                <div class="box-footer text-center">
                    <a href="<?php echo base_url()."pages/onfire/"?>" class="uppercase">View Startup Products</a>
                  </div><!-- /.box-footer -->
                </div><!--/.box-->
              </div><!--/.col-->

              
              <div class="col-md-3">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <i class="fa fa-feed"></i>
                    <h3 class="box-title">Recent News</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">

                <?php if($this->post->checkUserType()=='true'){?>
             
              <a href="<?php echo base_url(); ?>pages/newsfeedideator">
              <?php foreach($recentinvestor as $inv): ?>
                    <div class='user-block'>  
                      <img class='img-circle' src='<?php echo base_url();?>/user/<?php echo $inv['avatar_name'];?>' alt='user image'>
                      <span class='username'><a href="<?php echo base_url()."pages/profile/".$inv['userId']?>"><?php echo $inv['user_fName'];?>&nbsp;<?php echo $inv['user_midInit'];?>.&nbsp;<?php echo $inv['user_lName'];?>&nbsp;</a>&nbsp;&nbsp;<i class='fa fa-star' style="color:#ffd700;"></i><?php echo $this->post->reputation($inv['userId']);?><b>&nbsp;&nbsp;</b></span>
                      <span class='description'><?php echo $inv['postDate'];?></span>
                    </div><!-- /.user-block -->

                    <div>
                    <h6><?php echo $inv['postTitle']; ?></h6>
                      <h6 class="pull-right"><?php $this->post->upvotecount($inv['postId']);?>  |  <?php $this->post->commentCount($inv['postId']);?></h6></a>
                    </div>
                    <br/><hr/>

                    <?php endforeach; ?>
              </a>
            </li>
              <?php }else{?>
            
              <a href="<?php echo base_url(); ?>pages/newsfeedinvestor">
              <?php foreach($recentideator as $ideator): ?>
                    <div class='user-block'>  
                      <img class='img-circle' src='<?php echo base_url();?>/user/<?php echo $ideator['avatar_name'];?>' alt='user image'>
                      <span class='username'><a href="<?php echo base_url()."pages/profile/".$ideator['userId']?>"><?php echo $ideator['user_fName'];?>&nbsp;<?php echo $ideator['user_midInit'];?>.&nbsp;<?php echo $ideator['user_lName'];?>&nbsp;</a>&nbsp;&nbsp;<i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;</b><?php echo $this->post->reputation($ideator['userId']);?></span>
                      <span class='description'><?php echo $ideator['postDate'];?></span>
                    </div><!-- /.user-block -->

                    <div>
                    <h6><?php echo $ideator['postTitle']; ?></h6>
                      <h6 class="pull-right"><?php $this->post->upvotecount($ideator['postId']);?>  |  <?php $this->post->commentCount($ideator['postId']);?></h6>
                    </div>
                    <br/><hr/>

                    <?php endforeach; ?>
               
              </a>
            </li>
            <?php } ?>
                    
                   
                    
                  
                  <div class="box-footer text-center">
                    <?php if($this->post->checkUserType()=='true'){?>
               <?php if($pages=='newsfeedideator') {echo "active";}else echo "";?>
              <a href="<?php echo base_url(); ?>pages/newsfeedideator">
                <span>Go to News Feed</span>
              </a>
            </li>
              <?php }else{?>
              <?php if($pages=='newsfeedinvestor') {echo "active";}else echo "";?>
              <a href="<?php echo base_url(); ?>pages/newsfeedinvestor">
                <span>Go to News Feed</span>
              </a>
            </li>
            <?php } ?>

                  </div><!-- /.box-footer -->
                </div><!-- /.box -->
                  
                
              </div><!-- /.col -->
            </div><!--/.row-->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
