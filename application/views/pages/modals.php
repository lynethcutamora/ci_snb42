      
          <div class="modal fade" id="CreateAccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Register</h4>
                </div>
                <div class="modal-body">
                  <center>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Ideator">
                     Ideator
                    </button>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Investor">
                     Investor
                    </button>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Company">
                     Company
                    </button>
                  </center>
                </div><!-- /.register-box -->
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="Ideator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Register</h4>
                <h4 class="modal-title" id="myModalLabel">Ideator</h4>
              </div>
              <div class="modal-body">
                 <div class="register-box-body">
                    <form action="process/registerprocess.php" method="POST">
                        <h3>Ideator</h3>
                      <div class="form-group has-feedback">
                        <input type="text" class="form-control" required="required" name="fname" placeholder="First name">
                      </div>
                      <div class="form-group has-feedback">
                         <input type="text" class="form-control" required="required" name="lname" placeholder="Last name">
                      </div>
                      <div class="form-group has-feedback">
                         <input type="text" class="form-control" name="midinit" placeholder="Middle Initial">
                      </div>
                      <div class="form-group has-feedback">
                        <input type="text" class="form-control" required="required" name="age" placeholder="Age">
                      </div>
                      <div class="form-group has-feedback">
                        <select class="form-control" required="required" name="gender">
                          <option value='M'>Male</option>
                          <option value='F'>Female</option>
                        </select> 
                      </div>
                       <div class="form-group has-feedback">
                        <input type="text" class="form-control" required="required" name="address" placeholder="Address">
                      </div>
                       <div class="form-group has-feedback">
                        <input type="text" class="form-control" required="required" name="email" placeholder="E-mail">
                      </div>
                       <div class="form-group has-feedback">
                        <input type="password" class="form-control" required="required" name="password" placeholder="Password">
                      </div>
                       <div class="form-group has-feedback">
                        <input type="password" class="form-control" required="required" name="repassword" placeholder="Retype password">
                      </div>
                      <div class="row">
                        <div class="col-xs-8">
                        
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                          <button type="submit" name="btnIdeator"class="btn btn-primary btn-block btn-flat">Register</button>
                        </div><!-- /.col -->
                      </div>
                    </form>
                  </div><!-- /.form-box -->
                </div><!-- /.register-box -->
              </div>
            </div>
          </div>
        </div>
     
           <div class="modal fade" id="Investor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Register</h4>
              </div>
              <div class="modal-body">
                 <div class="register-box-body">
                    <form action="process/registerprocess.php" method="POST">
                        <h3>Investor</h3>
                      <div class="form-group has-feedback">
                        <input type="text" class="form-control" required="required" name="fname" placeholder="First name">
                      </div>
                      <div class="form-group has-feedback">
                         <input type="text" class="form-control" required="required" name="lname" placeholder="Last name">
                      </div>
                      <div class="form-group has-feedback">
                         <input type="text" class="form-control" name="midinit" placeholder="Middle Initial">
                      </div>
                      <div class="form-group has-feedback">
                        <input type="text" class="form-control" required="required" name="age" placeholder="Age">
                      </div>
                      <div class="form-group has-feedback">
                        <select class="form-control" required="required" name="gender">
                          <option value='M'>Male</option>
                          <option value='F'>Female</option>
                        </select> 
                      </div>
                       <div class="form-group has-feedback">
                        <input type="text" class="form-control" required="required" name="address" placeholder="Address">
                      </div>
                       <div class="form-group has-feedback">
                        <input type="text" class="form-control" required="required" name="email" placeholder="E-mail">
                      </div>
                       <div class="form-group has-feedback">
                        <input type="password" class="form-control" required="required" name="password" placeholder="Password">
                      </div>
                       <div class="form-group has-feedback">
                        <input type="password" class="form-control" required="required" name="repassword" placeholder="Retype password">
                      </div>
                      <div class="row">
                        <div class="col-xs-8">
                        
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                          <button type="submit" name="btnInvestor"class="btn btn-primary btn-block btn-flat">Register</button>
                        </div><!-- /.col -->
                      </div>
                    </form>
                  </div><!-- /.form-box -->
                </div><!-- /.register-box -->
              </div>
            </div>
          </div>
           <div class="modal fade" id="Company" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Register</h4>
              </div>
              <div class="modal-body">
                 <div class="register-box-body">
                    <form action="process/registerprocess.php" method="POST">
                        <h3>Company</h3>
                      <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Company Name" name="companyname" required="required">
                      </div>
                      <div class="form-group has-feedback">
                         <input type="text" class="form-control" placeholder="Owner's Name" name="ownname" required="required">
                      </div>
                      <div class="form-group has-feedback">
                         <input type="text" class="form-control" placeholder="Business Type" name="businesstype" required="required">
                      </div>
                      <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Year Founded"name="yearfounded" required="required">
                      </div>
                       <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Address" name="address" required="required">
                      </div>
                       <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="E-mail"name="email" required="required">
                      </div>
                       <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password"name="password" required="required">
                      </div>
                       <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Retype password" name="repassword" required="required">
                      </div>
                      <div class="row">
                        <div class="col-xs-8">
                        
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                          <button type="submit" name="btnCompany" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div><!-- /.col -->
                      </div>
                    </form>
                  </div><!-- /.form-box -->
                </div><!-- /.register-box -->
              </div>
            </div>
          </div>
    
        <div class="modal fade" id="topidea" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <?php include("ideas.php");?> 
              
                    </form>
                  </div><!-- /.form-box -->
                </div><!-- /.register-box -->
              </div>
            </div>
          </div>
        </div>