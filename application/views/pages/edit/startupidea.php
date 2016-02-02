      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
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
                          <input type="text" class="form-control" name="ideatitle" id="ideatitle" placeholder="Title" value="<?php echo strtoupper($row['postTitle']); ?>"/>
                        </div>
                      </div>
                     <div class="form-group">
                        <label for="ideatitle" class="col-sm-2 control-label">Category*</label>
                        <div class="col-sm-4">
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
                          <input type="text" class="form-control"name="inputDescription" id="inputDescription" placeholder="Description" value="<?php echo $row['postContent']; ?>"></input>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputLinks" class="col-sm-2 control-label">Links</label>  
                        <div class="col-sm-10">
                        <?php echo form_error('relatedlinks'); ?>
                          <input type="text" class="form-control" name="relatedlinks" id="relatedlinks" placeholder="Related Links (Separated by comma)" value="<?php echo $this->post->getRelatedLinks($row['postId']); ?>"/>
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
                     
                       <input type="file" name="pic" id="pic" size="20" />
                         <div id="files"></div>
                          <button class="btn btn-info pull-right" type="submit" id="postnewidea" name="postnewidea">Update Idea</button>
                    </div>
                  </form>
            </div>
          </div><!-- /.box -->
          <?php endforeach; ?>
        </div>
           
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->