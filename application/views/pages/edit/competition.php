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
        <div class="col-md-8">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-edit"></i>
              <h3 class="box-title">Post Title</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                  <!-- form start -->
                 <form method="post" action="" id="upload_file" enctype="multipart/form-data" class="form-horizontal">
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
                          <button class="btn btn-info pull-right" type="submit" id="competition" name="competition">Update Competition Details</button>
                    </div>
                  </form>
            </div>
          </div><!-- /.box -->
        </div>
           
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->