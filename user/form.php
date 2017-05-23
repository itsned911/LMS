<?php
	session_start();

	if(isset($_SESSION['usr_id']) == "") {
		header("Location: ../index.php");
	}
?>

<?php
include_once '../dbconnect.php';
?>
<?php include('include/header.php'); ?>
    <link href="../style.css" rel="stylesheet">

	<?php 
		$user_id = $_SESSION['usr_id'];
		$id = $_GET["id"];
		
		$result = mysqli_query($con, "SELECT * FROM book where book_id = $id");
		$result1 = mysqli_query($con, "SELECT * FROM users where id = $user_id");
		
		$row = mysqli_fetch_array($result);
		$title = $row['title'];
		$price = $row['price'];
		
		$row1 = mysqli_fetch_array($result1);
		$user_name = $row1['name'];
			
			
	?>
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Reserve Form</h3>
							</div>
							<div class="module-body">

									<form class="form-horizontal row-fluid" action="reservebook.php" method="post">
										<div class="control-group">
											<label class="control-label" for="basicinput">User Name</label>
											<div class="controls">
												<label class="control-label"><?php echo $user_name; ?></label>
												<input type="text" name="username" value="<?php echo $user_name; ?>" class="hidden">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Book Name</label>
											<div class="controls">
												<label class="control-label" value="bookname"><?php echo $title; ?></label>
												<input type="text" name="bookname" value="<?php echo $title; ?>" class="hidden">
												<input type="text" name="bookid" value="<?php echo $id; ?>" class="hidden">
												<input type="text" name="bookprice" value="<?php echo $price; ?>" class="hidden">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Pick Up Date</label>
											<div class="controls">
												<input type="date" name="pickdate" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="reservenow" class="btn">Reserve Book</button>
											</div>
										</div>
									</form>
							</div>
						</div>



					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">


			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
