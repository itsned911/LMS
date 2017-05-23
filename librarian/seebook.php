<!DOCTYPE html>
<?php
	session_start();

	if(isset($_SESSION['usr_id']) == "") {
		header("Location: ../index.php");
	}
?>
<html>
  <head>
    <title>Librarian Panel</title>
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
	                 <h1><a href="index.php">Librarian Panel</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
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
	                          <li><a href="../logout.php">Logout</a></li>
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
                      <li><a href="users.php"><i class="glyphicon glyphicon-tasks"></i> See Users</a></li>
                  </ul>
                </li>

				<li class="submenu">
                 <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Today Staff
                    <span class="caret pull-right"></span>
                 </a>
                 <!-- Sub menu -->
                 <ul>
                    <li><a href="topick.php"><i class="glyphicon glyphicon-tasks"></i> Books To Pick</a></li>
					<li><a href="toreturn.php"><i class="glyphicon glyphicon-tasks"></i> Books to Return</a></li>
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
          $sqlget = "SELECT * FROM book";
          $result = $conn->query($sqlget);

          //delete username


          if ($result->num_rows > 0) {
            echo "<table class='table table-striped'><tr><th>ISBN</th><th>Title</th><th>Author</th><th>Publication Date</th><th>Price</th><th>Category</th><th>Publisher Name</th><th>Edition Year</th><th>Status</th><th>Edit</th><th>Delete</th></tr>";
              // output data of each row
              while($row = $result->fetch_assoc()) {
				  $bookid = $row["book_id"];
                  echo "<tr><td>".$row["isbn"]."</td><td>".$row["title"]."</td><td>".$row["author"]."</td><td>".$row["publicationDate"]."</td><td>".$row["price"]."</td><td>".$row["category"]."</td><td>".$row["publisher_name"]."</td><td>".$row["edition_year"]."</td><td>".$row["status"]."</td><td>";
				  ?>
				  <a href="editbook.php?id=<?php echo $bookid;?>"><button name='' class='btn btn-primary btn-xs editBtn' ><span class='glyphicon glyphicon-pencil'></span></button></a>
				  </td><td>
				  <a href="deletebook.php?id=<?php echo $bookid;?>"><button name='' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button></a>

				  <?php
              }
              echo "</table>";
          } else {
              echo "0 results";
          }


			if (isset($_POST['edit_book'])) {
				echo "asdasdasd";
			}

        ?>
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
