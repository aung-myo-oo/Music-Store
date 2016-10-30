<?php
session_start();

$name = $_POST['username'];
$password = $_POST['password'];

if($name == "bigblackhacker" and $password == "1234"){
    $_SESSION['auth'] = TRUE;
    header("location: music-list.php");
}else {
    header("location: index.php?login=failed");
}

?>