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
     <title>ALL BOOKS</title>

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
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>
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
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section --></head>
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
                   <li><a href="index.php">Home</a></li>
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

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2>Search</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->

    <!--=========== BEGIN COURSE BANNER SECTION ================-->

    <?php
    //load database connection
        error_reporting(E_ALL & E_NOTICE);
        error_reporting(E_ALL & E_NOTICE & E_DEPRECATED);
        $host = "localhost";
        $user = "root";
        $password = "";
        $database_name = "lms";
        $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ));
        // Search from MySQL database table
        $search=$_POST['search'];
        $query = $pdo->prepare("select * from book where title LIKE '%$search%' OR author LIKE '%$search%' OR publication LIKE '%$search%' OR publisher_name LIKE '%$search%'");
        $query->bindValue(1, "%$search%", PDO::PARAM_STR);
        $query->execute();
        // Display search result
         if (!$query->rowCount() == 0)
         {
          echo "<table class='table table-striped'><tr><th>ISBN</th><th>Title</th><th>Author</th><th>Publication</th><th>Publisher Name</th><th>Edition</th><th>Year</th><th>Price</th><th>Category</th></tr>";
          while ($results = $query->fetch())
          {
    				echo "<tr><td>".$results["isbn"]."</td><td>".$results["title"]."</td><td>".$results["author"]."</td><td>".$results["publication"]."</td><td>".$results["publisher_name"]."</td><td>".$results["edition"]."</td><td>".$results["year"]."</td><td>".$results["price"]."</td><td>".$results["category"];
          }
  				echo "</table>";
          }
          else
          {
            echo 'Nothing found';
          }
    ?>

    <?php

    // if(isset($_POST['title']))
    // {
    // 	require("dbconn.php");
    // 	$title = $_POST['title'];
    //   $author = $_POST['author'];
    //   $publication = $_POST['publication'];
    //   $publisher_name = $_POST['publisher_name'];
    //
    //   if($title != "" && $author != "" && $publication != "" && $publisher_name != "")
    //   {
    //   $query = "select * from book where title LIKE '%$title%' OR author LIKE '%$author%' OR publication LIKE '%$publication%' OR publisher_name LIKE '%$publisher_name%'";
    //   $result = mysql_query($query) or die(mysql_error());
    //   if($result)
    //   {
    //   	echo "exists";
    //   	$num_rows=mysql_num_rows($result);
    //   	if ($num_rows>0)
    //   	{
    //   			print "<table class='table table-striped'><tr><th>ISBN</th><th>Title</th><th>Author</th><th>Publication</th><th>Publisher Name</th><th>Edition</th><th>Year</th><th>Price</th><th>Category</th></tr>";
    //              for ($row_num = 1; $row_num <= $num_rows;  $row_num++)
    //   			{
    //   			   $row = mysql_fetch_array($result);
    //   				print "<tr><td>".$row["isbn"];
    //   				print "</td><td>".$row["title"];
    //   				print "</td><td>".$row["author"];
    //           print "<tr><td>".$row["publication"];
    //           print "</td><td>".$row["publisher_name"];
    //           print "</td><td>".$row["edition"];
    //           print "<tr><td>".$row["year"];
    //           print "</td><td>".$row["price"];
    //           print "</td><td>".$row["Category"];
    //   				print "</td></tr>";
    //   			}
    //   			print "</table>";
    //   	}
    //   }
    //   else
    //   echo "one of the fields is empty";
    //   }
    // }
    ?>
    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>About Us</h3>
                <p>LMS serves as an indispensable partner in study, teaching, and research. The Library also works to help faculty members incorporate information competency skills into their curricula and enable the networking of researchers across all disciplines.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- End footer top area -->

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
           <div class="col-lg-3 col-md-3 col-sm-3">
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
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <!--===============================================
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
  ====================================================-->

  </body>
</html>
