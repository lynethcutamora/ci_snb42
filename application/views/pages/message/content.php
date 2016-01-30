    <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
<div class="content-wrapper">


 <section class="content-header">

 <div class="row">
   
    <div class="col-md-9"> 
       <div class="col-md-4">
           
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Messages</h3>
                 
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <?php foreach ($msg as $row):?>
                   <?php 
                    if($this->post->checkUser($row['msg_fromUserId'])=='true'){

                    }else{
                      ?> 
                      <li class="active"><a href="<?php echo base_url()."pages/notif/msg/".$row['msg_fromUserId']?>"><?php
                       echo $this->post->userProfile($row['msg_fromUserId']);
                      ?>
                        <span class="label label-primary pull-right"></span></a></li>
                      <?php 
                      }
                    ?>
                   <?php endforeach?>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
               
             
            </div>
            <div class="col-md-8">
              <?php if(isset($fromUserId)){
               echo $this->post->msgSeen($fromUserId);
                ?>
                <div class="box box-primary direct-chat direct-chat-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo $this->post->userProfile($fromUserId);?></h3>
                 
                </div><!-- /.box-header -->
                <div class="box-body">
                 <div class="direct-chat-messages" name="direct-chat-messages" id="direct-chat-messages">
                  <!-- Conversations are loaded here -->
                 <div class="chat" name="chat" id="chat"></div>
               
                </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <form action="#" method="post">
                      <input type="text"  hidden="true" name="fromUserId1" id="fromUserId1" value="<?php echo $fromUserId;?>">
                    <div class="input-group">
                      <input  placeholder="Type Message ..." class="form-control" type="text" name="message2" id="message2">
                    
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-flat" name="btnSend1" id="btnSend1">Send</button>
                      </span>
                    </div>
                  </form>
                </div><!-- /.box-footer-->
              </div>
              <?php }else{

              } ?>
            </div><!-- /.col-9-->
  </div><!-- /.col-9-->
    


        
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

<script >


                 function loadNowPlaying(){
                  $(window).on("scroll",function(){
                   
                $('#direct-chat-messages').scrollTop(1000000);
                  });

                $("#chat").load("<?php echo base_url().'pages/chat1on1show/'.$fromUserId ?>");
                }
                setInterval(function(){loadNowPlaying()}, 500);
                  $('button[name="btnSend1"]').click(function(e){
          var message = $("#message2").val();
          var fromUserId = $("#fromUserId1").val();
          
            e.preventDefault();
              var dataString = 'fromUserId='+ fromUserId  + '&message=' + message ;
            $.ajax({
              type: 'post',
              url:"<?php echo base_url().'pages/sendpoke/'?>",
              data:dataString,
              success: function (data) {
          
                
            var delay = 500;
              setTimeout(function() {
               $('#direct-chat-messages').scrollTop(1000000);
              }, delay);
               
                  $("#message2").val('') ;

              }
            });

          });
</script>
