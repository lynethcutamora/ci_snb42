
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
                  <h3><b><?php echo $postdtl['postTitle'];?></b></h3>
                  <p><?php echo $postdtl['postContent'];?></p>
                  <button class='btn btn-default btn-xs'><i class='fa fa-share'></i> Share</button>
                  <button class='btn btn-default btn-xs'><i class='fa fa-arrow-circle-up'></i> Upvote</button>
                  <span class='pull-right text-muted'>127 Upvotes - 3 comments</span>
                </div><!-- /.box-body -->
                <?php

                    $this->db->select('*');
                    $this->db->from('user_md a');

                    $this->db->join('company_dtl c', 'c.userId=a.userId','left');
                    $this->db->join('comment_dtl b', 'b.userId=a.userId','left');
                    $this->db->join('avatar_dtl d', 'd.userId=a.userId','left');
                    $this->db->join('user_dtl e', 'e.userId=a.userId','left');
                    $this->db->where('postId', $postdtl['postId']);
                    $this->db->where('commentType', '1');
                    $query = $this->db->get();

                    foreach ($query->result() as $row2)
                    {
                           echo "  <div class='box-footer box-comments'>
                           
                            <div class='box-comment'>
                              <!-- User image -->
                              <img class='img-circle img-sm' src='".base_url()."/user/".$row2->avatar_name."' alt='user image'>
                              <div class='comment-text'>
                                <span class='username'>
                                ";
                                if($row2->user_Type=='Ideator'||$row2->user_Type=='Investor')
                                  {
                                      if($row2->user_midInit==null)
                                         echo $row2->user_fName."  ".$row2->user_lName;
                                       else
                                         echo $row2->user_fName." ".$row2->user_midInit.". ".$row2->user_lName;
                                  }
                                  else
                                  {
                                    echo $row2->company_name;
                                  };
                              echo " <span class='text-muted pull-right'>8:03 PM Today</span>
                                </span><!-- /.username -->
                                ".$row2->commentContent."
                               <br/>
                                <button class='btn btn-default btn-xs'><i class='fa fa-thumbs-o-up'></i> Upvote</button>
                                <button class='btn btn-default btn-xs'><i class='fa fa-reply'></i> Reply</button><br/>
                                    ";  


                        $this->db->select('*');
                        $this->db->from('user_md a');

                        $this->db->join('company_dtl c', 'c.userId=a.userId','left');
                        $this->db->join('comment_dtl b', 'b.userId=a.userId','left');
                        $this->db->join('avatar_dtl d', 'd.userId=a.userId','left');
                        $this->db->join('user_dtl e', 'e.userId=a.userId','left');
                        $this->db->where('postId', $row2->postId);
                        $this->db->where('commentId', $row2->commentId);
                        $this->db->where('commentType', '2');
                        $query = $this->db->get();
                       if($query->num_rows()>0){
                          echo "";
                        }
                        else{
                          echo "<div class='box-footer'>

                            <form action='#' method='post'>
                              <img class='img-responsive img-circle img-sm' src='".base_url()."/user/".$userdtl['avatar_name']."' alt='alt text'>
                              <!-- .img-push is used to add margin to elements next to floating images -->
                              <div class='img-push'>
                                <input type='text' name='comment' class='form-control input-sm' placeholder='Press enter to post comment'>
                                   <input type='text' hidden='true' name='postId' value='".$postdtl["postId"]."'>
                                   <input type='text' hidden='true' name='commentid' value='".$row2->commentId."'>
                                   <input type='submit' name='btnComment' hidden='true' value='2' />
                              </div>
                            </form>
                          </div><!-- /.box-footer -->";
                        }
                        foreach ($query->result() as $row)
                        {
                                echo "
                                <div class='box-footer box-comments'>

                            <div class='box-comment'>
                              <!-- User image -->
                              <img class='img-circle img-sm' src='".base_url()."/user/".$row->avatar_name."' alt='user image'>
                              <div class='comment-text'>
                                <span class='username'>
                                  ";
                                if($row->user_Type=='Ideator'||$row->user_Type=='Investor')
                                  {
                                      if($row->user_midInit==null)
                                         echo $row->user_fName."  ".$row->user_lName;
                                       else
                                         echo $row->user_fName." ".$row->user_midInit.". ".$row->user_lName;
                                  }
                                  else
                                  {
                                    echo $row->company_name;
                                  };
                              echo "
                                  <span class='text-muted pull-right'>8:03 PM Today</span>
                                </span><!-- /.username -->
                                ".$row->commentContent."<br/>
                                <button class='btn btn-default btn-xs'><i class='fa fa-thumbs-o-up'></i> Upvote</button>
                                <button class='btn btn-default btn-xs'><i class='fa fa-reply'></i> Reply</button><br/>
                               
                              </div><!-- /.comment-text -->
                              ";
                              if($query->num_rows()>0){
                          echo "";
                        }
                        else{
                          echo "<div class='box-footer'>

                            <form action='#' method='post'>
                              <img class='img-responsive img-circle img-sm' src='".base_url()."/user/".$userdtl['avatar_name']."' alt='alt text'>
                              <!-- .img-push is used to add margin to elements next to floating images -->
                              <div class='img-push'>
                                <input type='text' name='comment' class='form-control input-sm' placeholder='Press enter to post comment'>
                                   <input type='text' hidden='true' name='postId' value='".$postdtl["postId"]."'>
                                   <input type='text' hidden='true' name='commentid' value='".$row->commentId."'>
                                   <input type='submit' name='btnComment' hidden='true' value='2' />
                              </div>
                            </form>
                          </div><!-- /.box-footer -->";
                        }
                           echo "   </div>
                            </div><!-- /.box-comment -->
                            ";
                              }
                         echo" </div><!-- /.comment-text -->
                            </div><!-- /.box-comment -->
                          </div><!-- /.box-footer -->";
                    }
                ?>  



                          <div class="box-footer">
                    
                            <form action="../pages/comment" method="post">
                              <img class="img-responsive img-circle img-sm" src="<?php echo base_url();?>/user/<?php echo $userdtl['avatar_name']?>" alt="alt text">
                              <!-- .img-push is used to add margin to elements next to floating images -->
                              <div class="img-push">
                                <input type="text" name="comment" class="form-control input-sm" placeholder="Press enter to post comment">
                                <input type="text" hidden="true" name="postId" value="<?php echo $postdtl['postId'];?>">
                                <input type='text' hidden='true' name='commentid' value='<?php echo uniqid();?>'>
                                <input type="submit" name="btnComment" hidden="true" value="1" />
                              </div>
                            </form>
                       
                          </div><!-- /.box-footer -->
              </div><!-- /.box -->
              
                  </div>
                  </div>

<?php  endforeach;?>

<?php  endforeach;?>
                   

         
        </section>
    
    
      </div><!-- /.content-wrapper -->
   <?php  endforeach;?>