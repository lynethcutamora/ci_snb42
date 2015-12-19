<div class='content-wrapper'>
     <section class="content">

 <div class="row">
  <br>
     <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><i class="fa fa-lightbulb-o"></i>Ideas</h3>
                  <div class="box-tools">
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover" id="idea">
                    <?php 
                      if(count($idea)==0){
                      echo '<div class="col-xs-1"></div>
                            <div class="alert alert-warning col-xs-10">
                             
                             No Results Found!
                            </div>';
                    }else{
                    ?>
                    <tr>
                      <th>Title</th>
                      <th>Post Content</th>
                      <th>Posted By</th>
                      <th>No. of Upvotes</th>
                      <th>No. of Comments</th>
                    </tr>
                    <tr>
                      <?php foreach ($idea as $idea):?>
                      
                      <td width="100"><a href="<?php echo base_url()."pages/post/".$idea['postId'];?>"><?php echo $idea['postTitle'];?></a></td>
                      <td width="500"><?php echo $idea['postContent'];?></td>
                      <td width="150">

                        <?php 
                  foreach($data as $row):
                    if($row['user_Type']=='Ideator'||$row['user_Type']=='Investor')
                     {
                        if($row['user_midInit']==null)
                         echo $row['user_fName']." ".$row['user_lName'];
                        else
                         echo $row['user_fName']." ".$row['user_midInit'].". ".$row['user_lName'];
                        }
                        else
                        {
                          echo $row['company_name'];
                        }    
                  ?>
                  <?php  endforeach;?></td>
                      <td width="100"><?php echo $this->post->upvotecount($idea['postId']);?></td>
                      <td width="100"><?php echo $this->post->commentCount($idea['postId']);?></td>
                    </tr>
                     <?php  endforeach;}?>

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
         <br>
     <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><i class="fa fa-group"></i>Group</h3>
                  <div class="box-tools">
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                      <?php 
                      if(count($group)==0){
                      echo '<div class="col-xs-1"></div>
                            <div class="alert alert-warning col-xs-10">
                             
                             No Results Found!
                            </div>';
                    }else{
                    ?>
                    <tr>
                      <th>Group Name</th> 
                      <th>Group Description</th>
                      <th>Group Creator</th>
                     
                    </tr>
                     <?php foreach ($group as $group):?>
                    <tr>
                      <td><?php echo $group['groupname'];?></td>
                      <td><?php echo $group['groupdescription'];?></td>
                      <td> <a href="<?php echo base_url()."pages/profile/".$group['userId'];?>">      <?php 
                  foreach($data as $row):
                    if($row['user_Type']=='Ideator'||$row['user_Type']=='Investor')
                     {
                        if($row['user_midInit']==null)
                         echo $row['user_fName']." ".$row['user_lName'];
                        else
                         echo $row['user_fName']." ".$row['user_midInit'].". ".$row['user_lName'];
                        }
                        else
                        {
                          echo $row['company_name'];
                        }    
                  ?>
                  <?php  endforeach;?></a></td>
                     </tr>
                       <?php  endforeach;}?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
             <br>
     <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><i class="fa fa-user"></i>Person</h3>
                  <div class="box-tools">
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>User</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Reason</th>
                    </tr>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="label label-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td><span class="label label-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="label label-primary">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="label label-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

       </div>
</div>
</div>
 
