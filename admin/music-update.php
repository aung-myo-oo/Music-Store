<?php

include ("confs/config.php");
$id = $_POST['id'];
$name = $_POST['name'];
$writer = $_POST['writer'];
$size = $_POST['size'];
$link = $_POST['link'];
$cover = $_FILES['cover']['name'];
$tmp = $_FILES['cover']['tmp_name'];

if($cover){
    move_uploaded_file($tmp, "cover/$cover");
    $sql = "UPDATE music SET name='$name', writer='$writer', size='$size', cover='$cover', link='$link' WHERE music_id = $id";
}else{
	$sql = "UPDATE music SET name='$name', writer='$writer', size='$size', link='$link' WHERE music_id = $id";
}


mysql_query($sql);
header("location: music-list.php");
?>
