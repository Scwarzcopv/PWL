<?php 

include '../config/config.php';

error_reporting(0);
session_start();

if (isset($_SESSION['email'])) {
    header("Location: ../index.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Congratulations, successful registration!')</script>";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                echo '<script>window.location="login.php"</script>';
            } else {
                echo "<script>alert('Woops! There is an error.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Already Registered.')</script>";
        }
  
    } else {
        echo "<script>alert('Correct your password!')</script>";
    }
}

?>

<!DOCTYPE html>
<html class="html-custom">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    
    <title>UniSopv-Register</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/icon.png">
</head>
<body style="background: transparent;">
    <div class="col-11 col-sm-8 col-md-6 col-lg-4 center-hv bg-custom2 p-5 rounded shadowgreen border">
        <form action="" method="POST">
            <h1 class="col-10 col-md-8 mx-auto text-custom roboto-slab-serif font-weight-bold text-center mb-5 border">Register</h1>
            <h5 class="text-custom mb-1">Email:</h5>
            <div class="input-group">
                <input class="form-control" type="email" placeholder="&#xf2be;  Email" name="email" value="<?php echo $email; ?>" style="font-family:Arial, FontAwesome" required>
            </div>
            <h5 class="text-custom mt-3 mb-1">Password:</h5>
            <div class="input-group">
                <input class="form-control mb-2" type="password" placeholder="&#xf023;  Password" name="password" value="<?php echo $_POST['password']; ?>" style="font-family:Arial, FontAwesome" required>
            </div>
            <div class="input-group">
                <input class="form-control mb-2" type="password" placeholder="&#xf023;  Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" style="font-family:Arial, FontAwesome" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn btn-primary px-5 mt-3 mx-auto">Register</button>
            </div>
            <h6 class="mt-4 text-custom text-center">Already have an account? <a href="login.php">Login</a><br>or continue as <a href="../index.php">Guest</a></h6>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>