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

  $user_id = $_POST['user_id'];

  $sql = "DELETE FROM users WHERE id = $user_id";
  $result = $conn->query($sql);

  if ($result) {
    echo "deleted";
  } else {
    echo "not deleted";
  }


  $conn->close();
?>
