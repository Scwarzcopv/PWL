<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    
    <title>UniSopv-Show Barang</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/icon.png">
</head>
<body>
    <h2>Daftar Barang</h2>
    <br/>
    <a href="tambah_barang.php">TAMBAH BARANG</a><br>
    <a href="home.php">KEMBALI</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Jumlah Stok</th>
            <th>OPSI</th>
        </tr>
        <?php 
        include '../config/config.php';
        $no = 1;
        $data = mysqli_query($conn,"select * from barang");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['harga']; ?></td>
                <td><?php echo $d['gambar']; ?></td>
                <td><?php echo $d['jml_stok']; ?></td>
                <td>
                    <a href="edit_barang.php?id=<?php echo $d['kode_barang']; ?>">EDIT</a>
                    <a href="hapus_barang.php?id=<?php echo $d['kode_barang']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>
</body>
</html>