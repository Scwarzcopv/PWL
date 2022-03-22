<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Week3.1 • Pengolahan Form</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://avatars.githubusercontent.com/u/92729204?v=4">
</head>
<body>
	<h1 class="text-start translate-middle position-absolute top-50 start-50 text-nowrap">
		<form ACTION="" METHOD="POST" NAME="input" class="mb-2 mb-lg-4">
			<div class="input-group input-group-lg">
				<span class="input-group-text fw-bolder text-dark">Nama Anda :</span>
				<input type="text" class="form-control me-2 me-lg-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Input Nama Anda" name="nama">
				<input class="btn btn-success rounded-3 px-5 ms-0" type="submit" name="Input" value="Input">
			</div>
		</form>
		<div class="text-center h2">
			<?php
				if (isset($_POST['Input'])) { 
					$nama = $_POST['nama'];
					echo "Nama Anda : <br><div class='fw-bolder h1 text-decoration-underline'>$nama</div>"; 
				} else {
					echo "<i>== NoName ==</i>";
				}
			?>
		</div>
	</h1>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>