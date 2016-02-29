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
            <p>Having a hard time thinking of a start-up idea?</br></br> Visit our special feature by clicking the link below:</a><br/><br/><a href="<?php echo base_url()."pages/startidea"?>"><h1><u><center>Click here</h1></u></center></a><br/></p>
          </div>
        </div>

          <div class="row">
          <!-- ====================================================================== -->
            <div class="col-md-9">
            <!-- TABLE: TOP 5 IDEAS -->
                <div class="box box-info">
                  <div class="box-header with-border">
                    <i class="fa fa-star"></i>
                    <h3 class="box-title">Top 5 Startup products</h3>
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
                            <td><a href="<?php echo base_url()."pages/profilenew/".$row->userId;?>"><?php echo $row->user_fName;?>&nbsp;<?php echo $row->user_midInit;?>.&nbsp;<?php echo $row->user_lName;?></a></td>
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
                    <div name="newsfeed" id="newsfeed"></div>
                  </div>
                  
                
                 </div><!--/.col-->


              

              
            </div><!--/.row-->
           
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<script>
     function investorPost(){
                 
                  $("#newsfeed").load("<?php echo base_url().'pages/newShowInvestorPost/8'; ?>"); }
                  setInterval(function(){investorPost()}, 1000);

</script>