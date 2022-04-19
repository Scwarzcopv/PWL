<?php 
include '../config/config.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $password = $_POST['password'];
    $peran = $_POST['peran'];

    mysqli_query($conn,"insert into users values('','$nama','$email','$telp','$password','$peran')");
     
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
    
    <title>UniSopv-Tambah User</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/icon.png">
</head>
<body>
    <h2>Tambah User</h2>
    <br/>
    <a href="users.php">KEMBALI</a>
    <br/>
    <br/>
    <form method="post" action="">
        <table>
            <tr>            
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Telp</td>
                <td><input type="number" name="telp"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
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
</body>
</html>