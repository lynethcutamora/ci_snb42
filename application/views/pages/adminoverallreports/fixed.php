<?php 
include '../dbcon.php';
if(isset($_SESSION['Start&Boost'])){
    $userId= $_SESSION['Start&Boost'];
    $query = "SELECT * FROM User_dtl WHERE userId='$userId'";
    $query = mysql_query($query);
    while($row = mysql_fetch_array($query))
     {
        $_SESSION['lname'] = $row['lName'];
        $_SESSION['fname'] = $row['fName'];
        $_SESSION['midInit'] = $row['midInit'];
     }
    $query = "SELECT * FROM user_md WHERE userId='$userId'";
    $query = mysql_query($query);
    while($row = mysql_fetch_array($query))
     {
        $pictureId = $row['profilePicId'];
        $userType = $row['userType'];
     }
    $query = "SELECT * FROM picture_dtl WHERE pictureId='$pictureId'";
    $query = mysql_query($query);
    while($row = mysql_fetch_array($query))
     {
       
        $_SESSION['profilePic'] = $row['picturename'];
     }

}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Start&Boost</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../../plugins/iCheck/all.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <!-- the fixed layout is not compatible with sidebar-mini -->
  <?php 
  if($_SESSION['pages']=='adminoverallreports'){
    echo '  <body class="hold-transition skin-blue sidebar-collapse sidebar-mini">';

  }else{
  ?>
    <body class="hold-transition skin-blue fixed sidebar-mini">
  <?php }?>
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>S</b>NB</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="../../images/SNBlogo.png" style="width:80%;"></span>
        
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
                  <i class="fa fa-bullhorn"></i>
                  <span class="label label-error"></span>
                </a>
        <ul class="dropdown-menu">
                 <div class="register-box-body">
                    <form action="" method="POST">
                        <h3>Post Announcement</h3>
                      <div class="form-group has-feedback">
                        Title:<input type="text" class="form-control"  name="title" placeholder="Title">
                      </div>
                      <div class="form-group has-feedback">
                        Description:<textarea class="form-control" id="inputTitle" name="description" placeholder="Description"></textarea>
                      </div>
                      <div class="row">
                        <div class="col-xs-8">
                        
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                          <button type="submit" name="btnInvestor"class="btn btn-primary btn-block btn-flat">Post</button>
                        </div><!-- /.col -->
                      </div>
                    </form>
                  
          </div>
        </li>
      </ul>
      


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
                            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   <img src="../<?php echo "user/".$_SESSION['profilePic'];?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['fname']." ".$_SESSION['midInit'].". ".$_SESSION['lname']?></span>
               </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../<?php echo "user/".$_SESSION['profilePic'];?>" class="img-circle" alt="User Image" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $_SESSION['fname']." ".$_SESSION['midInit'].". ".$_SESSION['lname'];?>
                      <small>  <?php echo $userType;?></small>
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
                      <a href="../profile/index.php" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="../process/logout.php" class="btn btn-default btn-flat">Sign out</a>
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
              <img src="../<?php echo "user/".$_SESSION['profilePic'];?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['fname']." ".$_SESSION['midInit'].". ".$_SESSION['lname']?></p>
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
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <!--<i class="fa fa-angle-left pull-right">--></i>
              </a>
              <ul class="treeview-menu">
                <!--<li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>-->
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-feed"></i>
                <span>News Feed</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>Latest</a></li>
                <li><a href="#"><i class="fa fa-fire"></i>On Fire</a></li>
                <li><a href="#"><i class="fa fa-star"></i>Top Rated</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="../Products/index.php">
                <i class="fa fa-paper-plane"></i> <span>Startup Products</span>
              </a>
              <ul class="treeview-menu">
                <!--<li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>-->
              </ul>
               <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i> <span>View Statistics</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i> <span>View Online</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i> <span>Reports</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
