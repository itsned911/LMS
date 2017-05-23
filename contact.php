<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <!--===============================================
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
  ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>WpF Degree : Contact</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet">
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='css/jquery.circliful.css'>
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
 <style type="text/css">
    .wrapper > div {
      float: left;
      width: 33.33%;
      padding: 15px;
      text-align: center;
    }

    .clearfix::after {
      content: '';
      display: table;
      clear: both;
    }

    .wrapper > div h3 {
      padding-bottom: 15px;
    }

    .wrapper > div h3::after {
      left: 42.5%;
    }

  </style>

  </head>
  <body>

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.html">L<span>M</span>S</a>
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->


               <div id="navbar" class="navbar-collapse collapse">
                 <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                   <li><a href="index.php">Home</a></li>
                   <li class="active"><a href="contact.php">Contact</a></li>
                   <ul class="nav navbar-nav navbar-right">
                     <?php if (isset($_SESSION['usr_id'])) { ?>
                     <li><a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Log Out</a></li>
                     <?php } else { ?>
                     <li><a href="login.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a></li>
                     <li><a href="register.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Sign Up</a></li>
                     <?php } ?>
                   </ul>
                 </ul>
             </div><!--/.nav-collapse -->
          </div>
        </nav>
      </div>
      <!-- END MENU -->
    </header>
    <!--=========== END HEADER SECTION ================-->

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2>Contact</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->

    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
       <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-8">
           <div class="contact_form wow fadeInLeft">
              <form class="submitphoto_form">
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Your name">
                <input type="mail" class="wp-form-control wpcf7-email" placeholder="Email address">
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Subject">
                <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us"></textarea>
                <form method="post" action="mailto:hussein.robben@gmail.com" >
<input type="submit" value="Send Email" />
</form>
              </form>
           </div>
         </div>
       </div>
      </div>
    </section>
    <!--=========== END CONTACT SECTION ================-->

    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
     <div class="wrapper clearfix">
        <div>
          <h3 class="titile"><center>About Us</center></h3>
          <p>LMS serves as an indispensable partner in study, teaching, and research. The Library also works to help faculty members incorporate information competency skills into their curricula and enable the networking of researchers across all disciplines.</p>
        </div>
        <div>
          <h3 class="titile"><center>Mission</center></h3>
          <p>LMS serves as an indispensable partner in study, teaching, and research. The Library also works to help faculty members incorporate information competency skills into their curricula and enable the networking of researchers across all disciplines.</p>
        </div>
        <div>
          <h3 class="titile"><center>Vision</center></h3>
          <p>LMS serves as an indispensable partner in study, teaching, and research. The Library also works to help faculty members incorporate information competency skills into their curricula and enable the networking of researchers across all disciplines.</p>
        </div>
      </div>

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> Copyright &copy; All Rights Reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================-->



    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>

    <!-- Custom js-->
    <script src="js/custom.js"></script>
  <!--===============================================
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
  ====================================================-->

  </body>
</html>
