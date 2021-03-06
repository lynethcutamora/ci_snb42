
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
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Report Content(s)</th>
                        <th>Report Date</th>
                        <th>Report Type</th>
                        <th>Action</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($this->post->reportdtl()->result_array() as $value):?>
                      <tr>
                        <td><?php echo $value['userId'];?></td>
                        <td><?php echo $this->post->userProfile($value['userId']);?></td>
                        <td><?php echo $value['reportContent'];?></td>
                        <td><?php echo $value['reportDate'];?></td>
                        <td><?php echo $value['reportType'];?></td>
                        <td><input type="text" hidden="true" name="btnRate" id="btnRate" value="black"> <button type="submit"  class="btn btn-primary btn-block" name='userId' id='userId' value="<?php echo $value['userId'];?>">Black Badge</button></td>
                        
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
     $('button[name="userId"]').click(function(e){
          var userId = $(this).attr("value");
          var btnRate = $("#btnRate").val();
          
            e.preventDefault();
              var dataString = 'btnRate='+ btnRate  + '&userId=' + userId ;
            $.ajax({
              type: 'post',
              url:"<?php echo base_url().'pages/badge/'?>",
              data:dataString,
              success: function (data) {
          
                 alert("successfully black badged");

              }
            });

          });


    </script>