    <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
   <div class="content-wrapper">
 <section class="content-header">
 <div class="row"> 
            <div class="col-md-9">
            <div name="newsfeed" id="newsfeed"></div>
            
                <div class="box box-primary direct-chat direct-chat-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">COMMENTBOX</h3>
                 
                </div><!-- /.box-header -->
                <div class="box-body">
                 <div class="direct-chat-messages" name="direct-chat-messages" id="direct-chat-messages">
                  <!-- Conversations are loaded here -->
                 <div class="chat" name="chat" id="chat"></div>
               
                </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <form action="#" method="post">
                      <input type="text"  hidden="true" name="fromUserId1" id="fromUserId1" value="<?php echo $this->session->userdata("userId");?>">
                      <input type="text"  hidden="true" name="postId" id="postId" value="<?php echo $postId;?>">
                    <div class="input-group">
                      <input  placeholder="Type Message ..." class="form-control" type="text" name="message2" id="message2">
                    
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-flat" name="btnComment" id="btnComment">Comment</button>
                      </span>
                    </div>
                  </form>
                </div><!-- /.box-footer-->
              </div>
    

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
<script>
     function investorPost(){
                 
                  $("#newsfeed").load("<?php echo base_url().'pages/newShowInvestorPost/7/'.$postId; ?>"); }
                    setInterval(function(){investorPost()}, 1000);

                     function loadNowPlaying(){
                  $(window).on("scroll",function(){
                   
                $('#direct-chat-messages').scrollTop(1000000);
                  });

                $("#chat").load("<?php echo base_url().'pages/newCommentShow/'.$postId ?>");
                }
                setInterval(function(){loadNowPlaying()}, 500);

                    $('button[name="btnComment"]').click(function(e){
          var message = $("#message2").val();
          var fromUserId = $("#fromUserId1").val();
          var postId = $("#postId").val();
          
            e.preventDefault();
              var dataString = 'fromUserId='+ fromUserId  + '&message=' + message+ '&postId=' + postId ;
            $.ajax({
              type: 'post',
              url:"<?php echo base_url().'pages/commentNow/'?>",
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
