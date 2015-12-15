
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Start&Boost</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/select2/select2.min.css">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/all.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <!-- the fixed layout is not compatible with sidebar-mini -->
  <?php if($pages=='profile'){
    echo '  <body class="hold-transition skin-blue sidebar-collapse sidebar-mini">';
  }else{
   echo '<body class="hold-transition skin-blue fixed sidebar-mini">'; 
}?>
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>S</b>NB</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="<?php echo base_url(); ?>images/SNBlogo.png" style="width:80%;"></span>
        
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
                    <?php 
                            foreach($data as $row):?>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   <img src="<?php echo base_url();?>/user/<?php echo $row['avatar_name'];?>" class="user-image" alt="User Image">
                  <span class="hidden-xs">  
              <?php
                              if($row['user_Type']=='Ideator'||$row['user_Type']=='Investor')
                              {
                                  if($row['user_midInit']==null)
                                     echo $row['user_fName']."  ".$row['user_lName'];
                                   else
                                     echo $row['user_fName']." ".$row['user_midInit'].". ".$row['user_lName'];
                              }
                              else
                              {
                                echo $row['company_name'];
                              }

                          
                       
                      ?>
                      <?php  endforeach;?>
                    </span>
               </a>

                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url();?>/user/<?php echo $row['avatar_name']?>" class="img-circle" alt="User Image" class="img-circle" alt="User Image">

                    <p>
                    <?php 
                            foreach($data as $row):
                              if($row['user_Type']=='Ideator'||$row['user_Type']=='Investor')
                              {
                                  if($row['user_midInit']==null)
                                     echo $row['user_fName']." ".$row['user_lName'];
                                   else
                                     echo $row['user_fName']." ".$row['user_midInit'].". ".$row['user_lName'];
                              }
                              else
                              {
                                echo $row['company_name'];
                              }

                          
                       
                      ?>
                      <small><?php echo $row['user_Type'];?></small>
                      <?php  endforeach;?>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url() ;?>pages/profile" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url() ;?>pages/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
            <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url(); ?>/user/<?php echo $row['avatar_name']?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>
                <a href="<?php echo base_url(); ?>pages/profile">
                <?php 
                  foreach($data as $row):
                    if($row['user_Type']=='Ideator'||$row['user_Type']=='Investor')
                     {
                        if($row['user_midInit']==null)
                         echo $row['user_fName']." ".$row['user_lName'];
                        else
                         echo $row['user_fName']." ".$row['user_midInit'].". ".$row['user_lName'];
                        }
                        else
                        {
                          echo $row['company_name'];
                        }    
                  ?>
                  <?php  endforeach;?>
                </a>
              </p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            
            <li class="treeview <?php if($pages=='dashboard') {echo "active";}else echo "";?>">
              <a href="<?php echo base_url(); ?>index.php/pages/index">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <!--<i class="fa fa-angle-left pull-right">--></i>
              </a>            
            </li>
            <li class="treeview <?php if($pages=='profile') {echo "active";}else echo "";?>">
              <a href="<?php echo base_url(); ?>index.php/pages/profile">
                <i class="fa fa-edit"></i> <span>Post Idea</span>
              </a>
            </li>
            <li class="treeview <?php if($pages=='startup') {echo "active";}else echo "";?>">
              <a href="<?php echo base_url(); ?>index.php/pages/startupproduct">
                <i class="fa fa-paper-plane"></i> <span>Startup Products</span>
              </a>
            </li>
            <li class="treeview <?php if($pages=='newsfeed') {echo "active";}else echo "";?>">
              <a href="#">
                <i class="fa fa-feed"></i>
                <span>News Feed</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>pages/latest"><i class="fa fa-circle-o"></i>Latest</a></li>
                <li><a href="<?php echo base_url(); ?>pages/onfire"><i class="fa fa-fire"></i>On Fire</a></li>
                <li><a href="<?php echo base_url(); ?>pages/toprated"><i class="fa fa-star"></i>Top Rated</a></li>
              </ul>
            </li>
             <li class="treeview <?php if($pages=='timeline') {echo "active";}else echo "";?>">
              <a href="<?php echo base_url(); ?>pages/timeline">
                    <i class="fa fa-calendar"></i> <span>Timeline</span>
                 </a>
             
            </li>
            <li class="treeview <?php if($pages=='group') {echo "active";}else echo "";?>">
              <a href="#">
               <i class="fa fa-group"></i>
                <span>My Group</span><span class="label bg-green pull-right"><?php echo $countgroup;?></span>
               
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>pages/newgroup"><i class="fa fa-plus"></i>Create Group</a></li>
                <?php foreach ($groupdetails as $row):?>

                  <li><a href="<?php echo base_url(); ?>pages/group/<?php echo $row['groupId']?>"><i class="fa fa-circle-o"></i><?php echo $row['groupname'];?></a></li>
                <?php endforeach;?>
              
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
