<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    
    <title>UniSopv-Show Users</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/icon.png">
</head>
<body>
    <h2>Daftar Users</h2>
    <br/>
    <a href="tambah_users.php">TAMBAH USERS</a><br>
    <a href="home.php">KEMBALI</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telp</th>
            <th>Password</th>
            <th>Peran</th>
        </tr>
        <?php 
        include '../config/config.php';
        $no = 1;
        $data = mysqli_query($conn,"select * from users");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['telp']; ?></td>
                <td><?php echo $d['password']; ?></td>
                <td><?php echo $d['peran']; ?></td>
                <td>
                    <a href="edit_users.php?id=<?php echo $d['kode_user']; ?>">EDIT</a>
                    <a href="hapus_users.php?id=<?php echo $d['kode_user']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>
</body>
</html>