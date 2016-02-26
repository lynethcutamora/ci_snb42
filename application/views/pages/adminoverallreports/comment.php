   <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      

        <!-- Main content -->
        <section class="content">

          <div class="row">

          <!-- ====================================================================== -->
            <div class="col-md-12">

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
             
              </div>
                </div>
            </div>
              </section>

              </div>

<script>
  
    function loadNowPlaying(){
       $("#chat").load("<?php echo base_url().'pages/printcommentadmin/'.$postId?>");
     }
                setInterval(function(){loadNowPlaying()}, 500);



</script>

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