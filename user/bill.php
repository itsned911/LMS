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
		//$id = $_GET["id"];
		
		$result = mysqli_query($con, "SELECT * FROM bill where user_id = $user_id and bill_status = 'unpaid'");
		//$result1 = mysqli_query($con, "SELECT * FROM users where id = $user_id");
		
		
		
		//$row1 = mysqli_fetch_array($result1);
		//$user_name = $row1['name'];
			
			
	?>
				<div class="span9">
					<div class="content">

					<?php 
						while($row = mysqli_fetch_array($result)) {
							$totalprice = $row['bill_price'];
							$user_name = $row['user_name'];
							$bookname = $row['book_name'];
					?>
					
						<div class="module">
							<div class="module-head">
								<h3>Bill Form</h3>
							</div>
							<div class="module-body">
								<form class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">User Name</label>
											<div class="controls">
												<label class="control-label"><?php echo $user_name; ?></label>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Book Name</label>
											<div class="controls">
												<label class="control-label"><?php echo $bookname; ?> </label>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Total Price</label>
											<div class="controls">
												<label class="control-label"><?php echo $totalprice; ?> $</label>
											</div>
										</div>
							</div>
						</div>
					</form>
					<?php 
						}
					?>

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
