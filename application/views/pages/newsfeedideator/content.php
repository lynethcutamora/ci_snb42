   <div class="content-wrapper">
 <section class="content-header">
 <div class="row">
          <h2>
            &nbsp;&nbsp;&nbsp;<i class="fa fa-feed"></i>&nbsp;&nbsp;Venture Capitalist Post  
          </h2>
          </br>
             <div class="col-md-9">
        <!-- <?php foreach($investorpost as $inv): ?>
          <?php if($inv['postType']=='investpost'){?>
          <div class="box box-success">
          <?php }else{?>
          <div class="box box-info">
          <?php }?>
       <div class="box-body">
                  <div class="box box-widget collapsed-box">
                
                    <div class='box-header with-border'>
                      <div class='user-block'>
                      
                         <img class='img-circle' src='<?php echo base_url();?>/user/<?php echo $inv['avatar_name'];?>' alt='user image'>
                  
                      <span class='username'><a href="<?php echo base_url()."pages/profile/".$inv['userId']?>"><?php echo $inv['user_fName'];?>&nbsp;<?php echo $inv['user_midInit'];?>.&nbsp;<?php echo $inv['user_lName'];?>&nbsp;</a>&nbsp;&nbsp;<i class='fa fa-star' style="color:#ffd700;"></i><b>&nbsp;&nbsp;<?php echo $this->post->reputation($inv['userId']);?></b></span>
                
                      <span class='description'><?php echo $inv['postDate'];?></span>
                    <?php if($inv['postType']=='investpost'){?>
                    <h6><?php echo $inv['postContent'];?></a></h6>
                    <?php }?>
                      <h6 class="pull-right"><?php $this->post->upvotecount($inv['postId']);?>  |  <?php $this->post->commentCount($inv['postId']);?></h6>
                 
                    <br/>
                        
                      </div><!-- /.user-block -->
                     <!-- <div class='box-tools'>
                         <button class='btn btn-block-tool btn-primary btn-xs' value="<?php echo $inv['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">Report</i></button>
                         <button class='btn btn-block-tool btn-primary btn-xs' value="<?php echo $inv['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">Delete this post</i></button>
                         <button class='btn btn-block-tool btn-primary btn-xs' value="<?php echo $inv['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">Add to Group</i></button>
                         <button class='btn btn-block-tool btn-primary btn-xs' value="<?php echo $inv['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">poke</i></button>
                         <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-plus'></i></button>
                      </div><!-- /.box-tools -->
                  <!--  </div><!-- /.box-header -->
                   
                |<!--  </div><!-- /.box -->
     
       <!--   </div>

        </div>

      <?php endforeach;?> -->      


     



 <!-- sample startup product post -->
      <div class="box box-widget">
        <div class="box-header with-border">
          <div class="user-block">
            <img class='img-circle' src='<?php echo base_url().'user/1.png';?>' alt='user image'>
            <span class="username">
              <a href="#"><small>Jason D. Pitogo</small></a>
            </span>
            <span class="description"><i class="fa fa-star" style="color:gold;"></i><small><b>&nbsp;1520</b></small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date posted:&nbsp;&nbsp;&nbsp;<small>10/25/2016</small></span>
          </div><!-- /.user-block -->
          <div class="box-tools">
            <button class="btn btn-box-tool" data-widget="edit"><i class="fa fa-edit"></i></button>
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header --> 
        <div class="box-body">
          <div class="container-fluid">
              <div class="info-box">
                <div class="row">
                  <p style="color:green;"><i class="fa fa-bookmark"></i>&nbsp;&nbsp;&nbsp;<small>(Startup Product)</small></p>
                </div>
                <p style="text-align:justify;text-justify:inter-word;">This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea.</p>
                    
                  <!-- Attachment -->
                  <div class="attachment-block clearfix">
                    <img class="attachment-img" src="../images/blue.png" alt="attachment image">
                    <div class="attachment-pushed">
                      <h5 class="attachment-heading"><b><a href="#"><?php echo strtoupper("Start & Boost"); ?></a></b></h5>
                      
                      <div class="attachment-text">
                        <h6><small>category: &nbsp;&nbsp; Web and Mobile</small></h6>
                        <i class="fa fa-star" style="color:gold;"></i><i class="fa fa-star" style="color:gold;"></i><i class="fa fa-star" style="color:gold;"></i><i class="fa fa-star-half" style="color:gold;"></i>
                      </div><!-- /.attachment-text -->
                    </div><!-- /.attachment-pushed -->
                  </div><!-- /.attachment-block -->
              </div><!-- /.info-box -->

              <i><small>download links: &nbsp;&nbsp; <a href="#">https://github.com/lynethcutamora/ci_snb42</a></small></i><hr/>
          </div><!-- /.container -->
        </div><!-- /.box-body -->
          <div class="box-footer">
            <div class="container-fluid">
              <button class="btn btn-success btn-xs"><i class="fa fa-hand-o-left"></i>&nbsp;&nbsp;Poke</button>
              <button id='add' class='btn btn-default btn-xs'><i class='fa fa-arrow-circle-up'></i> Upvote</button>
              <span class="pull-right"><small><a href="#">5 upvotes - 2 comments</a></small></span>
            </div>
          </div>
      </div> <!-- /. box-widget -->
     

<!--sample normal post-->
     <div class="box box-widget">
        <div class="box-header with-border">
          <div class="user-block">
            <img class='img-circle' src='<?php echo base_url().'user/1.png';?>' alt='user image'>
            <span class="username">
              <a href="#"><small>Edelito D. Albaracin Jr.</small></a>
            </span>
            <span class="description"><i class="fa fa-star" style="color:gold;"></i><small><b>&nbsp;1520</b></small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date posted:&nbsp;&nbsp;&nbsp;<small>10/25/2016</small></span>
          </div><!-- /.user-block -->
          <div class="box-tools">
            <button class="btn btn-box-tool" data-widget="edit"><i class="fa fa-edit"></i></button>
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header --> 
        <div class="box-body">
          <div class="container-fluid">
              <div class="info-box">
                <div class="row">
                  <p style="color:green;"><i class="fa fa-bookmark"></i>&nbsp;&nbsp;&nbsp;<small>(Announcement)</small></p>
                </div>
                <p style="text-align:justify;text-justify:inter-word;">I need some IT expert.</p>
                <p style="text-align:justify;text-justify:inter-word;">Areas:&nbsp;&nbsp;Programmer, Webdesigner, Data Analyst</p>
                    
                 
              </div><!-- /.info-box -->
          </div><!-- /.container -->
        </div><!-- /.box-body -->
          <div class="box-footer">
            <div class="container-fluid">
              <button class="btn btn-success btn-xs"><i class="fa fa-hand-o-left"></i>&nbsp;&nbsp;Poke</button>
              <button id='add' class='btn btn-default btn-xs'><i class='fa fa-arrow-circle-up'></i> Upvote</button>
              <span class="pull-right"><small><a href="#">5 upvotes - 2 comments</a></small></span>
            </div>
          </div>
      </div> <!-- /. box-widget -->
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