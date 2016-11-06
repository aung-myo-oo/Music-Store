<?php

include ("confs/config.php");
$id = $_POST['id'];
$music_id = $_POST['music_id'];
$artist_id = $_POST['artist_id'];
$albums_id = $_POST['albums_id'];
$category_id = $_POST['category_id'];




    $sql = "UPDATE song SET music_id='$music_id', artist_id='$artist_id', albums_id='$albums_id', category_id='$category_id' WHERE song_id = $id";





mysql_query($sql);
header("location: song-list.php");
?>
