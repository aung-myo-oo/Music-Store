<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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



$sql = "INSERT INTO music (name, writer, price, albums_id, artist_id, category_id, cover) VALUES ('$name', '$writer', '$price', '$albums_id', '$artist_id', '$category_id', '$cover')";

mysql_query($sql);
header("location: music-list.php");

?>

