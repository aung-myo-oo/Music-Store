<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("confs/config.php");

$music_id = $_POST['music_id'];
$artist_id = $_POST['artist_id'];
$albums_id = $_POST['albums_id'];
$category_id = $_POST['category_id'];



$sql = "INSERT INTO song (music_id, artist_id, albums_id, category_id) VALUES ('$music_id', '$artist_id', '$albums_id', '$category_id')";

mysql_query($sql);
header("location: song-list.php");

?>
