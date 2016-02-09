    <div class="content-header">
    <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
 
 <section class="content-header">
 <div class="row"> 
            <div class="col-md-9">
            <div name="newsfeed" id="newsfeed"></div>

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
</div>

<script>
     function investorPost(){
                 
                  $("#newsfeed").load("<?php echo base_url().'pages/newShowInvestorPost/7/'.$postId; ?>"); }
                    setInterval(function(){investorPost()}, 1000);

      

</script>
