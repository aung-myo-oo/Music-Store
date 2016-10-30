<?php

include ("confs/config.php");
$id = $_POST['id'];
$name = $_POST['name'];

$sql = "UPDATE albums SET name='$name' WHERE id = $id";
mysql_query($sql);
header("location: albums-list.php");
?>

