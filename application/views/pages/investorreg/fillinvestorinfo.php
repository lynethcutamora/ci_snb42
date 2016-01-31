<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">
        <h3><i class="fa fa-user" style="color:gray;"></i>&nbsp;&nbsp;My Account Information</h3><hr/>
          <div class="row">
            <div class="col-md-8">
            <i>We ask you to outline a fre details about yourself, in order for us to approve your membership. These details will also be sent to any entrepreneurs that you wish to contact so that they know who you are. This helps facilitate contacts between investors and entrepreneurs by creating trust. This information will be shared with no other sources. please outline (in 1000 characters or less) details such as:</i>
          
              <form action="createGroup" method="post">
              <hr/>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Occupational Background</label>
                    <div class="col-sm-9">
                      <textarea class="form-control"name="occupationalbg" id="occupationalbg" placeholder="Input Occupational background/Relevant Experience" value="<?php echo set_value('occupationalbg'); ?>"></textarea>
                      <br/>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Investment History</label>
                    <div class="col-sm-9">
                      <textarea class="form-control"name="investmenthistory" id="investmenthistory" placeholder="Input Investent History if any" value="<?php echo set_value('investmenthistory'); ?>"></textarea>
                      <br/>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Current Investment</label>
                    <div class="col-sm-9">
                      <textarea class="form-control"name="currentinvestment" id="currentinvestment" placeholder="Input Current Investment if any" value="<?php echo set_value('currentinvestment'); ?>"></textarea>
                      <br/>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Role You are looking for</label>
                    <div class="col-sm-7">
                      <select name="typeofinvestor" class="form-control">
                        <option value="selected" >-- select role --</option>
                        <option value="active" >Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                  <label for="inputDescription" class="col-sm-4 control-label"><br/>Type of Investor</label>
                  <div class="col-sm-7"><br/>
                    <select name="typeofinvestor" class="form-control">
                      <option value="selected" >-- select type --</option>
                      <option value="private" >Private Investor</option>
                      <option value="repgroup">Representing a group/company</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-4"></div>
                  <label class="col-sm-4 control-label"><br/>If representative*</label>
                  <div class="col-sm-12"><br/>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-7">
                      <textarea class="form-control"name="nameofbusiness" id="nameofbusiness" placeholder="Input Business name" value="<?php echo set_value('nameofbusiness'); ?>"></textarea>   
                    </div>
                  </div>
                  <div class="col-sm-12"><br/>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-7">
                      <textarea class="form-control"name="typeofbusiness" id="typeofbusiness" placeholder="Input Type of business" value="<?php echo set_value('typeofbusiness'); ?>"></textarea>   
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-7">
                    <br/><br/><button type="submit" class="btn btn-primary pull-right form-control" name="proceed" value="creategroup">Proceed</button>
                  </div>
                </div>
              </form>

            </div><!--/.col-8-->
          </div><!--/.row-->
          <br/><br/><br/><br/><br/>
        </div><!--/.container-->
      </div><!--/.content wrapper-->