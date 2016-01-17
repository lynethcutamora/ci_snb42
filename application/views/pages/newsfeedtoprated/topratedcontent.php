<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-star"></i>
            TopRated Post</h1>
          <div class="col-md-10">
<!------------------------------------------------------>

          
                  <div class="box-header with-border">
                  </div><!-- /.box-header -->
                  <div class="box-body">
                  <div class="box box-widget">
                  <?php 
                        
                        $query = $this->db->query("SELECT *, COUNT(c.postId) as number_of_votes from upvote_dtl c left join userpost v on c.postId = v.postId left join user_md b on v.userId = b.userId left join user_dtl d on b.userId = d.userId where voteType = '1' AND postType = '2' group by c.postId order by number_of_votes desc");
                        $i=0;
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
                    

                    <div class='box-header with-border'>
                      <div class='user-block'>
                         <img class='img-circle' src='<?php echo base_url();?>user/<?php echo $this->post->getAvatar($row->userId)?>' alt='user image'>
                    
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
                    
                
                </div><!--/.body-->
                </div><!--/.box-->
              </div><!--/.col-->

                
              </div><!-- /.col -->
            </div><!--/.row-->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
