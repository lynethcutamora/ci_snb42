<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
              <!-- Content Header (Page header) -->
      
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-3">
               <div class="box box-primary direct-chat direct-chat-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Message</h3>
                      <div class="box-tools pull-right">
                       </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <!-- Conversations are loaded here -->
                      <div class="direct-chat-messages">
                        <!-- Message. Default to the left -->
                       	  <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                  <?php foreach ($this->post->messageUser()->result_array() as $msgUser): 
                    # code...
                  ?>
                    <li class=""><a href="<?php echo base_url();?>pages/message/<?php echo $msgUser['msgId'];?>"> <img class='img-circle img-sm' src='<?php echo base_url();?>images/team/index3.jpg' alt='user image' width="100" height="100">
                                 <?php
                              if($msgUser['user_Type']=='Ideator'||$msgUser['user_Type']=='Investor')
                              {
                                  if($msgUser['user_midInit']==null)
                                     echo $msgUser['user_fName']."  ".$msgUser['user_lName'];
                                   else
                                     echo $msgUser['user_fName']." ".$msgUser['user_midInit'].". ".$msgUser['user_lName'];
                              }
                              else
                              {
                                echo $msgUser['company_name'];
                              }

                          
                       
                      ?> <span class="label label-primary pull-right">12</span></a></li>
                    <?php endforeach;?>
                  </ul>
                </div><!-- /.box-body -->
                      
                      </div><!-- /.direct-chat-pane -->
                    </div><!-- /.box-body -->
                     <div class="box-footer">
                     </div>
                    
                  </div>
            </div><!-- /.col -->
            <?php if($this->post->checkEmptyMsg()==0){}else{ ?>
            <div class="col-md-9">
              <div class="box box-primary direct-chat direct-chat-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title"><?php echo $this->post->userName($msgId);?></h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <!-- Conversations are loaded here -->
                      <div class="direct-chat-messages">
                    <?php foreach ($this->post->showMsg($msgId)->result_array() as $msg):?>                  
                        
                 

                      <?php if($this->post->checkUser($msg['userId'])!='true'){?>
                      <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                          <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-left"><?php echo $this->post->userProfile($msg['userId']);?></span>
                            <span class="direct-chat-timestamp pull-right"><?php echo $msg['dateSent'];?></span>
                          </div><!-- /.direct-chat-info -->
                          <img class="direct-chat-img" src="<?php echo base_url();?>user/<?php echo $this->post->getAvatar($msg['userId'])?>" alt="message user image"><!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            <?php echo $msg['msgContent'];?>
                          </div><!-- /.direct-chat-text -->
                        </div><!-- /.direct-chat-msg -->
                        <?php }else{ ?>

                          <div class="direct-chat-msg right">
                          <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-right"><?php echo $this->post->userProfile($msg['userId']);?></span>
                            <span class="direct-chat-timestamp pull-left"><?php echo $msg['dateSent'];?></span>
                          </div><!-- /.direct-chat-info -->
                          <img class="direct-chat-img" src="<?php echo base_url();?>user/<?php echo $this->post->getAvatar($msg['userId'])?>" alt="message user image"><!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            <?php echo $msg['msgContent'];?>
                          </div><!-- /.direct-chat-text -->
                        </div><!-- /.direct-chat-msg -->


                        <?php }?>
                    <?php endforeach; ?>
                        <!-- Message to the right -->
                      
                      </div><!--/.direct-chat-messages-->

                     
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                      <form action="#" method="post">
                        <div class="input-group">
                          <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-primary btn-flat">Send</button>
                          </span>
                        </div>
                      </form>
                    </div><!-- /.box-footer-->
                  </div>
            </div><!-- /.col -->
            <?php }?>
          </div><!-- /.row -->
        </section><!-- /.content -->
      
          </div><!-- /.row -->