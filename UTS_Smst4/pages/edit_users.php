<?php 
include '../config/config.php';
if (isset($_POST['submit'])) {
    $kode_user = $_POST['kode_user'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $password = $_POST['password'];
    $peran = $_POST['peran'];
     
    mysqli_query($conn,"update users set nama='$nama', email='$email', telp='$telp', password='$password', peran='$peran' where kode_user='$kode_user'");
     
    header("location:users.php");
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
    
    <title>UniSopv-Edit Users</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/icon.png">
</head>
<body>
    <h2>Edit Users</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
 
    <?php
    include '../config/config.php';
    $kode_user = $_GET['id'];
    $data = mysqli_query($conn,"select * from users where kode_user='$kode_user'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="">
            <table>
                <tr>            
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="kode_user" value="<?php echo $d['kode_user']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="<?php echo $d['email']; ?>"></td>
                </tr>
                <tr>
                    <td>Telp</td>
                    <td><input type="number" name="telp" value="<?php echo $d['telp']; ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password" value="<?php echo $d['password']; ?>"></td>
                </tr>
                <tr>
                    <td>Peran</td>
                    <td>
                        <select name="peran">
                            <option value="admin">Admin</option>
                            <option value="users">User</option>
                        </select>
                    </td>
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