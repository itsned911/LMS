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
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <?php
if(isset($_SESSION['usr_id'])!="") {
	//header("Location: index.php");
}
$id = $_SESSION['usr_id'];
include_once '../dbconnect.php';

$result = mysqli_query($con, "SELECT * FROM users WHERE id = $id");

$row = mysqli_fetch_array($result);
$name = $row['name'];
$email = $row['email'];
$pass = $row['password'];

//check if form is submitted
if (isset($_POST['edit'])) {
	$newName = $_POST['name'];
	$newemail = $_POST['email'];
	$newpass1 = $_POST['password'];
	$newpass = md5($newpass1);

	$result = mysqli_query($con, "update users set name='$newName',email='$newemail',password='$newpass' where id=$id");
	header("Location: profile.php");
}
?>


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
        <div class="row">
            <div class="content-box-large">
              <div class="panel-heading">
                    <div class="panel-title">Edit Profile</div>
               </div>
              <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="profile.php">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" value=<?php echo $name; ?> >
                    </div>
                  </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" value=<?php echo $email; ?>>
                  </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" id="basicinput" class="form-control" value=<?php echo $pass;?>>
                    </div>
                  </div>
				  
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="edit" class="btn btn-primary">SAVE</button>
                  </div>
                </div>
              </form>
              </div>
            </div>
        </div>
	  		<!--  Page content -->
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

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
  </body>
</html>
