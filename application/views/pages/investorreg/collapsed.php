<?php 
foreach($data as $row):
if($row['user_Type']=='Admin'){
  header('Location:'.base_url().'pages/admin');
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
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/x-icon">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <!-- the fixed layout is not compatible with sidebar-mini -->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
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
              <li class="dropdown messages-menu">
                <a href="#" >
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success"><div name="countmsg" id="countmsg"></div></span>
                </a>
               <script>
                  function loadNowPlaying4(){
                 
                  $("#countmsg").load("<?php echo base_url().'pages/countmsg'; ?>"); }
                  setInterval(function(){loadNowPlaying4()}, 1000);

               </script>
               </li>
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning"><div name="countntf" id="countntf"></div></span>
                </a>
                
                <ul class="dropdown-menu">
                  <li class="header">Notification</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <?php echo form_open('../pages/addmember');?>
                        <?php foreach($groupdetails as $row):?>
                          <input type="text" hidden="true" name="groupid" value="<?php echo $row['groupId']?>">
                          <input type="text" hidden="true" name="userid" value="<?php echo $row['userId']?>">
                          <?php if($this->post->groupstat($row['groupId'],$row['userId'])==false)
                          {
                            echo "";
                          }
                          else
                          {
                            echo $row['groupname']."<br>";
                            echo "<small>Invite you into their group</small><br>";
                            echo "<span class='pull-right'><input type='submit' name='btnAccept' value='Accept'>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type='submit' name='btnDecline' value='Decline'>&nbsp;&nbsp;</span>";    
                          } ?>
                          <hr>
                        <?php endforeach;?>
                      </form>
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all</a>
                  </li>
                </ul>
                <script>
                  function loadNowPlaying5(){
                    $("#countntf").load("<?php echo base_url().'pages/countntf'; ?>"); 
                  }
                  setInterval(function(){loadNowPlaying5()}, 1000);
                </script>
              </li>

              <!-- Tasks: style can be found in dropdown.less -->
          
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

              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-group"></i></a>
              </li>
              <!-- Control Sidebar Toggle Button -->
              
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
          <form action="<?php echo  base_url()."pages/search_proxy";?>" method="post" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="key" class="form-control" required="required"placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
             <li class="treeview <?php if($pages=='investorlanding') {echo "active";}else echo "";?>">
              <a href="<?php echo base_url(); ?>pages/investorlanding">
                <i class="fa fa-feed"></i><span>News Feed</span>
              </a>
            </li>
             <li class="treeview <?php if($pages=='investormoreinfo') {echo "active";}else echo "";?>">
              <a href="<?php echo base_url(); ?>pages/investormoreinfo">
                <i class="fa fa-unlock"></i><span>Account</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
