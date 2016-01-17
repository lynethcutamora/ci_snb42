<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-feed"></i>&nbsp;&nbsp;Start-up Idea Post/Investor Post 
          </h1>
          <div class="container">
          <div class="row">
           <div class="col-md-10">
          
<!------------------------------------------------------> 
                 
                  <div class="box box-widget">
               
                <div class="box-header with-border">
                
                        <?php foreach($ideatorpost as $ideator): ?>
                 <div class="user-block">
                 <div class="box-body">
                      <img class='img-circle' src='<?php echo base_url();?>/user/<?php echo $ideator['avatar_name'];?>' alt='user image'>
                      <span class='username'><a href="<?php echo base_url()."pages/profile/".$ideator['userId']?>"><?php echo $ideator['user_fName'];?>&nbsp;<?php echo $ideator['user_midInit'];?>.&nbsp;<?php echo $ideator['user_lName'];?>&nbsp;</a>&nbsp;&nbsp;<i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;<?php echo $this->post->reputation($ideator['userId']);?></b></span>
                      <span class='description'><?php echo $ideator['postDate'];?></span>
                    <?php if($ideator['postType']=='investpost'){?>
                    <!--<h6><a href="<?php echo base_url()."pages/post/".$ideator['postId'];?>"><?php echo $ideator['postTitle'];?></a></h6>-->
                    <?php }else{?>
                    <h6><a href="<?php echo base_url()."pages/post/".$ideator['postId'];?>"><?php echo $ideator['postTitle']; ?></a></h6>
                    <?php }?>
                      <h6 class="pull-right"><?php $this->post->upvotecount($ideator['postId']);?>  |  <?php $this->post->commentCount($ideator['postId']);?></h6>
                 
                    <br/><hr/><hr/>
                   </div><!-- /.user-block -->
                   </div>
              
                    
                            
                
                      <?php endforeach;?>
                  
               			
              			     
 					</div><!--/.box-->

              </div><!-- /.col -->
              </div>
             </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


