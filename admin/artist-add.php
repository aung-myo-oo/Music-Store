<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("confs/config.php");

$name = $_POST['name'];
$sql = "INSERT INTO artist (name) VALUES ('$name')";

mysql_query($sql);
header("location: artist-list.php");

?>

