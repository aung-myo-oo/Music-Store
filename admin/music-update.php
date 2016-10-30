<?php

include ("confs/config.php");
$name = $_POST['name'];
$writer = $_POST['writer'];
$price = $_POST['price'];
$albums_id = $_POST['albums_id'];
$artist_id=$_POST['artist_id'];
$category_id = $_POST['category_id'];
$cover = $_FILES['cover']['name'];
$tmp = $_FILES['cover']['tmp_name'];

if($cover){
    move_uploaded_file($tmp, "cover/$cover");
}

$sql = "UPDATE music SET name='$name', writer='$writer', price='$price', albums_id='$albums_id', artist_id='$artist_id', category_id='$category_id', cover='$cover' WHERE id = $id";
mysql_query($sql);
header("location: music-list.php");
?>

