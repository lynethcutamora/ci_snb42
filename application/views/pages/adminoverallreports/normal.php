
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
                  <h3 class="box-title">Normal Post</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Areas</th>
                        <th>Date Posted</th>
                        <th>Action  </th>
                      
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($this->post->queryAllNormal()->result_array() as $value):?>
                      <tr>
                        <td><?php echo $this->post->userProfile($this->post->getPostUser($value['postId']));?></td>
                        <td><?php echo $this->post->getPostDescription($value['postId']);?></td>
                        <td><?php echo $this->post->getPostAreas($value['postId']);?></td>
                        <td><?php echo $this->post->getPostDate($value['postId']);?></td>
                        <td>  <button type="submit" class="btn btn-box-tool" name="btnDelete" id="btnDelete" value="<?php echo $value['postId']?>"><i class="fa fa-times"></i></button></td>
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
                         window.location.assign("<?php echo base_url().'pages/adminpage8/'?>");
                        }
                      });
              } else {
                  // Do nothing!
              }
                

     });
   </script>