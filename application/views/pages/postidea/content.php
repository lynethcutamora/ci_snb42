              <!-- Horizontal Form -->
                <div class="row">
          
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <!-- <?php if($userId==$this->session->userdata('userId')){?> -->
                <div class="box">
                  <div class="box-header with-border">
                    <p>Post New Idea</p>
                  </div><!-- /.box-header -->
                  <!-- form start -->
                 <!-- <?php echo form_open_multipart('../pages/postIdea',"class=form-horizontal"); ?> -->
                    <div class="box-body">
                      <div class="form-group">
                        <label for="ideatitle" class="col-sm-2 control-label">Title*</label>
                        <div class="col-sm-10">
                        <!-- <?php echo form_error('ideatitle'); ?> -->
                          <input type="text" class="form-control" name="ideatitle" id="ideatitle" placeholder="Title" value="<?php echo set_value('ideatitle'); ?>"/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputDescription" class="col-sm-2 control-label">Description*</label>
                        <div class="col-sm-10">
                         <!-- <?php echo form_error('inputDescription'); ?> -->
                          <textarea class="form-control"name="inputDescription" id="inputDescription" placeholder="Description" value="<?php echo set_value('inputDescription'); ?>"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputLinks" class="col-sm-2 control-label">Links</label>
                        <div class="col-sm-10">
                        <!-- <?php echo form_error('relatedlinks'); ?> -->
                          <input type="text" class="form-control" name="relatedlinks" id="relatedlinks" placeholder="Related Links (Separated by comma)" value="<?php echo set_value('relatedlinks'); ?>"/>
                        </div>
                      </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                     
                         <!-- <?php echo form_upload('pic'); ?> -->
                          <input class="btn btn-info pull-right" type="submit" value="Post Idea" id="submit" name="button">
                  </form>
                    
                    </div><!-- /.box-footer -->
                 
                    </div>
               
            
              <?php }?>
                </div>
              </div>