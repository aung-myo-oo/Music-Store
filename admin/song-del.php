<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("confs/config.php");
$id = $_GET['id'];
$sql = "DELETE FROM song WHERE song_id=$id";
mysql_query($sql);
header("location: song-list.php");

?>
