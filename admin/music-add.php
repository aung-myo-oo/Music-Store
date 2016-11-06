<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("confs/config.php");

$name = $_POST['name'];
$writer = $_POST['writer'];
$size = $_POST['size'];
$link = $_POST['link'];
$cover = $_FILES['cover']['name'];
$tmp = $_FILES['cover']['tmp_name'];

if($cover){
    move_uploaded_file($tmp, "cover/$cover");
}



$sql = "INSERT INTO music (name, writer, size, cover, link) VALUES ('$name', '$writer', '$size', '$cover', '$link')";

mysql_query($sql);
header("location: music-list.php");

?>
