<div class="content-wrapper">
 <section class="content-header">
 <div class="row">
          <h2>
            &nbsp;&nbsp;&nbsp;<i class="fa fa-feed"></i>&nbsp;&nbsp;Start-up Idea Post/Investor Post 
          </h2>
          </br>
             <div class="col-md-9">
         <?php foreach($ideatorpost as $ideator): ?>
          <?php if($ideator['postType']=='investpost'){?>
          <div class="box box-success">
          <?php }else{?>
          <div class="box box-info">
          <?php }?>
       <div class="box-body">
                  <div class="box box-widget collapsed-box">
                
                    <div class='box-header with-border'>
                      <div class='user-block'>
                      
                         <img class='img-circle' src='<?php echo base_url();?>/user/<?php echo $ideator['avatar_name'];?>' alt='user image'>
                  
                      <span class='username'><a href="<?php echo base_url()."pages/profile/".$ideator['userId']?>"><?php echo $ideator['user_fName'];?>&nbsp;<?php echo $ideator['user_midInit'];?>.&nbsp;<?php echo $ideator['user_lName'];?>&nbsp;</a>&nbsp;&nbsp;<i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;<?php echo $this->post->reputation($ideator['userId']);?></b></span>
                
                      <span class='description'><?php echo $ideator['postDate'];?></span>
                    <?php if($ideator['postType']=='investpost'){?>
                    <h6><?php echo $ideator['postContent'];?></a></h6>
                    <?php }else{?>
                    <h6><a href="<?php echo base_url()."pages/post/".$ideator['postId'];?>"><?php echo $ideator['postTitle']; ?></a></h6>
                    <?php }?>
                      <h6 class="pull-right"><?php $this->post->upvotecount($ideator['postId']);?>  |  <?php $this->post->commentCount($ideator['postId']);?></h6>
                 
                    <br/>
                        
                      </div><!-- /.user-block -->
                      <div class='box-tools'>
                         <button class='btn btn-block-tool btn-primary btn-xs' value="<?php echo $ideator['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">Report</i></button>
                         <button class='btn btn-block-tool btn-primary btn-xs' value="<?php echo $ideator['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">Delete this post</i></button>
                         <button class='btn btn-block-tool btn-primary btn-xs' value="<?php echo $ideator['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">Add to Group</i></button>
                         <button class='btn btn-block-tool btn-primary btn-xs' value="<?php echo $ideator['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">poke</i></button>
                         <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-plus'></i></button>
                      </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                   
                  </div><!-- /.box -->
     
          </div>

        </div>

      <?php endforeach;?>  			


        </div>
          <div class="col-md-3">
      <div class="box box-default">
        <div class="box-header with-border">
          Advertisement(s)
        </div>
        <div class="box-body">
          <img src="<?php echo base_url().'images/ind.png' ?>" width="100%"><br/><hr/>
        </div>
        <div class="box-footer text-center">
          <a><small>See more</small></a>
        </div>
      </div>
    </div>

    </div><!-- /row -->
    </section>
</div><!-- /.content-wrapper -->


