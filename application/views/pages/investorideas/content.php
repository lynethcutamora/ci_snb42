    <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
   
   <div class="content-wrapper">
 <section class="content-header">

 <div class="row"> 
        <div class="col-md-4">        
        <form action="<?php echo base_url().'pages/searchCategory/';?>" method="post">                 
              <select name="categorytxt" id="categorytxt" class="form-control" onChange="changeCategory(this)">
                            <option value="1">-- select category --</option>
                        
                            <option value="androidapp">Android Application</option>
                            <option value="website">Web site</option>
                            <option value="desktopapp">Desktop Application</option>
                            <option value="agricultural">Agricultural</option>
                            <option value="industrial">Industrial</option>
                            <option value="travel&transportation">Travel & Transportation</option>
                            <option value="reservation">Reservation</option>
                            <option value="health&medicine">Health & Medicine</option>
                            <option value="food&dining">Food & Dining</option>
                            <option value="environmental">Environmental</option>
                            <option value="automotive">Automotive</option>
                            <option value="businesssupport&supplies">Business Support & Supplies</option>
                            <option value="education">Education</option>
                            <option value="realstate">Real State</option>
                            <option value="merchants">Merchants (Retail)</option>
                          </select>
            </div> 
            <div class="col-md-3">                          
                 <input type="text" class="form-control" name="category" id="category" placeholder="" style="display:block" value="<?php echo set_value('ideatitle'); ?>"/>
            </div> 
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Go</button>               
             </div>
             </form>
            <div class="col-md-3">   

            </div>
              <div class="col-md-12">   
              <br>
            </div>
            
            <div class="col-md-9">
                    <?php if($this->post->extCategory($key)->num_rows()==0){
                echo "<h3>No Records Found..</h3>";
              }?>
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
 function changeCategory(obj){
   var x = document.getElementById("categorytxt").value;

   if(x=='1'){
    document.getElementById("category").style.display="block";
   }else{
  document.getElementById("category").style.display="none";
  document.getElementById("category").value="";
}
  }

</script>
<script>
     function investorPost(){
                 
                  $("#newsfeed").load("<?php echo base_url().'pages/newShowInvestorPost/9/'.$key; ?>"); }
                    setInterval(function(){investorPost()}, 1000);


</script>
