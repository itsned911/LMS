<!DOCTYPE html>
<?php
	session_start();

	if(isset($_SESSION['usr_id']) == "") {
		header("Location: ../index.php");
	}
?>
<html>
  <head>
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/calendar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">Admin Panel</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.php">Profile</a></li>
	                          <li><a href="logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
        <div class="col-md-2">
  		  	<div class="sidebar content-box" style="display: block;">
            <ul class="nav">
                <!-- Main menu -->
                <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                <li class="submenu">
                   <a href="#">
                      <i class="glyphicon glyphicon-list"></i> Book
                      <span class="caret pull-right"></span>
                   </a>
                   <!-- Sub menu -->
                   <ul>
                      <li><a href="add_book.php"><i class="glyphicon glyphicon-tasks"></i> Add Books</a></li>
                      <li><a href="seebook.php"><i class="glyphicon glyphicon-tasks"></i> See Books</a></li>
                  </ul>
                </li>
                <li class="submenu">
                   <a href="#">
                      <i class="glyphicon glyphicon-list"></i> User
                      <span class="caret pull-right"></span>
                   </a>
                   <!-- Sub menu -->
                   <ul>
                      <li><a href="add_users.php"><i class="glyphicon glyphicon-tasks"></i> Add Users</a></li>
                      <li><a href="users.php"><i class="glyphicon glyphicon-tasks"></i> See Users</a></li>
					  <li><a href="members.php"><i class="glyphicon glyphicon-tasks"></i> See Members</a></li>
                  </ul>
                </li>
				<li class="submenu">
                 <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Category
                    <span class="caret pull-right"></span>
                 </a>
                 <!-- Sub menu -->
                 <ul>
                    <li><a href="add_category.php"><i class="glyphicon glyphicon-tasks"></i> Add Category</a></li>
					  <li><a href="categorys.php"><i class="glyphicon glyphicon-tasks"></i> See Category</a></li>
                </ul>
              </li>
            </ul>
          </div>
  		  </div>
		  <div class="col-md-10">
		  
		 <?php 
				  
		  $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "lms";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
          }
		  
		  
		  
				if (isset($_POST["edit"])) {
					$idd = $_GET["idd"];
					$isbn = $_POST['isbn'];
				    $title = $_POST['title'];
					$author = $_POST['author'];
					$price = $_POST['price'];
					$date = $_POST['date'];
					$year = $_POST['year'];
					$pName = $_POST['pName'];
					$status = $_POST['status'];
					$category = $_POST['category'];
					
						$result = mysqli_query($conn, "update book set isbn='$isbn',title='$title',author='$author',publicationDate='$date',price='$price',category='$category',publisher_name='$pName',edition_year='$year',status='$status' where book_id=$idd");
						
				}
		  
		  
		  
		  ?>
		  
		  
        <?php

		  
		 if (isset($_GET["id"])) {
			$id = $_GET["id"];
			
          $sqlget = "SELECT * FROM book where book_id = $id";
          $result = $conn->query($sqlget);
		  $row = mysqli_fetch_array($result);
		  
		  $isbn = $row['isbn'];
		  $title = $row['title'];
			$author = $row['author'];
			$price = $row['price'];
			$date = $row['publicationDate'];
			$year = $row['edition_year'];
			$pName = $row['publisher_name'];
			$status = $row['status'];
			$category = $row['category'];
	
		  ?>
		 
				  
				<form class="form-horizontal" role="form" method="POST" action="editbook.php?idd=<?php echo $id; ?>"  style="float:left;">
				<div class="form-group">
                    <label class="col-sm-4 control-label">ISBN</label>
                    <div class="col-sm-8">
                      <input type="text" name="isbn" class="form-control" value=<?php echo $isbn; ?> >
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-4 control-label">TITLE</label>
                    <div class="col-sm-8">
                      <input type="text" name="title" class="form-control" value=<?php echo $title; ?> >
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-4 control-label">PRICE</label>
                    <div class="col-sm-8">
                      <input type="text" name="price" class="form-control" value=<?php echo $price; ?> >
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-4 control-label">PUBLISHING DATE</label>
                    <div class="col-sm-8">
                      <input type="text" name="date" class="form-control" value=<?php echo $date; ?> >
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label class="col-sm-4 control-label">EDITION YEAR</label>
                    <div class="col-sm-8">
                      <input type="text" name="year" class="form-control" value=<?php echo $year; ?> >
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-4 control-label">AUTHOR</label>
                    <div class="col-sm-8">
                      <input type="text" name="author" class="form-control" value=<?php echo $author; ?> >
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-4 control-label">PUBLISHER</label>
                    <div class="col-sm-8">
                      <input type="text" name="pName" class="form-control" value=<?php echo $pName; ?> >
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-4 control-label">CATEGORY</label>
                    <div class="col-sm-8">
                      <input type="text" name="category" class="form-control" value=<?php echo $category; ?> >
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-4 control-label">STATUS</label>
                    <div class="col-sm-8">
                      <input type="text" name="status" class="form-control" value=<?php echo $status; ?> >
                    </div>
                  </div>
				
				<div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="edit" class="btn btn-primary">SAVE</button>
                  </div>
                </div>
				
				
		 <?php } ?>
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">

            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>

         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/deletebook.js"></script>

    <script src="vendors/fullcalendar/fullcalendar.js"></script>
    <script src="vendors/fullcalendar/gcal.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/calendar.js"></script>
  </body>
</html>
