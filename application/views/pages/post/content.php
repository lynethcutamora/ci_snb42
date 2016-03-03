    <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <?php if(!$this->post->checkPostType($postId)){
              if($this->post->checkNewInvestor()){
                header('Location:'.base_url().'pages/investormoreinfo');
              }

           }
    ?>
   <div class="content-wrapper">
 <section class="content-header">
 <div class="row"> 
            <div class="col-md-9">
            <div name="newsfeed" id="newsfeed"></div>
            <div name="newsfeed1" id="newsfeed1"></div>

            <?php if($this->post->checkcompetition($postId)==true){
                      if(!$this->post->checkUser1($this->post->getPostUser($postId))){
              ?>

            <div class="box">
                  <div class="box-header with-border">
                    <span class="pull-left"><p>Post New Idea</p></span>
                    <span class="pull-right"><button type="submit" class="btn btn-primary btn-xs" id="btnGenerate">Generate Title</button></span>
                  </div><!-- /.box-header -->
                  <!-- form start -->
                 <form method="post" action="" id="upload_file" enctype="multipart/form-data" class="form-horizontal">
                    <div class="box-body">
                      <div name="error" id="error"></div>
                      <div class="form-group">
                        <label for="ideatitle" class="col-sm-2 control-label">Title*</label>
                        <div class="col-sm-10">
                        <?php echo form_error('ideatitle'); ?>
                          <input type="text" hidden="true"  name="postId" id="postId" placeholder="Title" value="<?php echo $postId; ?>"/>
                        
                          <input type="text" class="form-control" name="ideatitle" id="ideatitle" placeholder="Title" value="<?php echo set_value('ideatitle'); ?>"/>
                        </div>
                      </div>
                     <div class="form-group">
                        <label for="ideatitle" class="col-sm-2 control-label">Category*</label>
                        <div class="col-sm-4">
                          <select name="categorytxt" id="categorytxt" class="form-control" onChange="changeCategory(this)">
                            <option value="1">-- select category --</option>
                            <option value="androidapp">Android Application</option>
                            <option value="website">Web site</option>
                            <option value="desktopapp">Desktop Application</option>
                            <option value="agricultural">Agricultural</option>
                            <option value="industrial">Industrial</option>
                            <option value="travel&transportation">Travel & Transportation</option>
                            <option value="reservation">Reservation</option>
                            <option value="health&medicine">Health & Medicine</option>
                            <option value="food&dining">Food & Dining</option>
                            <option value="environmental">Environmental</option>
                            <option value="automotive">Automotive</option>
                            <option value="businesssupport&supplies">Business Support & Supplies</option>
                            <option value="education">Education</option>
                            <option value="realstate">Real State</option>
                            <option value="merchants">Merchants (Retail)</option>
                          </select>
                        </div>
                        <label for="ideatitle" name="optional1" id="optional1" style="display:block" class="col-sm-2 control-label">/ others:</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="optional" id="optional" placeholder="Specify category" value="<?php echo set_value('ideatitle'); ?>" style="display:block" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputDescription"  class="col-sm-2 control-label">Description*</label>
                        <div class="col-sm-10">
                         <?php echo form_error('inputDescription'); ?>
                          <textarea class="form-control"name="inputDescription" id="inputDescription" placeholder="Description" value="<?php echo set_value('inputDescription'); ?>"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputLinks" class="col-sm-2 control-label">Links</label>
                        <div class="col-sm-10">
                        <?php echo form_error('relatedlinks'); ?>
                          <input type="text" class="form-control" name="relatedlinks" id="relatedlinks" placeholder="Related Links (Separated by comma)" value="<?php echo set_value('relatedlinks'); ?>"/>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                          <div class="box-header with-border">
                            <h3 class="box-title"><small>Add Business Model Canvas</small></h3>
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
                                      <td><textarea class="form-control"name="inputKeyPartners" id="inputKeyPartners" placeholder="Who are out Key Partners?"></textarea></td>
                                      <td><textarea class="form-control"name="inputKeyActivities" id="inputKeyActivities" placeholder="What Key activities do our Value Propositions requires?"></textarea></td>
                                      <td><textarea class="form-control"name="inputValuePropositions" id="inputValuePropositions" placeholder="What value do we deliver to the customer?"></textarea></td>
                                    </tr>
                                  <tr>
                                    <th><small>Customer Relationships</small></th>
                                    <th><small>Customer Segments</small></th>
                                    <th><small>Key Resources</small></th>
                                  </tr>
                                    <tr>
                                      <td><textarea class="form-control"name="inputCustomerRelationship" id="inputCustomerRelationship" placeholder="What type of relationship does each of our Customer Segments expect us to establish and maintain with them?"></textarea></td>
                                      <td><textarea class="form-control"name="inputCusomerSegments" id="inputCusomerSegments" placeholder="From whom are we creating value?"></textarea></td>
                                      <td><textarea class="form-control"name="inputKeyResources" id="inputKeyResources" placeholder="What Key Resources do our Value Propositions require?"></textarea></td>
                                    </tr>
                                  <tr>
                                    <th><small>Channels</small></th>
                                    <th><small>Cost Structure</small></th>
                                    <th><small>Revenue Streams</small></th>
                                  </tr>
                                    <tr>
                                      <td><textarea class="form-control"name="inputChannels" id="inputChannels" placeholder="Through what channel do our Customer Segments want to be reached?"></textarea></td>
                                      <td><textarea class="form-control"name="inputCostStructure" id="inputCostStructure" placeholder="What are the most important costs inherent in our business model?"></textarea></td>
                                      <td><textarea class="form-control"name="inputRevenueStreams" id="inputRevenueStreams" placeholder="For what value are our customers willing to pay?"></textarea></td>
                                    </tr>
                                </tbody>
                              </table>
                          </div><!-- /.box-body -->
                        </div><!-- /.box -->
                      </div><!-- /.col -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                     
                       <input type="file" name="pic" id="pic" size="20" />
                         <div id="files"></div>
                          <button class="btn btn-info pull-right" type="submit" id="postnewidea" name="postnewidea">Post Idea</button>
                    </div>
                  </form>
    </div><!-- /.box-->

            <?php }
            }?>
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


<script>
    $('button[name="postnewidea"]').click(function(e){
          var form = new FormData(document.getElementById('upload_file'));
         
            e.preventDefault();
            
            $.ajax({
              type: 'post',
              url:"<?php echo base_url().'pages/competitionIdeas'?>",
              data:form,
              mimeType:"multipart/form-data",
               cache: false,
                contentType: false, //must, tell jQuery not to process the data
                processData: false, //must, tell jQuery not to set contentType
              success: function (data) {
          
                 
                  $("#error").html(data) ;
                  $("#ideatitle").val('') ;
               
                  $("#inputDescription").val('') ;
                  $("#relatedlinks").val('') ;
                  $("#pic").val('') ;
                  $("#inputChannels").val('') ;
                  $("#inputRevenueStreams").val('') ;
                  $("#inputCostStructure").val('') ;
                  $("#inputCusomerSegments").val('') ;
                  $("#inputValuePropositions").val('') ;
                  $("#inputKeyResources").val('') ;
                  $("#inputKeyActivities").val('') ;
                  $("#inputKeyPartners").val('') ;
              }
            });


          });



</script>
   <script>
 function changeCategory(obj){
   var x = document.getElementById("categorytxt").value;

   if(x=='1'){
    document.getElementById("optional").style.display="block";
    document.getElementById("optional1").style.display="block";
   }else{
  document.getElementById("optional").style.display="none";
  document.getElementById("optional1").style.display="none";
}
  }
  
</script>
<script>
     function com(){
                 
                  $("#newsfeed1").load("<?php echo base_url().'pages/newShowInvestorPost/10/'; ?>"); }
                    setInterval(function(){com()}, 1000);


</script>
