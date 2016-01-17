<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Ideators Post  <i class="fa fa-feed"></i>
          </h1>
          <div class="container">
          <div class="row">
           <div class="col-md-10">
<!------------------------------------------------------> 
                  <div class="box-body">
                  <div class="box box-widget">
               
                <div class='box-header with-border'>
                
                        <?php foreach($ideatorpost as $ideator): ?>
                 <div class='user-block'>
                      <img class='img-circle' src='<?php echo base_url();?>/user/<?php echo $ideator['avatar_name'];?>' alt='user image'>
                      <span class='username'><a href="<?php echo base_url()."pages/profile/".$ideator['userId']?>"><?php echo $ideator['user_fName'];?>&nbsp;<?php echo $ideator['user_midInit'];?>.&nbsp;<?php echo $ideator['user_lName'];?>&nbsp;</a>&nbsp;&nbsp;<i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;<?php echo $this->post->reputation($ideator['userId']);?></b></span>
                      <span class='description'><?php echo $ideator['postDate'];?></span>
                    </div><!-- /.user-block -->
						
                    <div>
                    <h6><a href="<?php echo base_url()."pages/post/".$ideator['postId'];?>"><?php echo $ideator['postTitle']; ?></h6>
                      <h6 class="pull-right"><?php $this->post->upvotecount($ideator['postId']);?>  |  <?php $this->post->commentCount($ideator['postId']);?></h6>
                    </div>
                    <br/><hr/>
                  
                   
                    
                            
                
                      <?php endforeach;?>
                  
               				
              			</div><!-- /.box-header -->
 					</div><!--/.box-->
 					
                </div><!--/.body-->

              </div><!-- /.col -->
              </div>
             </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->