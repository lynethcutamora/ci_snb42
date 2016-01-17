<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-feed"></i>&nbsp;&nbsp;Venture Capitalist Post  
          </h1>
          <div class="container">
          <div class="row">
           <div class="col-md-10">
<!------------------------------------------------------> 
                  <div class="box-body">
                  <div class="box box-widget">
               
                <div class='box-header with-border'>
               
                     
                        <?php foreach($investorpost as $inv): ?>
                 <div class='user-block'>
                      <img class='img-circle' src='<?php echo base_url();?>/user/<?php echo $inv['avatar_name'];?>' alt='user image'>
                      <span class='username'><a href="<?php echo base_url()."pages/profile/".$inv['userId']?>"><?php echo $inv['user_fName'];?>&nbsp;<?php echo $inv['user_midInit'];?>.&nbsp;<?php echo $inv['user_lName'];?>&nbsp;</a>&nbsp;&nbsp;<i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;</b></span>
                      <span class='description'><?php echo $inv['postDate'];?></span>
                    </div><!-- /.user-block -->
						
                    <div>
                    <h6><a href="<?php echo base_url()."pages/post/".$inv['postId'];?>"><?php echo $inv['postTitle']; ?></h6>
                    <h6 class="pull-right"><?php $this->post->upvotecount($inv['postId']);?>  |  <?php $this->post->commentCount($inv['postId']);?></h6>
                    </div>
                    <br/><hr/><hr/>
                  
                   
                    
                            
                     	<?php endforeach;?>
                   

                  
               				
              			</div><!-- /.box-header -->
 					</div><!--/.box-->
 					
                </div><!--/.body-->

              </div><!-- /.col -->
              </div>
             </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->