  <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-light">
        <!-- Create the tabs -->

               <div class="box box-primary">
               
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                   
                        <th>Users</th>
                        <th></th>
                    </thead>
                      <div class="col-md-1 col-sm-1">
                    <tbody>
                     <?php             $i=0;
                   foreach ($this->post->allUsers($this->session->userdata('userId'))->result_array() as $value):?>
               
                      <tr>
                          <td>  <?php echo ellipsize($this->post->userProfile($value['userId']), 20); ?></td>
                          <td>  <button type="button" class="btn btn-block btn-primary btn-xs" value="<?php echo $value['userId'];?>" name="poke" data-toggle="modal" data-target="#poke2">poke</button></td>
                      </tr>

                  <?php endforeach;?>

               
                    </tbody>
                    <tfoot>
                    </tfoot>
                    </div>
                  </table>  

                </div><!-- /.box-body -->
              </div><!-- /.box -->
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
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="message1" id="message1"></textarea><br> 
              
                    <div name="hiddenshit" id="hiddenshit"></div>

                    <div name="errormsg" id="errormsg">
                    
                    </div>
                   

                      <button type="submit" class="btn btn-primary btn-block" name='btnSend' id='btnSend'>send</button>
                  
                  
                  </center>
                </div><!-- /.register-box -->

              </div>
            </div>
          </div>

         
    
      <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": false,
          "autoWidth": false
        });
      });
    </script>

        <script>
       function loadNowPlaying1(){
                 
                  $("#session").load("<?php echo base_url().'pages/sessionpoke'; ?>"); }
                  setInterval(function(){loadNowPlaying1()}, 1000);
 function loadNowPlaying3(){
                 
                  $("#hiddenshit").load("<?php echo base_url().'pages/hiddenShit'; ?>"); }
                  setInterval(function(){loadNowPlaying3()}, 1000);

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

           $('button[name="btnSend"]').click(function(e){
          var message = $("#message1").val();
          var fromUserId = $("#fromUserId").val();
          
            e.preventDefault();
              var dataString = 'fromUserId='+ fromUserId  + '&message=' + message ;
            $.ajax({
              type: 'post',
              url:"<?php echo base_url().'pages/sendPoke/'?>",
              data:dataString,
              success: function (data) {
          
                 alert(data);
                  $("#message1").val('') ;

              }
            });

          });



        });

        


        </script>

