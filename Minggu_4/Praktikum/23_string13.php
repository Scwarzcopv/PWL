<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Week4.23 • String 13</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://avatars.githubusercontent.com/u/92729204?v=4">
</head>
<body>
	<h1 class="text-start translate-middle position-absolute top-50 start-50 text-nowrap">
		<form action="" method="post"> 
			<label class="form-label">NIM anda:</label>
  			<textarea class="form-control" name="txtnim" rows="4" cols="80"></textarea>
  			<button type="submit" class="btn-lg btn-primary" name="Submit">Proses</button>
  		</form>
	<?php 
		if (isset($_POST['Submit'])) { 
			$nim = $_POST['txtnim']; 
			$a = substr ($nim, 2, 2); 
			switch($a) { 
				case '11' : $jurusan = "Teknik Informatika"; 
				break; 
				case '22' : $jurusan = "Sistem Informasi"; 
				break; 
				case '33' : $jurusan = "Sistem Komputer"; 
				break; 
				case '44' : $jurusan = "Komputerisasi Akuntansi"; 
				break; 
				default : $jurusan = "Salah jurusan"; 
			} 
			echo "Nim Anda : $nim<br>"; 
			echo "Jurusan Anda : $jurusan"; 
		}
	?>
	</h1>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>