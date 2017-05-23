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
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
   <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
      <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />


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
	           <div class="col-md-5"></div>
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
        <div id="page-inner">
          <div class="row">
              <div class="col-lg-12">
               <h2>LIBRARIAN DASHBOARD</h2>
              </div>
          </div>
            <!-- /. ROW  -->
          <div class="row text-center pad-top">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                    <a href="add_book.php">
                     <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>Add Books</h4>
                    </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                      <a href="users.php">
                       <i class="fa fa-users fa-5x"></i>
                        <h4>See Users</h4>
                      </a>
                </div>
            </div>
        </div>
        </div>
            <!-- /. ROW  -->
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
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
