<?php 
foreach($data as $row):
if($row['user_Type']!='Admin'){
  header('Location:'.base_url().'pages/pagenotfound');
}
endforeach;
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
    
    <script src="<?php echo base_url(); ?>dist/js/RTCMultiConnection.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/select2/select2.min.css">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
       <link rel="stylesheet" href="<?php echo base_url(); ?>/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/ionicons.min.css">
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
                 <li> <a href="<?php echo base_url(); ?>pages/logout">
                  Logout 
               </a></li>
               
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
                  <?php echo $this->post->userProfile($this->session->userdata('userId'));

                  ?>
                </a>
              </p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
        
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
             <li class="treeview <?php if($pages=='dashboard') {echo "active";}else echo "";?>">
              <a href="<?php echo base_url(); ?>pages/admin">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <!--<i class="fa fa-angle-left pull-right">--></i>
              </a>            
            </li>
            <li class="treeview <?php if($pages=='userinfo') {echo "active";}else echo "";?>">
              <a href="<?php echo base_url(); ?>pages/adminpage2">
                <i class="fa fa-user"></i> <span>User Infos</span> <!--<i class="fa fa-angle-left pull-right">--></i>
              </a>            
            </li>
            <li class="treeview <?php if($pages=='statistics') {echo "active";}else echo "";?>">
              <a href="<?php echo base_url(); ?>pages/adminpage3">
                <i class="glyphicon glyphicon-file"></i> <span>Statistical Report</span> <!--<i class="fa fa-angle-left pull-right">--></i>
              </a>            
            </li>
               <li class="treeview <?php if($pages=='reported') {echo "active";}else echo "";?>">
              <a href="<?php echo base_url(); ?>pages/adminpage4">
                <i class="glyphicon glyphicon-file"></i> <span>Reported users</span> <!--<i class="fa fa-angle-left pull-right">--></i>
              </a>            
            </li>
            <li class="treeview <?php if($pages=='investors') {echo "active";}else echo "";?>">
              <a href="<?php echo base_url(); ?>pages/investorRequest">
                <i class="glyphicon glyphicon-file"></i> <span>Investor Request</span> <!--<i class="fa fa-angle-left pull-right">--></i>
              </a>            
            </li>
             <li class="treeview <?php if($pages=='ads') {echo "active";}else echo "";?>">
              <a href="<?php echo base_url(); ?>pages/ads">
                <i class="glyphicon glyphicon-file"></i> <span>ADS Section</span> <!--<i class="fa fa-angle-left pull-right">--></i>
              </a>            
            </li>
               <li class="treeview <?php if($pages=='startup') {echo "active";}else echo "";?>">
              <a href="#">
                <i class="fa fa-plus-square"></i>
                <span>View Post</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>pages/adminpage5"><i class="fa fa-star"></i>Ideas</a></li>
                <li><a href="<?php echo base_url(); ?>pages/onfire"><i class="fa fa-star"></i>Startup Products</a></li>
                <li><a href="<?php echo base_url(); ?>pages/toprated"><i class="fa fa-star"></i>Competition </a></li>
                <li><a href="<?php echo base_url(); ?>pages/toprated"><i class="fa fa-star"></i>Normal Post</a></li>
              </ul>
            </li>

           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
