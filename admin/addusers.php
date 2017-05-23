<?php

if(isset($_POST['username']))
{
	//echo "asdasdas";
	require("dbconn.php");

  $username = $_POST["username"];
  $email = $_POST["email"];
  $password= $_POST["pwd"];

	if($username != "" && $email != "" && $password != "")
	{
		$pass = md5($password);
		
		if ($_POST["type"] == "admin") {
			$type = 1;
		}
		else if ($_POST["type"] == "member") {
			$type = 2;
		}
		else {
			$type = 3;
		}
		
		$query = "INSERT INTO users (role_id, name , password , email) VALUES ('$type' , '$username', '$pass', '$email')";
		$result = mysql_query($query);
		if($result) {
			$message = "User insert succeed";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Location:users.php");
		}
		else {
			echo "error";
		}
	}
	else {
		echo "one of the fields is empty";
	}

}
?>
