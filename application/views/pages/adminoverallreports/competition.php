
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      

        <!-- Main content -->
        <section class="content">

          <div class="row">

          <!-- ====================================================================== -->
            <div class="col-md-12">
               <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Competition Post</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                    
                        <th>Description</th>
                        <th>Areas</th>
                        <th>Notes</th>
                        <th>Date Posted</th>
                        <th>status</th>
                        <th>Action  </th>
                      
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($this->post->queryAllCompetition()->result_array() as $value):?>
                      <tr>
                        <td><?php echo $this->post->userProfile($this->post->getPostUser($value['postId']));?></td>
                        <td><?php echo $this->post->getPostDescription($value['postId']);?></td>
                        <td><?php echo $this->post->getPostAreas($value['postId']);?></td>
                        <td><?php echo $this->post->getPostNote($value['postId']);?></td>
                   
                        <td><?php echo $this->post->getPostDate($value['postId']);?></td>
                             <td><?php if($this->post->getPostType($value['postId'])=='4') echo "approved"; elseif($this->post->getPostType($value['postId'])=='6')echo "declined"; else echo "waiting";?></td>
                        <td> 
                       <?php  if($this->post->getPostType($value['postId'])=='5'){?>
                         <button type="submit" class="btn btn-box-tool" name="btnDelete" id="btnDelete" value="<?php echo $value['postId']?>"><i class="fa fa-check-square"></i></button>
                          <button type="submit" class="btn btn-box-tool" name="btnDelete" id="btnDelete" value="<?php echo $value['postId']?>"><i class="fa  fa-minus-circle"></i></button>

                          <button type="submit" class="btn btn-box-tool" name="btnDelete" id="btnDelete" value="<?php echo $value['postId']?>"><i class="fa fa-times"></i></button></td>
                      <?php }else{?>

                         <button type="submit" class="btn btn-box-tool" name="btnDelete" id="btnDelete" value="<?php echo $value['postId']?>"><i class="fa fa-times"></i></button></td>
                   

                      <?php }

                      ?>
                      </tr>
                    <?php endforeach;?>
                      </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
                
              
            </div><!--/.row-->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
       <script src="<?php echo base_url();?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url();?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url();?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url();?>dist/js/demo.js"></script>
    
      <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    <script>


    $('button[name="btnDelete"]').click(function(e){
                    if (confirm("Do you want to delete this post?")) {
                   var postId = $(this).attr("value");
                     e.preventDefault();
                    var dataString = 'postId='+ postId;
                     $.ajax({
                        type: 'post',
                         url:"<?php echo base_url().'pages/deletepost/'?>",
                        data:dataString,
                        success: function (data) {
                        alert("successfully deleted");
                         window.location.assign("<?php echo base_url().'pages/adminpage7/'?>");
                        }
                      });
              } else {
                  // Do nothing!
              }
                

     });
   </script>
     <script>


    $('button[name="btnDelete"]').click(function(e){
                    if (confirm("Do you want to approve this competition?")) {
                   var postId = $(this).attr("value");
                     e.preventDefault();
                    var dataString = 'postId='+ postId;
                     $.ajax({
                        type: 'post',
                         url:"<?php echo base_url().'pages/approvecom/'?>",
                        data:dataString,
                        success: function (data) {
                        alert("successfully approved");
                         window.location.assign("<?php echo base_url().'pages/adminpage7/'?>");
                        }
                      });
              } else {
                  // Do nothing!
              }
                

     });
   </script>