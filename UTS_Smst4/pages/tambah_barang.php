<?php 
include '../config/config.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];
    $jml_stok = $_POST['jml_stok'];
     
    mysqli_query($conn,"insert into barang values('','$nama','$harga','$gambar','$jml_stok')");
     
    header("location:barang.php");
}
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    
    <title>UniSopv-Tambah Barang</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/icon.png">
</head>
<body>
    <h2>Tambah Barang</h2>
    <br/>
    <a href="barang.php">KEMBALI</a>
    <br/>
    <br/>
    <form method="post" action="">
        <table>
            <tr>            
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input type="text" name="gambar"></td>
            </tr>
            <tr>
                <td>Jumlah Stok</td>
                <td><input type="number" name="jml_stok"></td>
            </tr>
            <tr>
                <td></td>
                <td><button name="submit">SIMPAN</button>
            </tr>       
        </table>
    </form>
</body>
</html>