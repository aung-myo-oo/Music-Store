<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("confs/config.php");

$name = $_POST['name'];
$sql = "INSERT INTO albums (name) VALUES ('$name')";

mysql_query($sql);
header("location: albums-list.php");

?>

