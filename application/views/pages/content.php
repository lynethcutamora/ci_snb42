
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Start&Boost</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

     <link rel="stylesheet" href="../css/AdminLTE.min.css" />
    <!-- Font Awesome -->
    <link href="font/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/section.css" />
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <header class="header">
        <div class="">
            <nav class="navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <li class="navbar-brand" style="float:left; background-image:url('<?php echo base_url();?>images/SNBlogo.png'); background-size:contain;background-repeat:no-repeat;background-position:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                        
                    
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="mainNav">
                        <li class="active"><a href="#home" class="scroll-link">Home</a></li>
                        <li><a href="#portfolio" class="scroll-link">Top 5 ideas</a></li>
                        <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
                        <li><a href="#contactUs" class="scroll-link">Contact Us</a></li>
                    
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    <!--/.header-->
    <div id="#top"></div>
    <section id="home">
        <div class="banner-container">
            <img src="<?php echo base_url(); ?>images/bg3.png" alt="banner"/>
            <div class="container banner-content">
            
                </div>
            </div>
        </div>
    </section>
    <section id="introText">
        <div class="container">
            <div class="heading text-center">
                    <!-- Heading -->
                    <br/><br/>
                    <div class="col-sm-7" style="background-color:#;">
                            <div class="text-center">
                             <h1>A Web and mobile-based startup ideas repository and exploration</h1>
                                  <p><b>Start&Boost</b> is a Capstone project made by $index[5], a group of student from University of Cebu - Lapulapu and Mandaue. Anyone who has a brilliant idea is given an opportunity to share and discuss it with reliable members from different parts of the world, who's profile has reputation and badges. This system has three classifications of users: The ideators, investors, and company. Members can chat, create group, video conference, post ideas, upload product snapshots and links, and share to social medias.</p>
                            </div>  
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4">
                    

                      <?php echo form_open('pages/login',"class=form-horizontal"); ?>

                            <h2>Login</h2>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email Address" title="Please enter your Email address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" title="Please enter your password">
                            </div>
                            <?php echo validation_errors(); ?>
                            <button name="login" type="submit" class="btn btn-primary form-control" id="submit">Log-in</button>
                            <br/><br/>
                      </form>
                      <?php echo form_open('pages/register'); ?>
                            <button name="create" type="submit" class="btn btn-primary form-control" id="create">Create Account</button>
                      </form>
                      <br/><br/>
                    </div>
            </div>
        </div>

    </section>
    <!--Quote--><section id="portfolio" class="page-section section appear clearfix secPad">
        <div class="container">
            <br/>
            <div class="heading text-center">
                <!-- Heading -->
                <h2>TOP 5 IDEAS</h2>            
            </div>
             <div class="col-lg-1 col-xs-4"></div>
              <div class="col-lg-2 col-xs-5">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                       </br>
                  <h3>1st</h3>
           
              </br>
                </div>
                <div class="icon">
                  <i class="fa fa-rocket"></i>
                </div>
                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#topidea">
                    View Ideas <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
               <div class="col-lg-2 col-xs-5">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                       </br>
                  <h3>2nd</h3>
           
              </br>
                </div>
                <div class="icon">
                  <i class="fa fa-rocket"></i>
                </div>
               <a href="#" class="small-box-footer" data-toggle="modal" data-target="#topidea">
                  View Ideas <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
               <div class="col-lg-2 col-xs-5">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                       </br>
                  <h3>3rd</h3>
           
              </br>
                </div>
                <div class="icon">
                  <i class="fa fa-rocket"></i>
                </div>
               <a href="#" class="small-box-footer" data-toggle="modal" data-target="#topidea">
                   View Ideas <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
               <div class="col-lg-2 col-xs-5">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                       </br>
                  <h3>4th</h3>
           
              </br>
                </div>
                <div class="icon">
                  <i class="fa fa-rocket"></i>
                </div>
                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#topidea">
                  View Ideas <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
               <div class="col-lg-2 col-xs-5">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                       </br>
                  <h3>5th</h3>
           
              </br>
                </div>
                <div class="icon">
                  <i class="fa fa-rocket"></i>
                </div>
                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#topidea">
                  View Ideas <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->

           
         </div>
    </section>
    <section id="abou" class="page-section section appear clearfix secPad">
            <!--<img src="../images/banner-bg.png" style="width:100%;" />-->
            <div class="col-md-1"></div>
            <div class="col-md-8"><img src="<?php echo base_url(); ?>images/ind.png" style="width:50%;" /></div>
            <div class="col-md-3"></div>
    </section>
    <!--About-->
    <section id="aboutUs" class="secPad">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h2>$index[5]</h2>
                <p>MEET THE TEAM</p>
            </div>
            <div class="row">
             
              <!-- item -->
                <div class="col-md-3 text-center tileBox">
                   <div class="txtHead"><img src="<?php echo base_url(); ?>images/team/index0.png" style="width:40%;" /></i>
                    <h3>Lyneth <span class="id-color">Cutamora</span></h3>
                    <h6>$index[0]</h6></div>
                    <p>Project Manager</p>
                </div>
                <!-- end: -->
                  <!-- item -->
                <div class="col-md-3 text-center tileBox">
                   <div class="txtHead"><img src="<?php echo base_url(); ?>images/team/index1.jpg" style="width:40%;" />
                    <h3>Jason <span class="id-color">Pitogo</span></h3>
                    <h6>$index[1]</h6></div>
                    <p>Software Engineer</p>
                </div>
                <!-- end: -->
                <!-- item -->
                <div class="col-md-3 text-center tileBox">
                   <div class="txtHead"> <img src="<?php echo base_url(); ?>images/team/index2.jpg" style="width:40%;" />
                    <h3>Alfie<span class="id-color">Dimpas</span></h3>
                    <h6>$index[2]</h6></div>
                    <p>Technical Writer</p>
                </div>
                <!-- end: -->
             
                <!-- item -->
               
                <div class="col-md-3 text-center tileBox">
                    <div class="txtHead"><img src="<?php echo base_url(); ?>images/team/index3.jpg" style="width:40%;" />
                    <h3>Edelito <span class="id-color">Albaracin</span></h3>
                    <h6>$index[3]</h6></div>
                    <p>System Analyst</p>
                </div>
                <!-- end: -->

                <!-- item -->
                <div class="col-md-3 text-center tileBox">
                <br/>
                    <div class="txtHead"><img src="<?php echo base_url(); ?>images/team/index4.jpg" style="width:40%;" />
                    <h3>Isidro <span class="id-color">Estose Jr.</span></h3>
                    <h6>$index[4]</h6></div>
                    <p>QA Tester</p>
                </div>
                <!-- end: -->
            </div>
        </div>
    </section>
    
    <section id="quote" class="bg-parlex">
        <div class="parlex-back">
            <div class="container secPad text-center">
                <div class="col-md-9"></div>
                <div class="col-md-3"> <button name="like" type="submit" class="btn btn-primary form-control" id="like">LIKE US IN FACEBOOK!</button></div>
            </div>
            <!--/.container-->
        </div>
    </section>
    <section id="contactUs" class="page-section secPad">
        <div class="container">

            <div class="row">
                <div class="heading text-center">
                    <!-- Heading -->
                    <h2>Let's Keep In Touch!</h2>
            
                </div>
            </div>

            <div class="row mrgn30">

                <form method="post" action="" id="contactfrm" role="form">

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="comments">Comments</label>
                            <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
                        </div>
                        <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
                        <div class="result"></div>
                    </div>
                </form>
                <div class="col-sm-4">
                    <h4>Address:</h4>
                    <address>
                        Index[5] Company<br>
                       Sangi New Road<br>
                        Lapu-lapu city
               
                        <br>
                    </address>
                    <h4>Phone:</h4>
                    <address>
                        12345-49589-2<br>
                    </address>
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
