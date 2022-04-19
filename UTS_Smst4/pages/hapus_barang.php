<?php 
include '../config/config.php';
$kode_barang = $_GET['id'];
mysqli_query($conn,"delete from barang where kode_barang='$kode_barang'");
header("location:barang.php");
?>