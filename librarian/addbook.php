<?php

if(isset($_POST['isbn']))
{
	require("dbconn.php");
	$isbn = $_POST['isbn'];
	$title = $_POST['btitle'];
	$author = $_POST['aname'];
	$category = $_POST['bcategory'];
	$price = $_POST['bprice'];
	$date = $_POST['date'];
	$pubName = $_POST['pubName'];
	$year = $_POST['year'];
	
	$Pic=$_FILES["pic"]["name"];		
    $loc="../book/".$Pic;
		
	if ($Pic == "")
        $Pic = "no_image.jpg";
	
	if(!file_exists(".$Pic")){
		move_uploaded_file($_FILES['pic']['tmp_name'],$loc);
	}
			

	if($isbn != "" && $title != "" && $author != "" && $category != "" && $price != "" && $date != ""&& $pubName != "" && $year != "")
	{
		$query = "INSERT INTO" . " book (isbn,title,author,category,price,publicationDate,publisher_name,edition_year,image) VALUES ('" . $isbn . "','" . $title . "','" . $author . "','" . $category . "','" .$price . "','" . $date. "','" .$pubName . "','" . $year. "','" . $Pic. "')";
		$result = mysql_query($query) or die(mysql_error());
		if($result) {
			$message = "Book insert succeed";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Location:seebook.php");
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
