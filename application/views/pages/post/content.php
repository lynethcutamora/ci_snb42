
<!-- Content Wrapper. Contains page content -->
 <?php  foreach($data as $userdtl):?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User Profile
          </h1>
          <ol class="breadcrumb">
            <li><a href="../dashboard/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User profile</li>
          </ol>
        </section>

        <!-- Main content -->
   
        <section class="content">

          <div class="row">
          
            <div class="col-md-7">
              <!-- Horizontal Form -->
                <div class="box">
                  <div class="box-header with-border">
                    <p>Post New Idea</p>
                  </div><!-- /.box-header -->
                  <!-- form start -->
                 <?php echo form_open('../pages/postIdea',"class=form-horizontal"); ?>
                    <div class="box-body">
                      <div class="form-group">
                        <label for="ideatitle" class="col-sm-2 control-label">Title*</label>
                        <div class="col-sm-10">
                        <?php echo form_error('ideatitle'); ?>
                          <input type="text" class="form-control" name="ideatitle" id="ideatitle" placeholder="Title" value="<?php echo set_value('ideatitle'); ?>"/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputDescription" class="col-sm-2 control-label">Description*</label>
                        <div class="col-sm-10">
                         <?php echo form_error('inputDescription'); ?>
                          <textarea class="form-control"name="inputDescription" id="inputDescription" placeholder="Description" value="<?php echo set_value('inputDescription'); ?>"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputLinks" class="col-sm-2 control-label">Links</label>
                        <div class="col-sm-10">
                        <?php echo form_error('relatedlinks'); ?>
                          <input type="text" class="form-control"name="relatedlinks" id="relatedlinks" placeholder="Related Links (Separated by comma)" value="<?php echo set_value('relatedlinks'); ?>"/>
                        </div>
                      </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                      <form action="" method="post" enctype="multipart/form-data">
                          <input class="pull-left" type="file" name="fileToUpload" id="fileToUpload">
                          <input class="btn btn-info pull-right" type="submit" value="Post Idea" id="submit" name="button">
                      </form>
                    
                    </div><!-- /.box-footer -->
                 
                    </div>
               
              </div>
              </div>
             <div id="newpost"></div>
                 <?php  foreach($data as $userdtl):?>
            <?php foreach($alldata as $postdtl):?>

          <div class="row">
          
            <div class="col-md-7">
            <!-- Box Comment -->
              <div class="box box-widget">
                <div class='box-header with-border'>
                  <div class='user-block'>
                    <img class='img-circle' src='<?php echo base_url();?>/user/<?php echo $postdtl['avatar_name']?>' alt='user image'>
                    <span class='username'>
                    <a href="#">
                        <?php 
                                  if($postdtl['user_Type']=='Ideator'||$postdtl['user_Type']=='Investor')
                                  {
                                      if($postdtl['user_midInit']==null)
                                         echo $postdtl['user_fName']."  ".$postdtl['user_lName'];
                                       else
                                         echo $postdtl['user_fName']." ".$postdtl['user_midInit'].". ".$postdtl['user_lName'];
                                  }
                                  else
                                  {
                                    echo $postdtl['company_name'];
                                  }
                          ?>
                      </a>
                      </span>
                    &nbsp;&nbsp;&nbsp;<button class='btn btn-default btn-xs'><i class='fa fa-star' style="color:Gold"></i> <span class="label label-primary">10</span> </button><button class='btn btn-default btn-xs'><i class='fa fa-star' style="color:Silver"></i><span class="label label-primary">5</span> </button><button class='btn btn-default btn-xs'><i class='fa fa-star' style="color:SandyBrown "></i><span class="label label-primary">20</span> </button>
                    <span class='description'>    <?php echo $postdtl['postDate'];?></span>
                  </div><!-- /.user-block -->
                  <div class='box-tools'>

                  
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class='box-body'>
                  <h3><b><a href="" ><?php echo $postdtl['postTitle'];?></a></b></h3>
                  <p><?php echo $postdtl['postContent'];?></p>
                  <table><tr><td>
                  <button class='btn btn-default btn-xs'><i class='fa fa-share'></i> Share</button></td>
                  <form method="POST" action="<?php echo base_url()."pages/upvote";?>"> 
                  
                    <input type="text" hidden="true" name="postId" value="<?php echo $postdtl['postId'];?>">
                      <?php if($this->post->validUpvote($postdtl['postId'])=='false'){
                echo "<td><button id='add' class='btn btn-default btn-xs'><i class='fa fa-arrow-circle-up'></i> Upvote</button> </td></form>";
               }
                else{
                  echo "<td><button class='btn btn-default btn-xs disabled' disabled><i class='fa fa-arrow-circle-up'></i> Upvoted</button></td></form>";
                }?></table>
                </form>
                  <span class='pull-right text-muted'><?php $this->post->upvotecount($postdtl['postId']);?> - 3 comments</span>
                </div><!-- /.box-body -->
               

                          
              </div><!-- /.box -->
              
                  </div>
                  </div>

<?php  endforeach;?>

<?php  endforeach;?>
                   

         
        </section>
    
    
      </div><!-- /.content-wrapper -->
   <?php  endforeach;?>