    <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
       <script>
    
                 function loadNowPlaying(){
                     $("#post1").load("<?php echo base_url().'pages/showIdeatorPost/'.$this->session->userdata('userId'); ?>");
                    
                }
                setInterval(function(){loadNowPlaying()}, 1000);  

</script>

<div class="content-wrapper">
  <section class="content-header">

  <div class="row">
  </br>
  <form method="post">
    <div class="col-md-4">                          
      <select id="postType" name="postType" class="form-control select2" style="width: 100%;">
        <option name="postType" selected="selected">-- Select Post Type --</option>
        <option name="postType" value="idea">Post Startup Idea</option>
        <option name="postType" value="product">Post Startup Product</option>
        <!-- <option name="userType" value="competition">Post a competition</option>
        <option name="userType" value="normal">Normal Post</option> -->
      </select>
    </div>
  <div class="col-md-2">
    <button type="submit" name="btnGoPost"class="btn btn-primary btn-block btn-flat">Go</button>               
  </div>
  </form>
  </br> </br>

  <div class="col-md-9">
    <?php if($this->input->post("postType")=="idea"){ ?>
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
  <?php }elseif($this->input->post("postType")=="product"){?>
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
    <?php } ?>

    <!-- retrieved posts area -->
     <div name="post1" id="post1"></div>

      <div class="box box-widget">
        <div class="box-header with-border">
          <div class="user-block">
            <img class='img-circle' src='<?php echo base_url().'user/1.png';?>' alt='user image'>
            <span class="username">
              <a href="#"><small>Lyneth C. Cutamora</small></a>
            </span>
            <span class="description"><i class="fa fa-star" style="color:gold;"></i><small><b>&nbsp;1520</b></small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date posted:&nbsp;&nbsp;&nbsp;<small>10/25/2016</small></span>
          </div><!-- /.user-block -->
          <div class="box-tools">
            <button class="btn btn-box-tool" data-widget="edit"><i class="fa fa-edit"></i></button>
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header --> 
        <div class="box-body">
          <div class="container-fluid">
              <div class="info-box">
                <div class="row">
                  <p>
                    <span style="color:green;"><i class="fa fa-bookmark"></i>&nbsp;&nbsp;&nbsp;<small>(Startup Idea)</small></span>
                    <span class="pull-right" style="color:orange;"><i class="fa fa-money"></i>&nbsp;&nbsp;&nbsp;<small>invested</small>&nbsp;&nbsp;&nbsp;</span>
                  </p>
                </div>
                  <div class="row">

                    <div class="col-md-3">
                     <img src="<?php echo base_url().'/post_image/'.'8985568b6a3028ba2.jpg';?>" height='200px' width='200px' alt="Attachment image">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-7">
                      <h5><b><a href="#" ><?php echo strtoupper("Start & Boost");?></a></b><span class="label label-default pull-right">with BMC</span></h5>
                      <h6><small>category: &nbsp;&nbsp; Web and Mobile</small></h6>
                      <p style="text-align:justify;text-justify:inter-word;">This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea.</p>
                    </div>
                  </div><!-- /.row -->
                  <div class="col-md-1"></div>
              </div><!-- /.info-box -->

              <i><small>related links: &nbsp;&nbsp; <a href="#">https://github.com/lynethcutamora/ci_snb42</a></small></i><hr/>

              <!-- sample complete startup idea post -->

              <div class="col-md-12">
                <div class="box box-default collapsed-box">
                  <div class="box-header with-border">
                    <h3 class="box-title"><small>Business Model Canvas</small></h3>
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
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                      </tr>
                      <tr>
                        <th><small>Customer Relationships</small></th>
                        <th><small>Customer Segments</small></th>
                        <th><small>Key Resources</small></th>
                      </tr>
                      <tr>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                      </tr>
                      <tr>
                        <th><small>Channels</small></th>
                        <th><small>Cost Structure</small></th>
                        <th><small>Revenue Streams</small></th>
                      </tr>
                      <tr>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                        <td><small style="text-align:justify;text-justify:inter-word;">
                              •  Startup Companies
                              • Technology Vendors
                              • Social Media Sites
                              • Universities
                              • Investors
                            </small>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col-12 -->
          </div><!-- /.container -->
          </div><!-- /.box-body -->
          <div class="box-footer">
            <div class="container-fluid">
              <button class="btn btn-success btn-xs"><i class="fa fa-hand-o-left"></i>&nbsp;&nbsp;Poke</button>
              <span class="pull-right"><small><a href="#">5 upvotes - 2 comments</a></small></span>
            </div>
          </div>
      </div> <!-- /. box-widget -->

      <!-- sample normal idea post -->

      <div class="box box-widget">
        <div class="box-header with-border">
          <div class="user-block">
            <img class='img-circle' src='<?php echo base_url().'user/1.png';?>' alt='user image'>
            <span class="username">
              <a href="#"><small>Lyneth C. Cutamora</small></a>
            </span>
            <span class="description"><i class="fa fa-star" style="color:gold;"></i><small><b>&nbsp;1520</b></small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date posted:&nbsp;&nbsp;&nbsp;<small>10/25/2016</small></span>
          </div><!-- /.user-block -->
          <div class="box-tools">
            <button class="btn btn-box-tool" data-widget="edit"><i class="fa fa-edit"></i></button>
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header --> 
        <div class="box-body">
          <div class="container-fluid">
              <div class="info-box">
                <div class="row">
                  <p style="color:green;"><i class="fa fa-bookmark"></i>&nbsp;&nbsp;&nbsp;<small>(Startup Idea)</small></p>
                </div>
                <h5><b><a href="#" ><?php echo strtoupper("Start & Boost");?></a></b></h5>
                <h6><small>category: &nbsp;&nbsp; Web and Mobile</small></h6>
                <p style="text-align:justify;text-justify:inter-word;">This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea.</p>
                <br/>     
              </div><!-- /.info-box -->

              <i><small>related links: &nbsp;&nbsp; <a href="#">https://github.com/lynethcutamora/ci_snb42</a></small></i><hr/>
          </div><!-- /.container -->
        </div><!-- /.box-body -->
          <div class="box-footer">
            <div class="container-fluid">
              <button class="btn btn-success btn-xs"><i class="fa fa-hand-o-left"></i>&nbsp;&nbsp;Poke</button>
              <span class="pull-right"><small><a href="#">5 upvotes - 2 comments</a></small></span>
            </div>
          </div>
      </div> <!-- /. box-widget -->

      <!-- sample startup product post -->
      <div class="box box-widget">
        <div class="box-header with-border">
          <div class="user-block">
            <img class='img-circle' src='<?php echo base_url().'user/1.png';?>' alt='user image'>
            <span class="username">
              <a href="#"><small>Lyneth C. Cutamora</small></a>
            </span>
            <span class="description"><i class="fa fa-star" style="color:gold;"></i><small><b>&nbsp;1520</b></small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date posted:&nbsp;&nbsp;&nbsp;<small>10/25/2016</small></span>
          </div><!-- /.user-block -->
          <div class="box-tools">
            <button class="btn btn-box-tool" data-widget="edit"><i class="fa fa-edit"></i></button>
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header --> 
        <div class="box-body">
          <div class="container-fluid">
              <div class="info-box">
                <div class="row">
                  <p style="color:green;"><i class="fa fa-bookmark"></i>&nbsp;&nbsp;&nbsp;<small>(Startup Product)</small></p>
                </div>
                <p style="text-align:justify;text-justify:inter-word;">This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea. This is a sample description of the idea.</p>
                    
                  <!-- Attachment -->
                  <div class="attachment-block clearfix">
                    <img class="attachment-img" src="../images/blue.png" alt="attachment image">
                    <div class="attachment-pushed">
                      <h5 class="attachment-heading"><b><a href="#"><?php echo strtoupper("Start & Boost"); ?></a></b></h5>
                      
                      <div class="attachment-text">
                        <h6><small>category: &nbsp;&nbsp; Web and Mobile</small></h6>
                        <i class="fa fa-star" style="color:gold;"></i><i class="fa fa-star" style="color:gold;"></i><i class="fa fa-star" style="color:gold;"></i><i class="fa fa-star-half" style="color:gold;"></i>
                      </div><!-- /.attachment-text -->
                    </div><!-- /.attachment-pushed -->
                  </div><!-- /.attachment-block -->
              </div><!-- /.info-box -->

              <i><small>download links: &nbsp;&nbsp; <a href="#">https://github.com/lynethcutamora/ci_snb42</a></small></i><hr/>
          </div><!-- /.container -->
        </div><!-- /.box-body -->
          <div class="box-footer">
            <div class="container-fluid">
              <button class="btn btn-success btn-xs"><i class="fa fa-hand-o-left"></i>&nbsp;&nbsp;Poke</button>
              <span class="pull-right"><small><a href="#">5 upvotes - 2 comments</a></small></span>
            </div>
          </div>
      </div> <!-- /. box-widget -->

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
    </div>
  </section>
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