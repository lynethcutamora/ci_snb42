<div class="content-wrapper">
 <div class="row">
  <br>


  <div class="col-md-8">
      <?php foreach ($postdtl as $key => $value):?>
       <div class="box-body">
                  <div class="box box-widget">
                
                    <div class='box-header with-border'>
                      <div class='user-block'>
                      
                        <img class="img-circle" src="<?php echo base_url().'user/'. $this->post->getAvatar($value['userId'])?>">
                        <span class='username'><a href="<?php echo base_url().'pages/profile/'.$value['userId']?>"><?php echo $this->post->userProfile($value['userId'])?></a></span>
                         <span class='description'><?php echo $value['postDate'];?></span>
                      </div><!-- /.user-block -->
                      
                    </div><!-- /.box-header -->
                    <div class='box-body'>
                    
                    <br/>
                      <!-- Attachment -->
                    <div class="col-md-12">
                      <div class="attachment-block clearfix">
                     
                        <p><?php echo $value['postContent'];?></p>
                      </div><!-- /.attachment-block -->
                    </div>
                   
                      <!-- Social sharing buttons -->
                      
                      <span class='pull-right text-muted'><?php echo $this->post->upvotecount($value['postId']);?></span>
                    </div><!-- /.box-body -->
                  </div><!-- /.box -->
     
        </div>
      <?php endforeach; ?>
       <h1>&nbsp;&nbsp;Feedbacks</h1>
        <?php foreach ($postdtl as $key => $value):?>
       <div class="box-body">
                  <div class="box box-widget collapsed-box">
                
                    <div class='box-header with-border'>
                      <div class='user-block'>
                      
                        <img class="img-circle" src="<?php echo base_url().'user/'. $this->post->getAvatar($value['userId'])?>">
                        <span class='username'><a href="<?php echo base_url().'pages/profile/'.$value['userId']?>"><?php echo $this->post->userProfile($value['userId'])?></a></span>
                         
                         <span class='description' style="color:black"><b>asdasd</b></span>   
                        
                      </div><!-- /.user-block -->
                      <div class='box-tools'>
                         <button class='btn btn-block-tool btn-primary btn-xs' value="<?php echo $value['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">Report</i></button>
                         <button class='btn btn-block-tool btn-primary btn-xs' value="<?php echo $value['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">Delete this post</i></button>
                         <button class='btn btn-block-tool btn-primary btn-xs' value="<?php echo $value['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">Add to Group</i></button>
                         <button class='btn btn-block-tool btn-primary btn-xs' value="<?php echo $value['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">poke</i></button>
                         <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-plus'></i></button>
                      </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class='box-body'>
                    
                    <br/>
                      <!-- Attachment -->
                    <div class="col-md-12">
                     <div class="attachment-block clearfix">
                     
                        <p><?php echo $value['postContent'];?></p>
                      </div><!-- /.attachment-block -->
                    </div>
                   
                      <!-- Social sharing buttons -->
                      
                      <span class='pull-right text-muted'><?php echo $this->post->upvotecount($value['postId']);?></span>
                    </div><!-- /.box-body -->
                  </div><!-- /.box -->
     
        </div>
      <?php endforeach;?>



      </div><!--/.body-->     
        <div class="col-md-4">  </div>

             
      

  </div>
 </div>
</div>
