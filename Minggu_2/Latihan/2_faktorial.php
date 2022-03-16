<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Week2.L2 • Faktorial</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://avatars.githubusercontent.com/u/92729204?v=4">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil = $_POST['bil'];
	}
	?>
	<form method="post" action="2_faktorial.php" class="col-lg-4">
		<div class="input-group p-lg-2">
			<div class="input-group input-group-lg">
				<span class="input-group-text fw-bolder text-light bg-dark rounded-start">Bil :</span>
				<input type="number" class="form-control me-lg-3 rounded-end" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Input Bilangan" name="bil">
				<input class="btn btn-success rounded-3 px-lg-3 ms-0" type="submit" name="hitung" value="Hitung">
			</div>
		</div>
	</form>
	<div class="h2 text-nowrap mx-lg-3 mt-lg-3">
		<?php 
			if(isset($_POST['hitung'])){ 
				$bil3=$bil2=$bil;//Untuk masing" perulangan
				// For
				echo "<ul><li> Dengan For :</li>$bil! = ";
				$hasil = 1;
				for ($i=1; $i<=$bil; $bil--) {
					$hasil = $hasil*$bil;
					if ($bil!=$i) {
						echo "$bil x ";
					} else {
						echo "1 = ";
					}
				}
				echo "$hasil</ul>";
				// While
				echo "<ul><li> Dengan While :</li>$bil2! = ";
				$hasil = 1;
				$i = 1;
				while ($i <= $bil2) {
					$hasil=$hasil*$bil2;
					if ($bil2!=$i) {
						echo "$bil2 x ";
					} else {
						echo "1 = ";
					}
					$bil2--;
				}
				echo "$hasil</ul>";
				// DoWhile
				echo "<ul><li> Dengan Do While :</li>$bil3! = ";
				$hasil = 1;
				$i = 1;
				do {
					$hasil=$hasil*$bil3;
					if ($bil3!=$i) {
						echo "$bil3 x ";
					} else {
						echo "1 = ";
					}
					$bil3--;
				}
				while ($i<=$bil3);
				echo "$hasil</ul>";
			}
		?>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>