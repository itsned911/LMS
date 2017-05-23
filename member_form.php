<?php
session_start();
include_once 'dbconnect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

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
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">LMS</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="col-md-12">
  <div class="row">
      <div class="content-box-large">
        <div class="panel-heading">
              <div class="panel-title">Complete Member Name</div>

              <div class="panel-options">
                <a href="member_form.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
              </div>
          </div>
        <div class="panel-body">
          <form class="form-horizontal" role="form" method="POST" action="addmember.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">First Name</label>
              <div class="col-sm-10">
                <input type="text" name="fname" class="form-control" placeholder="First Name">
              </div>
            </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
              <input type="text" name="lname" class="form-control" placeholder="Last Name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Sex</label>
            <div class="col-sm-10">
              <select class="form-control" name="sex">
								<option value="male">Male</option>
								<option value="female">Female</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Date Of Birth</label>
            <div class="col-sm-10">
              <input type="date" name="dob" class="form-control" placeholder="Date Of Birth">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
              <input type="text" name="address" class="form-control" placeholder="Address">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Home Phone</label>
            <div class="col-sm-10">
              <input type="number" name="homephone" class="form-control" placeholder="Home Phone">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Mobile Phone</label>
            <div class="col-sm-10">
              <input type="number" name="mobilephone" class="form-control" placeholder="Mobile Phone">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nationality</label>
            <div class="col-sm-10">
              <input type="text" name="nationality" class="form-control" placeholder="nationality">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
        </div>
      </div>
  </div>
  <!--  Page content -->
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
