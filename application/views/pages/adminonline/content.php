
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
                    <h3 class="box-title">Users Info</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                  </div><!-- /.box-header -->
                  <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>UserId</th>
                        <th>Name</th>
                        <th>Reputation</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $query = $this->db->query("SELECT * from user_md a left join user_dtl b on a.userId = b.userId where user_status = '1'");
                            foreach($query->result() as $row):
                        $this->db->select('*');
                        $this->db->from('badge_dtl');
                        $this->db->where('voteBadge','1');
                        $this->db->where('userId',$row->userId);
                        $query = $this->db->get();
                        $gold = $query->num_rows();

                        $this->db->select('*');
                        $this->db->from('badge_dtl');
                        $this->db->where('voteBadge','2');
                        $this->db->where('userId',$row->userId);
                        $query = $this->db->get();
                        $silver = $query->num_rows();

                        $this->db->select('*');
                        $this->db->from('badge_dtl');
                        $this->db->where('voteBadge','3');
                        $this->db->where('userId',$row->userId);
                        $query = $this->db->get();
                        $bronze = $query->num_rows();

                        $this->db->select('*');
                        $this->db->from('badge_dtl');
                        $this->db->where('voteBadge','4');
                        $this->db->where('userId',$row->userId);
                        $query = $this->db->get();
                        $black = $query->num_rows();

                        $rep = (($gold*20)+($silver*10)+($bronze*5))-($black*15);
                        ?>
                      <tr> 
                        <td><?php echo $row->userId;?></td>
                        <td><a href="#"><?php echo $row->user_fName;?>&nbsp;<?php echo $row->user_midInit;?>.&nbsp;<?php echo $row->user_lName;?> </a></td>
                        <td><i class="fa fa-star" style="color:#ffd700;"></i>&nbsp;<span class="label label-default"><?php echo $rep;?></span></td>
                        <td><span class="fa fa-circle text-success"><?php if($row->user_status=='1')echo 'Online';?></td>
                      </tr>
                         <?php  endforeach;?>
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
              
            

                  <div>
                    <p>Visit our Facebook Page by clicking the clink below:<br/><a href="#">facebook/startandboost</a><br/><br/>Start and Boost by $index[5].<br/></p>
                  </div>
                
              
            </div><!--/.row-->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
