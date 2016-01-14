    <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
       <script>
    
                 function loadNowPlaying(){
                     $("#post1").load("<?php echo base_url().'pages/showInvestorpost/'.$this->session->userdata('userId'); ?>");
                }
                setInterval(function(){loadNowPlaying()}, 1000);  

</script>

<div class="content-wrapper">
  <br>
 <form method="post" name="form" id="form">
  <div class="col-md-12">
    
            <div class="box">
              <div class="box-header with-border">
               
                <p>Post</p>
              </div><!-- /.box-header -->
                  <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                    <div class="col-sm-12">
                       <?php echo form_error('inputDescription'); ?>
                       <textarea class="form-control"name="inputDescription" id="inputDescription" placeholder="" value="<?php echo set_value('inputDescription'); ?>"></textarea>
                    </div>
                </div> 
              </div><!-- /.box-body -->
              <div class="box-footer">
                 <input class="btn btn-info pull-right" type="submit" value="Post" id="submit" name="button">
               </div><!-- /.box-footer -->
        
     
              </div>
         
                   
         
        </div>
         
  
    </form>
     <div name="post1" id="post1"></div>
</div>


<script>
       $(function () {
     
        $('#form').on('submit', function (e) {
      var inputDescription = $("#inputDescription").val();
       var dataString = 'inputDescription='+ inputDescription ;
          e.preventDefault();

          $.ajax({
            type: 'post',
            url: '<?php echo base_url()."pages/postInvestor"; ?>',
            data:dataString,
            success: function () {
                $('#inputDescription').val('');
            }
          });

        });

      });
</script>
