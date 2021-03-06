<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Venture Capitalist Post  <i class="fa fa-feed"></i>
          </h1>
           <div class="row">
<!------------------------------------------------------>
                  <div class="box-header with-border">  
                  </div><!-- /.box-header -->
                  <div class="box-body">
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
                        <?php foreach($alldata as $postdtl):?>
                        <img class='img-circle' src='<?php echo base_url();?>user/<?php echo $postdtl['avatar_name']?>' alt='user image'>
                        <?php  endforeach;?>
                        <span class='username'><a href="<?php echo base_url()."pages/profile/".$row->userId;?>"><?php echo $row->user_fName;?>&nbsp;<?php echo $row->user_midInit;?>.&nbsp;<?php echo $row->user_lName;?></a>&nbsp;&nbsp;<i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;<?php echo $rep;?></b></span>
                        <span class='description'><?php echo $row->postDate;?></span>
                      </div><!-- /.user-block -->
                      <div class='box-tools'>
                        <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
                      </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class='box-body'>
                      <!-- post text -->
                      </b>&nbsp;&nbsp;<b><a href="<?php echo base_url()."pages/post/".$row->postId;?>"><?php echo $row->postTitle;?></a></b></p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->postContent;?></p>


                      <!-- Attachment -->
                      <div class="attachment-block clearfix">
                      <?php 
                      $query= $this->post->showImage($row->postId);

                      foreach ($query->result_array() as $row) :
                        echo "<img src='".base_url().$row['extContent']."' height='200px' width='200px'>"; 
                     
                     ?>
                      <?php  endforeach;?>  
                    
                            
                      </div><!-- /.attachment-block -->
                      <!-- Social sharing buttons -->
                      
                      <span class='pull-right text-muted'><?php echo $like;?> likes - <?php echo $comment;?> comments</span>
                    </div><!-- /.box-body -->
                    <?php  endforeach;?>
                  </div><!--/.body-->
                </div><!--/.box-->
              </div><!--/.col-->
<!-------------------------------------------------------------------------------------->
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