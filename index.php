<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>LMS</title>

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
  <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>
  <!-- End WOWSlider.com HEAD section -->

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

<title>WOWSlider</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="WOWSlider" />
  
  <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>
  <!-- End WOWSlider.com HEAD section -->

  </head>
  <body>

     <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
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
                 <li class="active"><a href="index.php">Home</a></li>
                 <li><a href="contact.php">Contact</a></li>
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

    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="slider">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="slider_area">
            <!-- Start super slider -->
            <div id="slides">
              <ul class="slides-container">
                <li>
                  <img src="img/slider/2.jpg" alt="img">
                   <div class="slider_caption">
                    <h2>Largest & University</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                 
                  </div>
                  </li>
                <!-- Start single slider-->
                <li>
                  <img src="img/slider/3.jpg" alt="img">
                   <div class="slider_caption slider_right_caption">
                    <h2>Better Education Environment</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                 
                  </div>
                </li>
                <!-- Start single slider-->
                <li>
                  <img src="img/slider/4.jpg" alt="img">
                   <div class="slider_caption">
                    <h2>Find out you in better way</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                
                  </div>
                </li>
              </ul>
              <nav class="slides-navigation">
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SLIDER SECTION ================-->
<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<div><center><h2>News</h2></center></div>
<div id="wowslider-container1">
<div class="ws_images"><ul>
    <li><img src="book/9781101967355_p0_v3_s192x300.jpg" alt="9781101967355_p0_v3_s192x300" title=" Whole New You" id="wows1_0"/></li>
    <li><img src="book/9781118901854_p0_v3_s192x300.jpg" alt="9781118901854_p0_v3_s192x300" title="  Teach like a Champion 2" id="wows1_1"/></li>
    <li><img src="book/9781426218118_p0_v1_s192x300.jpg" alt="wowslider" title="  Almost Human" id="wows1_2"/></li>
    <li><img src="book/9781501145308_p0_v7_s192x300.jpg" alt="9781501145308_p0_v7_s192x300" title=" Gumbo love" id="wows1_3"/></li>
  </ul></div>
  <div class="ws_bullets"><div>
    <a href="#" title="9781101967355_p0_v3_s192x300"><span><img src="data1/tooltips/9781101967355_p0_v3_s192x300.jpg" alt="9781101967355_p0_v3_s192x300"/>1</span></a>
    <a href="#" title="9781118901854_p0_v3_s192x300"><span><img src="data1/tooltips/9781118901854_p0_v3_s192x300.jpg" alt="9781118901854_p0_v3_s192x300"/>2</span></a>
    <a href="#" title="9781426218118_p0_v1_s192x300"><span><img src="data1/tooltips/9781426218118_p0_v1_s192x300.jpg" alt="9781426218118_p0_v1_s192x300"/>3</span></a>
    <a href="#" title="9781501145308_p0_v7_s192x300"><span><img src="data1/tooltips/9781501145308_p0_v7_s192x300.jpg" alt="9781501145308_p0_v7_s192x300"/>4</span></a>
  </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">bootstrap slider</a> by WOWSlider.com v8.7</div>
<div class="ws_shadow"></div>
</div>  
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
    <!--=========== BEGIN ABOUT US SECTION ================-->
    <section id="aboutUs">
      <div class="container">
        <div class="row">
        <!-- Start about us area -->
        <div class="col-lg-12 col-md-12 col-sm-12">
<!--          <div class="title_area">

            <h2 class="titile">About Us</h2>

            <p>Welcome! In a time of rapid change, BlaBla Library continues to stand at the center of intellectual life. With world-class collections and services — print, online, and in person — our Library serves as an indispensable partner in study, teaching, and research.
               The Library also works to help faculty members incorporate information competency skills into their curricula and enable the networking of researchers across all disciplines.
               The library staff works to create an organization that is receptive to innovation, recognized for efficient management, and focused on continuous improvement in our services, resources, and facility. To that end, we value your comments—user feedback is reviewed and frequently results in enhancements to our services and resources.
               I invite you to learn more about this wonderful Library by exploring our Web site and visiting our Library in person.
            </p>
          </div> -->
        </div>
        
    <!--=========== END ABOUT US SECTION ================-->

    <!--=========== BEGIN WHY US SECTION ================-->
    

    <!--=========== BEGIN OUR COURSES SECTION ================-->
    <section id="ourCourses">
      <div class="container">
       <!-- Our courses titile -->
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="title_area">
              <h2 class="title_two">Our Categories</h2>
              <span></span>
            </div>
          </div>
        </div>
        <!-- End Our courses titile -->
        <!-- Start Our courses content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourCourse_content">
              <ul class="course_nav">
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/gallery/img-large2.jpg" style="width:85%" />
                      <div class="mask">
                        <a href="login.php" class="course_more">View Category</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">SCIENCE & TECHNOLOGY</a></h3>
                    <p>It's always in some way connected to the real world, to our everyday world.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/gallery/EDUCATION.jpg" style="width:100%" />
                      <div class="mask">
                        <a href="login.php" class="course_more">View Category</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">EDUCATION</a></h3>
                    <p>Education is the most powerful weapon which you can use to change the world.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/gallery/Global-History.jpg" style="width:100%" />
                      <div class="mask">
                        <a href="login.php" class="course_more">View Category</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">HISTORY</a></h3>
                    <p>The more you know about the past, the better prepared you are for the future.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/gallery/256x256bb.jpg" style="width:67%"  />
                      <div class="mask">
                        <a href="login.php" class="course_more">View Category</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">POETRY & ROMANCE</a></h3>
                    <p>Peotry when an emotion has found its thought and the thought has found words.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/gallery/cookbook.png" />
                      <div class="mask">
                        <a href="login.php" class="course_more">View Category</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">COOKBOOK & FOOD</a></h3>
                    <p>Eating food is nourishment to the body, Preparing it is nourishment to the soul.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/gallery/others.png" />
                      <div class="mask">
                        <a href="login.php" class="course_more">View Category</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">And More</a></h3>
                    <p>Great books help you understand, and they help you feel understood.</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END OUR COURSES SECTION ================-->

    <!--=========== BEGIN STUDENTS TESTIMONIAL SECTION ================-->
    <section id="studentsTestimonial">
      <div class="container">
       <!-- Our courses titile -->
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="title_area">
              <h2 class="title_two"> Admins </h2>
              <span></span>
            </div>
          </div>
        </div>
        <!-- End Our courses titile -->

        <!-- Start Our courses content -->
          <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="studentsTestimonial_content">
              <div class="row">
                <!-- start single student testimonial -->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <div class="stsTestimonial_msgbox">
                      <p>Whenever you read a good book, somewhere in the world a door opens to allow in more light.</p>
                    </div>
                    <img class="stsTesti_img" src="img/hussein.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Hussein Halawi</h3>
                      <span>BAU Student</span>
                      <p>Computer Science</p>
                    </div>
                  </div>
                </div>

              <!-- start single student testimonial -->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <div class="stsTestimonial_msgbox">
                      <p>If there's a book that you want to read, but it hasn't been written yet, then you must write it.</p>
                    </div>
                    <img class="stsTesti_img" src="img/ruba.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Ruba Hashash</h3>
                      <span>BAU Student</span>
                      <p>Computer Science</p>
                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
                <!-- start single student testimonial -->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <div class="stsTestimonial_msgbox">
                      <p>There comes a time when you have to choose between turning the page and closing the book.</p>
                    </div>
                    <img class="stsTesti_img" src="img/nasreddine.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Nasreddine El-Darazi</h3>
                      <span>BAU Student</span>
                      <p>Computer Science</p>
                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
                <!-- start single student testimonial -->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <div class="stsTestimonial_msgbox">
                      <p>Anyone who says they have only one life to live must not know how to read a book.</p>
                    </div>
                    <img class="stsTesti_img" src="img/author.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Issam Shahine</h3>
                      <span>BAU Student</span>
                      <p>Computer Science</p>
                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END STUDENTS TESTIMONIAL SECTION ================-->

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
      <!-- End footer top area -->

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
    <script src='js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>

    <!-- Custom js-->
    <script src="js/custom.js"></script>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--===============================================
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->


  </body>
</html>
