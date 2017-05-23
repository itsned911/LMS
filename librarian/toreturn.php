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
		  
		  if (isset($_GET['id'])) {
			$borrow_id = $_GET['id'];
			$result = mysqli_query($conn, "update bill set bill_status='paid' where borrow_id = '$borrow_id'");
		  }
		  
		  if (isset($_GET['idd'])) {
			$book_id = $_GET['idd'];
			$result = mysqli_query($conn, "update book set status='available' where book_id = '$book_id'");
		  }
		  
		  $todaydate = Date("Y-m-d");

          $sqlget = "SELECT * FROM borrow where borrow_return_date = '$todaydate'";
          $result = $conn->query($sqlget);


          if ($result->num_rows > 0) {
		  
            echo "<table class='table table-striped'><tr><th>User Name</th><th>Book Name</th><th>Bill Price</th><th>Bill Status </th><th>Book Status </th><th>Action </th><th>Action </th></tr>";
              // output data of each row
              while($row = $result->fetch_assoc()) {
				  $borrowid = $row['borrow_id'];
				  $bookid = $row['borrow_book_id'];
				  $sql2 = "SELECT * FROM bill where borrow_id = $borrowid";
				  $result2 = $conn->query($sql2);
				  $row2 = $result2->fetch_assoc();
				  
				  $sql3 = "SELECT * FROM book where book_id = $bookid";
				  $result3 = $conn->query($sql3);
				  $row3 = $result3->fetch_assoc();
			  
                  echo "<tr><td>".$row2["user_name"]."</td><td>".$row["borrow_book_name"]."</td><td>".$row["book_price"]."</td><td>".$row2["bill_status"]."</td><td>".$row3["status"]."</td><td>";
				  ?>
				  <a href="toreturn.php?id=<?php echo $borrowid;?>"><button name='' class='btn btn-primary btn-xs editBtn'>PAID</button></a>
				  </td><td>
				  <a href="toreturn.php?idd=<?php echo $bookid;?>"><button name='' class='btn btn-primary btn-xs editBtn'>Returned</button></a>
				  
		<?php
              }
          } else {
              echo "0 results";
          }
		
        ?>
		
		</table>
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
