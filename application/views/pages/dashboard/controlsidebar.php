  <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
           
        </ul>
        <!-- Tab panes -->
          <ul class="sidebar-menu">

      <li class="header"><center><h5 style="color:white">Users</h5></center></li>
      <!-- search form -->
          <form method="post" name="form3" id="form3" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="key" id="key" class="form-control" required="required" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search1" id="search1" value="1" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
</ul>
        <div class="tab-content" name="listuser" id="listuser">
     
       <form method="post" name="form" id="form">
          <?php             $i=0;
          foreach ($this->post->allUsers($this->session->userdata('userId'))->result_array() as $value):?>
               
              <div class="user-block">
                     <img class='img-circle' src='<?php echo base_url();?>user/<?php echo $value['avatar_name']?>' alt='user image'>
                     <span class="username">
                    <a href="#" style="color:white">
                      <?php echo ellipsize($this->post->userProfile($value['userId']), 20); ?>
                         <?php echo $value['user_Type'];

                         ?>
                    </a></span>
                    <div class="pull-right">
                  
                    
                        <button type="button" class="btn btn-block btn-primary btn-xs" value="<?php echo $value['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">poke</button>
                  
                      
                    </div>
                  
                  </div><!-- /.user-block -->
                 
          <hr>
        <?php endforeach;?>
             </form>
     
      </div>
      </aside><!-- /.control-sidebar -->
     <div class="modal fade" id="poke2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Poke</h4>
                </div>
                <div class="modal-body">
                  <center>      
                   <div name="session" id="session">


                   </div>
                  <label>Leave Message:</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea><br> 
                      <button type="submit" class="btn btn-primary btn-block" name='userid' id='userid'>send</button>
                  
                  
                  </center>
                </div><!-- /.register-box -->

              </div>
            </div>
          </div>
       
      <script>
     function loadNowPlaying1(){
               
                $("#session").load("<?php echo base_url().'pages/sessionpoke'; ?>"); }
                setInterval(function(){loadNowPlaying1()}, 1000);

        $(function () {
     
         $('button[name="poke"]').click(function(e){
        var userId = $(this).attr("value");
        
          e.preventDefault();
            var dataString = 'userId='+ userId;
          $.ajax({
            type: 'post',
            url:"<?php echo base_url().'pages/getAll/'?>",
            data:dataString,
            success: function (data) {
        
              document.getElementById("userid").value = userId;
            }
          });

        });
            $('button[name="search1"]').click(function(e){
      
          var key = $("#key").val();
          e.preventDefault();
            var dataString = 'key='+ key;
          $.ajax({
            type: 'post',
            url:"<?php echo base_url().'pages/searchList'?>",
            data:dataString,
            success: function (data) {
              $('#listuser').html(data);
            }
          });

        });



      });


      </script>