        <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Post
            <!-- <small>"Start with an idea and boost it here."</small> -->
          </h1>
          <!-- <ol class="breadcrumb">
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          </ol> -->
        </section>

        <!-- Main content -->
        <section class="content">
        <!-- Callouts -->
        <?php foreach($postDetail as $row): ?>
        <div class="col-md-8">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-edit"></i>
              <h3 class="box-title"><?php echo strtoupper($row['postTitle']); ?></h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                  <!-- form start -->
                 <form method="post" action="" id="upload_file" enctype="multipart/form-data" class="form-horizontal">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="ideatitle" class="col-sm-2 control-label">Title*</label>
                        <div class="col-sm-10">
                        <?php echo form_error('ideatitle'); ?>
                          <input type="hidden" class="form-control" name="postid" value="<?php echo $row['postId']; ?>"/>
                          <input type="text" class="form-control" name="ideatitle" id="ideatitle" placeholder="Title" value="<?php echo strtoupper($row['postTitle']); ?>"/>
                        </div>
                      </div>
                     <div class="form-group">
                        <label for="ideatitle" class="col-sm-2 control-label">Category*</label>
                        <div class="col-sm-4">
                          <input type="hidden" class="form-control" name="extid" value="<?php echo $this->post->getCategoryId($row['postId']); ?>"/>
                          <select name="categorytxt" id="categorytxt" class="form-control" onChange="changeCategory(this)">
                            <option value="1">-- select category --</option>
                            <option value="androidapp"<?php if($this->post->getPostCategory($row['postId'])=="androidapp"){echo "selected";} ?>>android application</option>
                            <option value="website" <?php if($this->post->getPostCategory($row['postId'])=="website"){echo "selected";} ?>>web site</option>
                            <option value="desktopapp" <?php if($this->post->getPostCategory($row['postId'])=="desktopapp"){echo "selected";} ?>>desktop application</option>
                          </select>
                        </div>
                        <label for="ideatitle" name="optional1" id="optional1" style="display:block" class="col-sm-2 control-label">/ others:</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="optional" id="optional" placeholder="Specify category" value="<?php echo $this->post->getPostCategory($row['postId']); ?>" style="display:block" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputDescription"  class="col-sm-2 control-label">Description*</label>
                        <div class="col-sm-10">
                         <?php echo form_error('inputDescription'); ?>
                          <textarea class="form-control"name="inputDescription" id="inputDescription" placeholder="Description" ><?php echo $row['postContent']; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputLinks" class="col-sm-2 control-label">Links</label>  
                        <div class="col-sm-10">
                        <?php echo form_error('relatedlinks'); ?>
                          <input type="hidden" class="form-control" name="extid1" value="<?php echo $this->post->getRelatedLinksId($row['postId']); ?>"/>
                          <input type="text" class="form-control" name="relatedlinks" id="relatedlinks" placeholder="Related Links (Separated by comma)" <?php echo "value=\"".$this->post->getLinkEdit($row['postId'])."\"" ?> />
                        </div>
                      </div>

                    <?php if($this->post->checkWithBmc($row['postId'])==true){

                    foreach($this->post->bmcquery($row['postId'])->result_array() as $row1): ?>
                             <div class="col-md-12">
                                  <div class="box box-default ">
                                    <div class="box-header with-border">
                                      <h3 class="box-title"><small>Business Model Canvas</small></h3>
                                      <div class="box-tools pull-right">
                                      
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
                                          <td><textarea class="form-control"name="inputKeyPartners" id="inputKeyPartners" <?php  if($row1['key_partners']==null)echo "placeholder=\"Who are out Key Partners?\" >"; else { echo ">"; echo $this->post->bmcexplode($row1['key_partners']); }?></textarea></td>
                                          <td><textarea class="form-control"name="inputKeyActivities" id="inputKeyActivities" <?php  if($row1['key_activities']==null)echo "placeholder=\"What Key activities do our Value Propositions requires?\" >"; else { echo ">"; echo $this->post->bmcexplode($row1['key_activities']); }?></textarea></td>
                                          <td><textarea class="form-control"name="inputValuePropositions" id="inputValuePropositions" <?php  if($row1['value_proposition']==null)echo "placeholder=\"What value do we deliver to the customer?\" >"; else { echo ">"; echo $this->post->bmcexplode($row1['value_proposition']); }?></textarea></td>
                                        </tr>
                                        <tr>
                                          <th><small>Customer Relationships</small></th>
                                          <th><small>Customer Segments</small></th>
                                          <th><small>Key Resources</small></th>
                                        </tr>
                                        <tr>
                                          <td><textarea class="form-control"name="inputCustomerRelationship" id="inputCustomerRelationship" <?php  if($row1['customer_relationships']==null)echo "placeholder=\"What type of relationship does each of our Customer Segments expect us to establish and maintain with them?\" >"; else { echo ">"; echo $this->post->bmcexplode($row1['customer_relationships']); }?></textarea></td>
                                          <td><textarea class="form-control"name="inputCusomerSegments" id="inputCusomerSegments" <?php  if($row1['customer_segments']==null)echo "placeholder=\"From whom are we creating value?\" >"; else { echo ">"; $this->post->bmcexplode($row1['customer_segments']); }?></textarea></td>
                                          <td><textarea class="form-control"name="inputKeyResources" id="inputKeyResources" <?php  if($row1['key_resources']==null)echo "placeholder=\"What Key Resources do our Value Propositions require?\" >"; else { echo ">"; echo $this->post->bmcexplode($row1['key_resources']); }?></textarea></td>
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
                                        <tr>
                                          <td><textarea class="form-control"name="inputChannels" id="inputChannels" <?php  if($row1['channels']==null)echo "placeholder=\"What type of relationship does each of our Customer Segments expect us to establish and maintain with them?\" >"; else { echo ">"; echo $this->post->bmcexplode($row1['channels']); }?></textarea></td>
                                          <td><textarea class="form-control"name="inputCostStructure" id="inputCostStructure" <?php  if($row1['cost_structure']==null)echo "placeholder=\"From whom are we creating value?\" >"; else { echo ">"; $this->post->bmcexplode($row1['cost_structure']); }?></textarea></td>
                                          <td><textarea class="form-control"name="inputRevenueStreams" id="inputRevenueStreams" <?php  if($row1['revenue_streams']==null)echo "placeholder=\"What Key Resources do our Value Propositions require?\" >"; else { echo ">"; echo $this->post->bmcexplode($row1['revenue_streams']); }?></textarea></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div><!-- /.box-body -->
                                </div><!-- /.box -->
                              </div><!-- /.col-12 -->
                      <?php endforeach; ?>
                    <?php }else{ ?>
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
                  <?php } ?>

                    </div><!-- /.box-body -->
                    <div class="box-footer">
                      <table>
                        <tr>
                          <td>
                            <div class="col-md-2">
                              <input type="hidden" class="form-control" name="extid2" value="<?php echo $this->post->getPostImgId($row['postId']); ?>"/>
                              <img src="<?php echo base_url().'/post_image/'.$this->post->getpostImg($row['postId']).''; ?>" height="100px" width="100px" alt="Attachment image">
                            </div>
                          </td>
                          <td>
                            <small>Change Image</small>
                            <input type="file" name="pic" id="pic" size="20" />
                            <div id="files"></div>
                          </td>
                        </tr>
                      </table>
                      <button class="btn btn-info pull-right" type="submit" id="updateidea" name="updateidea">Update Idea</button>
                      <button class="btn btn-info pull-right" type="submit" id="versionidea" name="versionidea">New Version of Idea</button>
                    </div>
                  </form>
            </div><!-- /.box-body -->
          </div><!-- /.box default-->
        </div><!-- /. col-md-8-->
        <?php endforeach; ?>
        </section><!-- /.content -->
  </div><!-- /.container-->
  </div><!-- /.content-wrapper -->

<script>
 function changeCategory(obj){
   var x = document.getElementById("categorytxt").value;

   if(x=='1'){
    document.getElementById("optional").style.display="block";
    document.getElementById("optional1").style.display="block";
   }else{
    document.getElementById("optional").style.display="none";
    document.getElementById("optional1").style.display="none";
  }
} 
</script>
<script>
  $('button[name="updateidea"]').click(function(e){
    var form = new FormData(document.getElementById('upload_file'));
         
    e.preventDefault();
            
    $.ajax({
      type: 'post',
      url:"<?php echo base_url().'pages/updateIdea'?>",
        data:form,
        mimeType:"multipart/form-data",
        cache: false,
        contentType: false, //must, tell jQuery not to process the data
        processData: false, //must, tell jQuery not to set contentType
        success: function (data) {
          $("#ideatitle").val('') ;
          $("#inputDescription").val('') ;
          $("#relatedlinks").val('') ;
          $("#pic").val('') ;
          $("#optional").val('') ;

          alert("successfully updated");
      }
    });
  });
  
  $('button[name="versionidea"]').click(function(e){
    var form = new FormData(document.getElementById('upload_file'));
         
    e.preventDefault();
            
    $.ajax({
      type: 'post',
      url:"<?php echo base_url().'pages/versionIdea'?>",
        data:form,
        mimeType:"multipart/form-data",
        cache: false,
        contentType: false, //must, tell jQuery not to process the data
        processData: false, //must, tell jQuery not to set contentType
        success: function (data) {
          $("#ideatitle").val('') ;
          $("#inputDescription").val('') ;
          $("#relatedlinks").val('') ;
          $("#pic").val('') ;
          $("#optional").val('') ;

          alert("successfully updated");
      }
    });
  });

</script>