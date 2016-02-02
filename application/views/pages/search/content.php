    <?php 
        if($this->post->checkNewInvestor()){
                header('Location:'.base_url().'pages/investormoreinfo');
              }
  ?>
<div class='content-wrapper'>
     <section class="content">

 <div class="row">
    <br>
     <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;&nbsp;Startup Product</h3>
                  <div class="box-tools">
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-bordered table-hover" >
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
                      <td width="150"><a href="<?php echo base_url()."pages/profile/".$idea['userId'];?>"><?php echo $this->post->userProfile($idea['userId']) ?></a>
                 </td>
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
                  <h3 class="box-title"><i class="fa fa-group"></i>&nbsp;&nbsp;&nbsp;Group</h3>
                  <div class="box-tools">
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <div class="container-fluid">
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
                      <th></th>
                    </tr>
                     <?php 
                       $userid = $this->session->userdata('userId');
                       foreach ($group as $group):?>

                    <form action="" method="POST">
                      <tr>
                        <td><?php echo $group['groupname'];?></td>
                        <td><?php echo $group['groupdescription'];?></td>
                        <td><a href="<?php echo base_url()."pages/profile/".$group['userId'];?>">      
                            <?php 
                              if($group['user_Type']=='Ideator'||$group['user_Type']=='Investor'){
                                if($group['user_midInit']==null)
                                 echo $group['user_fName']." ".$group['user_lName'];
                                else
                                 echo $group['user_fName']." ".$group['user_midInit'].". ".$group['user_lName'];
                              }else{
                                echo $group['company_name'];
                              }    
                            ?></a>
                        </td>
                        <td>
                        <?php 

                          if($this->post->existsMember($group['groupId'],$userid)){
                            echo '<input type="button" class="btn btn-primary btn-xs disabled" value ="Request to join group"></input>';
                          }else{
                            echo '<input type="button" class="btn btn-primary btn-xs" value ="Request to join group"></input>';
                          }
                        ?>
                        </td>
                      </tr>
                    </form>
                       <?php  endforeach;}?>
                  </table>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
             <br>
     <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;Person</h3>
                  <div class="box-tools">
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                     <?php 
                      if(count($people)==0){
                      echo '<div class="col-xs-1"></div>
                            <div class="alert alert-warning col-xs-10">
                             
                             No Results Found!
                            </div>';
                    }else{
                    ?>
                    <tr>
                      <th>User</th>
                      <th>Badges</th>
                      <th>Email Address</th>
                    </tr>
                     <?php foreach ($people as $people):?>
                    <tr>
                      <td> <a href="<?php echo base_url()."pages/profile/".$people['userId'];?>">
                        <?php echo $this->post->userProfile($people['userId']) ?>
          </a></td>
                      <td> <button class='btn btn-default btn-xs'><i class='fa fa-star' style="color:#ffd700;"></i><span class="label bg-blue"><?php echo $this->post->gold($people['userId']);?></span></button>&nbsp;<button class='btn btn-default btn-xs'><i class='fa fa-star' style="color:Silver"></i><span class="label bg-blue"><?php echo $this->post->silver($people['userId']);?></span></button>&nbsp;<button class='btn btn-default btn-xs'><i class='fa fa-star' style="color:SandyBrown "></i><span class="label bg-blue"><?php echo $this->post->bronze($people['userId']);?></span></button>
                   </td>
                      <td><?php echo $people['user_emailAdd'];?></td>
                    </tr>
                     <?php  endforeach;}?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

       </div>
</div>
</div>
 
