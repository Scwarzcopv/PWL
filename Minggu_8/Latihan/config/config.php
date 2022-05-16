<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "minggu_8";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('GAGAL MENYAMBUNG DATABASE')</script>");
}

?>