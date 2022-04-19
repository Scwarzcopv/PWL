<?php 
include '../config/config.php';
$kode_user = $_GET['id'];
mysqli_query($conn,"delete from users where kode_user='$kode_user'");
header("location:users.php");
?>