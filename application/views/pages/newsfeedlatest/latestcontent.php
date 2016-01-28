<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle"></i>
            Latest Post</center></h1></br>
          <div class="col-md-10">
<!------------------------------------------------------>

          
                  <!--<div class="box-header with-border">
                  </div><!-- /.box-header -->
                <!--  <div class="box-body">
                  <div class="box box-widget">
                  <?php 
                        
                        $query = $this->db->query("SELECT * from userpost v left join user_md b on v.userId = b.userId left join user_dtl d on b.userId = d.userId  where postType = '2' group by postDate order by postDate desc");   
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
                    

                    <div class='box-header with-border'>
                      <div class='user-block'>
                         <img class='img-circle' src='<?php echo base_url();?>user/<?php echo $this->post->getAvatar($row->userId)?>' alt='user image'>
                    
                        <span class='username'><a href="<?php echo base_url()."pages/profile/".$row->userId;?>"><?php echo $row->user_fName;?>&nbsp;<?php echo $row->user_midInit;?>.&nbsp;<?php echo $row->user_lName;?>&nbsp;</a>&nbsp;&nbsp;<i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;<?php echo $rep;?></b></span>
                         <span class='description'><?php echo $row->postDate;?></span>
                      </div><!-- /.user-block -->
                 <!--     <div class='box-tools'>
                        <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
                      </div><!-- /.box-tools -->
               <!--     </div><!-- /.box-header -->
                <!--    <div class='box-body'>
                      <!-- post text -->
<!--                       <p><b><a href="<?php echo base_url()."pages/post/".$row->postId;?>"><?php echo $row->postTitle;?></a></b></p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->postContent;?></p>
 -->
             <!--       <br/>
                      <!-- Attachment -->
             <!--       <div class="col-md-7">
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
              <!--      </div>
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
                 <!--   </div><!-- /.info-box -->
                <!--    </div>
                      <!-- Social sharing buttons -->
                      
                <!--      <span class='pull-right text-muted'><?php echo $like;?> upvotes - <?php echo $comment;?> comments</span>
                    </div><!-- /.box-body -->
                <!--      <?php  endforeach;?>
                    
                
                </div><!--/.body-->
              <!--  </div><!--/.box-->
<!-- sample startup product post -->
      <div class="box box-widget">
        <div class="box-header with-border">
          <div class="user-block">
            <img class='img-circle' src='<?php echo base_url().'user/1.png';?>' alt='user image'>
            <span class="username">
              <a href="#"><small>Jason D. Pitogo</small></a>
            </span>
            <span class="description"><i class="fa fa-star" style="color:gold;"></i><small><b>&nbsp;1520</b></small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date posted:&nbsp;&nbsp;&nbsp;<small>10/25/2016</small></span>
          </div><!-- /.user-block -->
          <div class="box-tools">
            <button class="btn btn-box-tool" data-widget="edit"><i class="fa fa-edit"></i></button>
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header --> 
        <div class="box-body">
          <div class="container-fluid">
              <div class="info-box">
                <div class="row">
                  <p style="color:green;"><i class="fa fa-bookmark"></i>&nbsp;&nbsp;&nbsp;<small>(Startup Product)</small></p>
                </div>
                <p style="text-align:justify;text-justify:inter-word;">This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea.</p>
                    
                  <!-- Attachment -->
                  <div class="attachment-block clearfix">
                    <img class="attachment-img" src="../images/blue.png" alt="attachment image">
                    <div class="attachment-pushed">
                      <h5 class="attachment-heading"><b><a href="#"><?php echo strtoupper("Start & Boost"); ?></a></b></h5>
                      
                      <div class="attachment-text">
                        <h6><small>category: &nbsp;&nbsp; Web and Mobile</small></h6>
                        <i class="fa fa-star" style="color:gold;"></i><i class="fa fa-star" style="color:gold;"></i><i class="fa fa-star" style="color:gold;"></i><i class="fa fa-star-half" style="color:gold;"></i>
                      </div><!-- /.attachment-text -->
                    </div><!-- /.attachment-pushed -->
                  </div><!-- /.attachment-block -->
              </div><!-- /.info-box -->

              <i><small>download links: &nbsp;&nbsp; <a href="#">https://github.com/lynethcutamora/ci_snb42</a></small></i><hr/>
          </div><!-- /.container -->
        </div><!-- /.box-body -->
          <div class="box-footer">
            <div class="container-fluid">
              <button class="btn btn-success btn-xs"><i class="fa fa-hand-o-left"></i>&nbsp;&nbsp;Poke</button>
              <button id='add' class='btn btn-default btn-xs'><i class='fa fa-arrow-circle-up'></i> Upvote</button>
              <span class="pull-right"><small><a href="#">5 upvotes - 2 comments</a></small></span>
            </div>
          </div>
      </div> <!-- /. box-widget -->

              </div><!--/.col-->

                
           
      

              <div class="col-md-2">
                <div class="box box-default">
                  <div class="box-header with-border">
                    Ads
                  </div>
                  <div class="box-body">
                    ADS's area
                  </div>
                  <div class="box-footer text-center">
                    <a><small>See more</small></a>
                  </div>
                </div>
            </div>
            </div><!--/.row-->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
