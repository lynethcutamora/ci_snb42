    <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
<div class="content-wrapper">


 <section class="content-header">

 <div class="row">
   <form method="post" action="#">
  <div class="col-md-4">                          
    <select id="postType" name="postType" class="form-control select2" style="width: 100%;">
      <option name="postType" selected="selected">-- Select Post Type --</option>
      <option name="postType" value="idea">Post New Idea</option>
      <option name="postType" value="product">Post Startup Product</option>
      <option name="postType" value="competition">Post a competition</option>
      <option name="postType" value="normal">Normal Post</option>
    </select>
  </div>


  <div class="col-md-2">
    <button type="submit" class="btn btn-primary btn-block btn-flat">Go</button>               
  </div>
    </form>
  </br> </br>
    <div class="col-md-9"> 
      <?php if($this->input->post("postType")=="product"){ ?>
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
                        <label for="ideatitle" class="col-sm-2 control-label">Category*</label>
                        <div class="col-sm-4">
                          <select name="categorytxt" class="form-control">
                            <option value="selected">-- select category --</option>
                            <option value="androidapp">android application</option>
                            <option value="website">web site</option>
                            <option value="desktopapp">desktop application</option>
                          </select>
                        </div>
                        <label for="ideatitle" class="col-sm-2 control-label">/ others:</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ideatitle" id="ideatitle" placeholder="Specify category" value="<?php echo set_value('ideatitle'); ?>"/>
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
          <?php }else if($this->input->post("postType")=="normal"){?>
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
                      <div class="form-group">
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
          <?php }else if($this->input->post("postType")=="competition"){?>
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
          <?php }else if($this->input->post("postType")=="idea"){?>
             <div class="box">
                  <div class="box-header with-border">
                    <span class="pull-left"><p>Post New Idea</p></span>
                    <span class="pull-right"><button type="submit" class="btn btn-primary btn-xs" id="btnGenerate">Generate Title</button></span>
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
                        <label for="ideatitle" class="col-sm-2 control-label">Category*</label>
                        <div class="col-sm-4">
                          <select name="categorytxt" class="form-control">
                            <option value="selected">-- select category --</option>
                            <option value="androidapp">android application</option>
                            <option value="website">web site</option>
                            <option value="desktopapp">desktop application</option>
                          </select>
                        </div>
                        <label for="ideatitle" class="col-sm-2 control-label">/ others:</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="ideatitle" id="ideatitle" placeholder="Specify category" value="<?php echo set_value('ideatitle'); ?>"/>
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
                      <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                          <div class="box-header with-border">
                            <h3 class="box-title"><small>Add Business Model Canvas</small></h3>
                            <div class="box-tools pull-right">
                              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                            </div><!-- /.box-tools -->
                          </div><!-- /.box-header -->
                          <div class="box-body">
                              <table class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th><small>Key Partners</small></th>
                                    <th><small>Key Activities</small></th>
                                    <th><small>Values Propositions</small></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td><textarea class="form-control"name="inputKeyPartners" id="inputKeyPartners" placeholder="Who are out Key Partners?"></textarea></td>
                                      <td><textarea class="form-control"name="inputKeyActivities" id="inputKeyActivities" placeholder="What Key activities do our Value Propositions requires?"></textarea></td>
                                      <td><textarea class="form-control"name="inputValuePropositions" id="inputValuePropositions" placeholder="What value do we deliver to the customer?"></textarea></td>
                                    </tr>
                                  <tr>
                                    <th><small>Customer Relationships</small></th>
                                    <th><small>Customer Segments</small></th>
                                    <th><small>Key Resources</small></th>
                                  </tr>
                                    <tr>
                                      <td><textarea class="form-control"name="inputCustomerRelationship" id="inputCustomerRelationship" placeholder="What type of relationship does each of our Customer Segments expect us to establish and maintain with them?"></textarea></td>
                                      <td><textarea class="form-control"name="inputCusomerSegments" id="inputCusomerSegments" placeholder="From whom are we creating value?"></textarea></td>
                                      <td><textarea class="form-control"name="inputKeyResources" id="inputKeyResources" placeholder="What Key Resources do our Value Propositions require?"></textarea></td>
                                    </tr>
                                  <tr>
                                    <th><small>Channels</small></th>
                                    <th><small>Cost Structure</small></th>
                                    <th><small>Revenue Streams</small></th>
                                  </tr>
                                    <tr>
                                      <td><textarea class="form-control"name="inputChannels" id="inputChannels" placeholder="Through what channel do our Customer Segments want to be reached?"></textarea></td>
                                      <td><textarea class="form-control"name="inputCostStructure" id="inputCostStructure" placeholder="What are the most important costs inherent in our business model?"></textarea></td>
                                      <td><textarea class="form-control"name="inputRevenueStreams" id="inputRevenueStreams" placeholder="For what value are our customers willing to pay?"></textarea></td>
                                    </tr>
                                </tbody>
                              </table>
                          </div><!-- /.box-body -->
                        </div><!-- /.box -->
                      </div><!-- /.col -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                     
                         <?php echo form_upload('pic'); ?>
                          <input class="btn btn-info pull-right" type="submit" value="Post Idea" id="submit" name="button">
                    </div>
                  </form>
    </div><!-- /.box-->

          <?php } ?>

             <div class="box">
                  <div class="box-header with-border">

                      <div class='user-block'>
                      
                         <img class="img-circle" src="" alt="user image">
                  
                      <span class="username"><a href=""></a><i class="fa fa-star" style="color:#ffd700;"></i><b></b></span>
                
                        
                      </div><!-- /.user-block -->
                     
                  </div><!-- /.box-header -->
                  <div class="box-body">
                      
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                  </div>
                  
             </div><!-- /.box-->
  </div><!-- /.col-9-->
    


        
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