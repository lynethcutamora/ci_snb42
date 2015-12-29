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
          
          </div><!-- /.row -->
        </section><!-- /.content -->
      
          </div><!-- /.row -->