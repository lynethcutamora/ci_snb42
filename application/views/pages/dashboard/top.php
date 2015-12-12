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
                             <th>Name</th>
                            <th>User Type</th>
                            <th>Reputation</th>
                            <th>Popularity</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        
                        $query = $this->db->query("SELECT *, COUNT(c.postId) as number_of_votes from upvote_dtl c left join userpost v on c.postId = v.postId left join user_md b on v.userId = b.userId left join user_dtl d on b.userId = d.userId where voteType = '1' group by c.postId order by number_of_votes desc limit 5");
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
                            <td><?php echo $row->user_fName;?>&nbsp;<?php echo $row->user_midInit;?>.&nbsp;<?php echo $row->user_lName;?></td>
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

       