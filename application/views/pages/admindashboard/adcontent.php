
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      

        <!-- Main content -->
        <section class="content">

          <div class="row">
          <!-- ====================================================================== -->
            <div class="col-md-12">
            <div class="col-md-8">
                <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Active ADs</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                   
                        <th>Rendering engine</th>
                    </thead>
                      <tr>
                          <td>asdasdsd</td>
                      </tr>
                      <tr>
                          <td>asdasdsd</td>
                      </tr>
                      <tr>
                          <td>asdasdsd</td>
                      </tr>
                      <tr>
                          <td>asdasdsd</td>
                      </tr>
                      <tr>
                          <td>asdasdsd</td>
                      </tr>
                      <tr>
                          <td>asdasdsd</td>
                      </tr>
                      <tr>
                          <td>asdasdsd</td>
                      </tr>
                      <tr>
                          <td>asdasdsd</td>
                      </tr>
                      <tr>
                          <td>asdasdsd</td>
                      </tr>
                      <tr>
                          <td>asdasdsd</td>
                      </tr>
                      <tr>
                          <td>asdasdsd</td>
                      </tr>
                      <tr>
                          <td>asdasdsd</td>
                      </tr>

                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
                    <div class="col-md-4">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Advertisement</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ads Email Address:</label>
                      <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Ads Name:</label>
                      <input class="form-control" id="exampleInputEmail1" placeholder="Name" type="text">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Ads link:</label>
                      <input class="form-control" id="exampleInputEmail1" placeholder="Link" type="text">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Duration:</label>
                    
                      <select class="form-control">
                          <option>1Week</option>
                          <option>1Month</option>
                          <option>2Months</option>
                          <option>3Months</option>
                          <option>4Months</option>
                          <option>5Months</option>
                          <option>1Year</option>
                          <option></option>

                      </select> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Ads Banner</label>
                      <input id="exampleInputFile" type="file">
                    </div>
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div>          
          
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
          "info": false,
          "autoWidth": false
        });
      });
    </script>
    <script type="text/javascript"></script>