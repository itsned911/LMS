<?php
error_reporting(E_ALL & E_NOTICE);
error_reporting(E_ALL & E_NOTICE & E_DEPRECATED);

//Give your mysql username password and database name
$name="root";
$pas="";
$dbname="lms";
$con=mysql_connect("localhost",$name,$pas);
mysql_select_db($dbname,$con);
?>
