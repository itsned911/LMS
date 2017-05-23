<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LMS</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
			
	
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Lms </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
						 
						<form class="navbar-search pull-left input-append" method="post" action="index.php">
						<input type="text" name="data" class="span3" style="margin-left:200px;">
						<select name="by" style="width:120px;">
							<option value="title">title</option>
							<option value="author">author</option>
							<option value="publicationDate">year</option>
							<option value="publisher_name">Publisher Name</option>
						</select>
						<button class="btn" name="search" type="submit">
							<i class="icon-search"></i>
						</button>
					</form>
	                  
						   
                        <ul class="nav pull-right">
	                  
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="divider"></li>
                                    <?php if (isset($_SESSION['usr_id'])) { ?>
									<li><a href="edit_profile.php">Edit Profile</a></li>
                                    <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Log Out</a></li>
                                    <?php } else { ?>
                                    <li><a href="../login.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a></li>
                                    <li><a href="../register.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Sign Up</a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
					
                    <div class="span3">
					

                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active" style="font-size:20px;"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Books
                                </a></li>
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages1"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Title </a>
                                    <ul id="togglePages1" class="collapse unstyled">
                                        <li><a href="index.php?id11"><i class="icon-inbox"></i> A-Z </a></li>
                                        <li><a href="index.php?id12"><i class="icon-inbox"></i> Z-A </a></li>
                                    </ul>
                                </li>
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages2"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Author </a>
                                    <ul id="togglePages2" class="collapse unstyled">
                                        <li><a href="index.php?id21"><i class="icon-inbox"></i> A-Z </a></li>
                                        <li><a href="index.php?id22"><i class="icon-inbox"></i> Z-A </a></li>
                                    </ul>
                                </li>
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages3"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Publish Date </a>
                                    <ul id="togglePages3" class="collapse unstyled">
                                        <li><a href="index.php?id31"><i class="icon-inbox"></i> Oldest </a></li>
                                        <li><a href="index.php?id32"><i class="icon-inbox"></i> Newest</a></li>
                                    </ul>
                                </li>
								<li><a class="collapsed" data-toggle="collapse" href="#togglePages4"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Publisher Name </a>
                                    <ul id="togglePages4" class="collapse unstyled">
                                        <li><a href="index.php?id41"><i class="icon-inbox"></i> A-Z </a></li>
                                        <li><a href="index.php?id42"><i class="icon-inbox"></i> Z-A </a></li>
                                    </ul>
                                </li>
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages5"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Edition Year </a>
                                    <ul id="togglePages5" class="collapse unstyled">
                                        <li><a href="index.php?id51"><i class="icon-inbox"></i> Oldest </a></li>
                                        <li><a href="index.php?id52"><i class="icon-inbox"></i> Newest </a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!--/.widget-nav-->

                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>CATEGORIES </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="index.php?cat1"><i class="icon-inbox"></i> Science and technology </a></li>
                                        <li><a href="index.php?cat2"><i class="icon-inbox"></i> Poetry and romance </a></li>
                                        <li><a href="index.php?cat3"><i class="icon-inbox"></i> Cook and food </a></li>
                                        <li><a href="index.php?cat4"><i class="icon-inbox"></i> Education </a></li>
                                    </ul>
                                </li>
                                <li><a href="bill.php"><i class="menu-icon icon-signout"></i>BILL </a></li>
                            </ul>
                        </div>
						
                        <!--/.sidebar-->
                    </div>
