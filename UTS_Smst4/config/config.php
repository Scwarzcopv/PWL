<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "toko_abc";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('GAGAL MENYAMBUNG DATABASE')</script>");
}

?>