<?php 
	include '../config/config.php';
	session_start();
	if (isset($_SESSION['username'])) {
	    header("Location: ../index.php");
	}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Login - UnisopvStore</title>
	<link rel="icon" href="../images/icon.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/cooltipz-css/cooltipz.min.css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='https://unpkg.com/aos@2.3.0/dist/aos.css'>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body style="overflow-x: hidden;">
	<!-- NAVBAR 1 -->
	<nav class="navbar navbar-dark bg-dark text-light ">
		<div class="container">
			<div class="mx-auto mx-md-0 me-md-auto">
				Wellcome to <a href="../index.php" class="text-decoration-none pe-4 me-4 border-end">Unisopv-Store</a>
				Social Media:
				<a class="btn btn-light btn-fb rounded-circle btn-lg-custom mx-1" href=""
				data-cooltipz-dir="bottom-left" aria-label="Facebook">
					<i class="fab fa-facebook-f"></i>
				</a>
				<a class="btn btn-light btn-wa rounded-circle btn-lg-custom me-1" href=""
				data-cooltipz-dir="bottom-left" aria-label="Whatsapp">
					<i class="fab fa-whatsapp"></i>
				</a>
				<a class="btn btn-light btn-ig rounded-circle btn-lg-custom" href=""
				data-cooltipz-dir="bottom-left" aria-label="Instagram">
					<i class="fab fa-instagram"></i>
				</a>
			</div>
			<div class="me-auto me-md-0 ms-md-auto">
				<a class="btn btn-outline-light" href="register.php#register">Register</a>
			</div>
			<!-- NAVBAR 2.1 SM -->
			<div class="d-flex ms-auto d-block d-md-none pt-3 me-3">
				<a class="btn btn-cart btn-dark btn-dark-custom rounded-circle pt-2 me-2" href="">
					<i class="fa-solid fa-heart badge-cart" value=0></i>
				</a>
				<a class="btn btn-cart btn-dark btn-dark-custom rounded-circle pt-2" href="">
					<i class="fa-solid fa-cart-shopping badge-cart" value=0></i>
				</a>
			</div>
		</div>
	</nav>
	<!-- NAVBAR 2 -->
	<nav class="navbar navbar-light bg-light text-dark">
		<div class="container">
			<a href="../index.php" class="w-50 mx-auto mx-md-0 d-block d-md-none" data-aos="fade-right"><img class="navbar-brand w-100" src="../images/eva-logo.png"></a>
			<a href="../index.php" class="w-25 mx-auto mx-md-0 d-none d-md-block" data-aos="fade-right"><img class="navbar-brand w-100" src="../images/eva-logo.png"></a>
			<form method="post" action="" class="d-flex mx-auto col-12 col-md-5">
				<input class="form-control form-search form-control-lg rounded-0 rounded-start" type="search" placeholder="Search">
				<button class="btn btn-lg btn-dark btn-dark-custom rounded-0 rounded-end" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
			</form>
			<!-- NAVBAR 2.2 MD -->
			<div class="d-flex ms-auto">
				<a class="btn btn-cart btn-dark btn-dark-custom rounded-circle pt-2 me-4" href="">
					<i class="fa-solid fa-heart badge-cart" value=0></i>
				</a>
				<a class="btn btn-cart btn-dark btn-dark-custom rounded-circle pt-2" href="">
					<i class="fa-solid fa-cart-shopping badge-cart" value=0></i>
				</a>
			</div>
		</div>
	</nav>
	<!-- NAVBAR 3 -->
	<nav class="navbar navbar-expand-lg navbar-light bg-danger text-dark fw-bold py-0 sticky-top" style="font-family: serif;">
		<div class="container">
			<!-- NAVBAR 3 MD -->
			<div class="me-auto d-none d-md-block">
				<div class="nav-item dropdown">
					<a class="btn btn-danger active fw-bolder py-3 rounded-0 p-more" href="#" data-bs-toggle="dropdown">
						<i class="fa-solid fa-bars me-2"></i> ALL GUNDAM GRADES
					</a>
					<ul class="dropdown-menu bg-danger w-100 fade-down">
						<form method="post" action="search.php">
						<li class="d-grid gap-2">
							<input type="submit" name="filter-grade" value="[SD] Super Deformed" class="btn btn-danger fw-bolder text-start" >
						</li>
						<li class="d-grid gap-2">
							<input type="submit" name="filter-grade" value="[HG] High Grade" class="btn btn-danger fw-bolder text-start" >
						</li>
						<li class="d-grid gap-2">
							<input type="submit" name="filter-grade" value="[RG] Real Grade" class="btn btn-danger fw-bolder text-start" >
						</li>
						<li class="d-grid gap-2">
							<input type="submit" name="filter-grade" value="[MG] Master Grade" class="btn btn-danger fw-bolder text-start" >
						</li>
						<li class="d-grid gap-2">
							<input type="submit" name="filter-grade" value="[PG] Perfect Grade" class="btn btn-danger fw-bolder text-start" >
						</li>
						</form>
					</ul>
				</div>
			</div>	
			<!-- NAVBAR 3 SM -->
			<div class="container row d-md-none">
				<button class="col-2 btn-nav-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa-solid fa-bars fa-lg"></i>
				</button>
				<div class="nav-item dropdown d-grid gap-2 col-10 px-0">
					<a class="btn btn-danger active fw-bolder py-3 rounded-0 text-start" href="#" data-bs-toggle="dropdown">
						<i class="fa-solid fa-bars me-2"></i> ALL GUNDAM GRADES
					</a>
					<ul class="dropdown-menu bg-danger w-100 fade-down">
						<form method="post" action="search.php">
						<li class="d-grid gap-2">
							<input type="submit" name="filter-grade" value="[SD] Super Deformed" class="btn btn-danger fw-bolder text-start" >
						</li>
						<li class="d-grid gap-2">
							<input type="submit" name="filter-grade" value="[HG] High Grade" class="btn btn-danger fw-bolder text-start" >
						</li>
						<li class="d-grid gap-2">
							<input type="submit" name="filter-grade" value="[RG] Real Grade" class="btn btn-danger fw-bolder text-start" >
						</li>
						<li class="d-grid gap-2">
							<input type="submit" name="filter-grade" value="[MG] Master Grade" class="btn btn-danger fw-bolder text-start" >
						</li>
						<li class="d-grid gap-2">
							<input type="submit" name="filter-grade" value="[PG] Perfect Grade" class="btn btn-danger fw-bolder text-start" >
						</li>
						</form>
					</ul>
				</div>
			</div>
			<!-- NAVBAR 3 COLLAPSE -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="btn btn-danger-nav fw-bolder py-2 py-md-3 me-md-3" href="../index.php">HOME</a>
					</li>
					<li class="nav-item">
						<a class="btn btn-danger-nav fw-bolder py-2 py-md-3 pe-0 me-0" href="product.php">SHOP</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- HEADER -->
	<div class=" bg-gra d-flex align-items-stretch" data-parallax="scroll" data-image-src="../images/banner2-img.jpg" data-aos="fade">
		<div class="container d-flex align-items-stretch position-relative">
			<div class="position-absolute top-0 end-0 pe-2 text-light fw-bolder"><span id="time"></span></div>
			<div class="eva-font my-md-5 align-self-center text-center mx-auto" data-aos="fade-up" data-aos-delay="350">
				<h2 class="fw-bolder eva-heading_title mt-4"># &nbsp;&nbsp;UNISOPV-STORE&nbsp;&nbsp; #</h2>
				<h4 class="fw-bolder eva-heading_title mb-4">LOGIN</h4>
			</div>
		</div>
	</div>
	<!-- LOGIN -->
	<div id="login"></div>
	<div class="container mt-md-5 pt-md-3 text-start text-secondary">
		<div class="h4 border-bottom d-inline-block pb-md-2 border-secondary border-3 mb-md-5 fw-bolder">
			Login
		</div>
		<form method="POST" action="">
			<div class="h5">
				Username <span class="text-danger">*</span>
				<div class="col-md-6 d-grid my-2 my-md-3">
					<div class="input-group input-group-lg">
						<input type="text" class="form-control rounded-0" name="username" placeholder="Username" required>
					</div>
				</div>
				Password <span class="text-danger">*</span>
				<div class="col-md-6 d-grid my-2 my-md-3">
					<div class="input-group input-group-lg">
						<input type="password" class="form-control rounded-0" name="password" placeholder="Password" required>
					</div>
				</div>
				<div class="col-md-2 d-grid mt-4">
					<button class="btn btn-lg btn-dark btn-dark-custom rounded-0 fw-bolder" type="submit" name="submit-login">LOG IN</button>
				</div>
			</div>
		</form>
		<div class="my-2"></div>
		<a href="register.php#register" class="btn-red">Don't have an account?</a>
	</div>
	<!-- FOOTER -->
	<div class="container mt-md-5 pt-md-4 text-center">
		<div class="h4 text-center fw-bolder text-secondary p-0 m-0">
			Social Media
		</div>
		<div class="h2 text-center fw-bolder text-secondary p-0 m-0">
			Contact Me @UNISOPV-STORE
		</div>
		<div class="line bg-secondary mx-auto mt-md-3 mb-md-5 pb-md-2" data-aos="fade-left"></div>
	</div>
	<div class="container-fluid bg-dark">
		<div class="container py-md-5">
			<div class="row">
				<div class="col-md-6 d-flex align-items-center flex-column justify-content-center">
					<div class="col-md-6 mx-auto" data-aos="fade-right">
						<img class="w-100" src="../images/eva-logo2.png"></a>
					</div>
					<div class="p-0 m-0 text-secondary">
						© <a href="../index.php" class="text-decoration-none">Unisopv-Store</a>. All Rights Reserved.
					</div>
				</div>
				<div class="col-md-6 d-flex align-items-center flex-column justify-content-center" data-aos="fade" data-aos-delay="450">
					<div class="mx-auto text-light">
						<table class="table table-borderless text-light h4 mb-0">
							<tr>
								<td><i class="fa-solid fa-check text-danger"></i></td>
								<td>Instagram</td>
								<td>:</td>
								<td><a href="" class="btn btn-outline-light rounded-0"><i class="fa-brands fa-instagram-square fa-lg"></i></a></td>
							</tr>
							<tr>
								<td><i class="fa-solid fa-check text-danger"></i></td>
								<td>WhatsApp</td>
								<td>:</td>
								<td><a href="" class="btn btn-outline-light rounded-0"><i class="fa-brands fa-whatsapp-square fa-lg"></i></a></td>
							</tr>
							<tr>
								<td><i class="fa-solid fa-check text-danger"></i></td>
								<td>Facebook</td>
								<td>:</td>
								<td><a href="" class="btn btn-outline-light rounded-0"><i class="fa-brands fa-facebook-square fa-lg"></i></a></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="../js/parallax.js"></script>
	<script src='https://unpkg.com/aos@2.3.0/dist/aos.js'></script>
	<script>
		AOS.init({
			duration: 1000,
		})

		if ( window.history.replaceState ) {
			window.history.replaceState( null, null, window.location.href );
		}
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 
if (isset($_POST['submit-login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM akun WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row['status']=="1"){
            $_SESSION['username'] = $row['username'];
            $_SESSION['success-login'] = 'True';
            $_SESSION['img-user'] = $row['images'];
            $_SESSION['user'] = strlen($row['username']) > 12 ? substr($row['username'],0,12)."..." : $row['username'];
            echo '<script>window.location="../index.php"</script>';
        }else if($row['status']=="2"){
            $_SESSION['username'] = $row['username'];
            $_SESSION['success-login'] = 'True';
            $_SESSION['img-user'] = $row['images'];
            $_SESSION['user'] = strlen($row['username']) > 12 ? substr($row['username'],0,12)."..." : $row['username'];
            echo '<script>window.location="../index.php"</script>';
        }
    } else {
    	echo "<script>
    		window.location='#login'
			const Custom = Swal.mixin({
				position: 'top',
				timer: 3000,
				timerProgressBar: true,
				backdrop: false,
				keydownListenerCapture: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})
			Custom.fire({
			  	icon: 'error',
			  	title: 'Oops...',
			  	text: 'Incorrect username / password' 
			})
    	</script>";
    }
}
?>
<?php 
	if (isset($_SESSION['massage'])) {
		echo $_SESSION['massage'];
	}
	unset($_SESSION['massage']);
?>
</body>
</html>