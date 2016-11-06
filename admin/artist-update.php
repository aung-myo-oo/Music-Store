<?php

include ("confs/config.php");
$id = $_POST['id'];
$name = $_POST['name'];

$sql = "UPDATE artist SET name='$name' WHERE artist_id = $id";
mysql_query($sql);
header("location: artist-list.php");
?>
