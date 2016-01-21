    <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
       <script>
    
                 function loadNowPlaying(){
                     $("#post1").load("<?php echo base_url().'pages/showIdeatorPost/'.$this->session->userdata('userId'); ?>");
                    
                }
                setInterval(function(){loadNowPlaying()}, 1000);  

</script>

<div class="content-wrapper">
  </br>
  <div class="col-md-4">                          
    <select id="userType" name="userType" class="form-control select2" style="width: 100%;">
      <option name="userType" selected="selected">-- Select Post Type --</option>
      <option name="userType" value="idea">Post Startup Idea</option>
      <option name="userType" value="product">Post Startup Product</option>
      <option name="userType" value="competition">Post a competition</option>
      <option name="userType" value="normal">Normal Post</option>
    </select>
  </div>
  <div class="col-md-2">
    <button type="submit" class="btn btn-primary btn-block btn-flat">Go</button>               
  </div>
  </br> </br>
  <div class="col-md-9"> 
    <div class="box">
                  <div class="box-header with-border">
                    <span class="pull-left"><p>Post New Idea</p></span>
                    <span class="pull-right"><button type="submit" class="btn btn-primary" id="btnGenerate">Generate Title</button></span>
                  </div><!-- /.box-header -->
                  <!-- form start -->
                 <?php echo form_open_multipart('../pages/postIdea',"class=form-horizontal"); ?>
                    <div class="box-body">
                      <div class="form-group">
                        <label for="ideatitle" class="col-sm-2 control-label">Title*</label>
                        <div class="col-sm-10">
                        <?php echo form_error('ideatitle'); ?>
                          <input type="text" class="form-control" name="ideatitle" id="ideatitle" placeholder="Title" value="<?php echo set_value('ideatitle'); ?>"/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputDescription"  class="col-sm-2 control-label">Description*</label>
                        <div class="col-sm-10">
                         <?php echo form_error('inputDescription'); ?>
                          <textarea class="form-control"name="inputDescription" id="inputDescription" placeholder="Description" value="<?php echo set_value('inputDescription'); ?>"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputLinks" class="col-sm-2 control-label">Links</label>
                        <div class="col-sm-10">
                        <?php echo form_error('relatedlinks'); ?>
                          <input type="text" class="form-control" name="relatedlinks" id="relatedlinks" placeholder="Related Links (Separated by comma)" value="<?php echo set_value('relatedlinks'); ?>"/>
                        </div>
                      </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                     
                         <?php echo form_upload('pic'); ?>
                          <input class="btn btn-info pull-right" type="submit" value="Post Idea" id="submit" name="button">
                    </div>
                  </form>
    </div><!-- /.box-->
  </div><!-- /.col-9-->

  <!-- adds area -->
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

  <div class="col-md-9"> 
    <div class="box">
                  <div class="box-header with-border">
                    <span class="pull-left"><p>Post Startup Product</p></span>
                  </div><!-- /.box-header -->
                  <!-- form start -->
                 <?php echo form_open_multipart('../pages/postIdea',"class=form-horizontal"); ?>
                    <div class="box-body">
                      <div class="form-group">
                        <label for="producttitle" class="col-sm-2 control-label">Product Name*</label>
                        <div class="col-sm-10">
                        <?php echo form_error('ideatitle'); ?>
                          <input type="text" class="form-control" name="producttitle" id="producttitle" placeholder="Product Title" value="<?php echo set_value('ideatitle'); ?>"/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputDescription"  class="col-sm-2 control-label">Description*</label>
                        <div class="col-sm-10">
                         <?php echo form_error('inputDescription'); ?>
                          <textarea class="form-control"name="inputDescription" id="inputDescription" placeholder="Description" value="<?php echo set_value('inputDescription'); ?>"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="downloadlink" class="col-sm-2 control-label">Links</label>
                        <div class="col-sm-10">
                        <?php echo form_error('relatedlinks'); ?>
                          <input type="text" class="form-control" name="downloadlink" id="downloadlink" placeholder="Download Link" value="<?php echo set_value('relatedlinks'); ?>"/>
                        </div>
                      </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                          <small>Upload Product Branding (logo)</small>
                         <?php echo form_upload('pic'); ?>
                          <input class="btn btn-info pull-right" type="submit" value="Post Product" id="submit" name="button">
                    </div>
                  </form>
    </div><!-- /.box-->
  </div><!-- /.col-9-->

  <div class="col-md-9"> 
    <div class="box">
                  <div class="box-header with-border">
                    <span class="pull-left"><p>Normal Post</p></span>
                  </div><!-- /.box-header -->
                  <!-- form start -->
                 <?php echo form_open_multipart('../pages/postIdea',"class=form-horizontal"); ?>
                    <div class="box-body">
                      <div class="form-group">
                        <label for="inputDescription"  class="col-sm-2 control-label">Description*</label>
                        <div class="col-sm-10">
                         <?php echo form_error('inputDescription'); ?>
                          <textarea class="form-control"name="inputDescription" id="inputDescription" placeholder="What do you want to announce?" value="<?php echo set_value('inputDescription'); ?>"></textarea>
                        </div>
                      </div>
                      <<div class="form-group">
                        <label for="area" class="col-sm-2 control-label">Areas*</label>
                        <div class="col-sm-10">
                        <?php echo form_error('ideatitle'); ?>
                          <input type="text" class="form-control" name="area" id="area" placeholder="Enter specific area (i.e. mobile, medical) separated by comma (,)" value="<?php echo set_value('ideatitle'); ?>"/>
                        </div>
                      </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                          <input class="btn btn-info pull-right" type="submit" value="Post" id="submit" name="button">
                    </div>
                  </form>
    </div><!-- /.box-->
  </div><!-- /.col-9-->

  <div class="col-md-9"> 
    <div class="box">
                  <div class="box-header with-border">
                    <span class="pull-left"><p>Post Competition</p></span>
                  </div><!-- /.box-header -->
                  <!-- form start -->
                 <?php echo form_open_multipart('../pages/postIdea',"class=form-horizontal"); ?>
                    <div class="box-body">
                      <div class="form-group">
                        <label for="inputDescription"  class="col-sm-2 control-label">Description*</label>
                        <div class="col-sm-10">
                         <?php echo form_error('inputDescription'); ?>
                          <textarea class="form-control"name="inputDescription" id="inputDescription" placeholder="Competition Description" value="<?php echo set_value('inputDescription'); ?>"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="area" class="col-sm-2 control-label">Areas*</label>
                        <div class="col-sm-10">
                        <?php echo form_error('ideatitle'); ?>
                          <input type="text" class="form-control" name="area" id="area" placeholder="Enter specific area (i.e. mobile, medical) separated by comma (,)" value="<?php echo set_value('ideatitle'); ?>"/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="competitionnote" class="col-sm-2 control-label">Notes</label>
                        <div class="col-sm-10">
                        <?php echo form_error('relatedlinks'); ?>
                          <input type="text" class="form-control" name="competitionnote" id="competitionnote" placeholder="Enter competition notes (i.e prizes) etc." value="<?php echo set_value('relatedlinks'); ?>"/>
                        </div>
                      </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                          <input class="btn btn-info pull-right" type="submit" value="Start the Competition" id="submit" name="button">
                    </div>
                  </form>
    </div><!-- /.box-->
  </div><!-- /.col-9-->


    <!-- retrieved posts area -->
     <div name="post1" id="post1"></div>
</div><!-- /.container-->

<script>
       $(function () {
        $('#form').on('submit', function (e) {
         var inputDescription = $("#ideatitle").val();
         var inputDescription = $("#inputDescription").val();
         var inputDescription = $("#relatedlinks").val();
         var dataString = 'ideatitle='+ideatitle+'inputDescription='+ inputDescription+'relatedlinks='+relatedlinks;
            e.preventDefault();

          $.ajax({
            type: 'post',
            url: '<?php echo base_url()."pages/postIdea"; ?>',
            data:dataString,
            success: function () {
                $('#ideatitle').val('');
                $('#inputDescription').val('');
                $('#relatedlinks').val('');
            }
          });

        });
      });
</script>
<script>
                $(document).ready(function() {
                  $("#btnGenerate").click(function(){
                    var result1 = ["integrated","parallel","virtual","interactive","responsive","synchronized","balanced","virtual","meta-level","optimized","active","parameterized","conceptual","scalable","dynamic","high-level","collaborative","reliable","open","coordinated"][Math.floor(Math.random() * 21)]
                    var result2 = [ "mobility","functional","programmable"  ,"distributed","logical" ,"digital" ,"concurrent" ,"knowledge-based ","multimedia" ,"binary","object-oriented","secure" ,"high-speed ",  "real-time","functional" ,"parallelizing", "watermarking"  ,"proxy","cloud-based","big data","bioinformatic"][Math.floor(Math.random() * 21)]
                    var result3 = [ "network","preprocessor","compiler","system","interface","protocol","architecture","database","algorithm","toolkit","display","technology","solution","language","agent","theorem prover","work cluster","cache","network","data center","hypervisor"][Math.floor(Math.random() * 21)]
                    var result4 = ["integrated","parallel","virtual","interactive","responsive","synchronized","balanced","virtual","meta-level","optimized","active","parameterized","conceptual","scalable","dynamic","high-level","collaborative","reliable","open","coordinated"][Math.floor(Math.random() * 21)]
                    var result5= [ "mobility","functional","programmable"  ,"distributed","logical" ,"digital" ,"concurrent" ,"knowledge-based ","multimedia" ,"binary","object-oriented","secure" ,"high-speed ",  "real-time","functional" ,"parallelizing", "watermarking"  ,"proxy","cloud-based","big data","bioinformatic"][Math.floor(Math.random() * 21)]
                    var result6= [ "network","preprocessor","compiler","system","interface","protocol","architecture","database","algorithm","toolkit","display","technology","solution","language","agent","theorem prover","work cluster","cache","network","data center","hypervisor"][Math.floor(Math.random() * 21)]
                    var sen1 = [ "for","related to","derived from","applied to","embedded in"][Math.floor(Math.random() *5)]
                    var sentence = [result1+" "+result2+" "+result3,result1+" "+result2+" "+result3+" "+sen1+" "+result4+" "+result5+" "+result6][Math.floor(Math.random() * 2)]

                    var vowels = ['A', 'E', 'I', 'O', 'U','a','e','i','o','u'];  
                   
                    if (jQuery.inArray(sentence.substring(0,1),vowels)!=-1) {  
                      var a = 'An';  
                    } else {  
                      var a = 'A';  
                    }  
                    
                        // $("#ideatitle").html(a+" "+sentence);
                        document.getElementById("ideatitle").value=a+" "+sentence;
                  }); 
              });
           </script>