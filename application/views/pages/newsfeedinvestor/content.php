<div class="content-wrapper">
 <section class="content-header">
 <div class="row">
          <h2>
            &nbsp;&nbsp;&nbsp;<i class="fa fa-feed"></i>&nbsp;&nbsp;Start-up Idea Post/Investor Post 
          </h2>
          </br>
             <div class="col-md-9">
       <!--  <?php foreach($ideatorpost as $ideator): ?>
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
               <!--       <div class='box-tools'>
                         <button class='btn btn-block-tool btn-primary btn-xs' value="<?php echo $ideator['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">Report</i></button>
                         <button class='btn btn-block-tool btn-primary btn-xs' value="<?php echo $ideator['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">Delete this post</i></button>
                         <button class='btn btn-block-tool btn-primary btn-xs' value="<?php echo $ideator['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">Add to Group</i></button>
                         <button class='btn btn-block-tool btn-primary btn-xs' value="<?php echo $ideator['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">poke</i></button>
                         <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-plus'></i></button>
                      </div><!-- /.box-tools -->
                <!--    </div><!-- /.box-header -->
                   
              <!--    </div><!-- /.box -->
     
       <!--   </div>

        </div>

      <?php endforeach;?>  	-->		

       <!-- retrieved posts area -->
     <div name="post1" id="post1"></div>

      <div class="box box-widget">
        <div class="box-header with-border">
          <div class="user-block">
            <img class='img-circle' src='<?php echo base_url().'user/1.png';?>' alt='user image'>
            <span class="username">
              <a href="#"><small>Lyneth C. Cutamora</small></a>
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
                  <p>
                    <span style="color:green;"><i class="fa fa-bookmark"></i>&nbsp;&nbsp;&nbsp;<small>(Startup Idea)</small></span>
                    <span class="pull-right" style="color:orange;"><i class="fa fa-money"></i>&nbsp;&nbsp;&nbsp;<small>invested</small>&nbsp;&nbsp;&nbsp;</span>
                  </p>
                </div>
                  <div class="row">

                    <div class="col-md-3">
                     <img src="<?php echo base_url().'/post_image/'.'8985568b6a3028ba2.jpg';?>" height='200px' width='200px' alt="Attachment image">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-7">
                      <h5><b><a href="#" ><?php echo strtoupper("Start & Boost");?></a></b><span class="label label-default pull-right">with BMC</span></h5>
                      <h6><small>category: &nbsp;&nbsp; Web and Mobile</small></h6>
                      <p style="text-align:justify;text-justify:inter-word;">This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea.</p>
                    </div>
                  </div><!-- /.row -->
                  <div class="col-md-1"></div>
              </div><!-- /.info-box -->

              <i><small>related links: &nbsp;&nbsp; <a href="#">https://github.com/lynethcutamora/ci_snb42</a></small></i><hr/>

              <!-- sample complete startup idea post -->

              <div class="col-md-12">
                <div class="box box-default collapsed-box">
                  <div class="box-header with-border">
                    <h3 class="box-title"><small>Business Model Canvas</small></h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    </div><!-- /.box-tools -->
                  </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th><small>Key Partners</small></th>
                        <th><small>Key Activities</small></th>
                        <th><small>Values Propositions</small></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                      </tr>
                      <tr>
                        <th><small>Customer Relationships</small></th>
                        <th><small>Customer Segments</small></th>
                        <th><small>Key Resources</small></th>
                      </tr>
                      <tr>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                      </tr>
                      <tr>
                        <th><small>Channels</small></th>
                        <th><small>Cost Structure</small></th>
                        <th><small>Revenue Streams</small></th>
                      </tr>
                      <tr>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col-12 -->
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


       <!-- sample normal idea post -->

      <div class="box box-widget">
        <div class="box-header with-border">
          <div class="user-block">
            <img class='img-circle' src='<?php echo base_url().'user/1.png';?>' alt='user image'>
            <span class="username">
              <a href="#"><small>Lyneth C. Cutamora</small></a>
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
                  <p style="color:green;"><i class="fa fa-bookmark"></i>&nbsp;&nbsp;&nbsp;<small>(Startup Idea)</small></p>
                </div>
                <h5><b><a href="#" ><?php echo strtoupper("Start & Boost");?></a></b></h5>
                <h6><small>category: &nbsp;&nbsp; Web and Mobile</small></h6>
                <p style="text-align:justify;text-justify:inter-word;">This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea.</p>
                <br/>     
              </div><!-- /.info-box -->

              <i><small>related links: &nbsp;&nbsp; <a href="#">https://github.com/lynethcutamora/ci_snb42</a></small></i><hr/>
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


