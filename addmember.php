<?php

if(isset($_POST['fname']))
{
	require("dbconn.php");

  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $sex = $_POST["sex"];
	$dob = $_POST["dob"];
	$address = $_POST["address"];
	$homephone= $_POST["homephone"];
	$mobilephone = $_POST["mobilephone"];
	$nationality = $_POST["nationality"];

	if($fname != "" && $lname != "" && $sex != ""&& $dob != "" && $address != ""&& $homephone != "" && $mobilephone != "" && $nationality != "")
	{
		$query = "INSERT INTO" . " member (fname , lname , sex , dob , address , homephone , mobilephone , nationality) VALUES
		('" . $fname . "','" . $lname . "','" . $sex . "','" . $dob . "','" . $address . "','" . $homephone . "','" . $mobilephone . "','" . $nationality . "')";
		$result = mysql_query($query) or die(mysql_error());
		if($result)
		$message = "Information insert succeed";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("Location:user/index.php");
	}
	else
	echo "one of the fields is empty";
}
?>
