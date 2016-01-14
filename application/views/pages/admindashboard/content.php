
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Start&Boost
            <small>"Start with an idea and boost it here."</small>
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">

          <!-- ====================================================================== -->
            <div class="col-md-12">
            <!-- TABLE: TOP 5 IDEAS -->
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Overall Registered User's</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <div class="table-responsive">
                      <table class="table no-margin">
                        <thead>
                          <tr>
                            <th>Type of User</th>
                            <th>No. of Registered Users</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $this->db->select('*');
                        $this->db->from('user_md');
                        $this->db->where('user_Type','Ideator');
                        $query = $this->db->get();
                        $ideator = $query->num_rows();

                        $this->db->select('*');
                        $this->db->from('user_md');
                        $this->db->where('user_Type','Investor');
                        $query = $this->db->get();
                        $investor = $query->num_rows();

                        $this->db->select('*');
                        $this->db->from('user_md');
                        $this->db->where('user_Type','Company');
                        $query = $this->db->get();
                        $company = $query->num_rows();  

                        $total = ($ideator)+($investor)+($company);
                        ?>


                          <tr>
                            <td>Ideators</td>
                            <td><a href="#"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ideator;?></td>
                            
                          </tr>
                          <tr>
                            <td>Investors</td>
                            <td><a href="#"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $investor;?></td>
                          </tr>
                          <tr>
                            <td>Company</td>
                            <td><a href="#"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $company;?></td>
                          </tr>
                          <tr>
                            <th>Total:</th>
                            <td><a href="#"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $total;?></b></td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- /.table-responsive -->
                  </div><!-- /.box-body -->
                </div>
<!------------------------------------------------end-->
            <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Latest Register User's this week</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <div class="table-responsive">
                      <table class="table no-margin">
                        <thead>
                          <tr>
                            <th>UserId</th>
                            <th>Name of User</th>
                            <th>Type of User</th>
                            <th>Date Registered</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                        
                        $query = $this->db->query("SELECT userId from user_md where user_dateRegistered between date_sub(now(),INTERVAL 1 WEEK) AND now() group by user_dateRegistered order by user_dateRegistered desc");
                                foreach($query->result() as $row):
                                  $next=$this->post->profile($row->userId);
                                  $arr= $next->row_array();
                          ?>
                          <tr>
                            <td><?php echo $row->userId?></td>
                            <td><a href="#"></a><?php echo $this->post->userProfile($row->userId);?></td>
                            <td><?php echo $arr['user_Type']?></td>
                            <td><?php echo $arr['user_dateRegistered']?></td>
                          </tr>
                           <?php endforeach ?>
                        </tbody>
                      </table>
                    </div><!-- /.table-responsive -->
                  </div><!-- /.box-body -->
                  <div class="box-footer clearfix">
                    <a class="btn btn-app btn-flat pull-right" button onclick="print()">
                    <i class="fa fa-save"></i> Print 
                  </a>
                  </div><!-- /.box-footer -->
                </div><!-- /.box -->

                              
              </div><!-- /.col -->
            </div><!--/.row-->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
