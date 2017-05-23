<?php
session_start();
include_once "../dbconnect.php";
$user_id = $_SESSION['usr_id'];

if(isset($_POST['reservenow']))
{
	$user_name = $_POST['username'];
	$id = $_POST['bookid'];
	$bookname = $_POST['bookname'];
	$bookprice = $_POST['bookprice'];
	$pdate = $_POST['pickdate'];
	$returnDate = date('Y-m-d', strtotime($pdate. ' + 14 days'));

	
	$query = "INSERT INTO borrow (borrow_book_id,borrow_book_name,borrow_mem_id,borrow_date,borrow_return_date,borrow_status,book_price) VALUES ('" . $id . "','" . $bookname . "','" . $user_id . "','" . $pdate . "','" .$returnDate . "','" . "not available" . "','" .$bookprice . "')";
	
	$result = mysqli_query($con, $query);
	$last_id = $con->insert_id;
	
	$result1 = mysqli_query($con, "update book set status='$returnDate' where book_id=$id");
	
	$query1 = "INSERT INTO bill (user_id,borrow_id,book_id,user_name,book_name,bill_price,bill_status) VALUES ('" . $user_id . "','" . $last_id ."','" . $id . "','" . $user_name ."','" . $bookname . "','" . $bookprice . "','" . "unpaid" . "')";
	
	$result2 = mysqli_query($con, $query1);
	
	if($result) {
		$message = "Reserve succeed";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("Location:index.php");
	}
	else {
		echo "error";
		}
	
	
}		
?>
