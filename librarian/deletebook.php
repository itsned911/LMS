<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "lms";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if (isset($_GET["id"])) {
	  $id = $_GET["id"];
	  $sql = "DELETE FROM book WHERE book_id = $id";
	  $result = $conn->query($sql);
  }

  if ($result) {
    header("location: seebook.php");
  } else {
    echo "not deleted";
  }


  $conn->close();
?>
