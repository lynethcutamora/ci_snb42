   <div class="content-wrapper">
 <section class="content-header">
 <div class="row">
          <h2>
            &nbsp;&nbsp;&nbsp;<i class="fa fa-feed"></i>&nbsp;&nbsp;Venture Capitalist Post  
          </h2>
          </br>
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

</div><!-- /.content-wrapper -->
<script>
     function investorPost(){
                 
                  $("#newsfeed").load("<?php echo base_url().'pages/newShowInvestorPost/3'; ?>"); }
                  setInterval(function(){investorPost()}, 1000);

</script>