<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("confs/config.php");

$name = $_POST['name'];
$remark = $_POST['remark'];
$sql = "INSERT INTO category (name, remark) VALUES ('$name', '$remark')";

mysql_query($sql);
header("location: cat-list.php");

?>

