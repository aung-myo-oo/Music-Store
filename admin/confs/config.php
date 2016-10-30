<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "online_store";

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $conn);
?>