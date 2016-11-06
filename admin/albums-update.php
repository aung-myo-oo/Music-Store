<?php

include ("confs/config.php");
$id = $_POST['albums_id'];
$name = $_POST['name'];

$sql = "UPDATE albums SET name='$name' WHERE albums_id = $id";
mysql_query($sql);
header("location: albums-list.php");
?>
