<?php 
include '../config/config.php';
if (isset($_POST['submit'])) {
    $kode_barang = $_POST['kode_barang'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];
    $jml_stok = $_POST['jml_stok'];
     
    mysqli_query($conn,"update barang set nama='$nama', harga='$harga', gambar='$gambar', jml_stok='$jml_stok' where kode_barang='$kode_barang'");
     
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
    
    <title>UniSopv-Edit Barang</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/icon.png">
</head>
<body>
    <h2>Edit Barang</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
 
    <?php
    include '../config/config.php';
    $kode_barang = $_GET['id'];
    $data = mysqli_query($conn,"select * from barang where kode_barang='$kode_barang'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="">
            <table>
                <tr>            
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="kode_barang" value="<?php echo $d['kode_barang']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" name="harga" value="<?php echo $d['harga']; ?>"></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td><input type="text" name="gambar" value="<?php echo $d['gambar']; ?>"></td>
                </tr>
                <tr>
                    <td>Jumlah Stok</td>
                    <td><input type="text" name="jml_stok" value="<?php echo $d['jml_stok']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button name="submit">SIMPAN</button>
                </tr>       
            </table>
        </form>
        <?php 
    }
    ?>
</body>
</html>