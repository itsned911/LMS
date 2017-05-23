<?php
	session_start();

	if(isset($_SESSION['usr_id']) == "") {
		header("Location: ../index.php");
	}
?>

<?php

$id = $_SESSION['usr_id'];
include_once '../dbconnect.php';

$result = mysqli_query($con, "SELECT * FROM member WHERE user_id = $id");

$row = mysqli_fetch_array($result);
$name = $row['name'];
$email = $row['email'];
$sex = $row['sex'];
$dob = $row['dob'];
$address = $row['address'];
$phone = $row['phone'];
$nation = $row['nationality'];

$result1 = mysqli_query($con, "SELECT * FROM users WHERE id = $id");

$row1 = mysqli_fetch_array($result1);
$pass = $row1['password'];


//check if form is submitted
if (isset($_POST['edit'])) {
	$newName = $_POST['name'];
	$newemail = $_POST['email'];
	$newsex = $_POST['sex'];
	$newdob = $_POST['dob'];
	$newaddress = $_POST['address'];
	$newphone = $_POST['phone'];
	$newnation = $_POST['nationality'];
	$newpass1 = $_POST['password'];
	$newpass = md5($newpass1);
	
	$result = mysqli_query($con, "update users set name='$newName',email='$newemail',password='$newpass' where id=$id");
	$result2 = mysqli_query($con, "update member set name='$newName',email='$newemail',sex='$newsex',dob='$newdob',address='$newaddress',phone='$newphone',nationality='$newnation' where user_id=$id");
	header("Location: edit_profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include('include/header.php'); ?>

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Edit Profile</h3>
							</div>
							<div class="module-body">
  							<form class="form-horizontal row-fluid" method="POST" action="edit_profile.php">
                  <div class="control-group">
                    <label class="control-label" for="basicinput">Name</label>
                    <div class="controls">
                      <input type="text" name="name" id="name" value=<?php echo $name; ?> class="span8">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="basicinput">Email</label>
                    <div class="controls">
                      <input type="text" name="email" id="email" value=<?php echo $email; ?> class="span8">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="basicinput" name="sex">Sex</label>
                    <div class="controls">
                      <select tabindex="1" data-placeholder="Select here.." class="span8" name="sex">
                        <option value="">Select here..</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="basicinput">Date Of Birth</label>
                    <div class="controls">
                      <input type="date" name="dob" id="basicinput" value=<?php echo $dob; ?> class="span8">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="basicinput">Address</label>
                    <div class="controls">
                      <input type="text" name="address" id="basicinput" class="span8" placeholder="Address" value=<?php if($address){echo $address;}?> >
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="basicinput">Mobile Number</label>
                    <div class="controls">
                      <input type="number" name="phone" id="basicinput" class="span8" placeholder="Mobile Number" value=<?php if($phone){echo $phone;}?>>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="basicinput">Nationality</label>
                    <div class="controls">
                      <input type="text" name="nationality" id="basicinput" class="span8" placeholder="Nationality" value=<?php if($nation){echo $nation;}?>>
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="basicinput">Password</label>
                    <div class="controls">
                      <input type="password" name="password" id="basicinput" class="span8" value=<?php echo $pass;?>>
                    </div>
                  </div>
  								<div class="control-group">
  									<div class="controls">
  										<button type="submit" name="edit" class="btn">Submit Form</button>
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
