    <?php 
        if($this->post->checkNewInvestor()){
                header('Location:'.base_url().'pages/investormoreinfo');
              }
  ?>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">
        <h3><i class="fa fa-group" style="color:gray;"></i>&nbsp;&nbsp;Create Group</h3><hr/>
          <div class="row">
            <div class="col-md-8">
              <form action="createGroup" method="post">
                <div class="form-group">
                  <?php echo form_error('inputGroupName'); ?>
                  <?php echo form_error('inputDescription'); ?>
                  <label for="inputGroupName" class="col-sm-2 control-label">Group Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="inputGroupName" id="inputGroupName" placeholder="Group Name"  value="">
                      <br/>
                    </div>
                </div>
                <div class="form-group">
                  <label for="inputDescription" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="inputDescription" id="inputDescription" placeholder="Short Group Description"  value=""></textarea>
                    <br/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="create" value="creategroup">Create</button>
                  </div>
                </div>
              </form>
            </div><!--/.col-8-->
          </div><!--/.row-->
        </div><!--/.container-->
      </div><!--/.content wrapper-->